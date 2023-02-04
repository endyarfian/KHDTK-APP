<?php

namespace App\Controllers;

use \App\Models\UkurKayuModel;
use \App\Models\UkurNonKayuModel;
use \App\Models\InvenPuModel;

class Ukur extends BaseController
{
    protected $ukur;
    public function __construct()
    {
        $this->UkurKayuModel = new UkurKayuModel();
        $this->UkurNonKayuModel = new UkurNonKayuModel();
        $this->InvenPuModel = new InvenPuModel();
    }
    public function ukur()
    {

        $kayu = $this->UkurKayuModel->findAll();
        $nonkayu = $this->UkurNonKayuModel->findAll();
        $invenpu = $this->InvenPuModel->findAll();
        $data = [
            'kayu' => $kayu,
            'nonkayu' => $nonkayu,
            'invenpu' => $invenpu,
            'title' => 'KHDTK APPS - Pengukuran Pada Petak Ukur',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/ukur_pu', $data);
    }

    public function savekayu()
    {
        if (!$this->validate([
            'kode' => [
                'rules' => 'required|is_unique[inventarisasi_umt_ukurkayu.kode_pohon]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'no' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',
                ]
            ],
            'kodepu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'dbh' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'tinggi' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'lbds' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'volume' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'fungsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],

        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/ukur-pu')->withInput()->with('validation2', $validation2);
        }
        $this->UkurKayuModel->save([
            'kode_pohon' => $this->request->getVar('kode'),
            'no_pohon' => $this->request->getVar('no'),
            'kode_inven_pu' => $this->request->getVar('kodepu'),
            'jenis_pohon' => $this->request->getVar('jenis'),
            'dbh' => $this->request->getVar('dbh'),
            'tinggi' => $this->request->getVar('tinggi'),
            'lbds' => $this->request->getVar('lbds'),
            'volume' => $this->request->getVar('volume'),
            'fungsi' => $this->request->getVar('fungsi'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/ukur-pu');
    }

    public function deletekayu($id)
    {
        $this->UkurKayuModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/ukur-pu');
    }

    public function editkayu($id)
    {

        $this->UkurKayuModel->save([
            'id' => $id,
            'kode_pohon' => $this->request->getVar('editkode'),
            'no_pohon' => $this->request->getVar('editno'),
            'kode_inven_pu' => $this->request->getVar('editkodepu'),
            'jenis_pohon' => $this->request->getVar('editjenis'),
            'dbh' => $this->request->getVar('editdbh'),
            'tinggi' => $this->request->getVar('edittinggi'),
            'lbds' => $this->request->getVar('editlbds'),
            'volume' => $this->request->getVar('editvolume'),
            'fungsi' => $this->request->getVar('editfungsi'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/ukur-pu');
    }

    public function savenonkayu()
    {
        if (!$this->validate([
            'kode1' => [
                'rules' => 'required|is_unique[inventarisasi_umt_ukurnonkayu.kode_pohon]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'no1' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',
                ]
            ],
            'kodepu1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'jenis1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'dbh1' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'tinggi1' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'lbds1' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'volume1' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',

                ]
            ],
            'fungsi1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/ukur-pu')->withInput()->with('validation2', $validation2);
        }

        $this->UkurNonKayuModel->save([
            'kode_pohon' => $this->request->getVar('kode1'),
            'no_pohon' => $this->request->getVar('no1'),
            'kode_inven_pu' => $this->request->getVar('kodepu1'),
            'jenis_pohon' => $this->request->getVar('jenis1'),
            'dbh' => $this->request->getVar('dbh1'),
            'tinggi' => $this->request->getVar('tinggi1'),
            'lbds' => $this->request->getVar('lbds1'),
            'volume' => $this->request->getVar('volume1'),
            'fungsi' => $this->request->getVar('fungsi1'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/ukur-pu');
    }

    public function deletenonkayu($id)
    {
        $this->UkurNonKayuModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/ukur-pu');
    }

    public function editnonkayu($id)
    {


        $this->UkurNonKayuModel->save([
            'id' => $id,
            'kode_pohon' => $this->request->getVar('editkode1'),
            'no_pohon' => $this->request->getVar('editno1'),
            'kode_inven_pu' => $this->request->getVar('editkodepu1'),
            'jenis_pohon' => $this->request->getVar('editjenis1'),
            'dbh' => $this->request->getVar('editdbh1'),
            'tinggi' => $this->request->getVar('edittinggi1'),
            'lbds' => $this->request->getVar('editlbds1'),
            'volume' => $this->request->getVar('editvolume1'),
            'fungsi' => $this->request->getVar('editfungsi1'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/ukur-pu');
    }
}
