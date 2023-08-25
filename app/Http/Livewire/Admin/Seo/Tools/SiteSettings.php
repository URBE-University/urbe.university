<?php

namespace App\Http\Livewire\Admin\Seo\Tools;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\SiteSettings as ModelsSiteSettings;

class SiteSettings extends Component
{
    use WithFileUploads;

    public $name, $description, $keywords, $canonicalUrl, $favicon, $card_image;
    public $settings;

    protected $rules = [
        'name' => 'nullable|min:30|max:60',
        'description' => 'nullable|min:155|max:165',
        'favicon' => 'nullable|dimensions:max_width=16,max_height=16',
        'card_image' => 'nullable|dimensions:max_width=800,max_height=418'
    ];

    public function mount()
    {
        $this->settings = ModelsSiteSettings::first();
        $this->name = $this->settings?->title;
        $this->description = $this->settings?->description;
        $this->keywords = $this->settings?->keywords;
        $this->canonicalUrl = config('app.url');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.seo.tools.site-settings');
    }

    public function save()
    {
        $favIcon = $this->settings->favicon;
        $cardImage = $this->settings->card_image;

        if ($this->favicon) {
            if ($this->settings->favicon) {
                Storage::delete($this->settings->favicon);
            }
            $favIcon = $this->favicon->store('images');
        }

        if ($this->card_image) {
            if ($this->settings->card_image) {
                Storage::delete($this->settings->card_image);
            }
            $cardImage = $this->card_image->store('images');
        }

        try {
            $this->settings->update([
                'title' => $this->name,
                'description' => $this->description,
                'canonical_url' => $this->canonicalUrl,
                'keywords' => $this->keywords,
                'favicon' => $favIcon,
                'card_image' => $cardImage,
            ]);
            session()->flash('flash.banner', 'Settings successfully saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.tools.site.settings');
    }
}
