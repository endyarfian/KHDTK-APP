<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index($id)
    {

        //misal jumlah data umt_anakpetak = 1
        // umt_cucupetak = 2

        $db = \Config\Database::connect();
        $data = $db->table('umt_anakpetak', 'umt_cucupetak');
        $data->select('umt_anakpetak.kode_anak_petak as anakpetak, umt_cucupetak.kode_cucu_petak as cupet, umt_cupet_tnm.kode_cupet_tnm as cupettnm, inventarisasi_umt.kode_inven_umt as invenumt, inventarisasi_pu.kode_inven_pu as kodeinvenpu, luas_pu, bentuk_pu, ndvi, msavi, kelerengan, altitude
        ,no_pohon, inventarisasi_umt_ukurkayu.kode_inven_pu as invenpu, jenis_pohon, dbh, tinggi, fungsi ');
        $data->join('umt_cucupetak', 'umt_cucupetak.kode_anak_petak = umt_anakpetak.kode_anak_petak', 'outer right');
        $data->join('umt_cupet_tnm', 'umt_cupet_tnm.kode_cucu_petak = umt_cucupetak.kode_cucu_petak', 'outer right');
        $data->join('inventarisasi_umt', 'inventarisasi_umt.kode_cupet_tnm  = umt_cupet_tnm.kode_cupet_tnm', 'outer right');
        $data->join('inventarisasi_pu', 'inventarisasi_pu.kode_inven_umt  = inventarisasi_umt.kode_inven_umt', 'outer right');
        $data->join('inventarisasi_umt_ukurkayu', 'inventarisasi_umt_ukurkayu.kode_inven_pu  = inventarisasi_pu.kode_inven_pu', 'outer right');
        $data->where('umt_anakpetak.id', $id);
        $query = $data->get();

        $model = $query->getResultArray();

        dd($model);
    }
}
