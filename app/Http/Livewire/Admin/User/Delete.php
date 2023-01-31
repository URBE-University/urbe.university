<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $user, $modal;

    public function mount(User $user)
    {
        if (Gate::allows('user:delete')) {
            $this->user = $user;
        } else {
            abort(403, "Unauthorized access recorded.");
        }
    }

    public function render()
    {
        return view('livewire.admin.user.delete');
    }

    public function delete()
    {
        if ($this->user->profile_photo_url) {
            Storage::delete($this->user->profile_photo_url);
        }
        $this->user->delete();
        session()->flash('flash.banner', 'User deleted!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.users');
    }
}
