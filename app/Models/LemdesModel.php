<?php

namespace App\Models;

use CodeIgniter\Model;

class LemdesModel extends Model
{
    protected $table      = 'lembagadesa';

    public function getLemdes($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_lemdes', 'kode_desa', 'nama', 'jenis', 'alamat', 'telp', 'email', 'sk', 'tanggal_berlaku', 'tanggal_berakhir'
    ];
}
