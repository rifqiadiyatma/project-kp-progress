                    <?php 
                    $errors = session()->getFlashdata('errors');
                    if(!empty($errors)){ ?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Gagal</h5>
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li> <?= esc($value) ?> </li>
                            <?php } ?>
                        </ul>
                        </div>
                    <?php } ?>
                    <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissible">';
                            echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo '<h5><i class="icon fas fa-check"></i>Sukses</h5>';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                    ?>
<div class="row mt-3">
    <div class="col-md-3">
        <div class="card card-primary card-outline">
            <div class="card-header">                
                <div class="card-title"><i class="far fa-image"></i>  Foto</div>
            </div>
              <div class="card-body box-profile p-4">
                <div class="text-center">
                  <img class="img-thumbnail" src="<?= base_url('foto/'.$user['foto'])?>"
                       width="300px" height="300px "alt="User profile picture">
                </div>
              </div>
        </div>
    </div>
        <div class="col-md-9">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <div class="card-title">My Profile</div>
                    <div class="card-tools"><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-pen" style="color:blue"></i></button></div>
                </div>
                <div class="card-body p-4">
                    <ul class="list-group">
                        <li class="list-group-item p-4"><i class ="far fa-id-badge mr-3"></i><b> Nama User </b><a class="float-right"><?= $user['nama_user'] ?></a></li>
                        <li class="list-group-item p-4"><i class ="far fa-envelope mr-3"></i><b> Email </b><a class="float-right"><?= $user['email'] ?></a></li>
                        <?php if($user['level']==1) { ?>
                            <li class="list-group-item p-4"><i class ="far fa-id-card mr-3"></i>
                                <b>Level</b> <a class="float-right">Admin</a>
                            </li>
                            <?php }else { ?>
                                <li class="list-group-item p-4"><i class ="far fa-id-card mr-3"></i>
                                <b>Level</b> <a class="float-right">User</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>             
            </div>
        </div>
    </div>


<div class="modal fade" id="edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php echo form_open_multipart('profile/edit/'.$user['id_user'])?>
                <div class="form-group">
                    <label for="nama_user">Nama User</label>
                    <input name="nama_user" value = "<?= $user['nama_user'] ?>" class="form-control" placeholder="Nama Kategori" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" value = "<?= $user['email'] ?>" class="form-control" placeholder="Nama Kategori" readonly>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value = "<?= $user['password'] ?>" class="form-control" placeholder="Nama Kategori" required>
                </div>

                <div class="form-group">
                    <label for="level">Level</label>
                    <input name="level" value = "<?php if ($user['level'] == 1) {
                                echo 'Admin';
                            } else {
                                echo 'User';
                            }?>" class="form-control" readonly>
                </div>

                <div class="row">
                        <div class="col-sm-4">
                            <img src="<?= base_url('foto/'.$user['foto']) ?>" width="100px">
                        </div>
                        <div class="col-sm-8">
                            <div class ="form-group">
                                <label>Ganti Foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </div>
                    </div> 
                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
