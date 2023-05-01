<?php
/**
 * Here we enter the Google Search Console verification HTML code or ID, and the same for Bing, Yandex, etc...
 */
namespace App\Http\Livewire\Admin\Seo\Tools;

use Livewire\Component;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Log;

class WebmasterTools extends Component
{
    public $settings;
    public $google_search_id, $bing_webmaster_id, $yandex_webmaster_id;

    public function mount()
    {
        $this->settings = SiteSettings::firstorfail();
        $this->google_search_id = $this->settings->google_search_id;
        $this->bing_webmaster_id = $this->settings->bing_webmaster_id;
        $this->yandex_webmaster_id = $this->settings->yandex_webmaster_id;
    }

    public function render()
    {
        return view('livewire.admin.seo.tools.webmaster-tools');
    }

    public function save()
    {
        try {
            $this->settings->update([
                'google_search_id' => $this->google_search_id,
                'bing_webmaster_id' => $this->bing_webmaster_id,
                'yandex_webmaster_id' => $this->yandex_webmaster_id,
            ]);

            session()->flash('flash.banner', 'Changes successfully saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.seo.webmaster.tools');
    }
}
