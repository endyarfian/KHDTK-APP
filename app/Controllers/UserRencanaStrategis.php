<?php

namespace App\Controllers;

use \App\Models\RenstraModel;
use \App\Models\RenstraTujuanModel;
use \App\Models\RenstraTargetModel;

class UserRencanaStrategis extends BaseController
{
    protected $rencanastrategis;
    public function __construct()
    {
        $this->RenstraModel = new RenstraModel();
        $this->RenstraTujuanModel = new RenstraTujuanModel();
        $this->RenstraTargetModel = new RenstraTargetModel();
    }

    public function index()
    {

        $renstra = $this->RenstraModel->findAll();
        $renstratujuan = $this->RenstraTujuanModel->findAll();
        $renstratarget = $this->RenstraTargetModel->findAll();
        $data = [
            'renstra' => $renstra,
            'renstratujuan' => $renstratujuan,
            'renstratarget' => $renstratarget,
            'title' => 'KHDTK APPS - Rencana Pengelolaan dan Realisasi',
        ];

        return view('user-database/rencana_strategis', $data);
    }
}
