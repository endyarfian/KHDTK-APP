<?php

namespace App\Models;

use CodeIgniter\Model;

class RTKegiatanModel extends Model
{
    protected $table      = 'rttahunankegiatan';

    public function getRTKegiatan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_rencana_tahunan_target', 'kode_rencana_tahunan_kegiatan', 'kegiatan', 'deskripsi'
    ];
}
