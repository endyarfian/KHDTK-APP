<?php

namespace App\Models;

use CodeIgniter\Model;

class CucuPetakModel extends Model
{
    protected $table      = 'umt_cucupetak';

    public function getCucuPetak($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_anak_petak', 'kode_cucu_petak', 'kode_zonasi_lmu', 'luas', 'koordinat_x', 'koordinat_y'
    ];
}
