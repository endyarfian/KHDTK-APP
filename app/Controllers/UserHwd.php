<?php

namespace App\Controllers;

use \App\Models\DesaHwdModel;
use \App\Models\HwdCupetModel;
use \App\Models\AndilModel;
use \App\Models\DesaModel;
use \App\Models\LemdesModel;
use \App\Models\CucuPetakModel;

class UserHwd extends BaseController
{
    protected $hwd;
    public function __construct()
    {
        $this->DesaHwdModel = new DesaHwdModel();
        $this->HwdCupetModel = new HwdCupetModel();
        $this->AndilModel = new AndilModel();
        $this->DesaModel = new DesaModel();
        $this->LemdesModel = new LemdesModel();
        $this->CucuPetakModel = new CucuPetakModel();
    }
    public function index()
    {

        $desahwd = $this->DesaHwdModel->findAll();
        $hwdcupet = $this->HwdCupetModel->findAll();
        $desa = $this->DesaModel->findAll();
        $andil = $this->AndilModel->findAll();
        $lemdes = $this->LemdesModel->findAll();
        $cupet = $this->CucuPetakModel->findAll();
        $data = [
            'desahwd' => $desahwd,
            'hwdcupet' => $hwdcupet,
            'desa' => $desa,
            'andil' => $andil,
            'lemdes' => $lemdes,
            'cupet' => $cupet,
            'title' => 'KHDTK APPS - Pengelolaan Kawasan Hutan Wengkon Desa',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('user-database/hwd', $data);
    }
}
