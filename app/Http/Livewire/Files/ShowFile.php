<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;
use App\Models\Files;

class ShowFile extends Component
{   
    public $fileid;

    public function mount($fileid){
        $this->fileid = $fileid;
    }

    public function render()
    {
        $file = Files::where('id', $this->fileid)->first();
        return view('livewire.files.show-file', ['file' => $file]);
    }
}
