<?php

namespace App\Controllers;

use \App\Models\DesaModel;
use \App\Models\LemdesModel;

class SosekbudDesa extends BaseController
{
    protected $sosekbuddesa;
    public function __construct()
    {
        $this->DesaModel = new DesaModel();
        $this->LemdesModel = new LemdesModel();
    }

    public function sosekbud_desa()
    {

        $desa = $this->DesaModel->findAll();
        $lemdes = $this->LemdesModel->findAll();;
        $data = [
            'desa' => $desa,
            'lemdes' => $lemdes,
            'title' => 'KHDTK APPS - Potensi Sosial Ekonomi dan budaya Desa',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/sosekbud_desa', $data);
    }

    public function savedesa()
    {
        if (!$this->validate([
            'kodedesa' => [
                'rules' => 'required|is_unique[desa.kode_desa]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kab' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kec' => [
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
            'luas' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/sosekbud-desa')->withInput()->with('validation2', $validation2);
        }
        $this->DesaModel->save([
            'kode_desa' => $this->request->getVar('kodedesa'),
            'kab' => $this->request->getVar('kab'),
            'kec' => $this->request->getVar('kec'),
            'desa' => $this->request->getVar('desa'),
            'luas' => $this->request->getVar('luas'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/sosekbud-desa');
    }

    public function deletedesa($id)
    {
        $this->DesaModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/sosekbud-desa');
    }

    public function editdesa($id)
    {

        $this->DesaModel->save([
            'id' => $id,
            'kode_desa' => $this->request->getVar('editkodedesa'),
            'kab' => $this->request->getVar('editkab'),
            'kec' => $this->request->getVar('editkec'),
            'desa' => $this->request->getVar('editdesa'),
            'luas' => $this->request->getVar('editluas'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/sosekbud-desa');
    }

    public function savelemdes()
    {
        if (!$this->validate([

            'kodelemdes' => [
                'rules' => 'required|is_unique[lembagadesa.kode_lemdes]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodedesa1' => [
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
            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'tlp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'valid_email' => 'Masukkan format email yang benar.',
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
            'berakhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/sosekbud-desa')->withInput()->with('validation2', $validation2);
        }

        $this->LemdesModel->save([
            'kode_lemdes' => $this->request->getVar('kodelemdes'),
            'kode_desa' => $this->request->getVar('kodedesa1'),
            'nama' => $this->request->getVar('nama'),
            'jenis' => $this->request->getVar('jenis'),
            'alamat' => $this->request->getVar('alamat'),
            'telp' => $this->request->getVar('tlp'),
            'email' => $this->request->getVar('email'),
            'sk' => $this->request->getVar('sk'),
            'tanggal_berlaku' => $this->request->getVar('berlaku'),
            'tanggal_berakhir' => $this->request->getVar('berakhir'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/sosekbud-desa');
    }

    public function deletelemdes($id)
    {
        $this->LemdesModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/sosekbud-desa');
    }

    public function editlemdes($id)
    {


        $this->LemdesModel->save([
            'id' => $id,
            'kode_lemdes' => $this->request->getVar('editkodelemdes'),
            'kode_desa' => $this->request->getVar('editkodedesa1'),
            'nama' => $this->request->getVar('editnama'),
            'jenis' => $this->request->getVar('editjenis'),
            'alamat' => $this->request->getVar('editalamat'),
            'telp' => $this->request->getVar('edittlp'),
            'email' => $this->request->getVar('editemail'),
            'sk' => $this->request->getVar('editsk'),
            'tanggal_berlaku' => $this->request->getVar('editberlaku'),
            'tanggal_berakhir' => $this->request->getVar('editberakhir'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/sosekbud-desa');
    }
}
