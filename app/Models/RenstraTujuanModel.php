<?php

namespace App\Models;

use CodeIgniter\Model;

class RenstraTujuanModel extends Model
{
    protected $table      = 'renstratujuan';

    public function getLmu($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_renstra',
        'kode_renstra_tujuan',
        'tujuan',
        'deskripsi'
    ];
}
