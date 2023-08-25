<?php

namespace App\Http\Livewire\Admin\School\Catalog;

use App\Models\Catalog;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $modal;
    public Catalog $catalog;

    public function render()
    {
        return view('livewire.admin.school.catalog.delete');
    }

    public function delete()
    {
        Storage::delete($this->catalog->path);
        $this->catalog->delete();

        return redirect()->route('admin.school.catalog');
    }
}
