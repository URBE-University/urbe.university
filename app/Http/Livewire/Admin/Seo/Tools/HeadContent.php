<?php

namespace App\Http\Livewire\Admin\Seo\Tools;

use Livewire\Component;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Log;

class HeadContent extends Component
{
    public $site;
    public $content;

    protected $listeners = ['codeUpdated' => 'updateContent'];

    public function updateContent($content)
    {
        $this->content = $content;
    }

    public function mount()
    {
        $this->site = SiteSettings::first();
        $this->content = $this->site->custom_head_content;
    }
    public function render()
    {
        return view('livewire.admin.seo.tools.head-content');
    }

    public function save()
    {
        try {
            $this->site->update([
                'custom_head_content' => $this->content,
            ]);
            session()->flash('flash.banner', 'Settings successfully saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.tools.header.code');
    }
}
