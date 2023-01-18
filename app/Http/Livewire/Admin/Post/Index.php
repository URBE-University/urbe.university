<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.post.index', [
            'posts' => Post::get()
        ]);
    }
}
