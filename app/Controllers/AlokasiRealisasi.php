<?php

namespace App\Controllers;

use \App\Models\RTKAlokasiModel;
use \App\Models\RTKRealisasiModel;
use \App\Models\AnakPetakModel;
use \App\Models\DesaHwdModel;
use \App\Models\RTKegiatanModel;

class AlokasiRealisasi extends BaseController
{
    protected $alokasirealisasi;
    public function __construct()
    {
        $this->RTKAlokasiModel = new RTKAlokasiModel();
        $this->RTKRealisasiModel = new RTKRealisasiModel();
        $this->AnakPetakModel = new AnakPetakModel();
        $this->DesaHwdModel = new DesaHwdModel();
        $this->RTKegiatanModel = new RTKegiatanModel();
    }

    public function alokasi_realisasi()
    {

        $rtka = $this->RTKAlokasiModel->findAll();
        $rtkr = $this->RTKRealisasiModel->findAll();
        $anakpetak = $this->AnakPetakModel->findAll();
        $hwd = $this->DesaHwdModel->findAll();
        $rtk = $this->RTKegiatanModel->findAll();
        $data = [
            'rtka' => $rtka,
            'rtkr' => $rtkr,
            'anakpetak' => $anakpetak,
            'hwd' => $hwd,
            'rtk' => $rtk,
            'title' => 'KHDTK APPS - Alokasi dan Realisasi',
            'validation' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/alokasi_realisasi', $data);
    }

    public function savertka()
    {
        if (!$this->validate([
            'kodertka' => [
                'rules' => 'required|is_unique[rttahunankegalokasi.kode_rencana_tahunan_alokasi]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodertk' => [
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
            'kodeanakpetak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'kodehwd' => [
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
            'des' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'pj' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->to('database/alokasi-realisasi')->withInput()->with('validation', $validation);
        }
        $this->RTKAlokasiModel->save([
            'kode_rencana_tahunan_alokasi' => $this->request->getVar('kodertka'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('kodertk'),
            'tanggal_berlaku' => $this->request->getVar('berlaku'),
            'tanggal_berakhir' => $this->request->getVar('berakhir'),
            'kode_anak_petak' => $this->request->getVar('kodeanakpetak'),
            'kode_hwd' => $this->request->getVar('kodehwd'),
            'satuan' => $this->request->getVar('satuan'),
            'volume' => $this->request->getVar('volume'),
            'deskripsi' => $this->request->getVar('des'),
            'pj' => $this->request->getVar('pj'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/alokasi-realisasi');
    }

    public function deletertka($id)
    {
        $this->RTKAlokasiModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/alokasi-realisasi');
    }

    public function editrtka($id)
    {

        $this->RTKAlokasiModel->save([
            'id' => $id,
            'kode_rencana_tahunan_alokasi' => $this->request->getVar('editkodertka'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('editkodertk'),
            'tanggal_berlaku' => $this->request->getVar('editberlaku'),
            'tanggal_berakhir' => $this->request->getVar('editberakhir'),
            'kode_anak_petak' => $this->request->getVar('editkodeanakpetak'),
            'kode_hwd' => $this->request->getVar('editkodehwd'),
            'satuan' => $this->request->getVar('editsatuan'),
            'volume' => $this->request->getVar('editvolume'),
            'deskripsi' => $this->request->getVar('editdes'),
            'pj' => $this->request->getVar('editpj'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/alokasi-realisasi');
    }

    public function savertkr()
    {
        if (!$this->validate([

            'kodertkr' => [
                'rules' => 'required|is_unique[rttahunankegrealisasi.kode_rencana_tahunan_realisasi]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kodertka1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'laporan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],

            'satuan1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'volume1' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'des1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'pj1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],

        ])) {
            $validation = $this->validator->getErrors();
            return redirect()->to('database/alokasi-realisasi')->withInput()->with('validation', $validation);
        }

        $this->RTKRealisasiModel->save([
            'kode_rencana_tahunan_realisasi' => $this->request->getVar('kodertkr'),
            'kode_rencana_tahunan_alokasi' => $this->request->getVar('kodertka1'),
            'tanggal_laporan' => $this->request->getVar('laporan'),
            'satuan' => $this->request->getVar('satuan1'),
            'volume' => $this->request->getVar('volume1'),
            'deskripsi' => $this->request->getVar('des1'),
            'pj' => $this->request->getVar('pj1'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/alokasi-realisasi');
    }

    public function deletertkr($id)
    {
        $this->RTKRealisasiModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/alokasi-realisasi');
    }

    public function editrtkr($id)
    {

        $this->RTKRealisasiModel->save([
            'id' => $id,
            'kode_rencana_tahunan_realisasi' => $this->request->getVar('editkodertkr'),
            'kode_rencana_tahunan_alokasi' => $this->request->getVar('editkodertka1'),
            'tanggal_laporan' => $this->request->getVar('editlaporan'),
            'satuan' => $this->request->getVar('editsatuan1'),
            'volume' => $this->request->getVar('editvolume1'),
            'deskripsi' => $this->request->getVar('editdes1'),
            'pj' => $this->request->getVar('editpj1'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/alokasi-realisasi');
    }
}
