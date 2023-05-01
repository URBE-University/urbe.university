<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.media.index', [
            'media' => Media::paginate(15)
        ]);
    }
}
