<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $modal;
    public Page $page;

    public function render()
    {
        return view('livewire.admin.page.delete');
    }

    public function delete()
    {
        try {
            if ($this->page->featured_image && Storage::exists($this->page->featured_image)) {
                Storage::delete($this->page->featured_image);
            }
            $this->page->delete();
            session()->flash('flash.banner', 'Page successfully deleted!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.pages');
    }
}
