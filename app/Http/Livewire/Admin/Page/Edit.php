<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class Edit extends Component
{
    public Page $page;
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

    public function mount()
    {
        $this->title = $this->page->title;
        $this->subtitle = $this->page->subtitle;
        $this->content = $this->page->content;
        $this->status = ($this->page->published_at < now()) ? 'published' : 'draft';
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
                'published_at' => ($this->status == 'published') ? now() : null,
            ]);

            // Rebuild assets
            Artisan::call('assets:build');

            session()->flash('flash.banner', 'This page was successfully updated, and all assets were rebuilt!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        session()->forget('code');
        return redirect()->route('admin.page.edit', ['page' => $this->page->id]);
    }
}
