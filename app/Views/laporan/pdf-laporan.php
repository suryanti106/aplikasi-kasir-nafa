<?=$this->extend('dashboard'); ?>
<?=$this->section('konten'); ?>
          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h3 class="mt-30">Laporan Produk</h3>
                  <div class="text-start">
                    <div class="col-sm-2">
                      <form method="POST" > 
                    </div>
                    <div class="btn-print mt-30">
                  <a href="<?php echo site_url('/pdf/generate') ?>" class="btn btn-gradient-primary me-2">Print PDF</a>
                  </div>
                      </form>
                  <div class="table-wrapper table-responsive mt-30">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Harga Jual</th>
                          <th>Stok</th>
                          <!-- <th style="text-align: center;">Aksi</th> -->
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        if(isset($listproduk)) :
                            $html =null;
                            $no = 0;
                            foreach($listproduk as $baris) :
                                $no++;
                                $html .='<tr>';
                                $html .='<td>'. $no.'</td>';
                                $html .='<td>'. $baris['nama_produk'].'</td>';
                                $html .='<td>'. $baris['harga_jual'].'</td>';
                                $html .='<td>'. $baris['stok'].'</td>';
                            endforeach; 
                            echo $html;   
                        endif;
                        ?>

                        </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

<?=$this->endSection(); ?>