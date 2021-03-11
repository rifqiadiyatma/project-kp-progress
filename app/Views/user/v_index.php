<div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data User</h3>

                <div class="card-tools">
                  <a href="<?= base_url('user/add') ?>" class="btn btn-primary btn-xs" >
                        <i class="fas fa-plus"> Tambah User</i>
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
                <table class = "table table-bordered text-center" id ="example2">
                    <thead>
                        <tr>
                            <th class="text-center" width="20px">No</th>                        
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Foto</th>
                            <th width="250px">Aksi</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($user as $key => $value) { ?>
                            <tr>
                                <td class="text-center align-middle"><?= $no++; ?></td>
                                <td class="align-middle"><?= $value['nama_user']; ?></td>
                                <td class="align-middle"><?= $value['email']; ?></td>
                                <td class="align-middle"><?php if ($value['level'] == 1){
                                        echo 'Admin';
                                    }else{
                                        echo 'User';
                                    } ?>
                                </td>
                                <td><img src="<?= base_url('foto/'.$value['foto'])?>" width="100px" height="100px"></td>
                                <td class="text-center align-middle">
                                <a href="<?= base_url('user/edit/'.$value['id_user'])?>" class="btn btn-info btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                    Edit</a>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_user'] ?>">
                                    <i class="fas fa-trash"></i>
                                    Delete</button>
                                </td>
                            </tr>
                        <?php } ?> 
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
</div>

<!-- /.modal  hapus kategori-->
<?php foreach ($user as $key => $value) { ?>
<div class="modal fade" id="delete<?= $value['id_user'] ?>">
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
                <p>Apakah anda yakin ingin menghapus <?= $value['nama_user'] ?> ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              <a href = "<?= base_url('user/delete/'.$value['id_user'])?>" button type="submit" class="btn btn-default">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php } ?>
      <!-- modal hapus end -->