<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kasir UKK</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url('assets/vendors/mdi/css/materialdesignicons.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/vendors/css/vendor.bundle.base.css')?>">
    <link rel="stylesheet" href="<?=base_url('select2/dist/css/select2.min.css');?>">
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> -->
   

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico');?>" />
  </head>
  <body>
    
 
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
<script type="text/javascript">
        window.print();
    </script>

</body>
</html>