<?php

namespace App\Models;

use CodeIgniter\Model;

class TanamanCupetModel extends Model
{
    protected $table      = 'umt_cupet_tnm';

    public function getTanamanCupet($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_cupet_tnm', 'kode_cucu_petak', 'tgl_tnm', 'jenis_ilmiah', 'jenis_lokal', 'jarak_tnm_x', 'jarak_tnm_y'
    ];
}
