<?php

namespace App\Models;

use CodeIgniter\Model;

class InvenUmtModel extends Model
{
    protected $table      = 'inventarisasi_umt';

    public function getInvenUmt($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_inven_umt', 'kode_inventarisasi', 'kode_anakpetak_tnm', 'tanggal', 'pj'
    ];
}
