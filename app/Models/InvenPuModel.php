<?php

namespace App\Models;

use CodeIgniter\Model;

class InvenPuModel extends Model
{
    protected $table      = 'inventarisasi_pu';

    public function getInvenPu($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_inven_umt', 'kode_inven_pu', 'tanggal', 'pj', 'luas_pu', 'bentuk_pu', 'koordinat_x', 'koordinat_y', 'ndvi', 'msavi', 'c', 'd', 'n', 'jenis_tanah', 'kelerengan', 'altitude'
    ];
}
