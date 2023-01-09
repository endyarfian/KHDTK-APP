<?php

namespace App\Models;

use CodeIgniter\Model;

class InvenModel extends Model
{
    protected $table      = 'inventarisasi';

    public function getInven($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_inventarisasi', 'no_sk', 'tanggal_mulai', 'tanggal_selesai', 'pj', 'metode', 'is', 'bentuk_pu', 'luas_pu', 'kode_rencana_tahunan_kegiatan', 'deskripsi'
    ];
}
