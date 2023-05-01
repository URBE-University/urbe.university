<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $event, $name, $slug, $description, $featured_image, $rsvp_url, $start_date, $end_date, $address, $published_at, $status, $image;

    public function mount(Event $event)
    {
        $this->event = $event;
        $this->name = $this->event->name;
        $this->description = $this->event->description;
        $this->featured_image = $this->event->featured_image;
        $this->rsvp_url = $this->event->rsvp_url;
        $this->start_date = $this->event->start_date;
        $this->end_date = $this->event->end_date;
        $this->address = $this->event->address;
        $this->published_at = $this->event->published_at;
        $this->status = (is_null($this->event->published_at)) ? 'draft' : 'published';
    }

    public function render()
    {
        return view('livewire.admin.event.edit');
    }

    public function save()
    {
        $this->validate([
            'name' => ['required'],
            'description' => ['required', 'min:50'],
            'start_date' => ['required'],
        ]);

        try {
            if ($this->image) {
                $this->validate(['image' => ['image', 'mimes:webp'],]);
                Storage::delete([$this->event->featured_image]);
                $this->featured_image = $this->image->store('event_assets');
            } else {
                $this->featured_image = $this->event->featured_image;
            }

            $this->event->update([
                'name' => $this->name,
                'slug' => str($this->name)->slug(),
                'description' => $this->description,
                'featured_image' => $this->featured_image,
                'start_date' => $this->start_date,
                'rsvp_url' => $this->rsvp_url,
                'end_date' => $this->end_date,
                'address' => $this->address,
                'published_at' => ($this->status == 'draft') ? null : now(),
            ]);
            session()->flash('flash.banner', 'Event was successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.event.edit', ['event' => $this->event->id]);
    }
}
