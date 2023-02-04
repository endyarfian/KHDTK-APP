<?php

namespace App\Models;

use CodeIgniter\Model;

class HwdAnakPetakModel extends Model
{
    protected $table      = 'desahwdanakpetak';

    public function getHwdCupet($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_hwd_anakpetak', 'kode_hwd', 'kode_anak_petak'
    ];
}
