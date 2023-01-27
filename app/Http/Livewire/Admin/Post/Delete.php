<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Delete extends Component
{
    public $modal, $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function delete()
    {
        if (!Gate::allows('post:delete')) {
            abort(403, 'You have no access to perform this action');
        }

        $this->post->delete();
        return redirect()->route('admin.posts');
    }

    public function render()
    {
        return view('livewire.admin.post.delete');
    }
}
