<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class NikOtomatis extends Component
{
    public $user_id, $tgl;

    function buatNik() {
        $nik = $this->user_id.str_replace('-','',$this->tgl);
        return $nik;
    }

    public function render()
    {
        return view('livewire.nik-otomatis', [
            'user' => User::all(),
            'nik'  => $this->buatNik(),
        ]);
    }
}
