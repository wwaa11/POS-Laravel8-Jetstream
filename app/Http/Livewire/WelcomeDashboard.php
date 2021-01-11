<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class WelcomeDashboard extends Component
{

    public $user;

    public function render()
    {
        $user = Auth::user();

        return view('livewire.welcome-dashboard', ['user',$user->name]);
    }
}
