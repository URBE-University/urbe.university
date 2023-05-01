<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    use WithFileUploads;

    public $name, $slug, $description, $featured_image, $rsvp_url, $start_date, $end_date, $address, $published_at, $status = "draft";

    public function render()
    {
        return view('livewire.admin.event.create');
    }

    public function save()
    {
        $this->validate([
            'name' => ['required'],
            'description' => ['required', 'min:50'],
            'featured_image' => ['image', 'mimes:webp'],
            'start_date' => ['required'],
        ]);

        try {
            $image = $this->featured_image->store('event_assets');
            $event = Event::create([
                'name' => $this->name,
                'slug' => str($this->name)->slug(),
                'description' => $this->description,
                'featured_image' => $image,
                'start_date' => $this->start_date,
                'rsvp_url' => $this->rsvp_url,
                'end_date' => $this->end_date,
                'address' => $this->address,
                'published_at' => ($this->status == 'draft') ? null : now(),
            ]);
            session()->flash('flash.banner', 'Event was successfully created!');
            session()->flash('flash.bannerStyle', 'success');
            return redirect()->route('admin.event.edit', ['event' => $event->id]);
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.event.create');
    }
}
