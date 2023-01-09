<?php

namespace App\Controllers;

use \App\Models\UkurKayuModel;
use \App\Models\UkurNonKayuModel;
use \App\Models\InvenPuModel;

class UserUkur extends BaseController
{
    protected $ukur;
    public function __construct()
    {
        $this->UkurKayuModel = new UkurKayuModel();
        $this->UkurNonKayuModel = new UkurNonKayuModel();
        $this->InvenPuModel = new InvenPuModel();
    }
    public function index()
    {

        $kayu = $this->UkurKayuModel->findAll();
        $nonkayu = $this->UkurNonKayuModel->findAll();
        $invenpu = $this->InvenPuModel->findAll();
        $data = [
            'kayu' => $kayu,
            'nonkayu' => $nonkayu,
            'invenpu' => $invenpu,
            'title' => 'KHDTK APPS - Pengukuran Pada Petak Ukur',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('user-database/ukur_pu', $data);
    }
}
