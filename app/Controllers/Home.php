<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $data = [
            'title' => 'KHDTK APPS - Masuk'
        ];
        return view('auth/login,', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'KHDTK APPS - Register'
        ];
        return view('auth/register', $data);
    }
}
