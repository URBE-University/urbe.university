<?php
// Install Ace Editor before using this tool
// npm i ace-builds

namespace App\Http\Livewire;

use Livewire\Component;

class CodeEditor extends Component
{
    public $code;

    public function render()
    {
        return view('livewire.code-editor');
    }
}
