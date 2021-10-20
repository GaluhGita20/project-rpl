<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIONIX 2021 - Information System Expo 2021</title>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="0">
    <meta name="description" content="Bussiness and IT Olympiade serangkaian acara ISE! dengan konsep kompetisi tingkat nasional bagi pelajar SMA/SMK dengan menggabungkan antara bisnis dan teknologi informasi. Kompetisi terbagi menjadi 4 tahap yaitu, penyisihan 1, penyisihan 2, semifinal, dan final. Adapun penyisihan dilakukan serentak secara online di seluruh Indonesia.">
    <meta name="keywords" content="ISE, Sistem Infomrasi ITS, Sistem Informasi, ITS, Olimpiade, Bisnis, TIK, Teknologi, Pameran IT, Konser">
    <meta name="author" content="WebDev ISE!201">
    <!-- Favicon -->
    <link rel="shorcut icon" href="{{asset('../asset/logo/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('../asset/logo/favicon.ico')}}" type="image/x-icon">

    <!-- Goggle Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@500&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Vendor CSS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> 
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css"> 

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('../css/style.css') }}"> 
</head>
<body>
  <div class="nav-container">
    <nav class="navbar navbar-custom fixed-top navbar-expand-lg container-fluid mb-5">
      <div class="logo">
        <a href="/" class="navbar-brand"><img src="{{ asset('../asset/logo/logo-ise-2021.svg') }}" alt="logo ISE! 2021" style="width: 100%;"></a>
      </div>
      <div class="collapse navbar-collapse w-100 order-3 dual-collapse2 list" id="collapse_targer">
        <ul class="border-0 nav navbar-nav nav-tabs ms-auto" role="tablist">
          <li class="nav-item title"><a href="#" class="nav-link active">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Student Level</a></li>
          <li class="nav-item"><a href="#" class="nav-link ">College Level</a></li>
        </ul>
        <a href="#" class="nav-link login" href="">Login</a>
      </div>
      <!-- <button class="navbar-toogle menu-btn mr-5" data-bs-toggle="collapse" data-bs-target="#collapse_target">
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars" aria-hidden="true"></i>
        </span>
      </button> -->
    </nav>
  </div>
  <!-- End navbar -->


  <!-- Start Banner section -->
  <section id="hero">
    <div class="swiper-container container mt-5 pt-5">
      <div class="swipper-slide">
        <div class="about" style="min-height: 100vh;">
          <div class="row align-items-center">
            <div class="col-4 " >
              <img src="{{asset('../asset/logo/line-bionix.svg')}}" class="img-fluid" alt="">
            </div>
          </div>
          <h1 class="title">
            BUSINESS AND IT OLYMPIADE<br>
            ON INFORMATION SYSTEMS EXPO
          </h1>
          <p >Business and IT Olympiad on Information Systems Expo, olimpiade bisnis dan IT terbesar di Indonesia
            <br>
          untuk tingkat pelajar SMA/SMK sederajat dan mahasiswa
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner section -->


  <!-- Start Kategori Lomba Section -->
  <section class="kategori-lomba container-fluid text-center">
    <h1 >Kategori-Lomba</h1>
    <div class="row justify-content-center">
      <div class="col-md-6 col-12">
        
      </div>
    </div>
  </section>




  <!-- Start contact whatsapp -->
  <div class="whatsapp" id="whatsapp" title="Contact us!" style="background-color:rgb(37,211,102); padding:8px 12px; border-radius: 8px; cursor:pointer;">
    <div class="whatsapp-desktop" style="display: none;">
      <button class="btn-close" id="close-wa" type="button"></button>
      <p class="text-center" style="color: whitesmoke;">Punya Pertanyaan atau Butuh Bantuan?<br>Hubungi Contact Person BIONIX</p>
      <a href="https://wa.me/" target="_blank" class="btn text-center">
        <i class="fab fa-whatsapp" style="font-size: 20px;" aria-hidden="true"></i> 08980231989
      </a>
    </div>
    <div class="whatsapp-icon" style="display: block;">
      <i class="fab fa-whatsapp" style="color:whitesmoke; font-size:30px;" aria-hidden="true"></i>
    </div>
    <div class="whatsapp-responsive">
      <a href="https://wa.me/08989231989" target="_blank">
        <i class="fab fa-whatsapp" style="color: whitesmoke; font-size:30px;" aria-hidden="true"></i>
      </a>
    </div>
  </div>



  <!-- <section>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium magni repudiandae ipsa, minima ducimus fugiat quaerat quos odio sunt ullam molestias at? Odit praesentium ex eum illo, architecto amet!
  </section> -->
    

  <!-- Vendor Javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script style="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e60a3b7323.js" crossorigin="anonymous"></script>

  <!-- Custom JS -->
  <script src="{{asset('../js/custom.js')}}"></script>
</body>
</html>