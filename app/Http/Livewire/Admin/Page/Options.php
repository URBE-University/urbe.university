<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;

class Options extends Component
{
    public $slideover, $page, $url, $keywords, $saved = false;

    public function mount(Page $page)
    {
        $this->page = $page;
        $this->keywords = $page->keywords;
        $this->url = $page->url;
    }

    public function render()
    {
        return view('livewire.admin.page.options');
    }

    public function saveKeys()
    {
        $this->page->update([
            'keywords' => $this->keywords,
        ]);
        session()->flash('flash.banner', 'Changes saved!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.page.edit', ['page' => $this->page->id]);
    }

    public function saveUrl()
    {

        try {
            $this->page->update([
                'url' => $this->url,
            ]);
            session()->flash('flash.banner', 'Changes saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.page.edit', ['page' => $this->page->id]);
    }
}
