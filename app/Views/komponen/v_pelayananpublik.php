<div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Dokumen</h3>

                <div class="card-tools">
                  <a href="<?= base_url('dokumen/add') ?>" class="btn btn-primary btn-xs" >
                        <i class="fas fa-plus"> Tambah Data</i>
                  </a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">';
                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo '<h5><i class="icon fas fa-check"></i>Sukses</h5>';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>
                <div class="table-responsive">
                <table class = "table table-striped table-bordered" id ="example1">
                    <thead>
                        <tr>
                            <th class="align-middle" width="10px">No</th>                        
                            <th class="align-middle">Deskripsi</th>
                            <th class="align-middle">Komponen</th>
                            <th class="align-middle">Sub-Komponen</th>
                            <th class="align-middle">Sub2-Komponen</th>
                            <th class="align-middle">Tanggal Upload</th>
                            <th class="align-middle">Nama User</th>
                            <th class="align-middle">Status</th>
                            <th class="align-middle">File</th>
                            <th class="text-center align-middle" width="120px">Aksi</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($pelayananpublik as $key => $value) { ?>
                            <tr>
                                <td class="text-center align-middle"><?= $no++; ?></td>
                                <td class="align-middle"><?= $value['deskripsi'];?></td>
                                <td class="align-middle" ><?= $value['nama_komponen'];?></td>
                                <td class="align-middle"><?= $value['nama_sub_k'];?></td>
                                <td class="align-middle"><?= $value['nama_sub_sub_k'];?></td>
                                <td class="align-middle"><?= $value['tgl_upload']; ?></td>
                                <td class="align-middle"><?= $value['nama_user']; ?></td>
                                <?php if($value['status']==0){ ?>
                                    <td class="project-state align-middle">
                                        <span class="badge badge-danger">Belum<br>Terverifikasi</span>
                                    </td>
                                <?php }else{ ?>
                                    <td class="project-state align-middle">
                                      <span class="badge badge-success">Terverifikasi</span>
                                    </td>
                                    <?php } ?>
                                <td class="text-center align-middle"><a href="<?= base_url('dokumen/viewpdf/'.$value['id_dokumen']) ?>" target="_blank" class="btn btn-secondary btn-sm" > 
                                <i class="fas fa-file fa-2x"></i></a></td>
                                <td class="text-center align-middle">
                                <?php if(session()->get('level')==1 and $value['status']==0){ ?>
                                    <a href="<?= base_url('dokumen/verifikasi/'.$value['id_dokumen'])?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Verifikasi"><i class="fas fa-check"></i></a>
                                    <hr>
                                <?php }?>
                                <?php if($value['status']==0){ ?>
                                    <a href="<?= base_url('dokumen/edit/'.$value['id_dokumen'])?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                    </a>
                                <?php } ?>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_dokumen'] ?>">
                                    <span data-toggle="tooltip" data-placement="bottom" title="Hapus">
                                    <i class="fas fa-trash"></i></span>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?> 
                    </tbody>
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>

<!-- /.modal  hapus kategori-->
<?php foreach ($pelayananpublik as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value['id_dokumen'] ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">
              <i class="icon fas fa-exclamation-triangle"></i> Konfirmasi Hapus</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <a href = "<?= base_url('dokumen/delete/'.$value['id_dokumen'])?>" button type="submit" class="btn btn-default">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php } ?>
      <!-- modal hapus end -->