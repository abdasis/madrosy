<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModeAplikasi extends Component
{

    public $preferensi;

    protected $listeners = ['gantiMode' => 'handleGantiMode'];

    public function handleGantiMode()
    {
        $preferensi = auth()->user()->preferensi()->first();
        if ($preferensi){
            if ($preferensi->mode_aplikasi == 'light'){
                $preferensi->update([
                    'mode_aplikasi' => 'dark'
                ]);
            }else{
                $preferensi->update([
                    'mode_aplikasi' => 'light'
                ]);
            }
        }else{
            auth()->user()->preferensi()->create([
                'mode_aplikasi' => 'light'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.mode-aplikasi');
    }
}
