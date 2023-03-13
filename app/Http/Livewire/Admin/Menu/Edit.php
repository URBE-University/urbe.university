<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Edit extends Component
{
    public $menu, $modal, $selector, $parent, $label, $type, $url, $opens_in_new_tab, $column;

    public function mount($selector, Menu $menu)
    {
        $this->selector = $selector;
        $this->menu = $menu;
        $this->label = $menu->label;
        $this->column = $menu->column;
        $this->type = $menu->type;
        $this->url = $menu->url;
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

        $this->menu->update([
            'location' => $this->selector,
            'type' => $this->type,
            'column' => $this->column,
            'label' => $this->label,
            'url' => $this->url,
            'opens_in_new_tab' => ($this->opens_in_new_tab == 1) ? true : false,
        ]);

        session()->flash('flash.banner', 'Menu item updated!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
