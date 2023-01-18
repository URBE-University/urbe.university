<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.event.index', [
            'events' => Event::get()
        ]);
    }
}
