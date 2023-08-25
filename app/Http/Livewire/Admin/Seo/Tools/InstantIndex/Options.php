<?php

namespace App\Http\Livewire\Admin\Seo\Tools\InstantIndex;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Options extends Component
{
    public $modal;
    public $settings, $apiKey, $apiKeyLocation;

    public function mount()
    {
        $this->settings = SiteSettings::first();
        $this->apiKey = $this->settings->instant_index_key;
        $this->apiKeyLocation = config('app.url') . '/' . $this->apiKey . '.txt';
    }

    public function render()
    {
        return view('livewire.admin.seo.tools.instant-index.options');
    }

    public function genKey()
    {
        try {
            if ($this->settings->instant_index_key) {
                File::delete( public_path('/') . $this->settings->instant_index_key . '.txt');
            }

            $key = Str::random(32);

            File::put(public_path('/') . $key . '.txt', $key);
            $this->settings->update(['instant_index_key' => $key]);

            session()->flash('flash.banner', 'API Key successfully regenerated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.tools.instant.index');

    }

    public function checkKey()
    {
        return redirect()->away($this->apiKeyLocation);
    }
}
