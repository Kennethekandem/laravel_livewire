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
    public $likes = 0;
    public $dislikes = 0;
    public $listeners = ['refreshBlogs', 'render'];

    public function render()
    {
        return view('livewire.blogs', [
            'blogs' => Blog::search('title', $this->search)->OrderBy('created_at', 'desc')->simplePaginate(10),
            'count' => Blog::count()
        ]);
    }

    public function like($id) {
        $blog = Blog::where('id', $id)->first();
        $blog->update([
            'like' => $blog->likes++
        ]);
        $blog->save();
        return $blog;
    }

    public function dislike($id) {
        $blog = Blog::where('id', $id)->first();
        $blog->update([
            'dislike' => $blog->dislikes++
        ]);
        $blog->save();
        return $blog;
    }

    public function countReaction($type, $id) {
        $value = '';
        switch ($type) {
            case 'likes':
                $value = 'likes';
                break;
            case 'dislikes':
                $value = 'dislikes';
                break;
            default:
                $value = '';
                break;
        }

        $blog = Blog::where('id', $id)->first();
        $blog->update([
            $value => $blog->$value++
        ]);
        $blog->save();
        return true;
    }
}
