<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;

class Edit extends Component
{
    public $menu, $modal, $selector, $parent, $label, $type, $url, $opens_in_new_tab;

    public function mount($selector, Menu $menu)
    {
        $this->selector = $selector;
        $this->menu = $menu;
        $this->label = $menu->label;
        $this->type = $menu->type;
        $this->url = $menu->url;
        $this->opens_in_new_tab = $menu->opens_in_new_tab;
    }

    public function render()
    {
        return view('livewire.admin.menu.edit');
    }

    public function save()
    {
        $this->validate(['label' => 'required']);

        if($this->type == 'link')
        {
            $this->validate(['url' => 'required']);
        }

        $this->menu->update([
            'location' => $this->selector,
            'type' => $this->type,
            'parent' => $this->parent,
            'label' => $this->label,
            'url' => $this->url,
            'opens_in_new_tab' => ($this->opens_in_new_tab == 1) ? true : false,
        ]);
        session()->flash('flash.banner', 'Menu item updated!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
