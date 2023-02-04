<?php

namespace App\Controllers;

use \App\Models\DesaHwdModel;
use \App\Models\HwdAnakPetakModel;
use \App\Models\AndilModel;
use \App\Models\DesaModel;
use \App\Models\LemdesModel;
use \App\Models\AnakPetakModel;

class UserHwd extends BaseController
{
    protected $hwd;
    public function __construct()
    {
        $this->DesaHwdModel = new DesaHwdModel();
        $this->HwdAnakPetakModel = new HwdAnakPetakModel();
        $this->AndilModel = new AndilModel();
        $this->DesaModel = new DesaModel();
        $this->LemdesModel = new LemdesModel();
        $this->AnakPetakModel = new AnakPetakModel();
    }
    public function index()
    {

        $desahwd = $this->DesaHwdModel->findAll();
        $hwdanakpetak = $this->HwdAnakPetakModel->findAll();
        $desa = $this->DesaModel->findAll();
        $andil = $this->AndilModel->findAll();
        $lemdes = $this->LemdesModel->findAll();
        $anakpetak = $this->AnakPetakModel->findAll();
        $data = [
            'desahwd' => $desahwd,
            'hwdanakpetak' => $hwdanakpetak,
            'desa' => $desa,
            'andil' => $andil,
            'lemdes' => $lemdes,
            'anakpetak' => $anakpetak,
            'title' => 'KHDTK APPS - Pengelolaan Kawasan Hutan Wengkon Desa',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('user-database/hwd', $data);
    }
}
