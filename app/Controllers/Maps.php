<?php

namespace App\Controllers;

class Maps extends BaseController
{
    public function index()
    {


        // $db = \Config\Database::connect();
        // $builder = $db->table('umt_anakpetak');
        // $builder->select('umt_anakpetak.kode_anak_petak as kodeanakpetak, umt_cucupetak.kode_cucu_petak as kodecupet, umt_cupet_tnm.kode_cupet_tnm as kodecupettnm, inventarisasi_umt.kode_inven_umt as kodeinvenumt, kode_inven_pu, luas_pu, bentuk_pu, ndvi, msavi, c, d, n, jenis_tanah, kelerengan, altitude');
        // $builder->join('umt_cucupetak', 'umt_cucupetak.kode_anak_petak = umt_anakpetak.kode_anak_petak');
        // $builder->join('umt_cupet_tnm', 'umt_cupet_tnm.kode_cucu_petak = umt_cucupetak.kode_cucu_petak');
        // $builder->join('inventarisasi_umt', 'inventarisasi_umt.kode_cupet_tnm  = umt_cupet_tnm.kode_cupet_tnm');
        // $builder->join('inventarisasi_pu', 'inventarisasi_pu.kode_inven_umt  = inventarisasi_umt.kode_inven_umt');
        // $query = $builder->get();

        // $model = $query->getResult();

        $model = new \App\Models\AnakPetakModel();

        $file = file_get_contents("./dashboard/plugins/leaflet/khdtknew.geojson");
        $file = json_decode($file);

        $features = $file->features;

        foreach ($features as $index => $feature) {
            $anakpetak = $feature->properties->KodeAnakPe;
            $data = $model->where('kode_anak_petak', $anakpetak)->first();

            if ($data) {
                $features[$index]->properties->kodeumt = $data['kode_umt'];
                $features[$index]->properties->id = $data['id'];
                $features[$index]->properties->luas = $data['luas'];
                $features[$index]->properties->luasht = $data['luas_ht'];
                // $features[$index]->properties->persentase = $data['persentase'];
            }
        }

        $data = [
            'anakpetak' => $features,
            'title' => 'KHDTK APPS - WEB GIS',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('apps/maps', $data);
    }
}
