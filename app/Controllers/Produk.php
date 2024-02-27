<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        $tb_produk =  $this->produkModel->findAll();

        $data = [
            'tb_produk' => $tb_produk,
        ];

        echo view('templates/header');
        echo view('produk/index', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {

        $data = [
            'validation' => \Config\Services::validation()
        ];

        echo view('templates/header');
        echo view('produk/create', $data);
        echo view('templates/footer');
    }

    public function simpan()
    {
        if (!$this->validate([

            'namaProduk' => 'required|is_unique[tb_produk.nama_produk]',
            'hargaBeli' => 'required|is_natural_no_zero',
            'hargaJual' => 'required|is_natural_no_zero',
            'stok' => 'required|is_natural_no_zero',

        ])) {

            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('produk/create')->withInput()->with('validation', $validation);
        }

        $this->produkModel->save([
            'nama_produk' => $this->request->getVar('namaProduk'),
            'harga_beli' => $this->request->getVar('hargaBeli'),
            'harga_jual' => $this->request->getVar('hargaJual'),
            'stock' => $this->request->getVar('stok'),
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Ditambahkan.');

        return redirect('produk');
    }

    public function edit($produkid)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'produk' => $this->produkModel->getProduk($produkid)
        ];

        echo view('templates/header');
        echo view('produk/edit', $data);
        echo view('templates/footer');
    }

    public function update($ProdukID)
    {

        // cek Nama

        $produkLama = $this->produkModel->getProduk($this->request->getVar('dummy'));

        if ($produkLama['nama_produk'] == $this->request->getVar('namaProduk')) {
            $ruleNama = 'required';
        } else {
            $ruleNama = 'required|is_unique[tb_produk.nama_produk]';
        }
        // dd($this->request->getVar());

        if (!$this->validate([

            'namaProduk' => $ruleNama,
            'hargaBeli' => 'required|is_natural_no_zero',
            'hargaJual' => 'required|is_natural_no_zero',
            'stok' => 'required|is_natural_no_zero',

        ])) {

            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('produk/edit/' . $ProdukID)->withInput()->with('validation', $validation);
        }

        $this->produkModel->save([
            'ProdukID' => $this->request->getVar('dummy'),
            'nama_produk' => $this->request->getVar('namaProduk'),
            'harga_beli' => $this->request->getVar('hargaBeli'),
            'harga_jual' => $this->request->getVar('hargaJual'),
            'stock' => $this->request->getVar('stok')
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Edit.');

        return redirect('produk');
    }

    public function delete($produkid)
    {

        $this->produkModel->delete($produkid);

        session()->setFlashdata('berhasil', 'Data Berhasil Dihapus.');

        return redirect('produk');
    }
}
