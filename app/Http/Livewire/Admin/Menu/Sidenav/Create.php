<?php

namespace App\Http\Livewire\Admin\Menu\Sidenav;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $modal;
    public $label, $parent, $url, $opens_in_new_tab, $selector, $type;
    public $sidenav_menus;

    public function mount($selector)
    {
        $this->sidenav_menus = Menu::where('location', 'sidenav')->whereNull('parent')->get();
        $this->selector = $selector;
        $this->type = 'sidenav';
    }

    public function render()
    {
        return view('livewire.admin.menu.sidenav.create');
    }

    public function save()
    {
        $this->validate(['label' => 'required']);

        if ($this->type == 'link') {
            $this->validate([
                'parent' => 'required|exists:menus,id',
                'url' => 'required',
            ]);
        }

        // Get the order
        $order = Menu::where('location', $this->selector)->count() + 1;
        // Get the parent's UUID
        $parent_uuid = ($this->parent) ? Menu::findOrFail($this->parent)->uuid : null;

        try {
            Menu::create([
                'uuid' => Str::uuid(),
                'location' => $this->selector,
                'type' => $this->type,
                'order' => $order,
                'parent' => $this->parent,
                'parent_uuid' => $parent_uuid,
                'label' => $this->label,
                'url' => $this->url,
                'opens_in_new_tab' => ($this->opens_in_new_tab == 1) ? true : false,
            ]);
            session()->flash('flash.banner', 'Menu item added!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
