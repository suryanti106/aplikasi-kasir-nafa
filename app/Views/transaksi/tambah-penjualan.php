<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Penjualan</h4>
                    <form class="forms-sample" method="POST"action="<?=site_url('simpan-penjualan');?>">
                      <div class="form-group">
                        <label for="exampleInputNoTransaksi1">No Transaksi</label>
                        <input class="form-control" name="txtPenjualan" type="text" placeholder="Silahkan Masukan No Transaksi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTanggalPenjualan1">Tanggal Penjualan</label>
                        <input class="form-control" name="txtPenjualan" type="text" placeholder="Silahkan Masukan Tanggal Penjualan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputWaktu1">Waktu</label>
                        <input class="form-control" name="txtWaktu" type="text" placeholder="Silahkan Masukkan waktu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTotalHarga1">Total Harga</label>
                        <input class="form-control" name="txtTotal" type="text" placeholder="Silahkan Masukan Total Harga">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="submit">Simpan</button><div class="form-check form-check-flat form-check-primary">
                      </div>
                    </form>
                  </div>
                </div>
                <label class="col-sm-3-col-form-label">Produk</label>
                <div class="col-sm-g">
                  <select class="form-control js-example-basic-multiple" name="id_produk[]"id="id_produk">
                  <option value="">Pilih Produk</option>:?>
                  <?php if(isset($listproduk)) :
                          foreach ($listproduk as $row) : ?>  
                        <option value="<?=$row->id_produk;?>"><?=$row->nama_produk;?> | <?=$row->stok;?> | <?=number_format($row->harga_jual,0,',','.');?></option>

                      <?php 
                        endforeach;
                    endif;?>
            </select>
          </div>
        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
		$(document).ready(function(){
			$('.js-example-basic-single').select2();
		});
	</script>


<?=$this->endSection();?>