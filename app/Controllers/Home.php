<?php

namespace App\Controllers;

use PhpParser\Node\Expr\FuncCall;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function coba()
    {
        echo "Masuk";
    }
}
