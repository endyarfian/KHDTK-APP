<?php

namespace App\Controllers;

use \App\Models\DesaHwdModel;
use \App\Models\HwdAnakPetakModel;
use \App\Models\AndilModel;
use \App\Models\DesaModel;
use \App\Models\LemdesModel;
use \App\Models\AnakPetakModel;

class Hwd extends BaseController
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
    public function hwd()
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

        return view('database/hwd', $data);
    }

    public function savedesahwd()
    {
        if (!$this->validate([
            'kodedesa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodehwd' => [
                'rules' => 'required|is_unique[desahwd.kode_hwd]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'sk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'berlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodelemdes' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/hwd')->withInput()->with('validation2', $validation2);
        }
        $this->DesaHwdModel->save([
            'kode_desa' => $this->request->getVar('kodedesa'),
            'kode_hwd' => $this->request->getVar('kodehwd'),
            'sk' => $this->request->getVar('sk'),
            'tanggal_berlaku' => $this->request->getVar('berlaku'),
            'kode_lemdes' => $this->request->getVar('kodelemdes'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/hwd');
    }

    public function deletedesahwd($id)
    {
        $this->DesaHwdModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/hwd');
    }

    public function editdesahwd($id)
    {

        $this->DesaHwdModel->save([
            'id' => $id,
            'kode_desa' => $this->request->getVar('editkodedesa'),
            'kode_hwd' => $this->request->getVar('editkodehwd'),
            'sk' => $this->request->getVar('editsk'),
            'tanggal_berlaku' => $this->request->getVar('editberlaku'),
            'kode_lemdes' => $this->request->getVar('editkodelemdes'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/hwd');
    }

    public function savehwdanakpetak()
    {
        if (!$this->validate([
            'kodehwdanakpetak' => [
                'rules' => 'required|is_unique[desahwdanakpetak.kode_hwd_anakpetak]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodehwd1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodeanakpetak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/hwd')->withInput()->with('validation2', $validation2);
        }

        $this->HwdAnakPetakModel->save([
            'kode_hwd_anakpetak' => $this->request->getVar('kodehwdanakpetak'),
            'kode_hwd' => $this->request->getVar('kodehwd1'),
            'kode_anak_petak' => $this->request->getVar('kodeanakpetak'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/hwd');
    }

    public function deletehwdanakpetak($id)
    {
        $this->HwdAnakPetakModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/hwd');
    }

    public function edithwdanakpetak($id)
    {


        $this->HwdAnakPetakModel->save([
            'id' => $id,
            'kode_hwd_anakpetak' => $this->request->getVar('editkodehwdanakpetak'),
            'kode_hwd' => $this->request->getVar('editkodehwd1'),
            'kode_anak_petak' => $this->request->getVar('editkodeanakpetak'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/hwd');
    }

    public function saveandil()
    {
        if (!$this->validate([
            'andil' => [
                'rules' => 'required|is_unique[andil.andil]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodeanakpetak1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'dusun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'rt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodehwd1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'skberlaku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'skberakhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodelemdes1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/hwd')->withInput()->with('validation2', $validation2);
        }
        $this->AndilModel->save([
            'andil' => $this->request->getVar('andil'),
            'kode_anak_petak' => $this->request->getVar('kodeanakpetak1'),
            'nik_pesanggem' => $this->request->getVar('nik'),
            'nama_pesanggem' => $this->request->getVar('nama'),
            'desa' => $this->request->getVar('desa'),
            'dusun' => $this->request->getVar('dusun'),
            'rw' => $this->request->getVar('rw'),
            'rt' => $this->request->getVar('rt'),
            'kode_hwd' => $this->request->getVar('kodehwd1'),
            'sk_berlaku' => $this->request->getVar('skberlaku'),
            'sk_berakhir' => $this->request->getVar('skberakhir'),
            'kode_lemdes' => $this->request->getVar('kodelemdes1'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/hwd');
    }

    public function deleteandil($id)
    {
        $this->AndilModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/hwd');
    }

    public function editandil($id)
    {

        $this->AndilModel->save([
            'id' => $id,
            'andil' => $this->request->getVar('editandil'),
            'kode_anak_petak' => $this->request->getVar('editkodeanakpetak1'),
            'nik_pesanggem' => $this->request->getVar('editnik'),
            'nama_pesanggem' => $this->request->getVar('editnama'),
            'desa' => $this->request->getVar('editdesa'),
            'dusun' => $this->request->getVar('editdusun'),
            'rw' => $this->request->getVar('editrw'),
            'rt' => $this->request->getVar('editrt'),
            'kode_hwd' => $this->request->getVar('editkodehwd1'),
            'sk_berlaku' => $this->request->getVar('editskberlaku'),
            'sk_berakhir' => $this->request->getVar('editskberakhir'),
            'kode_lemdes' => $this->request->getVar('editkodelemdes1'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/hwd');
    }
}
