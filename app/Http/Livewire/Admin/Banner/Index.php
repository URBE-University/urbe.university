<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Models\Banner;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.banner.index', [
            'banners' => Banner::orderBy('starts_at', 'ASC')->get()
        ]);
    }
}
