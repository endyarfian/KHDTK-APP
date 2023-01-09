<?php

namespace App\Models;

use CodeIgniter\Model;

class RTTujuanModel extends Model
{
    protected $table      = 'rttahunantujuan';

    public function getZonasiLmu($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_rencana_tahunan', 'kode_renstra_tujuan', 'kode_rencana_tahunan_tujuan', 'tujuan', 'deskripsi'
    ];
}
