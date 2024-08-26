<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth', [ 'title' => 'Login Page']);
    }

    public function loginUser(){

        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            session()->regenerate();
            session()->flash('success', 'Login Successfully!!!');
 
            return redirect()->intended('/');
        }
 
        return $this->addError('email', 'The email field is invalid.');

    }
}
