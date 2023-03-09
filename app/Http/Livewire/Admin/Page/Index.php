<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.page.index', [
            'pages' => Page::paginate(10)
        ]);
    }
}
