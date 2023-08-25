<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Models\Banner;
use Livewire\Component;

class Delete extends Component
{
    public $modal;
    public Banner $banner;

    public function render()
    {
        return view('livewire.admin.banner.delete');
    }

    public function delete()
    {
        $this->banner->delete();
        session()->flash('flash.banner', 'Banner successfully deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.tools.banners');
    }
}
