<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Form Pengguna</h4>
                    <form class="forms-sample" method="POST"action="<?=site_url('update-pengguna');?>">
                      <div class="form-group">
                        <label for="exampleInputNamaPengguna1">Nama Pengguna</label>
                        <input class="form-control" name="id_user" type="hidden" value="<?=$listpengguna[0]['id_user'];?>">
                        <input class="form-control" name="txtNama" type="text" placeholder="Silahkan Masukan Nama Pengguna" value="<?=$listpengguna[0]['nama_user'];?>">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                      </div>
                    </form>
                  </div>

<?=$this->endSection();?>;