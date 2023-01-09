<?php

namespace App\Controllers;

use \App\Models\RencanaTahunanModel;
use \App\Models\RTTujuanModel;
use \App\Models\RTTargetModel;
use \App\Models\RenstraModel;
use \App\Models\RenstraTujuanModel;
use \App\Models\RenstraTargetModel;
use \App\Models\RTKegiatanModel;

class UserRencanaTahunan extends BaseController
{
    protected $rencanatahunan;
    public function __construct()
    {
        $this->RencanaTahunanModel = new RencanaTahunanModel();
        $this->RTTujuanModel = new RTTujuanModel();
        $this->RTTargetModel = new RTTargetModel();
        $this->RenstraModel = new RenstraModel();
        $this->RenstraTujuanModel = new RenstraTujuanModel();
        $this->RenstraTargetModel = new RenstraTargetModel();
        $this->RTKegiatanModel = new RTKegiatanModel();
    }

    public function index()
    {

        $rt = $this->RencanaTahunanModel->findAll();
        $rttujuan = $this->RTTujuanModel->findAll();
        $rttarget = $this->RTTargetModel->findAll();
        $renstra = $this->RenstraModel->findAll();
        $renstratujuan = $this->RenstraTujuanModel->findAll();
        $renstratarget = $this->RenstraTargetModel->findAll();
        $rtk = $this->RTKegiatanModel->findAll();
        $data = [
            'rt' => $rt,
            'rttujuan' => $rttujuan,
            'rttarget' => $rttarget,
            'renstra' => $renstra,
            'rtk' => $rtk,
            'renstratujuan' => $renstratujuan,
            'renstratarget' => $renstratarget,
            'title' => 'KHDTK APPS - Rencana Tahunan',
        ];

        return view('user-database/rencana_tahunan', $data);
    }
}
