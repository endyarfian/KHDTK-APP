<?php

namespace App\Models;

use CodeIgniter\Model;

class HwdCupetModel extends Model
{
    protected $table      = 'desahwdcupet';

    public function getHwdCupet($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_hwd_cupet', 'kode_hwd', 'kode_cucu_petak'
    ];
}
