<?php

namespace App\Http\Livewire\Admin\Menu\Sidenav;

use App\Models\Menu;
use Livewire\Component;

class Index extends Component
{
    public $modal, $items, $parent, $label, $type, $url, $opens_in_new_tab;

    public function mount()
    {
        $this->items = Menu::where('location', 'sidenav')
        ->whereNull('parent')
        ->orderBy('order', 'ASC')
        ->get();
    }

    public function render()
    {
        return view('livewire.admin.menu.sidenav.index');
    }
}
