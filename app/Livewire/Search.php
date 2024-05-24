<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Search extends Component
{
    public $search, $empty = '';
    protected $queryString = ["search"];

    public function render()
    {

        /* if(!is_null($this->search) && strlen($this->search) < 3) {
            $blogs = Blog::where('title', 'like', '%'.$this->search.'%')->get();
            $this->empty = '';
        } else {
            $blogs = [];
            $this->empty = 'Nothing was found';
        } */
        return view('livewire.search', [
            'searched' => Blog::where('title', 'like', '%'.$this->search.'%')->get()
        ]);
    }
}
