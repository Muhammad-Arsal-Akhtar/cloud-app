<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }

    public function logout(){
        Auth::logout();
        session()->flash('success', "Logout Successfully!");
        return redirect()->route('login');
    }
}
