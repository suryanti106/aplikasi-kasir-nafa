<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
     

<div class="page-body">
          <div class="container px-4">
                <div class="card">
             <div class="row">
                <div class="col">
              <div class="row row-cards">
                <div class="col">
                  <div class="card">
                    <form action="<?=site_url('transaksi-penjualan')?>" method="POST">
                    <div class="card-header">
                      <h3 class="card-title">NO TRANSAKSI :    <?php if(isset($detailPenjualan) && !empty($detailPenjualan)) : ?>
                      <?= $detailPenjualan[0]['no_transaksi']; ?>  
                      <?php endif; ?>
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">KODE PRODUK</label>
                        <input type="hidden" value="<?=$no_transaksi;?>" name="no_transaksi" class="form-control" >
                        <select class="js-example-basic-multiple form-select" name="id_produk" multiple="multiple">
                        <?php if(isset($produkList)) :
                          foreach ($produkList as $row) : ?> 
                        <option value="<?=$row->id_produk;?>"><?=$row->kode_produk;?><?=$row->nama_produk;?> | <?=$row->stok;?> | <?=number_format($row->harga_jual,0,',','.');?></option>
                        <?php 
                        endforeach;
                      endif;?>
                      </select>

                      <div class="mb-3">
                        <label class="form-label">JUMLAH</label>
                        <input type="text" name="txtqty" class="form-control">
                      </div>
                      <div class="card-footer text-end">
                      <button type="submit" class="btn btn-gradient-primary me-2"> <i class="bi bi-cart-fill"></i></button>
                    </div>
                    </div>
                </form>
                  </div>
                </div>

                    </div>
                <div class="col">
                  <div class="row">
                    <div class="col">
                    <p>Tanggal : <?php 
                      date_default_timezone_set('Asia/Jakarta');
                      echo date("Y-m-d H:i:s");
                      ?>
                      </p>
                    </div>
                    </div>
                    <table  class="table table-sm table-striped table-bordered text-center">
                <thead>
                 <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($detailPenjualan) && !empty($detailPenjualan)) :
    $no = 1;
    foreach ($detailPenjualan as $detail) : ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $detail['nama_produk']; ?></td>
        <td><?= $detail['qty']; ?></td>
        <td><?= number_format($detail['total'], 0, ',', '.'); ?></td>
    </tr>
<?php endforeach;
else: ?>
    <tr>
        <td colspan="4">Tidak ada produk</td>
    </tr>
<?php endif; ?>
              </tbody>
                 </table>
                  </div>


             
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">TOTAL : RP <?= number_format($totalHarga, 0, ',', '.'); ?></h3>
                    </div>

                    <div class="card-body">
                    <div class="mb-3">
                                        <label class="form-label">BAYAR</label>
                                        <input type="text" name="txtbayar" class="form-control" id="txtbayar">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">KEMBALI</label>
                                        <input type="text" name="kembali" class="form-control" id="kembali" readonly>
                                    </div>
                      <div class="card-footer text-end">
                      <a href="<?=site_url('pembayaran')?>" class="btn btn-primary">
                        SIMPAN
                      </a>
            
                    </div>
                  </div>
                </div>
                </div>
 

          </div>
        </div>
   
        <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil elemen-elemen yang diperlukan
        var txtBayar = document.getElementById('txtbayar');
        var kembali = document.getElementById('kembali');
        var totalHarga = <?= $totalHarga ?>; // Ambil total harga dari controller dan diteruskan ke view

        // Tambahkan event listener untuk memantau perubahan pada input bayar
        txtBayar.addEventListener('input', function() {
            // Ambil nilai yang dibayarkan
            var bayar = parseFloat(txtBayar.value);

            // Hitung kembaliannya
            var kembalian = bayar - totalHarga;

            // Tampilkan kembaliannya pada input kembali
            if (kembalian >= 0) {
                kembali.value = kembalian.toFixed(2).replace(/(\.00)+$/, ''); // Menampilkan hingga 2 digit desimal
            } else {
                kembali.value = '0'; // Jika kembalian negatif, tampilkan '0.00'
            }
        });
    });
</script>

<?=$this->endSection();?>