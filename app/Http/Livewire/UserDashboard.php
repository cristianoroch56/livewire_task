<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserDashboard extends Component
{
    public $role;

    public function mount()
    {
        // Get the authenticated user's role
        $user = auth()->user();
        $this->role = $user->roles()->first()->name;
    }
    
    public function render()
    {
        return view('livewire.user-dashboard');
    }
}
