<?php

namespace App\Http\Livewire\Admin\Seo\Tools\Redirects;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    use WithPagination;

    public $source_url, $code, $destination_url;
    public $query = '';

    public function render()
    {
        return view('livewire.admin.seo.tools.redirects.index', [
            'items' => DB::table('redirects')->where('source_url', 'like', '%'.$this->query.'%')->paginate(10)
        ]);
    }
}
