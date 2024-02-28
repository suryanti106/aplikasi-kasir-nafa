<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Form Produk</h4>
                    <form class="forms-sample" method="POST"action="<?=site_url('update-produk');?>">
                      <div class="form-group">
                        <label for="exampleInputKodeProduk1">Kode Produk</label>
                        <input class="form-control" name="id_produk" type="hidden" value="<?=$listproduk[0]['id_produk'];?>">
                        <input class="form-control" name="txtProduk" type="text" placeholder="Silahkan Masukan Kode Produk" value="<?=$listproduk[0]['kode_produk'];?>">

                        <label for="exampleInputNamaProduk1">Nama Produk</label>
                        <input class="form-control" name="txtNama" type="text" placeholder="Silahkan Masukan Nama Produk" value="<?=$listproduk[0]['nama_produk'];?>">

                        <label for="exampleInputHargaJual1">Harga Jual</label>
                        <input class="form-control" name="txtHarga" type="text" placeholder="Silahkan Masukan Harga Jual" value="<?=$listproduk[0]['harga_jual'];?>">
                        
                        <label for="exampleInputHargaJual1">Nama Satuan</label>
                        <select name="id_satuan" class="form-control">
                          <?php
                          foreach ($listSatuan as $row){
                            echo'<option value="'.$row['id_satuan'].'">'.$row['nama_satuan'].'</option>';
                          }
                          ?>
                      </select>

                        <label for="exampleInputHargaJual1">Nama Kategori</label>
                        <select name="id_kategori" class="form-control">
                          <?php
                          foreach ($listKategori as $row){
                            echo'<option value="'.$row['id_kategori'].'">'.$row['nama_kategori'].'</option>';
                          }
                          ?>
                      </select>


                        <label for="exampleInputStok1">Stok</label>
                        <input class="form-control" name="txtStok" type="text" placeholder="Silahkan Masukan Stok Barang" value="<?=$listproduk[0]['stok'];?>">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                      </div>
                    </form>
                  </div>

<?=$this->endSection();?>