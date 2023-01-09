<?php

namespace App\Models;

use CodeIgniter\Model;

class UkurNonKayuModel extends Model
{
    protected $table      = 'inventarisasi_umt_ukurnonkayu';

    public function getAnakPetak($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'no_pohon', 'kode_inven_pu', 'jenis_pohon', 'dbh', 'tinggi', 'fungsi'
    ];
}
