<?php

namespace App\Http\Livewire\Permission;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Semua extends Component
{

    public $data_route = [];
    public function mount()
    {
        $routes = Route::getRoutes()->get();

        $routes = collect($routes)->map(function ($route) {
            if ($route->getName() != ''){
                $ganti_titik = str_replace('.', ' ', $route->getName());
                $ganti_strip = str_replace('-', ' ', $ganti_titik);
                return [
                    'name' => \Str::lower($ganti_strip),
                    'uri' => $route->uri(),
                    'action' => $route->getActionName(),
                    'method' => $route->methods[0],
                ];
            }else{
                return false;
            }
        })->filter()->toArray();

        $this->data_route = $routes;
    }
    public function render()
    {
        return view('livewire.permission.semua');
    }
}
