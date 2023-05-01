<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\SendUserWelcomeEmail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Invite extends Component
{
    public $modal, $name, $email, $permissions = [];

    public function render()
    {
        return view('livewire.admin.user.invite');
    }

    public function invite()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'permissions' => 'required'
        ]);
        $password = Str::random(16);

        try {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($password),
                'is_active' => false,
                'permissions' => $this->permissions,
            ]);

            Mail::to($this->email)->send(new SendUserWelcomeEmail($this->email, $password));

            session()->flash('flash.banner', 'Invitation successfully sent to ' . $this->email);
            session()->flash('flash.bannerStyle', 'success');

        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'error');
        }

        return redirect()->route('admin.users');
    }
}
