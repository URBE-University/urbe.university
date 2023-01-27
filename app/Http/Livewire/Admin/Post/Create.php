<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Create extends Component
{
    public $title, $body;

    protected $listeners = [
        'markdown-x:update' => 'updateBody',
    ];

    public function updateBody($value)
    {
        $this->body = $value;
    }

    public function render()
    {
        return view('livewire.admin.post.create');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        try {
            $post = Post::create([
                'user_id' => auth()->user()->id,
                'title' => $this->title,
                'slug' => str($this->title)->slug(),
                'content' => $this->body
            ]);
            session()->flash('flash.banner', 'Post successfully created!');
            session()->flash('flash.bannerStyle', 'success');
            return redirect()->route('admin.post.edit', ['post' => $post->id]);
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.post.create');
    }
}
