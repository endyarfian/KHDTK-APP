<?php

namespace App\Models;

use CodeIgniter\Model;

class AndilModel extends Model
{
    protected $table      = 'andil';

    public function getAndil($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'andil',
        'kode_anak_petak',
        'nik_pesanggem',
        'nama_pesanggem',
        'desa',
        'dusun',
        'rw',
        'rt',
        'kode_hwd',
        'sk_berlaku',
        'sk_berakhir',
        'kode_lemdes'
    ];
}
