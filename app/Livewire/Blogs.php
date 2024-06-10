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

    public function render()
    {
        return view('livewire.blogs', [
            'blogs' => Blog::search('title', $this->search)->OrderBy('created_at', 'desc')->simplePaginate(10),
            'count' => Blog::count()
        ]);
    }

    public function like($id) {
        $blog = Blog::where('id', $id)->first();
        print($blog);
        var_dump($blog);
    }

    public function dislike($id) {

    }

    public function countReaction($type, $id) {
        $value = '';
        switch ($type) {
            case 'like':
                $value = 'like';
                break;
            case 'dislike':
                $value = 'dislike';
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
