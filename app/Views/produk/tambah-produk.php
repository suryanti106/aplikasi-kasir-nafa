<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Form Produk</h4>
                    <form class="forms-sample" method="POST"action="<?=site_url('simpan-produk');?>">
                      <div class="form-group">
                        <label for="exampleInputKode1">Kode Produk</label>
                        <input class="form-control" name="txtProduk" type="text" placeholder="Silahkan Masukan Kode">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNamaproduk1">Nama Produk</label>
                        <input class="form-control" name="txtNama" type="text" placeholder="Silahkan Masukan Nama Produk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputHargajual1">Harga Jual</label>
                        <input class="form-control" name="txtHarga" type="text" placeholder="Silahkan Masukkan Harga Jual">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputHargajual1">Nama Satuan</label>
                        <select name="id_satuan" class="form-control">
                          <?php
                          foreach ($listSatuan as $row){
                            echo'<option value="'.$row['id_satuan'].'">'.$row['nama_satuan'].'</option>';
                          }
                          ?>
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputHargajual1">Nama Kategori</label>
                        <select name="id_kategori" class="form-control">
                          <?php
                          foreach ($listKategori as $row){
                            echo'<option value="'.$row['id_kategori'].'">'.$row['nama_kategori'].'</option>';
                          }
                          ?>
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputStok1">Stok</label>
                        <input class="form-control" name="txtStok" type="text" placeholder="Silahkan Masukan Stok Barang">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="submit">Simpan</button><div class="form-check form-check-flat form-check-primary">
                      </div>
                    </form>
                  </div>
                </div>


<?=$this->endSection();?>