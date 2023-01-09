<?php

namespace App\Controllers;

use \App\Models\RenstraModel;
use \App\Models\RenstraTujuanModel;
use \App\Models\RenstraTargetModel;

class RencanaStrategis extends BaseController
{
    protected $rencanastrategis;
    public function __construct()
    {
        $this->RenstraModel = new RenstraModel();
        $this->RenstraTujuanModel = new RenstraTujuanModel();
        $this->RenstraTargetModel = new RenstraTargetModel();
    }

    public function rencana_strategis()
    {

        $renstra = $this->RenstraModel->findAll();
        $renstratujuan = $this->RenstraTujuanModel->findAll();
        $renstratarget = $this->RenstraTargetModel->findAll();
        $data = [
            'renstra' => $renstra,
            'renstratujuan' => $renstratujuan,
            'renstratarget' => $renstratarget,
            'title' => 'KHDTK APPS - Rencana Pengelolaan dan Realisasi',
            'validation' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/rencana_strategis', $data);
    }

    public function saverenstra()
    {

        if (!$this->validate([
            'koderenstra' => [
                'rules' => 'required|is_unique[renstra.kode_renstra]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'skrenstra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'mulairenstra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'akhirrenstra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'sahrenstra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'pengesahrenstra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'desrenstra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->to('database/rencana-strategis')->withInput()->with('validation', $validation);
        }
        $this->RenstraModel->save([
            'kode_renstra' => $this->request->getVar('koderenstra'),
            'sk_renstra' => $this->request->getVar('skrenstra'),
            'mulai' => $this->request->getVar('mulairenstra'),
            'berakhir' => $this->request->getVar('akhirrenstra'),
            'tanggal_pengesahan' => $this->request->getVar('sahrenstra'),
            'pengesah' => $this->request->getVar('pengesahrenstra'),
            'deskripsi' => $this->request->getVar('desrenstra'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/rencana-strategis');
    }

    public function deleterenstra($id)
    {
        $this->RenstraModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/rencana-strategis');
    }

    public function editrenstra($id)
    {

        $this->RenstraModel->save([
            'id' => $id,
            'kode_renstra' => $this->request->getVar('editkoderenstra'),
            'sk_renstra' => $this->request->getVar('editskrenstra'),
            'mulai' => $this->request->getVar('editmulairenstra'),
            'berakhir' => $this->request->getVar('editakhirrenstra'),
            'tanggal_pengesahan' => $this->request->getVar('editsahrenstra'),
            'pengesah' => $this->request->getVar('editpengesahrenstra'),
            'deskripsi' => $this->request->getVar('editdesrenstra'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/rencana-strategis');
    }

    public function saverenstratu()
    {
        if (!$this->validate([
            'koderenstra1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'koderenstratu' => [
                'rules' => 'required|is_unique[renstratujuan.kode_renstra_tujuan]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'tujuanrenstratu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'desrenstratu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->to('database/rencana-strategis')->withInput()->with('validation', $validation);
        }

        $this->RenstraTujuanModel->save([
            'kode_renstra' => $this->request->getVar('koderenstra1'),
            'kode_renstra_tujuan' => $this->request->getVar('koderenstratu'),
            'tujuan' => $this->request->getVar('tujuanrenstratu'),
            'deskripsi' => $this->request->getVar('desrenstratu'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/rencana-strategis');
    }

    public function deleterenstratu($id)
    {
        $this->RenstraTujuanModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/rencana-strategis');
    }

    public function editrenstratu($id)
    {

        $this->RenstraTujuanModel->save([
            'id' => $id,
            'kode_renstra' => $this->request->getVar('editkoderenstra1'),
            'kode_renstra_tujuan' => $this->request->getVar('editkoderenstratu'),
            'tujuan' => $this->request->getVar('edittujuanrenstratu'),
            'deskripsi' => $this->request->getVar('editdesrenstratu'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/rencana-strategis');
    }

    public function saverenstrata()
    {

        if (!$this->validate([
            'koderenstrata' => [
                'rules' => 'required|is_unique[renstratarget.kode_renstra_target]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data ada di database.'
                ]
            ],
            'koderenstratu1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'sasaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'satuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'volume' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'desrenstrata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->to('database/rencana-strategis')->withInput()->with('validation', $validation);
        }
        $this->RenstraTargetModel->save([
            'kode_renstra_target' => $this->request->getVar('koderenstrata'),
            'kode_renstra_tujuan' => $this->request->getVar('koderenstratu1'),
            'sasaran' => $this->request->getVar('sasaran'),
            'satuan' => $this->request->getVar('satuan'),
            'volume' => $this->request->getVar('volume'),
            'deskripsi' => $this->request->getVar('desrenstratu'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/rencana-strategis');
    }

    public function deleterenstrata($id)
    {
        $this->RenstraTargetModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/rencana-strategis');
    }

    public function editrenstrata($id)
    {

        $this->RenstraTargetModel->save([
            'id' => $id,
            'kode_renstra_target' => $this->request->getVar('editkoderenstrata'),
            'kode_renstra_tujuan' => $this->request->getVar('editkoderenstratu1'),
            'sasaran' => $this->request->getVar('editsasaran'),
            'satuan' => $this->request->getVar('editsatuan'),
            'volume' => $this->request->getVar('editvolume'),
            'deskripsi' => $this->request->getVar('editdesrenstrata'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/rencana-strategis');
    }
}
