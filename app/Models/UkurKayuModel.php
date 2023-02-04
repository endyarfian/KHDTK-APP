<?php

namespace App\Models;

use CodeIgniter\Model;

class UkurKayuModel extends Model
{
    protected $table      = 'inventarisasi_umt_ukurkayu';

    public function getUkurKayu($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_pohon', 'no_pohon', 'kode_inven_pu', 'jenis_pohon', 'dbh', 'tinggi', 'lbds', 'volume', 'fungsi'
    ];
}
