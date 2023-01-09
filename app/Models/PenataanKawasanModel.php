<?php

namespace App\Models;

use CodeIgniter\Model;

class PenataanKawasanModel extends Model
{
    protected $table      = 'penataankawasan';

    public function getPenataanKawasan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_penataan_kawasan',
        'no_sk',
        'tanggal_berlaku',
        'kode_rencana_tahunan_kegiatan'
    ];
}
