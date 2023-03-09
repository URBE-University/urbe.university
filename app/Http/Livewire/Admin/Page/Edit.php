<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;

class Edit extends Component
{
    public Page $page;
    public $code = '', $status = 'draft';
    public $title;
    public $slug;
    public $featured_image;
    public $content;
    public $keywords;
    public $page_id;
    protected $published_at;

    protected $listeners = [
        'codeUpdated'
    ];

    public function codeUpdated($code)
    {
        $this->content = $code;
    }

    public function mount()
    {
        $this->title = $this->page->title;
        $this->content = $this->page->content;
        session()->put('code', $this->content);
    }

    public function render()
    {
        return view('livewire.admin.page.edit');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        try {
            $this->page->update([
                'title' => $this->title,
                'slug' => str($this->title)->slug(),
                'content' => $this->content,
            ]);
            session()->flash('flash.banner', 'Page successfully created!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', 'Page successfully created!');
            session()->flash('flash.bannerStyle', 'danger');
        }
        session()->forget('code');
        return redirect()->route('admin.pages');
    }
}
