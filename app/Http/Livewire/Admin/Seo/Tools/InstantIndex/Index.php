<?php

namespace App\Http\Livewire\Admin\Seo\Tools\InstantIndex;

use App\Models\SiteIndex;
use App\Models\SiteSettings;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.seo.tools.instant-index.index', [
            'urls' => SiteIndex::orderBy('updated_at', 'DESC')->paginate(25)
        ]);
    }
}
