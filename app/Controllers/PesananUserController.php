<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaymentModel;
use App\Models\PemesananModel;
use App\Models\PesananUserModel;

class PesananUserController extends BaseController
{

    public function __construct()
    {
        $this->PemesananModel = new PemesananModel();
        $this->PesananUserModel = new PesananUserModel();
        $this->PaymentModel = new PaymentModel();
    }
    public function index()
    {
        $data = [
            'result' => $this->PesananUserModel->findAll()
        ];
        return view('user/pilih_pesanan_baru', $data);
    }

    public function postpesananbaru()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('layanan');
        $jenis = $this->request->getVar('jenis');
        $query = $builder->where('jenis_layanan', $jenis)->get()->getResult();

        $array = json_decode(json_encode($query[0]), true);

        $data = [
            'result' => $array,
            'payment' => $this->PaymentModel->findAll()
        ];

        return view('user/pesanan_baru', $data);
    }

    public function pesananberhasil()
    {
        $layanan = $this->request->getVar('layanan');
        $harga = $this->request->getVar('harga');
        $target = $this->request->getVar('target');
        $jumlah = $this->request->getVar('jumlah');
        $payment = $this->request->getVar('payment');

        if($target != null && $jumlah != null && $payment != null) {

            $data = [
                'akun' => '1',
                'jumlah_pesanan' => intval($jumlah),
                'jenis_pelayanan' => intval($layanan),
                'jumlah_pesanan' => $jumlah,
                'target_pesanan' => $target,
                'tanggal_pemesanan' => date("Y-m-d h:i:s"),
                'status_pesanan' => intval(4),
                'harga_per1k' => $harga,
                'payment' => $payment
            ];

            $this->PemesananModel->save($data);
            return redirect()->to('/');
        }
        
        else {
            return redirect()->to('/user/pesanan');
        }
    }
}
