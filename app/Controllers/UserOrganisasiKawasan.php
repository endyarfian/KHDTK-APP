<?php

namespace App\Controllers;

use \App\Models\PenataanKawasanModel;
use \App\Models\UmtModel;
use \App\Models\ZonasiModel;
use \App\Models\LmuModel;
use \App\Models\ZonasiLmuModel;
use CodeIgniter\HTTP\Request;

class UserOrganisasiKawasan extends BaseController
{
    protected $organisasikawasan;
    public function __construct()
    {
        $this->PenataanKawasanModel = new PenataanKawasanModel();
        $this->UmtModel = new UmtModel();
        $this->ZonasiModel = new ZonasiModel();
        $this->LmuModel = new LmuModel();
        $this->ZonasiLmuModel = new ZonasiLmuModel();
    }
    public function index()
    {

        $penataankawasan = $this->PenataanKawasanModel->getPenataanKawasan();
        $umt = $this->UmtModel->findAll();
        $lmu = $this->LmuModel->findAll();
        $zonasi = $this->ZonasiModel->findAll();
        $zonasilmu = $this->ZonasiLmuModel->findAll();
        $data = [
            'penataankawasan' => $penataankawasan,
            'umt' => $umt,
            'lmu' => $lmu,
            'zonasi' => $zonasi,
            'zonasilmu' => $zonasilmu,
            'title' => 'KHDTK APPS - Pengorganisasian & Penataan Kawasan',
        ];

        return view('user-database/organisasi_kawasan', $data);
    }
}
