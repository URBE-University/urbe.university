<?php

namespace App\Http\Livewire\Admin\Page;

use App\Models\Page;
use Livewire\Component;

class Index extends Component
{
    public $query = '';

    public function render()
    {
        return view('livewire.admin.page.index', [
            'pages' => Page::where('title', 'like', '%' . $this->query . '%')->paginate(10)
        ]);
    }
}
