<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Files;
use Livewire\WithPagination;


class Dashboard extends Component
{
    use WithPagination;

    public $search;
    public $file_deletion_id;

    protected $queryString = ['search'];



    public function render()
    {
        $pageTitle = 'Dashboard';
        $user = Auth::guard('web')->user();
        $files = Files::select('id', 'title', 'image', 'created_at')->where('title', 'like', '%' . $this->search . '%')->where('user_id', $user->id)->paginate(3);
        return view('livewire.dashboard', ['title'=>$pageTitle, 'files'=> $files]);
    }
}
