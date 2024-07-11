<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function logins()
    {
        return view('livewire.login');
    }

    public function registers()
    {
        return view('livewire.register');
    }
    public function forgots()
    {
        return view('livewire.forgot');
    }
}
