<?php

namespace App\Http\Livewire\Admin\Seo\Tools\Redirects;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public $redirect, $modal;
    public $source_url, $destination_url, $code;

    public function mount($redirect)
    {
        $this->redirect = collect($redirect);
        $this->source_url = $this->redirect['source_url'];
        $this->destination_url = $this->redirect['destination_url'];
        $this->code = $this->redirect['code'];
    }

    public function render()
    {
        return view('livewire.admin.seo.tools.redirects.edit');
    }

    public function save()
    {
        $this->validate([
            'source_url' => 'required',
            'destination_url' => 'required|active_url|starts_with:https://',
            'code' => 'required|min:301|max:302|numeric',
        ]);

        try {
            DB::table('redirects')->where('id', $this->redirect['id'])->update([
                'source_url' => $this->source_url,
                'destination_url' => $this->destination_url,
                'code' => $this->code
            ]);
            session()->flash('flash.banner', 'Endpoint successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.tools.redirects');
    }
}
