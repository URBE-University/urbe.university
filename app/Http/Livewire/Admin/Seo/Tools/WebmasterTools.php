<?php
/**
 * Here we enter the Google Search Console verification HTML code or ID, and the same for Bing, Yandex, etc...
 */
namespace App\Http\Livewire\Admin\Seo\Tools;

use Livewire\Component;

class WebmasterTools extends Component
{
    public function render()
    {
        return view('livewire.admin.seo.tools.webmaster-tools');
    }
}
