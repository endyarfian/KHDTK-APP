<?php

namespace App\Models;

use CodeIgniter\Model;

class RencanaTahunanModel extends Model
{
    protected $table      = 'rencanatahunan';

    public function getZonasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_renstra',
        'kode_rencana_tahunan',
        'no_sk_rencana_tahunan',
        'tanggal_berlaku',
        'tanggal_berakhir',
        'disahkan_tanggal',
        'pengesah',
        'deskripsi'

    ];
}
