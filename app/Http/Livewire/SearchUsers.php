<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Posts;
use Session;
class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        $lang = Session::get('locale');
       
        return view('livewire.search-users', [
            'posts' => Posts::where('category','=','library')
            ->where('header','=','no_header')
            ->Where($lang.'_title', $this->search)->get(),
        ]);
    }

   
}