<?php

namespace App\Models;

use CodeIgniter\Model;

class Mproduk extends Model
{
    protected $table            = 'tbl_produk';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk','kode_produk','nama_produk','harga_jual','harga_beli','id_satuan','id_kategori','stok'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getProduk($id = null)
    {
        $produk = new Mproduk;
        $produk -> select('tbl_produk.id_produk, tbl_produk.kode_produk, tbl_produk.nama_produk, tbl_produk.harga_jual, tbl_produk.stok, tbl_satuan.nama_satuan, tbl_kategori.nama_kategori');
        $produk->join('tbl_satuan', 'tbl_satuan.id_satuan=tbl_produk.id_satuan','LEFT');
        $produk->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_produk.id_kategori','LEFT');
        $produk->orderBy('tbl_produk.id_produk', 'DESC');
        return $produk->find();
    }

    public function generateProdukCode()
    {
        $prefix = 'PRD';
        $lastProduct = $this->orderBy('id_produk', 'DESC')->first();

        if (!$lastProduct){
            $code = $prefix . '001';
        } else {
            $lastCode = substr($lastProduct['kode_produk'], strlen($prefix));
            $nextCode =  str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);
            $CODE = $PREFIX . $NEXTcODE;
        }
        
    }

    // public function getLaporanProduk(){
    //     $queryProduk=$produk->query("CALL lihatlaporan()")->getResult();
    //     return $queryProduk;
    // }

    public function getLaporanProduk(){
        $produk = new Mproduk;
        $produk -> select('tbl_produk.nama_produk, tbl_produk.harga_jual, tbl_produk.stok');
        $produk->ORDERBY('tbl_produk.stok', 'ASC');
        return $produk->find();
    }

    public function getAllProduk() {
        // Lakukan query menggunakan Query Builder
        $query = $this->db->table('tbl_produk')->get();
    
        // Atur pengembalian data sebagai objek
        return $query->getResult();
    }

    }

