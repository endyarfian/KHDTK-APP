<?php

namespace App\Models;

use CodeIgniter\Model;

class AnakPetakModel extends Model
{
    protected $table      = 'umt_anakpetak';

    public function getAnakPetak($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_anak_petak', 'master_anak_petak', 'anak_petak', 'kode_umt', 'luas', 'luas_ht'
    ];
}
