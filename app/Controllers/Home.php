<?php

namespace App\Controllers;

use App\Models\JenisModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->JenisModel = new JenisModel();
    }
    public function index()
    {

        if (session() == null) {
            return redirect()->to('/login');
        } else {
            $data = [
                'result' => $this->JenisModel->findAll()
            ];
            return view('landing-page', $data);
        }
    }
}
