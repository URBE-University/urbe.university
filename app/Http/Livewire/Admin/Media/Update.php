<?php

namespace App\Http\Livewire\Admin\Media;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Update extends Component
{
    public $media, $modal;
    public $fileSize, $title, $alt_text;

    public function mount()
    {
        $this->fileSize = $this->humanFileSize($this->media->file_size);
        $this->title = $this->media->title;
        $this->alt_text = $this->media->alt_text;
    }

    public function render()
    {
        return view('livewire.admin.media.update');
    }

    public function save()
    {
        $this->validate([
            'title' => 'nullable|string',
            'alt_text' => 'nullable|string'
        ]);

        try {
            $this->media->update([
                'title' => $this->title,
                'alt_text' => $this->alt_text,
            ]);
            session()->flash('flash.banner', 'Changes saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.media');
    }

    public function humanFileSize($size)
    {
        if ($size >= 1073741824) {
          $fileSize = round($size / 1024 / 1024 / 1024,1) . 'GB';
        } elseif ($size >= 1048576) {
            $fileSize = round($size / 1024 / 1024,1) . 'MB';
        } elseif($size >= 1024) {
            $fileSize = round($size / 1024,1) . 'KB';
        } else {
            $fileSize = $size . ' bytes';
        }
        return $fileSize;
    }
}
