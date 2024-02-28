<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<a class="btn btn-gradient-primary me-2" href="<?=site_url('tambah-satuan');?>">Tambah</a>  
<table class="table table-sm table-striped table-bordered">
    <thead>
    <tr>
        <th>No</th>    
        <th>Nama Satuan</th>
        <th>Aksi</th>
    </tr>
   </thead> 
<?php
if(isset($listsatuan)) :
    $html =null;
    $no = 0;
    foreach($listsatuan as $baris) :
        $no++;
        $html .='<tr>';
        $html .='<td>'. $no.'</td>';
        $html .='<td>'. $baris['nama_satuan'].'</td>';
        $html .='<td align="center">
        <a href="'.site_url('edit-satuan/'.$baris['id_satuan']).'" class="btn btn-primary btn-sm fw-bold">...</a>
        <a href="'.site_url('hapus-satuan/'.$baris['id_satuan']).'" OnClick="return confirm(\'Anda Yakin ?\')" class="btn btn-danger btn-sm fw-bold">X</a>
        </td>';
        $html .='</tr>';
    endforeach; 
    echo $html;   
endif;
?>
</table>
<?=$this->endSection();?>