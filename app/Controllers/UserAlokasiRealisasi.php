<?php

namespace App\Controllers;

use \App\Models\RTKAlokasiModel;
use \App\Models\RTKRealisasiModel;
use \App\Models\AnakPetakModel;
use \App\Models\DesaHwdModel;
use \App\Models\RTKegiatanModel;

class UserAlokasiRealisasi extends BaseController
{
    protected $alokasirealisasi;
    public function __construct()
    {
        $this->RTKAlokasiModel = new RTKAlokasiModel();
        $this->RTKRealisasiModel = new RTKRealisasiModel();
        $this->AnakPetakModel = new AnakPetakModel();
        $this->DesaHwdModel = new DesaHwdModel();
        $this->RTKegiatanModel = new RTKegiatanModel();
    }

    public function index()
    {

        $rtka = $this->RTKAlokasiModel->findAll();
        $rtkr = $this->RTKRealisasiModel->findAll();
        $anakpetak = $this->AnakPetakModel->findAll();
        $hwd = $this->DesaHwdModel->findAll();
        $rtk = $this->RTKegiatanModel->findAll();
        $data = [
            'rtka' => $rtka,
            'rtkr' => $rtkr,
            'anakpetak' => $anakpetak,
            'hwd' => $hwd,
            'rtk' => $rtk,
            'title' => 'KHDTK APPS - Alokasi dan Realisasi',
            'validation' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('user-database/alokasi_realisasi', $data);
    }
}
