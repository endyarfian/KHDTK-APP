<?php

namespace App\Controllers;

use \App\Models\UmtModel;
use \App\Models\AnakPetakModel;
use \App\Models\CucuPetakModel;
use \App\Models\TanamanCupetModel;
use \App\Models\ZonasiLmuModel;
use \App\Models\PlAnakPetakModel;


class StrukturUmt extends BaseController
{
    protected $strukturumt;
    public function __construct()
    {
        $this->AnakPetakModel = new AnakPetakModel();
        $this->UmtModel = new UmtModel();
        $this->CucuPetakModel = new CucuPetakModel();
        $this->TanamanCupetModel = new TanamanCupetModel();
        $this->ZonasiLmuModel = new ZonasiLmuModel();
        $this->PlAnakPetakModel = new PlAnakPetakModel();
    }

    public function struktur_umt()
    {

        $anakpetak = $this->AnakPetakModel->findAll();
        $umt = $this->UmtModel->findAll();
        $tnmcupet = $this->TanamanCupetModel->findAll();
        $cupet = $this->CucuPetakModel->findAll();
        $zonlmu = $this->ZonasiLmuModel->findAll();
        $pl = $this->PlAnakPetakModel->findAll();
        $data = [
            'anakpetak' => $anakpetak,
            'umt' => $umt,
            'tnmcupet' => $tnmcupet,
            'cupet' => $cupet,
            'zonlmu' => $zonlmu,
            'pl' => $pl,
            'title' => 'KHDTK APPS - Struktur Kawasan pada UMT',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/struktur_umt', $data);
    }

    public function saveanakpetak()
    {
        if (!$this->validate([
            'kodeap' => [
                'rules' => 'required|is_unique[umt_anakpetak.kode_anak_petak]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'ap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'umt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'luasap' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'luasht' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'persentase' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],

        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/struktur-umt')->withInput()->with('validation2', $validation2);
        }
        $this->AnakPetakModel->save([
            'kode_anak_petak' => $this->request->getVar('kodeap'),
            'anak_petak' => $this->request->getVar('ap'),
            'kode_umt' => $this->request->getVar('umt'),
            'luas' => $this->request->getVar('luasap'),
            'luas_ht' => $this->request->getVar('luasht'),
            'persentase' => $this->request->getVar('persentase'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/struktur-umt');
    }

    public function deleteanakpetak($id)
    {
        $this->AnakPetakModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/struktur-umt');
    }

    public function editanakpetak($id)
    {

        $this->AnakPetakModel->save([
            'id' => $id,
            'kode_anak_petak' => $this->request->getVar('editkodeap'),
            'anak_petak' => $this->request->getVar('editap'),
            'kode_umt' => $this->request->getVar('editumt'),
            'luas' => $this->request->getVar('editluasap'),
            'luas_ht' => $this->request->getVar('editluasht'),
            'persentase' => $this->request->getVar('editpersentase'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/struktur-umt');
    }

    public function savecupet()
    {
        if (!$this->validate([
            'kodeap1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'kodecupet' => [
                'rules' => 'required|is_unique[umt_cucupetak.kode_cucu_petak]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodezonlmu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'luas' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'x' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'y' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/struktur-umt')->withInput()->with('validation2', $validation2);
        }

        $this->CucuPetakModel->save([
            'kode_anak_petak' => $this->request->getVar('kodeap1'),
            'kode_cucu_petak' => $this->request->getVar('kodecupet'),
            'kode_zonasi_lmu' => $this->request->getVar('kodezonlmu'),
            'luas' => $this->request->getVar('luas'),
            'koordinat_x' => $this->request->getVar('x'),
            'koordinat_y' => $this->request->getVar('y'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/struktur-umt');
    }

    public function deletecupet($id)
    {
        $this->CucuPetakModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/struktur-umt');
    }

    public function editcupet($id)
    {
        $this->CucuPetakModel->save([
            'id' => $id,
            'kode_anak_petak' => $this->request->getVar('editkodeap1'),
            'kode_cucu_petak' => $this->request->getVar('editkodecupet'),
            'kode_zonasi_lmu' => $this->request->getVar('editkodezonlmu'),
            'luas' => $this->request->getVar('editluas'),
            'koordinat_x' => $this->request->getVar('editx'),
            'koordinat_y' => $this->request->getVar('edity'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/struktur-umt');
    }
}
