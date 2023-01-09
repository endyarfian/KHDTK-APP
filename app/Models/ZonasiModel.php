<?php

namespace App\Models;

use CodeIgniter\Model;

class ZonasiModel extends Model
{
    protected $table      = 'zonasi';

    public function getZonasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_penataan_kawasan',
        'kode_zonasi',
        'zonasi',
        'sk',
        'deskripsi',
        'land_use'
    ];
}
