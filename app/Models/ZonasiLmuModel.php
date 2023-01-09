<?php

namespace App\Models;

use CodeIgniter\Model;

class ZonasiLmuModel extends Model
{
    protected $table      = 'zonasi_lmu';

    public function getZonasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_zonasi_lmu',
        'kode_lmu',
        'kode_zonasi',
        'altitude'
    ];
}
