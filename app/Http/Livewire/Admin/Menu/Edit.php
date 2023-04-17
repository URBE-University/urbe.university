<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $menu, $modal, $selector, $parent, $label, $type, $url, $opens_in_new_tab, $column;
    public $title, $subtitle, $background_image, $background_color;

    public function mount($selector, Menu $menu)
    {
        $this->selector = $selector;
        $this->menu = $menu;
        $this->label = $menu->label;
        $this->column = $menu->column;
        $this->type = $menu->type;
        $this->url = $menu->url;
        $this->title = $menu->title;
        $this->subtitle = $menu->subtitle;
        $this->background_color = $menu->background_color;
        $this->opens_in_new_tab = $menu->opens_in_new_tab;

        if($this->selector == 'footer')
        {
            $this->type = 'link';
        }
    }

    public function render()
    {
        return view('livewire.admin.menu.edit');
    }

    public function save()
    {
        if (Gate::denies('menu:update')) {
            abort(403, 'You have no access to perform this action');
        }

        $this->validate(['label' => 'required']);

        if($this->type == 'link')
        {
            $this->validate(['url' => 'required']);
        }

        if($this->selector == 'footer')
        {
            $this->validate(['column' => 'required']);
        }

        if ($this->background_image && $this->menu->background_image) {
            Storage::delete($this->menu->background_image);
        }

        $this->menu->update([
            'location' => $this->selector,
            'type' => $this->type,
            'column' => $this->column,
            'label' => $this->label,
            'url' => $this->url,
            'opens_in_new_tab' => ($this->opens_in_new_tab == 1) ? true : false,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'background_image' => ($this->background_image) ? $this->background_image->store('images') : $this->menu->background_image,
            'background_color' => $this->background_color,
        ]);

        session()->flash('flash.banner', 'Menu item updated!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
