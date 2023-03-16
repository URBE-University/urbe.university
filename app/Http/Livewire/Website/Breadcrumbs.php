<?php

namespace App\Http\Livewire\Website;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public $path;

    public function mount()
    {
        $this->path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    }

    public function render()
    {
        return view('livewire.website.breadcrumbs');
    }
}
