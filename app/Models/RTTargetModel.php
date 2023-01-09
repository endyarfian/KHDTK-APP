<?php

namespace App\Models;

use CodeIgniter\Model;

class RTTargetModel extends Model
{
    protected $table      = 'rttahunantarget';

    public function getZonasi($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    protected $allowedFields = [
        'kode_rencana_tahunan_target',
        'kode_renstra_target',
        'kode_rencana_tahunan_tujuan',
        'sasaran',
        'satuan',
        'volume',
        'deskripsi'
    ];
}
