<?php

namespace App\Models;

use CodeIgniter\Model;

class RTKAlokasiModel extends Model
{
    protected $table      = 'rttahunankegalokasi';

    public function getRTKAlokasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_rencana_tahunan_alokasi', 'kode_rencana_tahunan_kegiatan', 'tanggal_berlaku', 'tanggal_berakhir', 'kode_cucu_petak', 'kode_hwd', 'satuan', 'volume', 'deskripsi', 'pj'
    ];
}
