<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AkunModel;

class AkunController extends BaseController
{

    public function __construct()
    {
        $this->AkunModel = new AkunModel();
    }

    public function index()
    {
        
        $data = [
            'result' => $this->AkunModel->findAll()
        ];
        return view('admin/akun', $data);
    }
}
