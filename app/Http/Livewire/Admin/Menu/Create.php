<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;

class Create extends Component
{
    public $modal, $selector, $parent, $label, $type, $url, $opens_in_new_tab, $column;

    public function mount($selector)
    {
        $this->selector = $selector;
        if($this->selector == 'footer')
        {
            $this->type = 'link';
        }
    }

    public function render()
    {
        return view('livewire.admin.menu.create');
    }

    public function save()
    {
        $this->validate([
            'type' => 'required',
            'label' => 'required'
        ]);

        if($this->type == 'link')
        {
            $this->validate(['url' => 'required']);
        }

        if($this->selector == 'footer')
        {
            $this->validate(['column' => 'required']);
        }

        // Get the order number from DB
        $order = Menu::where('location', $this->selector)->count() + 1;

        Menu::create([
            'location' => $this->selector,
            'type' => $this->type,
            'parent' => $this->parent,
            'column' => $this->column,
            'order' => $order,
            'label' => $this->label,
            'url' => $this->url,
            'opens_in_new_tab' => ($this->opens_in_new_tab == 1) ? true : false,
        ]);
        session()->flash('flash.banner', 'Menu item added!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
