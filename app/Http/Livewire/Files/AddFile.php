<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Files;

class AddFile extends Component
{
    use WithFileUploads;

    public $title, $image;

    public function render()
    {
        return view('livewire.files.add-file');
    }

    public function store(){

        $this->validate([
            'title' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $user = Auth::guard('web')->user();
        $filename = $this->image->store('images_' . $user->id);
        Files::create([
            'title' => $this->title,
            'image' => $filename,
            'user_id' => $user->id
        ]);
        session()->flash('success', 'File uploaded Successfully!!');
        return redirect()->route('dashboard');
    }
}
