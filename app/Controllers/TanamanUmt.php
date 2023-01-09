<?php

namespace App\Controllers;

use \App\Models\UmtModel;
use \App\Models\AnakPetakModel;
use \App\Models\CucuPetakModel;
use \App\Models\TanamanCupetModel;
use \App\Models\ZonasiLmuModel;


class TanamanUmt extends BaseController
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

    public function tanaman_umt()
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

        return view('database/tanaman_umt', $data);
    }

    public function savetnmcupet()
    {
        if (!$this->validate([
            'kodetnmcupet' => [
                'rules' => 'required|is_unique[umt_cupet_tnm.kode_cupet_tnm]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodecupet1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'tgl' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'ilmiah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'lokal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'tnmx' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'tnmy' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/tanaman-umt')->withInput()->with('validation2', $validation2);
        }
        $this->TanamanCupetModel->save([
            'kode_cupet_tnm' => $this->request->getVar('kodetnmcupet'),
            'kode_cucu_petak' => $this->request->getVar('kodecupet1'),
            'tgl_tnm' => $this->request->getVar('tgl'),
            'jenis_ilmiah' => $this->request->getVar('ilmiah'),
            'jenis_lokal' => $this->request->getVar('lokal'),
            'jarak_tnm_x' => $this->request->getVar('tnmx'),
            'jarak_tnm_y' => $this->request->getVar('tnmy'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/tanaman-umt');
    }

    public function deletetnmcupet($id)
    {
        $this->TanamanCupetModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/tanaman-umt');
    }

    public function edittnmcupet($id)
    {

        $this->TanamanCupetModel->save([
            'id' => $id,
            'kode_cupet_tnm' => $this->request->getVar('editkodetnmcupet'),
            'kode_cucu_petak' => $this->request->getVar('editkodecupet1'),
            'tgl_tnm' => $this->request->getVar('edittgl'),
            'jenis_ilmiah' => $this->request->getVar('editilmiah'),
            'jenis_lokal' => $this->request->getVar('editlokal'),
            'jarak_tnm_x' => $this->request->getVar('edittnmx'),
            'jarak_tnm_y' => $this->request->getVar('edittnmy'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/tanaman-umt');
    }
}
