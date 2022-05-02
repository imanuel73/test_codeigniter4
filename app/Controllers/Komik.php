<?php

namespace App\Controllers;

use App\Models\KomikModel;

use PhpParser\Node\Expr\FuncCall;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        $komik = $this->komikModel->findAll();
        $data = [
            'tittle' => 'Daftar Komik',
            'komik' => $komik
        ];

        // $komikModel = new \App\Models\KomikModel();

        return view('komik/index', $data);
    }

    // Function for Detail 
    public function detail($slug)
    {
        $komik = $this->komikModel->where(['slug' => $slug])->first();
        dd($komik);
    }
}



        // // konek ke DB tanpa controler
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // dd($komik);
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }