<?php

namespace App\Http\Livewire\Landing;

use Livewire\Component;

class Beranda extends Component
{
    public function render()
    {
        return view('livewire.landing.beranda')->layout('layouts.guest');
    }
}
