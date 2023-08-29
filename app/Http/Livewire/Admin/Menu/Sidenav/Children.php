<?php

namespace App\Http\Livewire\Admin\Menu\Sidenav;

use App\Models\Menu;
use Livewire\Component;

class Children extends Component
{
    public $selector, $parent;

    public function mount($selector, $parent)
    {
        $this->selector = $selector;
        $this->parent = $parent;
    }

    public function render()
    {
        return view('livewire.admin.menu.sidenav.children', [
            'items' => Menu::where('location', $this->selector)
                ->where('parent', $this->parent)
                ->orderBy('order', 'ASC')
                ->get(),
        ]);
    }

    public function reorder($orderedIds)
    {
        foreach ($orderedIds as $item) {
            Menu::findOrFail($item['value'])->update(['order' => $item['order']]);
        }
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
