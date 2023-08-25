<?php

namespace App\Http\Livewire\Admin\School\Catalog;

use App\Models\Catalog;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    use WithFileUploads;

    public $modal;
    public $year;
    public $file;

    public function mount()
    {
        $this->year = date('Y');
    }

    public function render()
    {
        return view('livewire.admin.school.catalog.create');
    }

    public function save()
    {
        $this->validate([
            'year' => 'numeric',
            'file' => 'file|mimes:pdf',
        ]);

        try {
            Catalog::create([
                'year' => $this->year,
                'path' => $this->file->store('catalog'),
            ]);
            $message = 'Date successfully added!';
            $style = 'success';
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            $message = 'Oops! We ran into an issue and were not able to add the date.';
            $style = 'danger';
        }

        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', $style);

        return redirect()->route('admin.school.catalog');
    }
}
