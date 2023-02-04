<?php

namespace App\Models;

use CodeIgniter\Model;

class TanamanAnakPetakModel extends Model
{
    protected $table      = 'umt_anakpetak_tnm';

    public function getTanamanAnakPetak($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_anakpetak_tnm', 'kode_anak_petak', 'tgl_tnm', 'jenis_ilmiah', 'jenis_lokal', 'jarak_tnm_x', 'jarak_tnm_y'
    ];
}
