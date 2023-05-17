<?php

namespace App\Http\Livewire\Admin\School\StartDates;

use Livewire\Component;
use App\Models\StartDate;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    public $modal, $semester, $starts_at, $apply_by_date;
    public function render()
    {
        return view('livewire.admin.school.start-dates.create');
    }

    public function save()
    {
        $this->validate([
            'semester' => 'required',
            'starts_at' => 'required|date',
            'apply_by_date' => 'required|date'
        ]);

        try {
            StartDate::create([
                'semester' => $this->semester,
                'start_date' => $this->starts_at,
                'apply_by_date' => $this->apply_by_date,
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
        return redirect()->route('admin.school.start-dates');
    }
}
