<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        $routes = \Route::getRoutes();

        $routes = collect($routes)->take(30)->map(function ($route) {

        })->toArray();

        dd($routes);

        return view('livewire.setting.menu');
    }
}
