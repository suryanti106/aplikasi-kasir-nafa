<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<a class="btn btn-gradient-primary me-2" href="<?=site_url('tambah-produk');?>">Tambah</a> 
 <table class="table table-sm table-striped table-bordered">
    <thead>
    <tr>
        <th>No</th>        
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga Jual</th>
        <th>Nama Satuan</th>
        <th>Nama Kategori</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    </thead>
<?php
if(isset($listproduk)) :
    $html =null;
    $no = null;
    foreach($listproduk as $baris) :
        $no++;
        $html .='<tr>';
        $html .='<td>'. $no.'</td>';
        $html .='<td>'. $baris['kode_produk'].'</td>';
        $html .='<td>'. $baris['nama_produk'].'</td>';
        $html .='<td>'. $baris['harga_jual'].'</td>';
        $html .='<td>'. $baris['nama_satuan'].'</td>';
        $html .='<td>'. $baris['nama_kategori'].'</td>';
        $html .='<td>'. $baris['stok'].'</td>';
        $html .='<td align="center">
        <a href="'.site_url('edit-produk/'.$baris['id_produk']).'" class="btn btn-primary btn-sm fw-bold">...</a>
        <a href="'.site_url('hapus-produk/'.$baris['id_produk']).'" OnClick="return confirm(\'Anda Yakin ?\')" class="btn btn-danger btn-sm fw-bold">X</a>
        </td>';
        $html .='</tr>';
    endforeach;
    echo $html;    
endif;
?>
</table>
<?=$this->endSection();?>