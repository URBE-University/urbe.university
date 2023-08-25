<?php

namespace App\Http\Livewire\Admin\Seo\Tools\InstantIndex;

use Livewire\Component;
use App\Models\SiteIndex;
use App\Jobs\RunUrlIndexer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class Create extends Component
{
    public $modal, $urls;

    public function render()
    {
        return view('livewire.admin.seo.tools.instant-index.create');
    }

    public function save()
    {
        try {
            $urls = explode(PHP_EOL, $this->urls);

            foreach ($urls as $url) {
                if ($url !== "") {
                    SiteIndex::updateOrCreate([
                        'url' => $url,
                    ]);
                }
            }
            // Dispatch job to submit pages async.
            dispatch( new RunUrlIndexer());

            session()->flash('flash.banner', 'URLs sent for submission. Please check back in a bit to see the progress.');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.tools.instant.index');
    }
}
