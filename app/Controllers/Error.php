<?php

namespace App\Controllers;

class Error extends BaseController
{
    public function notfound()
    {
        return view('errors/error404');
    }
}
