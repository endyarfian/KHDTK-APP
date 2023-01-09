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
            'no' => [
                'rules' => 'required|decimal|is_unique[inventarisasi_umt_ukurkayu.no_pohon]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',
                    'is_unique' => 'Data sudah ada di database.'
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
            'no_pohon' => $this->request->getVar('no'),
            'kode_inven_pu' => $this->request->getVar('kodepu'),
            'jenis_pohon' => $this->request->getVar('jenis'),
            'dbh' => $this->request->getVar('dbh'),
            'tinggi' => $this->request->getVar('tinggi'),
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
            'no_pohon' => $this->request->getVar('editno'),
            'kode_inven_pu' => $this->request->getVar('editkodepu'),
            'jenis_pohon' => $this->request->getVar('editjenis'),
            'dbh' => $this->request->getVar('editdbh'),
            'tinggi' => $this->request->getVar('edittinggi'),
            'fungsi' => $this->request->getVar('editfungsi'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/ukur-pu');
    }

    public function savenonkayu()
    {
        if (!$this->validate([
            'no1' => [
                'rules' => 'required|decimal|is_unique[inventarisasi_umt_ukurnonkayu.no_pohon]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka',
                    'is_unique' => 'Data sudah ada di database.'
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
            'no_pohon' => $this->request->getVar('no1'),
            'kode_inven_pu' => $this->request->getVar('kodepu1'),
            'jenis_pohon' => $this->request->getVar('jenis1'),
            'dbh' => $this->request->getVar('dbh1'),
            'tinggi' => $this->request->getVar('tinggi1'),
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
            'no_pohon' => $this->request->getVar('editno1'),
            'kode_inven_pu' => $this->request->getVar('editkodepu1'),
            'jenis_pohon' => $this->request->getVar('editjenis1'),
            'dbh' => $this->request->getVar('editdbh1'),
            'tinggi' => $this->request->getVar('edittinggi1'),
            'fungsi' => $this->request->getVar('editfungsi1'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/ukur-pu');
    }
}
