<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $showTrashed;
    public $query = '';

    public function render()
    {
        return view('livewire.admin.post.index', [
            'posts' => (!$this->showTrashed) ? Post::where('title', 'like', '%' . $this->query . '%')->paginate(10) : Post::onlyTrashed()->where('title', 'like', '%' . $this->query . '%')->paginate(10)
        ]);
    }

    public function restore($post)
    {
        $post = Post::withTrashed()->find($post);
        $post->restore();
        $this->showTrashed = false;
    }

    public function delete($post)
    {
        $post = Post::withTrashed()->find($post);
        $post->forceDelete();
        $this->showTrashed = false;
    }
}
