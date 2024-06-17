<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogin extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    public function render()
    {
        return view('livewire.admin-login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
            'remember' => $this->remember,
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        } else {
            $this->emit('loginError', 'Invalid email or password.');
            return;
        }
    }
}
