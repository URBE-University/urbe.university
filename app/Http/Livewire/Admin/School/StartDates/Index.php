<?php

namespace App\Http\Livewire\Admin\School\StartDates;

use App\Models\StartDate;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.school.start-dates.index', [
            'semesters' => StartDate::orderBy('start_date', 'ASC')->get()
        ]);
    }
}
