<?=$this->extend('dashboard');?>
<?=$this->section('konten');?>
<div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Form Satuan</h4>
                    <form class="forms-sample" method="POST"action="<?=site_url('simpan-satuan');?>">
                      <div class="form-group">
                        <label for="exampleInputNamaSatuan1">Nama Satuan</label>
                        <input class="form-control" name="txtSatuan" type="text" placeholder="Silahkan Masukan Nama Satuan">
                      </div>
                      <button class="btn btn-gradient-primary me-2" type="simpan">Simpan</button><div class="form-check form-check-flat form-check-primary">
                      </div>
                    </form>
                  </div>

<?=$this->endSection();?>