<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    use WithFileUploads;

    public $modal, $files = [];

    public function render()
    {
        return view('livewire.admin.media.create');
    }

    public function save()
    {
        $this->validate([
            'files.*' => 'file|max:2048|mimes:webp,pdf'
        ]);

        foreach ($this->files as $file) {
            $file_type = $file->getClientOriginalExtension();
            $file_size = $file->getSize();
            $file_name = $file->getClientOriginalName();
            $url = $file->store('images');

            try {
                Media::create([
                    'url' => $url,
                    'file_type' => $file_type,
                    'file_size' => $file_size,
                    'file_name' => $file_name,
                ]);
                session()->flash('flash.banner', 'Your files were successfully uploaded!');
                session()->flash('flash.bannerStyle', 'success');
            } catch (\Throwable $th) {
                Log::error($th);
                session()->flash('flash.banner', $th->getMessage());
                session()->flash('flash.bannerStyle', 'danger');
            }
        }
        return redirect()->route('admin.media');
    }
}
