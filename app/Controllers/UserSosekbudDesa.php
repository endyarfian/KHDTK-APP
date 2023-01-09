<?php

namespace App\Controllers;

use \App\Models\DesaModel;
use \App\Models\LemdesModel;

class UserSosekbudDesa extends BaseController
{
    protected $sosekbuddesa;
    public function __construct()
    {
        $this->DesaModel = new DesaModel();
        $this->LemdesModel = new LemdesModel();
    }

    public function index()
    {

        $desa = $this->DesaModel->findAll();
        $lemdes = $this->LemdesModel->findAll();;
        $data = [
            'desa' => $desa,
            'lemdes' => $lemdes,
            'title' => 'KHDTK APPS - Potensi Sosial Ekonomi dan budaya Desa',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('user-database/sosekbud_desa', $data);
    }
}
