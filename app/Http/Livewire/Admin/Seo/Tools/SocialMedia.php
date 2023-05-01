<?php

namespace App\Http\Livewire\Admin\Seo\Tools;

use Livewire\Component;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Log;

class SocialMedia extends Component
{
    public $settings;
    public $facebook_url;
    public $instagram_url;
    public $twitter_url;
    public $linkedin_url;
    public $tiktok_url;
    public $youtube_url;

    public function mount()
    {
        $this->settings = SiteSettings::first();
        $this->facebook_url = $this->settings->facebook_url;
        $this->instagram_url = $this->settings->instagram_url;
        $this->twitter_url = $this->settings->twitter_url;
        $this->linkedin_url = $this->settings->linkedin_url;
        $this->tiktok_url = $this->settings->tiktok_url;
        $this->youtube_url = $this->settings->youtube_url;
    }

    public function render()
    {
        return view('livewire.admin.seo.tools.social-media');
    }

    public function save()
    {
        $this->validate([
            'facebook_url' => 'nullable|active_url',
            'instagram_url' => 'nullable|active_url',
            'twitter_url' => 'nullable|active_url',
            'linkedin_url' => 'nullable|active_url',
            'tiktok_url' => 'nullable|active_url',
            'youtube_url' => 'nullable|active_url',
        ]);
        try {
            $this->settings->update([
                'facebook_url' => $this->facebook_url,
                'instagram_url' => $this->instagram_url,
                'twitter_url' => $this->twitter_url,
                'linkedin_url' => $this->linkedin_url,
                'tiktok_url' => $this->tiktok_url,
                'youtube_url' => $this->youtube_url,
            ]);
            session()->flash('flash.banner', 'Settings successfully saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.seo.socialmedia');
    }
}
