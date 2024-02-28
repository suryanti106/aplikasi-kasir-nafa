<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Form Penjualan</h4>
                    <form class="forms-sample" method="POST"action="<?=site_url('update-penjualan');?>">
                      <div class="form-group">
                        <label for="exampleInputNoFaktur1">No Faktur</label>
                        <input class="form-control" name="id_penjualan" type="hidden" value="<?=$listpenjualan[0]['id_penjualan'];?>">
                        <input class="form-control" name="txtPenjualan" type="text" placeholder="Silahkan Masukan No Faktur" value="<?=$listpenjualan[0]['no_faktur'];?>">

                        <label for="exampleInputNamaProduk1">Tanggal Penjualan</label>
                        <input class="form-control" name="txtPenjualan" type="text" placeholder="Silahkan Masukan Nama Tanggal Penjualan" value="<?=$listpenjualan[0]['tgl_penjualan'];?>">

                        <label for="exampleInputWaktu1">Waktu</label>
                        <input class="form-control" name="txtWaktu" type="text" placeholder="Silahkan Masukan Waktu" value="<?=$listpenjualan[0]['waktu'];?>">

                        <label for="exampleInputGrandTotal1">Grand Total</label>
                        <input class="form-control" name="txtGrand" type="text" placeholder="Silahkan Masukan Grand Total" value="<?=$listpenjualan[0]['grand_total'];?>">

                        <label for="exampleInputCash1">Cash</label>
                        <input class="form-control" name="txtCash" type="text" placeholder="Silahkan Masukan Cash" value="<?=$listpenjualan[0]['cash'];?>">

                        <label for="exampleInputChange1">Change</label>
                        <input class="form-control" name="txtChange" type="text" placeholder="Silahkan Masukan Change" value="<?=$listpenjualan[0]['change'];?>">

                        <label for="exampleInputTotalHarga1">Total Harga</label>
                        <input class="form-control" name="txtTotal" type="text" placeholder="Silahkan Masukan Total Harga" value="<?=$listpenjualan[0]['total_harga'];?>">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                      </div>
                    </form>
                  </div>

<?=$this->endSection();?>