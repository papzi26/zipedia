<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthController extends BaseController
{

    public function __construct()
    {
        $this->AuthModel = new AuthModel();
    }
    public function index()
    {
        // if(session() == null) {
        //     return view('auth/login');
          
        // } else if (session() != null) {
        //     return redirect()->to('/');
        // }
        return view('auth/login', [
            'config' => config('Auth')
        ]);
    }

    // public function postlogin()
    // {
    //     $username = $this->request->getVar('username');
    //     $password = $this->request->getVar('password');

    //     $log = $this->AuthModel->getData($username);
    //     if ($log == null) {
    //         return redirect()->to('/login');
    //     }

    //     if (password_verify($password, $log->password)) {
    //         $data = [
    //             'login' => true,
    //             'username' => $log->username,
    //             'password' => $log->password,
    //             'role' => $log->role,
    //         ];

    //         session()->set($data);

    //         return redirect('/')->with('msg', 'Berhasil Login');
    //     }
    // }

    public function daftar()
    {
        return view('auth/daftar');
    }

    public function postdaftar()
    {
        $nama = $this->request->getVar('nama');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $hash = password_hash($password, PASSWORD_DEFAULT);

        if ($nama != null && $username != null && $password != null) {
            $data = [
                'username' => $username,
                'password' => $hash,
                'nama' => $nama,
                'role' => 2
            ];

            $this->AuthModel->save($data);
            return redirect()->to('/login');
        }

    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
