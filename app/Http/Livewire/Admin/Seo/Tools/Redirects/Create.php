<?php

namespace App\Http\Livewire\Admin\Seo\Tools\Redirects;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    public $modal;
    public $source_url, $code, $destination_url;

    public function render()
    {
        return view('livewire.admin.seo.tools.redirects.create');
    }

    public function save()
    {
        $this->validate([
            'source_url' => 'required|starts_with:/',
            'destination_url' => 'required|active_url|starts_with:https://',
            'code' => 'required|min:301|max:302|numeric',
        ]);

        try {
            DB::table('redirects')->insert([
                'source_url' => $this->source_url,
                'destination_url' => $this->destination_url,
                'code' => $this->code
            ]);
            session()->flash('flash.banner', 'Settings successfully saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.seo.redirects');
    }
}
