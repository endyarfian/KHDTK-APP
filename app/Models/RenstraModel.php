<?php

namespace App\Models;

use CodeIgniter\Model;

class RenstraModel extends Model
{
    protected $table      = 'renstra';

    public function getRenstra($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_renstra',
        'sk_renstra',
        'mulai',
        'berakhir',
        'tanggal_pengesahan',
        'pengesah',
        'deskripsi',
    ];
}
