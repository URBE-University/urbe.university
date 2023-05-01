<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $modal, $selector, $parent, $label, $type, $url, $opens_in_new_tab, $column;
    public $title, $subtitle, $background_image, $background_color;

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
            'label' => 'required',
            'background_image' => 'nullable|image|mimes:webp|dimensions:max-width=250px'
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
        // Get the parent's uuid
        $parent_uuid = ($this->parent) ? Menu::findOrFail($this->parent)->uuid : null;

        Menu::create([
            'uuid' => Str::uuid(),
            'location' => $this->selector,
            'type' => $this->type,
            'parent' => $this->parent,
            'parent_uuid' => $parent_uuid,
            'column' => $this->column,
            'order' => $order,
            'label' => $this->label,
            'url' => $this->url,
            'opens_in_new_tab' => ($this->opens_in_new_tab == 1) ? true : false,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'background_image' => ($this->background_image) ? $this->background_image->store('images') : null,
            'background_color' => $this->background_color,
        ]);
        session()->flash('flash.banner', 'Menu item added!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
