<?php

namespace App\Http\Livewire\Admin\School\StartDates;

use App\Models\StartDate;
use Livewire\Component;

class Delete extends Component
{
    public $modal;
    public StartDate $startDate;

    public function mount($startDate)
    {
        $this->startDate = $startDate;
    }

    public function render()
    {
        return view('livewire.admin.school.start-dates.delete');
    }

    public function delete()
    {
        $this->startDate->delete();
        session()->flash('flash.banner', 'Semester successfully deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.school.start-dates');
    }
}
