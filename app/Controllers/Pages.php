<?php

namespace App\Controllers;

use PhpParser\Node\Expr\FuncCall;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'HOME | Test Web'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'About | Test Web'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact | Test Web',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln. Popowatu, Lingkungan II',
                    'kota' => 'Tomohon'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jln. Tomohon-Tanawangko',
                    'kota' => 'Tomohon'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
