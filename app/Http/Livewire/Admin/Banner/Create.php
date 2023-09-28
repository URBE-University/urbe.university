<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Models\Banner;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    public $modal;
    public $title, $content, $starts_at, $ends_at;

    public function render()
    {
        return view('livewire.admin.banner.create');
    }

    public function save() {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'starts_at' => 'required|date',
            'ends_at' => 'required|date|after_or_equal:starts_at',
        ]);

        try {
            Banner::create([
                'title' => $this->title,
                'content' => $this->content,
                'starts_at' => $this->starts_at,
                'ends_at' => $this->ends_at,
            ]);
            $message = 'Banner successfully added!';
            $style = 'success';
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            $message = 'Oops! We ran into an issue and were not able to add the banner.';
            $style = 'danger';
        }
        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', $style);
        return redirect()->route('admin.tools.banners');
    }
}
