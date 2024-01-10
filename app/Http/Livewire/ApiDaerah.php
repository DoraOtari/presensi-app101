<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ApiDaerah extends Component
{
    public $provinsi_id, $kota_id;

    function mount($karyawan) {
        if ($karyawan != null) {
            $this->provinsi_id = $karyawan->provinsi;
            $this->kota_id = $karyawan->kota;
        }
    }

    function provinsi() {
        $provinsi = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json')->object();
        // dd($provinsi);
        return $provinsi ?? [];
    }

    function kota() {
        $id = explode('/',$this->provinsi_id)[0];
        $kota = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/$id.json")->object();
        return $kota ?? [];
    }

    public function render()
    {
        return view('livewire.api-daerah',[
            'provinsi' => $this->provinsi(),
            'kota'     => $this->kota(),
        ]);
    }
}
