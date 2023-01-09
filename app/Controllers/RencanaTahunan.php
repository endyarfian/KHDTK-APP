<?php

namespace App\Controllers;

use \App\Models\RencanaTahunanModel;
use \App\Models\RTTujuanModel;
use \App\Models\RTTargetModel;
use \App\Models\RenstraModel;
use \App\Models\RenstraTujuanModel;
use \App\Models\RenstraTargetModel;
use \App\Models\RTKegiatanModel;

class RencanaTahunan extends BaseController
{
    protected $rencanatahunan;
    public function __construct()
    {
        $this->RencanaTahunanModel = new RencanaTahunanModel();
        $this->RTTujuanModel = new RTTujuanModel();
        $this->RTTargetModel = new RTTargetModel();
        $this->RenstraModel = new RenstraModel();
        $this->RenstraTujuanModel = new RenstraTujuanModel();
        $this->RenstraTargetModel = new RenstraTargetModel();
        $this->RTKegiatanModel = new RTKegiatanModel();
    }

    public function rencana_tahunan()
    {

        $rt = $this->RencanaTahunanModel->findAll();
        $rttujuan = $this->RTTujuanModel->findAll();
        $rttarget = $this->RTTargetModel->findAll();
        $renstra = $this->RenstraModel->findAll();
        $renstratujuan = $this->RenstraTujuanModel->findAll();
        $renstratarget = $this->RenstraTargetModel->findAll();
        $rtk = $this->RTKegiatanModel->findAll();
        $data = [
            'rt' => $rt,
            'rttujuan' => $rttujuan,
            'rttarget' => $rttarget,
            'renstra' => $renstra,
            'renstratujuan' => $renstratujuan,
            'renstratarget' => $renstratarget,
            'rtk' => $rtk,
            'title' => 'KHDTK APPS - Rencana Tahunan',
            'validation1' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('database/rencana_tahunan', $data);
    }

    public function savert()
    {
        if (!$this->validate([
            'koderenstra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'kodert' => [
                'rules' => 'required|is_unique[rencanatahunan.kode_rencana_tahunan]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'skrt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'mulairt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'akhirrt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'sahrt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'pengesahrt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Dataharus diisi.',
                ]
            ],
            'desrt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation1 = $this->validator->getErrors();
            return redirect()->to('database/rencana-tahunan')->withInput()->with('validation1', $validation1);
        }
        $this->RencanaTahunanModel->save([
            'kode_renstra' => $this->request->getVar('koderenstra'),
            'kode_rencana_tahunan' => $this->request->getVar('kodert'),
            'no_sk_rencana_tahunan' => $this->request->getVar('skrt'),
            'tanggal_berlaku' => $this->request->getVar('mulairt'),
            'tanggal_berakhir' => $this->request->getVar('akhirrt'),
            'disahkan_tanggal' => $this->request->getVar('sahrt'),
            'pengesah' => $this->request->getVar('pengesahrt'),
            'deskripsi' => $this->request->getVar('desrt'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function deletert($id)
    {
        $this->RencanaTahunanModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function editrt($id)
    {

        $this->RencanaTahunanModel->save([
            'id' => $id,
            'kode_renstra' => $this->request->getVar('editkoderenstra'),
            'kode_rencana_tahunan' => $this->request->getVar('editkodert'),
            'no_sk_rencana_tahunan' => $this->request->getVar('editskrt'),
            'tanggal_berlaku' => $this->request->getVar('editmulairt'),
            'tanggal_berakhir' => $this->request->getVar('editakhirrt'),
            'disahkan_tanggal' => $this->request->getVar('editsahrt'),
            'pengesah' => $this->request->getVar('editpengesahrt'),
            'deskripsi' => $this->request->getVar('editdesrt'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/rencana-tahunan');
    }

    public function saverttujuan()
    {
        if (!$this->validate([
            'kodert1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'koderenstratu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'koderttujuan' => [
                'rules' => 'required|is_unique[rttahunantujuan.kode_rencana_tahunan_tujuan]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'tujuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'desrttujuan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation1 = $this->validator->getErrors();
            return redirect()->to('database/rencana-tahunan')->withInput()->with('validation1', $validation1);
        }

        $this->RTTujuanModel->save([
            'kode_rencana_tahunan' => $this->request->getVar('kodert1'),
            'kode_renstra_tujuan' => $this->request->getVar('koderenstratu'),
            'kode_rencana_tahunan_tujuan' => $this->request->getVar('koderttujuan'),
            'tujuan' => $this->request->getVar('tujuan'),
            'deskripsi' => $this->request->getVar('desrttujuan'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function deleterttujuan($id)
    {
        $this->RTTujuanModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function editrttujuan($id)
    {

        $this->RTTujuanModel->save([
            'id' => $id,
            'kode_rencana_tahunan' => $this->request->getVar('editkodert1'),
            'kode_renstra_tujuan' => $this->request->getVar('editkoderenstratu'),
            'kode_rencana_tahunan_tujuan' => $this->request->getVar('editkoderttujuan'),
            'tujuan' => $this->request->getVar('edittujuan'),
            'deskripsi' => $this->request->getVar('editdesrttujuan'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function saverttarget()
    {
        if (!$this->validate([
            'koderttarget' => [
                'rules' => 'required|is_unique[rttahunantarget.kode_rencana_tahunan_target]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data ada di database.'
                ]
            ],
            'koderenstrata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'koderttujuan1' => [
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
                    'required' => 'Data diisi.',
                    'decimal' => 'Data harus berupa angka.',
                ]
            ],
            'desrttarget' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation1 = $this->validator->getErrors();
            return redirect()->to('database/rencana-tahunan')->withInput()->with('validation1', $validation1);
        }
        $this->RTTargetModel->save([
            'kode_rencana_tahunan_target' => $this->request->getVar('koderttarget'),
            'kode_renstra_target' => $this->request->getVar('koderenstrata'),
            'kode_rencana_tahunan_tujuan' => $this->request->getVar('koderttujuan1'),
            'sasaran' => $this->request->getVar('sasaran'),
            'satuan' => $this->request->getVar('satuan'),
            'volume' => $this->request->getVar('volume'),
            'deskripsi' => $this->request->getVar('desrttarget'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function deleterttarget($id)
    {
        $this->RTTargetModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function editrttarget($id)
    {

        $this->RTTargetModel->save([
            'id' => $id,
            'kode_rencana_tahunan_target' => $this->request->getVar('editkoderttarget'),
            'kode_renstra_target' => $this->request->getVar('editkoderenstrata'),
            'kode_rencana_tahunan_tujuan' => $this->request->getVar('editkoderttujuan1'),
            'sasaran' => $this->request->getVar('editsasaran'),
            'satuan' => $this->request->getVar('editsatuan'),
            'volume' => $this->request->getVar('editvolume'),
            'deskripsi' => $this->request->getVar('editdesrttarget'),
        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function savertk()
    {
        if (!$this->validate([
            'koderttarget1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.'
                ]
            ],
            'kodertk' => [
                'rules' => 'required|is_unique[rttahunankegiatan.Kode_Rencana_Tahunan_Kegiatan]',
                'errors' => [
                    'required' => 'Data harus diisi.',
                    'is_unique' => 'Data sudah ada di database.'
                ]
            ],
            'kegiatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
            'desrtk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Data harus diisi.',
                ]
            ],
        ])) {
            $validation1 = $this->validator->getErrors();
            return redirect()->to('database/rencana-tahunan')->withInput()->with('validation1', $validation1);
        }
        $this->RTKegiatanModel->save([
            'kode_rencana_tahunan_target' => $this->request->getVar('koderttarget1'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('kodertk'),
            'kegiatan' => $this->request->getVar('kegiatan'),
            'deskripsi' => $this->request->getVar('desrtk'),

        ]);
        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data Berhasil Ditambahkan.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function deletertk($id)
    {
        $this->RTKegiatanModel->delete($id);
        session()->setFlashdata(['info' => 'error', 'judul' => 'SAYANG SEKALI 😞', 'pesan' => 'Data sudah terhapus.']);
        return redirect()->to('database/rencana-tahunan');
    }

    public function editrtk($id)
    {

        $this->RTKegiatanModel->save([
            'id' => $id,
            'kode_rencana_tahunan_target' => $this->request->getVar('editkoderttarget1'),
            'kode_rencana_tahunan_kegiatan' => $this->request->getVar('editkodertk'),
            'kegiatan' => $this->request->getVar('editkegiatan'),
            'deskripsi' => $this->request->getVar('editdesrtk'),
        ]);

        session()->setFlashdata(['info' => 'success', 'judul' => 'MANTAPPP!👍', 'pesan' => 'Data berhasil diperbarui.']);

        return redirect()->to('database/rencana-tahunan');
    }
}
