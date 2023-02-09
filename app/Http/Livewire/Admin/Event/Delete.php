<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Delete extends Component
{
    public $modal, $event;

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.admin.event.delete');
    }

    public function delete()
    {
        if (!Gate::allows('event:delete')) {
            abort(403, 'You have no access to perform this action');
        }
        $this->event->delete();
        return redirect()->route('admin.events');
    }
}
