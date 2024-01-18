<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\User;

class UsersList extends Component
{   
    use WithPagination;

    #[Url()]
    public $search = '';
    #[Url()]
    public $perPage = 10;
    #[Url()]
    public $sortBy = "";
    

    public function render()
    {
        $users = User::search($this->search)->paginate($this->perPage);

        return view('livewire.users-list',[
            'users'=>$users,
        ])->layout('layouts.main_components.users')
        ;
    }
}
