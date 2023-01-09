<?php

namespace App\Models;

use CodeIgniter\Model;

class DesaHwdModel extends Model
{
    protected $table      = 'desahwd';

    public function getDesaHwd($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_desa', 'kode_hwd', 'sk', 'tanggal_berlaku', 'kode_lemdes'
    ];
}
