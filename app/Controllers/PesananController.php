<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesananModel;

class PesananController extends BaseController
{

    protected $PesananModel;

    public function __construct()
    {
        $this->PesananModel = new PesananModel();
    }

    public function index()
    {

        $data = [
            'result' => $this->PesananModel->findAll()
        ];

        return view('admin/pesanan', $data);
    }
}
