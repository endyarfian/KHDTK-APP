<?php

namespace App\Models;

use CodeIgniter\Model;

class RenstraTargetModel extends Model
{
    protected $table      = 'renstratarget';

    public function getLmu($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_renstra_target',
        'kode_renstra_tujuan',
        'sasaran',
        'satuan',
        'volume',
        'deskripsi' 
    ];
}
