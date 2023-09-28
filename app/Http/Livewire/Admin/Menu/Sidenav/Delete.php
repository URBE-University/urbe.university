<?php

namespace App\Http\Livewire\Admin\Menu\Sidenav;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Delete extends Component
{
    public $modal, $menu;

    public function mount(Menu $menu)
    {
        $this->menu = $menu;
    }

    public function render()
    {
        return view('livewire.admin.menu.sidenav.delete');
    }

    public function delete()
    {
        if (Gate::denies('menu:delete')) {
            abort(403, 'You have no access to perform this action');
        }

        $children = Menu::where('parent', $this->menu->id)->get();

        if($children->count() > 0)
        {
            foreach($children as $child)
            {
                $child->delete();
            }
        }
        $this->menu->delete();
        session()->flash('flash.banner', 'Menu item deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.menus', ['selector' => $this->menu->location]);
    }
}
