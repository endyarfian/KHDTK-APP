<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {

        $db1 = \Config\Database::connect();
        $chart = $db1->table('pl_detail');
        $chart->select('apl, jpp, jati, jati_campur, mahoni, jagung, sawah, tebu, semak, sungai');
        $chartquery = $chart->get();

        $chart1 = $chartquery->getResult();

        $db2 = \Config\Database::connect();
        $pie = $db2->table('pl');
        $pie->select(' apl, persen_apl, ht, persen_ht, pertanian_lk, persen_plk, sawah, persen_sawah, semak, persen_semak, sungai, persen_sungai');
        $piequery = $pie->get();

        $pie1 = $piequery->getResult();

        $db3 = \Config\Database::connect();
        $umt = $db3->table('umt');
        $umt->select('*');
        $umtquery = $umt->get();
        $umtcount = $umtquery->getResultArray();
        $jumlahumt = count($umtcount);

        $db4 = \Config\Database::connect();
        $anakpetak = $db4->table('umt_anakpetak');
        $anakpetak->select('*');
        $anakpetakquery = $anakpetak->get();
        $anakpetakcount = $anakpetakquery->getResultArray();
        $jumlahanakpetak = count($anakpetakcount);

        // $db5 = \Config\Database::connect();
        // $cucupetak = $db5->table('umt_cucupetak');
        // $cucupetak->select('*');
        // $cucupetakquery = $cucupetak->get();
        // $cucupetakcount = $cucupetakquery->getResultArray();
        // $jumlahcucupetak = count($cucupetakcount);

        $desa = \Config\Database::connect();
        $desa = $desa->table('desa');
        $desa->select('*');
        $desaquery = $desa->get();
        $desacount = $desaquery->getResultArray();
        $jumlahdesa = count($desacount);

        $lemdes = \Config\Database::connect();
        $lemdes = $lemdes->table('lembagadesa');
        $lemdes->select('*');
        $lemdesquery = $lemdes->get();
        $lemdescount = $lemdesquery->getResultArray();
        $jumlahlemdes = count($lemdescount);

        $hwd = \Config\Database::connect();
        $hwd = $hwd->table('desahwd');
        $hwd->select('*');
        $hwdquery = $hwd->get();
        $hwdcount = $hwdquery->getResultArray();
        $jumlahhwd = count($hwdcount);

        $user = \Config\Database::connect();
        $user = $user->table('users');
        $user->select('*');
        $userquery = $user->get();
        $usercount = $userquery->getResultArray();
        $jumlahuser = count($usercount);

        $admin = \Config\Database::connect();
        $admin = $admin->table('users');
        $admin->select('role');
        $admin->where('users.role', 'admin');
        $adminquery = $admin->get();
        $admincount = $adminquery->getResultArray();
        $jumlahadmin = count($admincount);

        $active = \Config\Database::connect();
        $active = $active->table('users');
        $active->select('active');
        $active->where('users.active', '1');
        $activequery = $active->get();
        $activecount = $activequery->getResultArray();
        $jumlahactive = count($activecount);

        $renstra = \Config\Database::connect();
        $renstra = $renstra->table('renstra');
        $renstra->select('*');
        $renstraquery = $renstra->get();
        $renstracount = $renstraquery->getResultArray();
        $jumlahrenstra = count($renstracount);

        $renstratujuan = \Config\Database::connect();
        $renstratujuan = $renstratujuan->table('renstratujuan');
        $renstratujuan->select('*');
        $renstratujuanquery = $renstratujuan->get();
        $renstratujuancount = $renstratujuanquery->getResultArray();
        $jumlahrenstratujuan = count($renstratujuancount);

        $renstratarget = \Config\Database::connect();
        $renstratarget = $renstratarget->table('renstratarget');
        $renstratarget->select('*');
        $renstratargetquery = $renstratarget->get();
        $renstratargetcount = $renstratargetquery->getResultArray();
        $jumlahrenstratarget = count($renstratargetcount);

        $alokasi = \Config\Database::connect();
        $alokasi = $alokasi->table('rttahunankegalokasi');
        $alokasi->select('*');
        $alokasiquery = $alokasi->get();
        $alokasicount = $alokasiquery->getResultArray();
        $jumlahalokasi = count($alokasicount);

        $realisasi = \Config\Database::connect();
        $realisasi = $realisasi->table('rttahunankegrealisasi');
        $realisasi->select('*');
        $realisasiquery = $realisasi->get();
        $realisasicount = $realisasiquery->getResultArray();
        $jumlahrealisasi = count($realisasicount);

        $data = [
            'chart' => $chart1,
            'pie' => $pie1,
            'umt' => $jumlahumt,
            'anakpetak' => $jumlahanakpetak,
            // 'cucupetak' => $jumlahcucupetak,
            'desa' => $jumlahdesa,
            'lemdes' => $jumlahlemdes,
            'hwd' => $jumlahhwd,
            'user' => $jumlahuser,
            'admin' => $jumlahadmin,
            'active' => $jumlahactive,
            'renstra' => $jumlahrenstra,
            'renstratujuan' => $jumlahrenstratujuan,
            'renstratarget' => $jumlahrenstratarget,
            'alokasi' => $jumlahalokasi,
            'realisasi' => $jumlahrealisasi,
            'title' => 'KHDTK APPS - Dashboard',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('apps/dashboard', $data);
    }

    public function maps()
    {
        $data = [
            'title' => 'KHDTK APPS - WEB GIS',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('apps/maps', $data);
    }


    public function profile()
    {
        $data = [
            'title' => 'KHDTK APPS - Account',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('pages/profile', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'KHDTK APPS - Frequently Ask Question',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('pages/faq', $data);
    }

    public function changelog()
    {
        $data = [
            'title' => 'KHDTK APPS - Program Changelog',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('pages/changelog', $data);
    }
    public function doc()
    {
        $data = [
            'title' => 'KHDTK APPS - Documentation',
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];
        return view('pages/doc', $data);
    }
}
