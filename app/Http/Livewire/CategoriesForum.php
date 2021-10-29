<?php

namespace App\Http\Livewire;

use App\Models\KategoriForum;
use Livewire\Component;

class CategoriesForum extends Component
{
    public $id;
    // public $title;

    public function mount(KategoriForum $id)
    {
        $this->id = $project->id;
        // $this->title = $project->title;
    }

    public function render()
    {
        $kategories = KategoriForum::all();
        // $this->id = route('mainForum', $kategories->id);
        return view('livewire.components.categories-forum')->with(compact('kategories'));

    }
}
