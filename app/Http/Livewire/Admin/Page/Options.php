<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;

class Options extends Component
{
    public $slideover, $page, $enable_comments, $keywords, $keyphrases, $saved = false;

    public function mount(Page $page)
    {
        $this->page = $page;
        $this->enable_comments = $page->enable_comments;
        $this->keywords = $page->keywords;
        $this->keyphrases = $page->keyphrases;
    }

    public function render()
    {
        return view('livewire.admin.page.options');
    }
}
