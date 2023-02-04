<?php

namespace App\Controllers;

use \App\Models\InvenModel;
use \App\Models\InvenUmtModel;
use \App\Models\InvenPuModel;
use \App\Models\TanamanAnakPetakModel;
use \App\Models\RTKegiatanModel;

class Inven extends BaseController
{
    protected $inven;
    public function __construct()
    {
        $this->InvenModel = new InvenModel();
        $this->InvenUmtModel = new InvenUmtModel();
        $this->InvenPuModel = new InvenPuModel();
        $this->TanamanAnakPetakModel = new TanamanAnakPetakModel();
        $this->RTKegiatanModel = new RTKegiatanModel();
    }
    public function inven()
    {

        $inven = $this->InvenModel->findAll();
        $invenumt = $this->InvenUmtModel->findAll();
        $invenpu = $this->InvenPuModel->findAll();
        $tnmanakpetak = $this->TanamanAnakPetakModel->findAll();
        $rtk = $this->RTKegiatanModel->findAll();
        $data = [
            'inven' => $inven,
            'invenumt' => $invenumt,
            'invenpu' => $invenpu,
            'tnmanakpetak' => $tnmanakpetak,
            'rtk' => $rtk,
            'title' => 'KHDTK APPS - Inventarisasi Sumberdaya Hutan',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/inven', $data);
    }

    public function saveinven()
    {
        if (!$this->validate([
            'kodeinven' => [
                'rules' => 'required|is_unique[inventarisasi.kode_inventarisasi]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'skinven' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'mulaiinven' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'selesaiinven' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'pjinven' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'metodeinven' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'isinven' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'bentukpuinven' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'luaspuinven' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'kodertk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'desinven' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/inven-sdh')->withInput()->with('validation2', $validation2);
        }
        $this->InvenModel->save([
            'kode_inventarisasi' => $this->request->getVar('kodeinven'),
            'no_sk' => $this->request->getVar('skinven'),
            'tanggal_mulai' => $this->request->getVar('mulaiinven'),
            'tanggal_selesai' => $this->request->getVar('selesaiinven'),
            'pj' => $this->request->getVar('pjinven'),
            'metode' => $this->request->getVar('metodeinven'),
            'is' => $this->request->getVar('isinven'),
            'bentuk_pu' => $this->request->getVar('bentukpuinven'),
            'luas_pu' => $this->request->getVar('luaspuinven'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('kodertk'),
            'deskripsi' => $this->request->getVar('desinven'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/inven-sdh');
    }

    public function deleteinven($id)
    {
        $this->InvenModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/inven-sdh');
    }

    public function editinven($id)
    {

        $this->InvenModel->save([
            'id' => $id,
            'kode_inventarisasi' => $this->request->getVar('editkodeinven'),
            'no_sk' => $this->request->getVar('editskinven'),
            'tanggal_mulai' => $this->request->getVar('editmulaiinven'),
            'tanggal_selesai' => $this->request->getVar('editselesaiinven'),
            'pj' => $this->request->getVar('editpjinven'),
            'metode' => $this->request->getVar('editmetodeinven'),
            'is' => $this->request->getVar('editisinven'),
            'bentuk_pu' => $this->request->getVar('editbentukpuinven'),
            'luas_pu' => $this->request->getVar('editluaspuinven'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('editkodertk'),
            'deskripsi' => $this->request->getVar('editdesinven'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/inven-sdh');
    }

    public function saveinvenumt()
    {
        if (!$this->validate([
            'kodeinvenumt' => [
                'rules' => 'required|is_unique[inventarisasi_umt.kode_inven_umt]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodeinven1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodetnmanakpetak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'tglinvenumt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'pjinvenumt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/inven-sdh')->withInput()->with('validation2', $validation2);
        }

        $this->InvenUmtModel->save([
            'kode_inven_umt' => $this->request->getVar('kodeinvenumt'),
            'kode_inventarisasi' => $this->request->getVar('kodeinven1'),
            'kode_anakpetak_tnm' => $this->request->getVar('kodetnmanakpetak'),
            'tanggal' => $this->request->getVar('tglinvenumt'),
            'pj' => $this->request->getVar('pjinvenumt'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/inven-sdh');
    }

    public function deleteinvenumt($id)
    {
        $this->InvenUmtModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/inven-sdh');
    }

    public function editinvenumt($id)
    {


        $this->InvenUmtModel->save([
            'id' => $id,
            'kode_inven_umt' => $this->request->getVar('editkodeinvenumt'),
            'kode_inventarisasi' => $this->request->getVar('editkodeinven1'),
            'kode_anakpetak_tnm' => $this->request->getVar('editkodetnmanakpetak'),
            'tanggal' => $this->request->getVar('edittglinvenumt'),
            'pj' => $this->request->getVar('editpjinvenumt'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/inven-sdh');
    }

    public function saveinvenpu()
    {
        if (!$this->validate([
            'kodeinvenumt1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'kodeinvenpu' => [
                'rules' => 'required|is_unique[inventarisasi_pu.kode_inven_pu]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'tglinvenpu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'pjinvenpu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'luasinvenpu' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'bentukinvenpu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
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
            'ndvi' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'msavi' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'c' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'd' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'n' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'jenistanah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'slope' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'altitude' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/inven-sdh')->withInput()->with('validation2', $validation2);
        }
        $this->InvenPuModel->save([
            'kode_inven_umt' => $this->request->getVar('kodeinvenumt1'),
            'kode_inven_pu' => $this->request->getVar('kodeinvenpu'),
            'tanggal' => $this->request->getVar('tglinvenpu'),
            'pj' => $this->request->getVar('pjinvenpu'),
            'luas_pu' => $this->request->getVar('luasinvenpu'),
            'bentuk_pu' => $this->request->getVar('bentukinvenpu'),
            'koordinat_x' => $this->request->getVar('x'),
            'koordinat_y' => $this->request->getVar('y'),
            'ndvi' => $this->request->getVar('ndvi'),
            'msavi' => $this->request->getVar('msavi'),
            'c' => $this->request->getVar('c'),
            'd' => $this->request->getVar('d'),
            'n' => $this->request->getVar('n'),
            'jenis_tanah' => $this->request->getVar('jenistanah'),
            'kelerengan' => $this->request->getVar('slope'),
            'altitude' => $this->request->getVar('altitude'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/inven-sdh');
    }

    public function deleteinvenpu($id)
    {
        $this->InvenPuModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/inven-sdh');
    }

    public function editinvenpu($id)
    {

        $this->InvenPuModel->save([
            'id' => $id,
            'kode_inven_umt' => $this->request->getVar('editkodeinvenumt1'),
            'kode_inven_pu' => $this->request->getVar('editkodeinvenpu'),
            'tanggal' => $this->request->getVar('edittglinvenpu'),
            'pj' => $this->request->getVar('editpjinvenpu'),
            'luas_pu' => $this->request->getVar('editluasinvenpu'),
            'bentuk_pu' => $this->request->getVar('editbentukinvenpu'),
            'koordinat_x' => $this->request->getVar('editx'),
            'koordinat_y' => $this->request->getVar('edity'),
            'ndvi' => $this->request->getVar('editndvi'),
            'msavi' => $this->request->getVar('editmsavi'),
            'c' => $this->request->getVar('editc'),
            'd' => $this->request->getVar('editd'),
            'n' => $this->request->getVar('editn'),
            'jenis_tanah' => $this->request->getVar('editjenistanah'),
            'kelerengan' => $this->request->getVar('editslope'),
            'altitude' => $this->request->getVar('editaltitude'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/inven-sdh');
    }
}
