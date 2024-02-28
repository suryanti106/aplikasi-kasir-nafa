<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Form Pengguna</h4>
                    <form class="forms-sample" method="POST"action="<?=site_url('simpan-pengguna');?>">
                      <div class="form-group">
                        <label for="exampleInputNamaPengguna1">Nama Pengguna</label>
                        <input class="form-control" name="txtNama" type="text" placeholder="Silahkan Masukan Nama Pengguna">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control" name="txtPass" type="text" placeholder="Silahkan Masukan Password">
                        <label for="exampleInputLevel1">Level</label>
                        <input class="form-control" name="txtLevel" type="text" placeholder="Level">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                      </div>
                    </form>
                  </div>

<?=$this->endSection();?>