<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Blog;

class Blogs extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.blogs', [
            'blogs' => Blog::paginate(10),
            'count' => Blog::count()
        ]);
    }
}
