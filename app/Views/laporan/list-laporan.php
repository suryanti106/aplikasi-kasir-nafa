<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<a class="btn btn-gradient-primary me-2" href="<?=site_url('cetak-pdf-laporan');?>">Cetak Laporan</a> 
 <table class="table table-sm table-striped table-bordered">
    <thead>
    <tr>
        <th>No</th>        
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga Jual</th>
        <th>Stok</th>
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
        $html .='<td>'. $baris['stok'].'</td>';
        $html .='</tr>';
    endforeach;
    echo $html;    
endif;
?>
</table>
<?=$this->endSection();?>