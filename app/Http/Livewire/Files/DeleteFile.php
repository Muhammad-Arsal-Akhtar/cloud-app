<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\Files;

class DeleteFile extends Component
{

    public function deleteFile($fileId)
    {

        try {
            $file = Files::find($fileId);
            if($file->user_id != auth()->user()->id){
                session()->flash('error', 'Invalid User!!!');
                return redirect()->route('dashboard');
            }

            if ($file) {
                $file->delete();
                Storage::delete($file->image);
                session()->flash('success', 'File Deleted Successfully!!!');
                $this->dispatchBrowserEvent('close-modal');
                return redirect()->route('dashboard');
            }
        } catch (Exception $e) {
            session()->flash('error', 'Something done wrong!!!');
            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.files.delete-file');
    }
}
