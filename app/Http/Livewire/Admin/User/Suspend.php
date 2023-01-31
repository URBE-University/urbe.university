<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Suspend extends Component
{
    public $user, $modal;

    public function mount(User $user)
    {
        if (Gate::allows('user:update')) {
            $this->user = $user;
        } else {
            abort(403, "Unauthorized access recorded.");
        }
    }

    public function render()
    {
        return view('livewire.admin.user.suspend');
    }

    public function suspend()
    {
        $this->user->update([
            'permissions' => [],
        ]);
        session()->flash('flash.banner', 'User suspended!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.user.edit', ['user' => $this->user->id]);
    }
}
