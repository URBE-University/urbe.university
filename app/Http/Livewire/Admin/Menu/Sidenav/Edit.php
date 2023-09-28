<?php

namespace App\Http\Livewire\Admin\Menu\Sidenav;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Edit extends Component
{
    public $modal;
    public $label, $parent, $url, $opens_in_new_tab, $selector, $type;
    public $menu;
    public $sidenav_menus;

    public function mount($selector, Menu $menu)
    {
        $this->sidenav_menus = Menu::where('location', 'sidenav')->whereNull('parent')->get();
        $this->selector = $selector;
        $this->menu = $menu;
        $this->parent = $menu->parent;
        $this->label = $menu->label;
        $this->url = $menu->url;
        $this->type = $menu->type;
        $this->opens_in_new_tab = $menu->opens_in_new_tab;
    }

    public function render()
    {
        return view('livewire.admin.menu.sidenav.edit');
    }

    public function save()
    {
        if (Gate::denies('menu:update')) {
            abort(403, 'You have no access to perform this action');
        }

        $this->validate(['label' => 'required']);
        if ($this->type == 'link') {
            $this->validate([
                'parent' => 'required|exists:menus,id',
                'url' => 'required',
            ]);
        }

        // Get the parent's UUID
        $parent_uuid = ($this->parent) ? Menu::findOrFail($this->parent)->uuid : null;

        $this->menu->update([
            'location' => $this->selector,
            'type' => $this->type,
            'parent' => $this->parent,
            'parent_uuid' => $parent_uuid,
            'label' => $this->label,
            'url' => $this->url,
            'opens_in_new_tab' => ($this->opens_in_new_tab == 1) ? true : false,
        ]);

        session()->flash('flash.banner', 'Menu item updated!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
