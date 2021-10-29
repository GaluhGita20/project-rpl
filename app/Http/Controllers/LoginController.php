<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;
use Illuminate\Validation\Validator;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;

/* Pada Controller ini ada beberapa fungsi yang tidak dapat berjalan seperti jwt, */ 
/*     untuk auth dengan google dan facebook masih belum login ke program tetapi sudah bisa masuk ke permintaan login */

class LoginController extends Controller
{
    /* jika di uncomment program tidak berjalan */

    /* public function __construct() { */
    /*     $this->middleware('guest'); */
    /* } */

    protected $providers= [ 
        'facebook',
        'google',
    ];

    private function isProviderAllowed($driver)
    {
        return in_array($driver, $this->providers) && config()->has("services.{$driver}");
    }

    public function login_account(Request $request) 
    {


        /* JWT auth */ 
        /* $credentials = Validator::make($request->all(), [ */
        /*     'email' => 'required|email', */
        /*     'password' => 'required|string|min:8', */
        /* ]); */

        /* if ($credentials->fails()) { */ 
        /*     return response()->json($credentials->errors, 422); */
        /* } */

        /* if(! $token = auth()->attempt($req->validated())) { */ 
        /*     return response()->json(['Auth error' => 'Unauthorized'], 401); */
        /* } */
        /* return $this->generateToken($token); */

        $credentialsAfterVerified = array(
            'email' => $request->get('login_username'),
            'password' => $request->get('login_password')
        );

        if (Auth::attempt($credentialsAfterVerified)) {
            $request->session()->regenerate();
            return redirect()->intended(route('mainForum'));
        }

        return redirect()->route('home')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function redirect_to_provider($driver) { 
        if( ! $this->isProviderAllowed($driver) ) {
            return $this->send_failed_response("{$driver} is not currently supported");
        }

        try {
            return Socialite::driver($driver)->redirect();
        } catch (Exception $e) {
            /* failed message */
            return $this->send_failed_response($e->getMessage());
        }
    }

    public function handle_provider_callback( $driver ) {
        try {
            $user = Socialite::driver($driver)->user();
        } catch (Exception $e) {
            return $this->send_failed_response($e->getMessage());
        }

        // check for email in returned user
        return empty( $user->email )
            ? $this->send_failed_response("No email id returned from {$driver} provider.")
            : $this->loginOrCreateAccount($user, $driver);
    }

    protected function send_success_response() {
        return redirect()->intended('home');
    }

    protected function send_failed_response($msg = null) {
        return redirect()->route('social.login')
            ->withErrors(['msg' => $msg ?: 'Unable to login, try with another provider to login.']);
    }

    protected function loginOrCreateAccount($providerUser, $driver) {

    // check for already has account
    $user = User::where('email', $providerUser->getEmail())->first();

    // if user already found
        if( $user ) {
            // update the avatar and provider that might have changed
            $user->update([
                'profile_picture' => $providerUser->profile_picture,
                'provider' => $driver,
                'provider_id' => $providerUser->id,
                'access_token' => $providerUser->token
            ]);
        } else {
              if($providerUser->getEmail()){ //Check email exists or not. If exists create a new user
                   $user = User::create([
                  'name' => $providerUser->getName(),
                  'email' => $providerUser->getEmail(),
                  'profile_picture' => $providerUser->getProfilePicture(),
                  'provider' => $driver,
                  'provider_id' => $providerUser->getId(),
                  'access_token' => $providerUser->token,
                  'password' => '' // user can use reset password to create a password
                  ]);
              }
          }
    
        // login the user
        Auth::login($user, true);

        return $this->sendSuccessResponse();
      }

  }


    /* public function signout() { */
    /*         auth()->logout(); */
    /*         return response()->json(['message' => 'User loged out']); */
    /* } */

    /* public function refresh() { */
    /*     return $this->generateToken(auth()->refresh()); */
    /* } */

    /* protected function generateToken($token){ */
    /*     return response()->json([ */
    /*         'access_token' => $token, */
    /*         'token_type' => 'bearer', */
    /*         'expires_in' => auth()->factory()->getTTL() * 60, */
    /*         'user' => auth()->user() */
    /*     ]); */
    /* } */
