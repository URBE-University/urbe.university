<?php

namespace App\Http\Livewire\Admin\School\Catalog;

use App\Models\Catalog;
use Livewire\Component;

class Index extends Component
{
    public $catalogs;

    public function mount()
    {
        $this->catalogs = Catalog::orderBy('year', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.admin.school.catalog.index');
    }
}
