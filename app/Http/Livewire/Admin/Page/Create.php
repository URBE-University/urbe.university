<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;

class Create extends Component
{
    public $code = '', $status = 'draft';
    public $title;
    public $subtitle;
    public $slug;
    public $featured_image;
    public $content;
    public $keywords;
    public $page_id;
    protected $published_at;

    protected $listeners = [
        'markdown-x:update' => 'codeUpdated',
    ];

    public function codeUpdated($value)
    {
        $this->content = $value;
    }

    public function render()
    {
        return view('livewire.admin.page.create');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|unique:pages,title',
            'content' => 'required',
        ]);

        try {
            Page::create([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'slug' => str($this->title)->slug(),
                'url' => str($this->title)->slug(),
                'content' => $this->content,
            ]);
            session()->flash('flash.banner', 'Page successfully created!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        session()->forget('code');
        return redirect()->route('admin.pages');
    }
}
