<?php

namespace App\Http\Livewire\Admin\Seo\Tools\Redirects;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Delete extends Component
{
    public $modal, $redirect;

    public function mount($redirect)
    {
        $this->redirect = collect($redirect);
    }

    public function render()
    {
        return view('livewire.admin.seo.tools.redirects.delete');
    }

    public function delete()
    {
        try {
            DB::table('redirects')->where('id', $this->redirect['id'])->delete();
            session()->flash('flash.banner', 'Redirect successfully deleted!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.tools.redirects');
    }
}
