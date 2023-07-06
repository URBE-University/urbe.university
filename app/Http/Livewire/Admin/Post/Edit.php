<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public $post, $title, $content, $status;

    protected $listeners = [
        'markdown-x:update' => 'updateBody',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
    }

    public function updateBody($value)
    {
        $this->content = $value;
    }

    public function render()
    {
        return view('livewire.admin.post.edit');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        try {
            $this->post->update([
                'title' => $this->title,
                'slug' => str($this->title)->slug(),
                'content' => $this->content,
            ]);
            session()->flash('flash.banner', 'Post was successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.post.edit', ['post' => $this->post->id]);
    }

    public function publish()
    {
        try {
            $this->post->update([
                'published_at' => ($this->post->published_at) ? null : now(),
            ]);
            session()->flash('flash.banner', 'Post was successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.post.edit', ['post' => $this->post->id]);
    }
}
