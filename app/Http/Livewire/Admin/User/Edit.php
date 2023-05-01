<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class Edit extends Component
{
    public $user, $modal, $permissions = [];

    public function mount(User $user)
    {
        if (Gate::allows('user:view') && Gate::allows('user:update')) {
            $this->user = $user;
        } else {
            abort(403, "Unauthorized access recorded.");
        }
    }

    public function render()
    {
        return view('livewire.admin.user.edit');
    }

    public function save()
    {
        $this->validate([
            'permissions' => 'required',
        ]);
        $this->user->permissions = $this->permissions;
        $this->user->save();
        session()->flash('flash.banner', 'Permissions successfully updated for ' . $this->user->email);
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.user.edit', ['user' => $this->user->id]);
    }
}
