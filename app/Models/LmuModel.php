<?php

namespace App\Models;

use CodeIgniter\Model;

class LmuModel extends Model
{
    protected $table      = 'lmu';

    public function getLmu($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_penataan_kawasan',
        'kode_lmu',
        'lmu',
        'sk',
        'deskripsi',
        'altitude',
        'slope',
        'jenis_tanah',
        'pl'
    ];
}
