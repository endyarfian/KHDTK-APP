<?php

namespace App\Models;

use CodeIgniter\Model;

class PlAnakPetakModel extends Model
{
    protected $table      = 'pl_anakpetak';

    public function getAnakPetak($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_pl_anakpetak', 'kode_anak_petak', 'pl', 'luas', 'persentase'
    ];
}
