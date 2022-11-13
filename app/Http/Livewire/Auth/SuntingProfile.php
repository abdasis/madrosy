<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SuntingProfile extends Component
{

    use LivewireAlert;

    public $password_saat_ini;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'password_saat_ini' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required'
        ];
    }


    public function simpan()
    {
        $this->validate();
        if (\Hash::check($this->password_saat_ini, auth()->user()->password)) {
            auth()->user()->update([
                'password' => bcrypt($this->password)
            ]);

            $this->alert('success', 'Password berhasil diperbarui');
        } else {
            $this->addError('password_saat_ini', 'Password yang anda masukan tidak sesuai');
            return false;
        }


    }

    public function render()
    {
        return view('livewire.auth.sunting-profile');
    }
}
