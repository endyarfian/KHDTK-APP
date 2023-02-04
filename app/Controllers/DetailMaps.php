<?php

namespace App\Controllers;

class DetailMaps extends BaseController
{

    public function index($id)
    {
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
        };

        $db = \Config\Database::connect();
        $data = $db->table('umt_anakpetak');
        $data->select('umt_anakpetak.kode_anak_petak as anakpetak,anak_petak, umt_anakpetak.luas as luasanakpetak, 
        luas_ht, umt_cucupetak.kode_cucu_petak as cupet, umt_cupet_tnm.kode_cupet_tnm as cupettnm, 
        jenis_lokal, inventarisasi_umt.kode_inven_umt as invenumt, inventarisasi_pu.kode_inven_pu as kodeinvenpu, 
        ndvi, msavi,jumlah_pohon,dbh_rata, tinggi_rata, lbds, volume, c, d, n');
        $data->join('umt_cucupetak', 'umt_cucupetak.kode_anak_petak = umt_anakpetak.kode_anak_petak');
        $data->join('umt_cupet_tnm', 'umt_cupet_tnm.kode_cucu_petak = umt_cucupetak.kode_cucu_petak');
        $data->join('inventarisasi_umt', 'inventarisasi_umt.kode_cupet_tnm  = umt_cupet_tnm.kode_cupet_tnm');
        $data->join('inventarisasi_pu', 'inventarisasi_pu.kode_inven_umt  = inventarisasi_umt.kode_inven_umt');
        $data->join('inventarisasi_umt_ukurkayu', 'inventarisasi_umt_ukurkayu.kode_inven_pu  = inventarisasi_pu.kode_inven_pu');
        $data->where('umt_anakpetak.id', $id);
        $query = $data->get();

        $data1 = $query->getResultArray();
        $data2 = $query->getRowArray();
        $data3 = $query->getResult();

        $jumlahpu = count($data1);

        $db1 = \Config\Database::connect();
        $chart = $db1->table('umt_anakpetak');
        $chart->select('umt_anakpetak.kode_anak_petak as anakpetak, jagung, jalan, jati, jati_campur_semak, jpp, mahoni, makam, permukiman, sawah, semak, sungai, tebu');
        $chart->join('pl_detail', 'pl_detail.kode_anak_petak = umt_anakpetak.kode_anak_petak');
        $chart->where('umt_anakpetak.id', $id);
        $chartquery = $chart->get();

        $chart1 = $chartquery->getRowArray();

        $db2 = \Config\Database::connect();
        $pie = $db2->table('umt_anakpetak');
        $pie->select('umt_anakpetak.kode_anak_petak as anakpetak, apl, persen_apl, ht, persen_ht, jalan, persen_jln, permukiman, persen_pmk, pertanian_lk, persen_plk, sawah, persen_sawah, semak, persen_semak, sungai, persen_sungai');
        $pie->join('pl', 'pl.kode_anak_petak = umt_anakpetak.kode_anak_petak');
        $pie->where('umt_anakpetak.id', $id);
        $piequery = $pie->get();

        $pie1 = $piequery->getRowArray();

        // dd($data1);
        // dd($data2);
        // dd($data3);
        // dd($data1);
        // dd($jumlahpu);
        // dd($b);
        // dd($chart1);

        $data = [
            'id' => $id,
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'jumlahpu' => $jumlahpu,
            'anakpetak' => $features,
            'chart' => $chart1,
            'pie' => $pie1,
            'title' => 'KHDTK APPS - WEB GIS Detail',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('apps/maps_detail', $data);
    }
}
