<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Blog;

class Blogs extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ["search"];

    public function render()
    {
        return view('livewire.blogs', [
            'blogs' => Blog::orderBy('created_at', 'desc')->simplePaginate(10),
            'count' => Blog::count()
        ]);
    }
}
