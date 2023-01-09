<?php

namespace App\Controllers;

use \App\Models\DesaHwdModel;
use \App\Models\HwdCupetModel;
use \App\Models\AndilModel;
use \App\Models\DesaModel;
use \App\Models\LemdesModel;
use \App\Models\CucuPetakModel;

class Hwd extends BaseController
{
    protected $hwd;
    public function __construct()
    {
        $this->DesaHwdModel = new DesaHwdModel();
        $this->HwdCupetModel = new HwdCupetModel();
        $this->AndilModel = new AndilModel();
        $this->DesaModel = new DesaModel();
        $this->LemdesModel = new LemdesModel();
        $this->CucuPetakModel = new CucuPetakModel();
    }
    public function hwd()
    {

        $desahwd = $this->DesaHwdModel->findAll();
        $hwdcupet = $this->HwdCupetModel->findAll();
        $desa = $this->DesaModel->findAll();
        $andil = $this->AndilModel->findAll();
        $lemdes = $this->LemdesModel->findAll();
        $cupet = $this->CucuPetakModel->findAll();
        $data = [
            'desahwd' => $desahwd,
            'hwdcupet' => $hwdcupet,
            'desa' => $desa,
            'andil' => $andil,
            'lemdes' => $lemdes,
            'cupet' => $cupet,
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
                'rules' => 'required|is_unique[desahwd.kode_desa]',
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

    public function savehwdcupet()
    {
        if (!$this->validate([
            'kodehwdcupet' => [
                'rules' => 'required|is_unique[desahwdcupet.kode_hwd_cupet]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodehwd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodecupet' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/hwd')->withInput()->with('validation2', $validation2);
        }

        $this->HwdCupetModel->save([
            'kode_hwd_cupet' => $this->request->getVar('kodehwdcupet'),
            'kode_hwd' => $this->request->getVar('kodehwd'),
            'kode_cucu_petak' => $this->request->getVar('kodecupet'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/hwd');
    }

    public function deletehwdcupet($id)
    {
        $this->HwdCupetModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/hwd');
    }

    public function edithwdcupet($id)
    {


        $this->HwdCupetModel->save([
            'id' => $id,
            'kode_hwd_cupet' => $this->request->getVar('editkodehwdcupet'),
            'kode_hwd' => $this->request->getVar('editkodehwd'),
            'kode_cucu_petak' => $this->request->getVar('editkodecupet'),
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
            'kodecupet1' => [
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
            'kode_cucu_petak' => $this->request->getVar('kodecupet1'),
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
            'kode_cucu_petak' => $this->request->getVar('editkodecupet1'),
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
