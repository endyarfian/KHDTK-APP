<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
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
