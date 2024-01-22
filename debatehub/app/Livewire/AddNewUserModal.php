<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate; 

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;

class AddNewUserModal extends Component
{
    public $showUserModal = false;

    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ];

    // save form data
    public function createUser(){
        
        $this->validate();

        $newUser = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // create the new user's team
        $this->createNewUsersTeam($newUser);

        $this->toggleUserModal(); // Close the modal after user creation

    }

    protected function createNewUsersTeam(User $newUser){
        $newUser->ownedTeams()->save(Team::forceCreate([
            'user_id' => $newUser->id,
            'name' => explode(' ', $newUser->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }


    public function toggleUserModal()
    {
        $this->resetValidation(); // Reset validation when the modal is toggled
        $this->reset(); // Clear form fields
        $this->showUserModal = !$this->showUserModal;
    }

    public function closeUserModal()
    {
        $this->showUserModal = false;
    }
}
