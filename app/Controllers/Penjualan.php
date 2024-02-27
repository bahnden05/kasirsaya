<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\PelangganModel;

class Penjualan extends BaseController
{

    protected $produkModel;
    protected $pelangganModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
        $this->pelangganModel = new PelangganModel();

    }

    public function index()
    {
        $tb_produk =  $this->produkModel->findAll();
        $tb_pelanggan =  $this->pelangganModel->findAll();
        $data = [
            'tb_produk' => $tb_produk,
            'tb_pelanggan' => $tb_pelanggan,
        ];

        echo view('templates/header');
        echo view('penjualan/index', $data);
        echo view('templates/footer');
    }
}
