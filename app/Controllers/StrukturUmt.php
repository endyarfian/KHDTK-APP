<?php

namespace App\Controllers;

use \App\Models\UmtModel;
use \App\Models\AnakPetakModel;
use \App\Models\TanamanAnakPetakModel;
use \App\Models\ZonasiLmuModel;


class StrukturUmt extends BaseController
{
    protected $strukturumt;
    public function __construct()
    {
        $this->AnakPetakModel = new AnakPetakModel();
        $this->UmtModel = new UmtModel();
        $this->TanamanAnakPetakModel = new TanamanAnakPetakModel();
        $this->ZonasiLmuModel = new ZonasiLmuModel();
    }

    public function struktur_umt()
    {

        $anakpetak = $this->AnakPetakModel->findAll();
        $umt = $this->UmtModel->findAll();
        $tnmanakpetak = $this->TanamanAnakPetakModel->findAll();
        $zonlmu = $this->ZonasiLmuModel->findAll();
        $data = [
            'anakpetak' => $anakpetak,
            'umt' => $umt,
            'tnmanakpetak' => $tnmanakpetak,
            'zonlmu' => $zonlmu,
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
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/struktur-umt');
    }
}
