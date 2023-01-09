<?php

namespace App\Models;

use CodeIgniter\Model;

class UmtModel extends Model
{
    protected $table      = 'umt';

    public function getUmt($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_penataan_kawasan',
        'kode_umt',
        'tipe_umt',
        'umt',
        'tanggal_berlaku'
    ];
}
