<?php

namespace App\Controllers;

use \App\Models\PenataanKawasanModel;
use \App\Models\UmtModel;
use \App\Models\ZonasiModel;
use \App\Models\LmuModel;
use \App\Models\ZonasiLmuModel;
use \App\Models\RTKegiatanModel;

class OrganisasiKawasan extends BaseController
{
    protected $organisasikawasan;
    public function __construct()
    {
        $this->PenataanKawasanModel = new PenataanKawasanModel();
        $this->UmtModel = new UmtModel();
        $this->ZonasiModel = new ZonasiModel();
        $this->LmuModel = new LmuModel();
        $this->ZonasiLmuModel = new ZonasiLmuModel();
        $this->RTKegiatanModel = new RTKegiatanModel();
    }
    public function organisasi_kawasan()
    {

        $penataankawasan = $this->PenataanKawasanModel->getPenataanKawasan();
        $umt = $this->UmtModel->findAll();
        $lmu = $this->LmuModel->findAll();
        $zonasi = $this->ZonasiModel->findAll();
        $zonasilmu = $this->ZonasiLmuModel->findAll();
        $rtk = $this->RTKegiatanModel->findAll();
        $data = [
            'penataankawasan' => $penataankawasan,
            'umt' => $umt,
            'lmu' => $lmu,
            'zonasi' => $zonasi,
            'zonasilmu' => $zonasilmu,
            'rtk' => $rtk,
            'title' => 'KHDTK APPS - Pengorganisasian & Penataan Kawasan',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/organisasi_kawasan', $data);
    }

    public function savepk()
    {
        if (!$this->validate([
            'kodepk' => [
                'rules' => 'required|is_unique[penataankawasan.kode_penataan_kawasan]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'skpk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'tglskpk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodert' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/organisasi-kawasan')->withInput()->with('validation2', $validation2);
        }
        $this->PenataanKawasanModel->save([
            'kode_penataan_kawasan' => $this->request->getVar('kodepk'),
            'no_sk' => $this->request->getVar('skpk'),
            'tanggal_berlaku' => $this->request->getVar('tglskpk'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('kodert'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function deletepk($id)
    {
        $this->PenataanKawasanModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function editpk($id)
    {

        $this->PenataanKawasanModel->save([
            'id' => $id,
            'kode_penataan_kawasan' => $this->request->getVar('editkodepk'),
            'no_sk' => $this->request->getVar('editskpk'),
            'tanggal_berlaku' => $this->request->getVar('edittglskpk'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('editkodert'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/organisasi-kawasan');
    }

    public function saveumt()
    {
        if (!$this->validate([
            'kodepkumt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'kodeumt' => [
                'rules' => 'required|is_unique[umt.kode_umt]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'tipeumt' => [
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
            'tglumt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/organisasi-kawasan')->withInput()->with('validation2', $validation2);
        }

        $this->UmtModel->save([
            'kode_penataan_kawasan' => $this->request->getVar('kodepkumt'),
            'kode_umt' => $this->request->getVar('kodeumt'),
            'tipe_umt' => $this->request->getVar('tipeumt'),
            'umt' => $this->request->getVar('umt'),
            'tanggal_berlaku' => $this->request->getVar('tglumt'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function deleteumt($id)
    {
        $this->UmtModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function editumt($id)
    {


        $this->UmtModel->save([
            'id' => $id,
            'kode_penataan_kawasan' => $this->request->getVar('kodepkumt'),
            'kode_umt' => $this->request->getVar('kodeumt'),
            'tipe_umt' => $this->request->getVar('tipeumt'),
            'umt' => $this->request->getVar('umt'),
            'tanggal_berlaku' => $this->request->getVar('tglumt'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function savezonasi()
    {
        if (!$this->validate([
            'kodepkzonasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'kodezonasi' => [
                'rules' => 'required|is_unique[zonasi.kode_zonasi]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'zonasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'skzonasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'deszonasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'landuse' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/organisasi-kawasan')->withInput()->with('validation2', $validation2);
        }
        $this->ZonasiModel->save([
            'kode_penataan_kawasan' => $this->request->getVar('kodepkzonasi'),
            'kode_zonasi' => $this->request->getVar('kodezonasi'),
            'zonasi' => $this->request->getVar('zonasi'),
            'sk' => $this->request->getVar('skzonasi'),
            'deskripsi' => $this->request->getVar('deszonasi'),
            'land_use' => $this->request->getVar('landuse'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function deletezonasi($id)
    {
        $this->ZonasiModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function editzonasi($id)
    {

        $this->ZonasiModel->save([
            'id' => $id,
            'kode_penataan_kawasan' => $this->request->getVar('kodepkzonasi'),
            'kode_zonasi' => $this->request->getVar('kodezonasi'),
            'zonasi' => $this->request->getVar('zonasi'),
            'sk' => $this->request->getVar('skzonasi'),
            'deskripsi' => $this->request->getVar('deszonasi'),
            'land_use' => $this->request->getVar('landuse'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function savelmu()
    {
        if (!$this->validate([
            'kodepklmu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'kodelmu' => [
                'rules' => 'required|is_unique[lmu.kode_lmu]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'lmu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'sklmu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'deslmu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'altitude' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'slope' => [
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
            'pl' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/organisasi-kawasan')->withInput()->with('validation2', $validation2);
        }
        $this->LmuModel->save([
            'kode_penataan_kawasan' => $this->request->getVar('kodepklmu'),
            'kode_lmu' => $this->request->getVar('kodelmu'),
            'lmu' => $this->request->getVar('lmu'),
            'sk' => $this->request->getVar('sklmu'),
            'deskripsi' => $this->request->getVar('deslmu'),
            'altitude' => $this->request->getVar('altitude'),
            'slope' => $this->request->getVar('slope'),
            'jenis_tanah' => $this->request->getVar('jenistanah'),
            'pl' => $this->request->getVar('pl')
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function deletelmu($id)
    {
        $this->LmuModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function editlmu($id)
    {

        $this->LmuModel->save([
            'id' => $id,
            'kode_penataan_kawasan' => $this->request->getVar('kodepklmu'),
            'kode_lmu' => $this->request->getVar('kodelmu'),
            'lmu' => $this->request->getVar('lmu'),
            'sk' => $this->request->getVar('sklmu'),
            'deskripsi' => $this->request->getVar('deslmu'),
            'altitude' => $this->request->getVar('altitude'),
            'slope' => $this->request->getVar('slope'),
            'jenis_tanah' => $this->request->getVar('jenistanah'),
            'pl' => $this->request->getVar('pl')
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function savezonasilmu()
    {
        if (!$this->validate([
            'kodezonasilmu' => [
                'rules' => 'required|is_unique[zonasi_lmu.kode_zonasi_lmu]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodezonlmu-lmu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodezonlmu-zonasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'altitudezonasilmu' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
        ])) {
            $validation2 = $this->validator->getErrors();
            return redirect()->to('database/organisasi-kawasan')->withInput()->with('validation2', $validation2);
        }
        $this->ZonasiLmuModel->save([
            'kode_zonasi_lmu' => $this->request->getVar('kodezonasilmu'),
            'kode_lmu' => $this->request->getVar('kodezonlmu-lmu'),
            'kode_zonasi' => $this->request->getVar('kodezonlmu-zonasi'),
            'altitude' => $this->request->getVar('altitudezonasilmu')
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);

        return redirect()->to('database/organisasi-kawasan');
    }

    public function deletezonasilmu($id)
    {
        $this->ZonasiLmuModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/organisasi-kawasan');
    }

    public function editzonasilmu($id)
    {

        $this->ZonasiLmuModel->save([
            'id' => $id,
            'kode_zonasi_lmu' => $this->request->getVar('kodezonasilmu'),
            'kode_lmu' => $this->request->getVar('kodezonlmu-lmu'),
            'kode_zonasi' => $this->request->getVar('kodezonlmu-zonasi'),
            'altitude' => $this->request->getVar('altitudezonasilmu')
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/organisasi-kawasan');
    }
}
