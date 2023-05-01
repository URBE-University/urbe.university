<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $showTrashed;

    public function render()
    {
        return view('livewire.admin.event.index', [
            'events' => (!$this->showTrashed) ? Event::orderBy('start_date', 'desc')->paginate(10) : Event::onlyTrashed()->orderBy('start_date', 'desc')->paginate(10)
        ]);
    }

    public function restore($post)
    {
        $post = Event::withTrashed()->find($post);
        $post->restore();
        $this->showTrashed = false;
    }

    public function delete($post)
    {
        $post = Event::withTrashed()->find($post);
        $post->forceDelete();
        $this->showTrashed = false;
    }
}
