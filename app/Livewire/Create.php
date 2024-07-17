<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Create extends Component
{
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function render()
    {
        return view('livewire.create');
    }

    public function create() {
        $this->validate($this->rules);
        $blog = Blog::create([
            'title' => $this->title,
            'description' => $this->description,
            'likes' => 0,
            'dislikes' => 0
        ]);
        return redirect('/');
    }
}
