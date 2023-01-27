<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;

class Options extends Component
{
    public $slideover, $post, $enable_comments, $keywords, $keyphrases, $saved = false;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->enable_comments = $post->enable_comments;
        $this->keywords = $post->keywords;
        $this->keyphrases = $post->keyphrases;
    }

    public function setComments()
    {
        ($this->post->enable_comments == 1) ? $this->post->enable_comments = 0 : $this->post->enable_comments = 1;
        $this->post->update();
        session()->flash('flash.banner', 'Changes saved!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.post.edit', ['post' => $this->post->id]);
    }

    public function saveKeys()
    {
        $this->post->update([
            'keywords' => $this->keywords,
            'keyphrases' => $this->keyphrases,
        ]);
        session()->flash('flash.banner', 'Changes saved!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.post.edit', ['post' => $this->post->id]);
    }

    public function render()
    {
        return view('livewire.admin.post.options');
    }
}
