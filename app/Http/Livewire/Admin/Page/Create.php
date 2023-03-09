<?php

namespace App\Http\Livewire\Admin\Page;

use Livewire\Component;

class Create extends Component
{
    public $title, $slug, $code = '', $status = 'draft';

    protected $listeners = [
        'codeUpdated'
    ];

    public function codeUpdated($code)
    {
        $this->code = $code;
    }

    public function render()
    {
        return view('livewire.admin.page.create');
    }

    public function save()
    {
        dd($this->code);
    }
}
