<?php

namespace App\Http\Livewire\Admin\Menu;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class Index extends Component
{
    public $selector;

    public function mount($selector)
    {
        $this->selector = $selector;
    }

    public function render()
    {
        return view('livewire.admin.menu.index');
    }

    public function changeMenu()
    {
        return redirect()->route('admin.menus', ['selector' => $this->selector]);
    }
}
