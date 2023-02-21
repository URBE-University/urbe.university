<?php

namespace App\Http\Livewire\Admin\Page;

use Livewire\Component;

class Create extends Component
{
    public $title, $description, $slug, $code, $status = 'draft';

    public function render()
    {
        return view('livewire.admin.page.create');
    }
}
