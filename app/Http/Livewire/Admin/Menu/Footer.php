<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;

class Footer extends Component
{
    public $modal, $items, $parent, $label, $type, $url, $opens_in_new_tab;

    public function mount()
    {
        $this->items = Menu::where('location', 'footer')
        ->whereNull('parent')
        ->orderBy('order', 'ASC')
        ->get();
    }

    public function render()
    {
        return view('livewire.admin.menu.footer');
    }

    public function reorder($orderedIds)
    {
        foreach ($orderedIds as $item) {
            Menu::findOrFail($item['value'])->update(['order' => $item['order']]);
        }
        return redirect()->route('admin.menus', ['selector' => 'footer']);
    }
}
