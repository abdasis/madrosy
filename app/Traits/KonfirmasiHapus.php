<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\LivewireAlert;

trait KonfirmasiHapus
{
    use LivewireAlert;

    public $model_id;

    public function hapus($id)
    {
        $this->confirm('Yakin hapus data ini?', [
            'text' => 'Data yang dihapus tidak dapat dikembalikan',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Ya',
            'denyButtonText' => 'Tidak',
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'hapus',
            'allowOutsideClick' => false,
            'timer' => null,
            'iconHtml' => '<img class="img-fluid" src="/assets/icons/sad.png"/>',
        ]);

        $this->model_id = $id;
    }

}
