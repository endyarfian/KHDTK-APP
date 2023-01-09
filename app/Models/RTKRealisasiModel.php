<?php

namespace App\Models;

use CodeIgniter\Model;

class RTKRealisasiModel extends Model
{
    protected $table      = 'rttahunankegrealisasi';

    public function getRTKRealisasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_rencana_tahunan_realisasi', 'kode_rencana_tahunan_alokasi', 'tanggal_laporan', 'satuan', 'volume', 'deskripsi', 'pj'
    ];
}
