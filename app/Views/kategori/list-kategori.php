<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<a class="btn btn-gradient-primary me-2" href="<?=site_url('tambah-kategori');?>">Tambah</a>  
<table class="table table-sm table-striped table-bordered">
    <thead>
    <tr>
        <th>No</th>    
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>
   </thead> 
<?php
if(isset($listkategori)) :
    $html =null;
    $no = 0;
    foreach($listkategori as $baris) :
        $no++;
        $html .='<tr>';
        $html .='<td>'. $no.'</td>';
        $html .='<td>'. $baris['nama_kategori'].'</td>';
        $html .='<td align="center">
        <a href="'.site_url('edit-kategori/'.$baris['id_kategori']).'" class="btn btn-primary btn-sm fw-bold">...</a>
        <a href="'.site_url('hapus-kategori/'.$baris['id_kategori']).'" OnClick="return confirm(\'Anda Yakin ?\')" class="btn btn-danger btn-sm fw-bold">X</a>
        </td>';
        $html .='</tr>';
    endforeach; 
    echo $html;   
endif;
?>
</table>
<?=$this->endSection();?>