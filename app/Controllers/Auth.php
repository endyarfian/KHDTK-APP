<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function __construct()
    {
    }

    public function login()
    {
        $data = [
            'title' => 'KHDTK APPS - Login',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'KHDTK APPS - Register',
            'validation2' => \Config\Services::validation(),
            'footer' => 'KHDTK WEB APPS Ver. 2. 0.',
            'credit' => ' Copyright © 2022, constructed by<a target="#" href="#"> enlisters studio/endyarfian</a>.',
        ];

        return view('auth/register', $data);
    }
}
