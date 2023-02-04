<?php

namespace App\Controllers;

use \App\Models\InvenModel;
use \App\Models\InvenUmtModel;
use \App\Models\InvenPuModel;
use \App\Models\TanamanAnakPetakModel;
use \App\Models\RTKegiatanModel;

class UserInven extends BaseController
{
    protected $inven;
    public function __construct()
    {
        $this->InvenModel = new InvenModel();
        $this->InvenUmtModel = new InvenUmtModel();
        $this->InvenPuModel = new InvenPuModel();
        $this->TanamanAnakPetakModel = new TanamanAnakPetakModel();
        $this->RTKegiatanModel = new RTKegiatanModel();
    }
    public function index()
    {

        $inven = $this->InvenModel->findAll();
        $invenumt = $this->InvenUmtModel->findAll();
        $invenpu = $this->InvenPuModel->findAll();
        $tnmanakpetak = $this->TanamanAnakPetakModel->findAll();
        $rtk = $this->RTKegiatanModel->findAll();
        $data = [
            'inven' => $inven,
            'invenumt' => $invenumt,
            'invenpu' => $invenpu,
            'tnmanakpetak' => $tnmanakpetak,
            'rtk' => $rtk,
            'title' => 'KHDTK APPS - Inventarisasi Sumberdaya Hutan',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('user-database/inven', $data);
    }
}
