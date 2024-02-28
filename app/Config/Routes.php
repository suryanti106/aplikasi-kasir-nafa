<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // Login
 $routes->get('/','Login::login');
 $routes->post('/proses-login', 'Login::login');
 $routes->get('/logout', 'Login::logout');

 // Dashboard
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Home::index');


//satuan
$routes->get('list-satuan', 'Satuan::index');
$routes->get('/tambah-satuan', 'Satuan::tambah');
$routes->post('/simpan-satuan', 'Satuan::simpan');
$routes->get('/hapus-satuan/(:num)', 'Satuan::hapus/$1');
$routes->get('/edit-satuan/(:num)', 'Satuan::edit/$1');
$routes->post('/update-satuan', 'Satuan::update');


//kategori
$routes->get('list-kategori', 'Kategori::index');
$routes->get('tambah-kategori', 'Kategori::tambah');
$routes->post('/simpan-kategori', 'Kategori::simpan');
$routes->get('/hapus-kategori/(:num)','Kategori::hapus/$1');
$routes->get('/edit-kategori/(:num)', 'Kategori::edit/$1');
$routes->post('/update-kategori', 'Kategori::update');


//pengguna
$routes->get('/list-pengguna', 'Pengguna::index');
$routes->get('/tambah-pengguna', 'Pengguna::tambah');
$routes->post('/simpan-pengguna', 'Pengguna::simpan');
$routes->get('/hapus-pengguna/(:num)', 'Pengguna::hapus/$1');
$routes->get('/edit-pengguna/(:num)', 'Pengguna::edit/$1');
$routes->post('/update-pengguna', 'Pengguna::update');


//produk
$routes->get('/list-produk', 'Produk::index');
$routes->get('/tambah-produk', 'Produk::tambah');
$routes->post('/simpan-produk', 'Produk::simpan');
$routes->get('/hapus-produk/(:num)', 'Produk::hapus/$1');
$routes->get('/edit-produk/(:num)', 'Produk::edit/$1');
$routes->post('/update-produk', 'Produk::update/$1');


//penjuaan
$routes->get('/list-penjualan', 'Penjualan::index');
$routes->get('/transaksi-penjualan','Penjualan::index');
$routes->post('/transaksi-penjualan','Penjualan::simpanPenjualan');
$routes->get('/pembayaran','Penjualan::simpanPembayaran');

//laporan stok
$routes->get('/cetak-laporan','Laporan::index');
$routes->get('/cetak-pdf-laporan','Laporan::cetak');