<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $total_dokumen ?></h3>
                <p>File Terupload</p>
              </div>
              <div class="icon">
                <i class="far fa-copy"></i>
              </div>
              <a href="<?= base_url('dokumen')?>" class="small-box-footer">&nbsp;</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $total_verif ?></h3>

                <p>File Terverifikasi</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
              <p class="small-box-footer">&nbsp;</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $total_blmverif ?></h3>

                <p>File Belum Terverifikasi</p>
              </div>
              <div class="icon">
                <i class="fas fa-times"></i>
              </div>
              <p class="small-box-footer">&nbsp;</p>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total_user ?></h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="far fa-user"></i>
              </div>
              <p class="small-box-footer">&nbsp;</p>
            </div>
          </div>

          <div class="col-md-8 mt-4">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Dokumen yang Masuk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p class="mb-1">Manajemen Perubahan</p>
                <div class="progress mb-0">
                  <div class="progress-bar bg-success" style="width:<?= ($total_komponen1/20)*100 ?>%">
                    <?php echo round(($total_komponen1/20)*100,2); ?> %
                  </div>
                </div>
                <div class="mb-3 text-right"><small class="font-weight-light">Progress : <?= $total_komponen1?>/20 File Terupload</small></div>
                
                <p class="mb-1">Penataan Tatalaksana</p>
                <div class="progress mb-0">
                  <div class="progress-bar bg-info" style="width:<?= ($total_komponen2/20)*100 ?>%">
                    <?php echo round(($total_komponen2/20)*100,2); ?> %
                  </div>
                </div>
                <div class="mb-3 text-right"><small class="font-weight-light">Progress : <?= $total_komponen2?>/20 File Terupload</small></div>

                <p class="mb-1">Penataan Manajemen SDM</p>
                <div class="progress mb-0">
                  <div class="progress-bar bg-warning" style="width:<?= ($total_komponen3/20)*100 ?>%">
                      <?php echo round(($total_komponen3/20)*100,2); ?> %
                  </div>
                </div>
                <div class="mb-3 text-right"><small class="font-weight-light">Progress : <?= $total_komponen3?>/20 File Terupload</small></div>

                <p class="mb-1">Penguatan Akuntabilitas</p>
                <div class="progress mb-0">
                  <div class="progress-bar bg-danger" style="width:<?= ($total_komponen4/20)*100 ?>%">
                      <?php echo round(($total_komponen4/20)*100,2); ?> %
                  </div>
                </div>
                <div class="mb-3 text-right"><small class="font-weight-light">Progress : <?= $total_komponen4?>/20 File Terupload</small></div>

                <p class="mb-1">Penguatan Pengawasan</p>
                <div class="progress mb-0">
                  <div class="progress-bar bg-primary" style="width:<?= ($total_komponen5/20)*100 ?>%">
                      <?php echo round(($total_komponen5/20)*100,2); ?> %
                  </div>
                </div>
                <div class="mb-3 text-right"><small class="font-weight-light">Progress : <?= $total_komponen5?>/20 File Terupload</small></div>

                <p class="mb-1">Peningkatan Pelayanan Publik</p>
                <div class="progress mb-0">
                  <div class="progress-bar bg-indigo" style="width:<?= ($total_komponen6/20)*100 ?>%">
                      <?php echo round(($total_komponen6/20)*100,2); ?> %
                  </div>
                </div>
                <div class="mb-3 text-right"><small class="font-weight-light">Progress : <?= $total_komponen6?>/20 File Terupload</small></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

<div class ="col-md-4">
  <div class="card card-outline card-primary mt-4">
    <div class="card-header">
      <h3 class="card-title"><i class="fas fa-hashtag mr-2"></i>Media Sosial</h3>
    </div>
      <div class="card-body">    
        <ul style="list-style-type: none; margin:0; padding:0;">
        <li><i class ="fab fa-instagram mr-2" style="color:purple;"></i><a href="https://www.instagram.com/bpsbandarlampung/" target="_blank">Instagram</a></li>
        <li><i class ="fab fa-facebook mr-2" style="color:blue;"></i><a href="https://web.facebook.com/BPSKotaB.Lampung" target="_blank">Facebook</a></li>
        <li><i class ="fab fa-twitter mr-2" style="color:lightblue"></i><a href="https://twitter.com/bps_statistics" target="_blank">Twitter</a></li>
        <li><i class ="fab fa-youtube mr-2" style="color:red"></i><a href="https://www.youtube.com/channel/UCYxOi_FgBHcOdgj0WYoGvmA" target="_blank">Youtube</a></li>
        </ul>
    </div>
  </div>

  <div class="card card-outline card-primary mt-4">
    <div class="card-header">
      <h3 class="card-title"><i class="fas fa-link mr-2"></i>Website Resmi</h3>
    </div>
      <div class="card-body mx-auto">
        <img class="img-thumbnail" src ="<?= base_url('assets/qrcode.png')?>" width=150px height=150px>
      </div>
      <div class="card-footer bg-white mx-auto"><a href="https://bandarlampungkota.bps.go.id/" target="_blank">Link Website BPS</a></div>
  </div>

</div>


