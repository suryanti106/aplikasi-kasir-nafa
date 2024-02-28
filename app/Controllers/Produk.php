<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Mproduk;

class Produk extends BaseController
{
    public function index()
    {
        $data=[
            'introText'=>'<p>Berikut Adalah Data Produk</p>',
            'judulHalaman'=>'Data Produk',
            'listproduk'=>$this->produk->getProduk()
        ];
        return view('produk/list-produk',$data);
    }

    public function tambah()
    {
        $data=[
            'introText'=>'<p>Silahkan Anda Masukan Data Pada Form Produk</p>',
            'judulHalaman'=>'Form Produk',
            'listKategori'=>$this->kategori->findAll(),
            'listSatuan'=>$this->satuan->findAll(),
        ];
        return view('produk/tambah-produk',$data);
    }

    public function simpan()
    {
        $data=[
            'kode_produk'=>$this->request->getVar('txtProduk'),
            'nama_produk'=>$this->request->getVar('txtNama'),
            'harga_jual'=>$this->request->getVar('txtHarga'),
            'id_satuan'=>$this->request->getVar('id_satuan'),
            'id_kategori'=>$this->request->getVar('id_kategori'),
            'stok'=>$this->request->getVar('txtStok')
        ];
        $this->produk->save($data);
        return redirect()->to('list-produk');
    }

    public function hapus($id)
    {
        $syarat =[
            'id_produk'=>$id
        ];
        $this->produk->where($syarat)->delete();
        return redirect()->to('/list-produk');
    } 

    public function edit($id){

        $syarat=[
            'id_produk'=>$id
        ];

        $data=[
            'introText'=>'<p>Silahkan Anda Edit Data Pada Form</p>',
            'judulHalaman'=>'Form Edit',
            'listproduk'=>$this->produk->where($syarat)->findAll(),
            'listKategori'=>$this->kategori->findAll(),
            'listSatuan'=>$this->satuan->findAll(),
        ];

        return view('produk/edit-produk',$data);
    }

    public function update($id){

        $data=[
            
            'kode_produk'=>$this->request->getVar('txtProduk'),
            'nama_produk'=>$this->request->getVar('txtNama'),
            'harga_jual'=>$this->request->getVar('txtHarga'),
            'id_satuan'=>$this->request->getVar('id_satuan'),
            'id_kategori'=>$this->request->getVar('id_kategori'),
            'stok'=>$this->request->getVar('txtStok')
        ];
        $this->produk->update($this->request->getVar('id_produk'),$data);
        return redirect()->to('/list-produk');
    }

    public function cetak(){
        $data=[
            'listproduk'=>$this->produk->getProduk()
        ];
        return view('laporan/cetak-pdf-stok',$data);
    }
}
