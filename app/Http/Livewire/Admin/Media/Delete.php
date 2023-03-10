<?php

namespace App\Http\Livewire\Admin\Media;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $media, $modal;

    public function render()
    {
        return view('livewire.admin.media.delete');
    }

    public function delete()
    {
        try {
            Storage::delete($this->media->url);
            $this->media->delete();
            session()->flash('flash.banner', 'File successfully deleted!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.media');
    }
}
