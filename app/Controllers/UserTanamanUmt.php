<?php

namespace App\Controllers;

use \App\Models\UmtModel;
use \App\Models\AnakPetakModel;
use \App\Models\CucuPetakModel;
use \App\Models\TanamanCupetModel;
use \App\Models\ZonasiLmuModel;


class UserTanamanUmt extends BaseController
{
    protected $tanamanumt;
    public function __construct()
    {
        $this->AnakPetakModel = new AnakPetakModel();
        $this->UmtModel = new UmtModel();
        $this->CucuPetakModel = new CucuPetakModel();
        $this->TanamanCupetModel = new TanamanCupetModel();
        $this->ZonasiLmuModel = new ZonasiLmuModel();
    }

    public function index()
    {

        $anakpetak = $this->AnakPetakModel->findAll();
        $umt = $this->UmtModel->findAll();
        $tnmcupet = $this->TanamanCupetModel->findAll();
        $cupet = $this->CucuPetakModel->findAll();
        $zonlmu = $this->ZonasiLmuModel->findAll();
        $data = [
            'anakpetak' => $anakpetak,
            'umt' => $umt,
            'tnmcupet' => $tnmcupet,
            'cupet' => $cupet,
            'zonlmu' => $zonlmu,
            'title' => 'KHDTK APPS - Jenis Tanaman Pada UMT',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('user-database/tanaman_umt', $data);
    }
}
