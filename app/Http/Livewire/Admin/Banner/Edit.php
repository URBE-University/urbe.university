<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Models\Banner;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public $modal;
    public Banner $banner;
    public $title, $content, $starts_at, $ends_at;

    public function mount()
    {
        $this->title = $this->banner->title;
        $this->content = $this->banner->content;
        $this->starts_at = Carbon::parse($this->banner->starts_at)->format('Y-m-d');
        $this->ends_at = Carbon::parse($this->banner->ends_at)->format('Y-m-d');
    }

    public function render()
    {
        return view('livewire.admin.banner.edit');
    }

    public function save() {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'starts_at' => 'required|date',
            'ends_at' => 'required|date|after_or_equal:starts_at',
        ]);

        try {
            $this->banner->update([
                'title' => $this->title,
                'content' => $this->content,
                'starts_at' => $this->starts_at,
                'ends_at' => $this->ends_at,
            ]);
            $message = 'Banner successfully updated!';
            $style = 'success';
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            $message = 'Oops! We ran into an issue and were not able to modify the banner.';
            $style = 'danger';
        }
        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', $style);
        return redirect()->route('admin.tools.banners');
    }
}
