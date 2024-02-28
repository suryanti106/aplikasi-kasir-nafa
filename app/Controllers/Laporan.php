<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Mproduk;

class Laporan extends BaseController
{
    public function index()
    {
        $data =[ 
            'listproduk'=>$this->produk->getProduk() ] ; 
            return view('laporan/list-laporan',$data); 
            
    }
    public function cetak()
    {
        $data =[ 
            'listproduk'=>$this->produk->getProduk() ] ; 
            return view('laporan/cetak-pdf-stok',$data); 
            
    }
}
