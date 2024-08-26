<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    public function render()
    {
        $title = "Register";
        return view('livewire.auth.register')->layout('components.layouts.auth', 
        [ 'title' => 'Register Page']);
    }

    public function registerUser(){

        $data = $this->validate([

            'name' => 'required|min:2|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'

        ]);

        $data['password'] = Hash::make($data['password']);
        User::create($data);
        session()->flash('success', "Account Created Successfully! Please Login");
        return redirect()->route('login');

    }
}
