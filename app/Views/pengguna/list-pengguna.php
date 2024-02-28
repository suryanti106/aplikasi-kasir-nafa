<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<a class="btn btn-gradient-primary me-2" href="<?=site_url('tambah-pengguna');?>">Tambah</a> 
 <table class="table table-sm table-striped table-bordered">
    <thead>
    <tr>
        <th>No</th>        
        <th>Nama</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>
    </thead>
<?php
if(isset($listpengguna)) :
    $html =null;
    $no = null;
    foreach($listpengguna as $baris) :
        $no++;
        $html .='<tr>';
        $html .='<td>'. $no.'</td>';
        $html .='<td>'. $baris['nama_user'].'</td>';
        $html .='<td>'. $baris['level'].'</td>';
        $html .='<td align="center">
        <a href="'.site_url('edit-pengguna/'.$baris['id_user']).'" class="btn btn-primary btn-sm fw-bold">...</a>
        <a href="'.site_url('hapus-pengguna/'.$baris['id_user']).'" OnClick="return confirm(\'Anda Yakin ?\')" class="btn btn-danger btn-sm fw-bold">X</a>
        </td>';
        $html .='</tr>';
    endforeach;
    echo $html;    
endif;
?>
</table>
<?=$this->endSection();?>