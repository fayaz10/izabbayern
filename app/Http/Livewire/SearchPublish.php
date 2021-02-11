<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Posts;

class SearchPublish extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search-publish',[
            'posts' => Posts::where('category','=','publish')
            ->where('header','=','no_header')
            ->Where('fa_title', $this->search)->get(), 
        ]);
    }
}
