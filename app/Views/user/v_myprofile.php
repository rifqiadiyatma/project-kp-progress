<div class="row">
    <div class="col-sm-3">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title"><i class="far fa-image"></i>  Foto</div>
                <div class="card-tools"><button type="button" class="btn btn-sm "><i class="fas fa-pen blue"></i></button></div>
            </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url('foto/'.session()->get('foto'))?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= session()->get('nama_user')?></h3>
                <br>
                <ul class="list-group list-group-unbordered mb-3">
                  <?php if(session()->get('level')==1) { ?>
                        <li class="list-group-item">
                            <b>Level</b> <a class="float-right">Admin</a>
                        </li>
                        <?php }else { ?>
                            <li class="list-group-item">
                            <b>Level</b> <a class="float-right">User</a>
                        </li>
                    <?php } ?>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
        </div>
    </div>
<!-- END My Profile -->
    <div class="col-sm-9">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">My Profile</h3>
            </div>
                <div class="card-body">
                <?php 
                    $errors = session()->getFlashdata('errors');
                    if(!empty($errors)){ ?>
                        <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Gagal dibuat</h5>
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li> <?= esc($value) ?> </li>
                            <?php } ?>
                        </ul>
                        </div>
                    <?php } ?>
                <?php echo form_open_multipart('#');?>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input name="nama_user" value="<?= $user['nama_user'] ?>" class="form-control" placeholder="Nama User" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="<?= $user['email']?>" class="form-control" placeholder="Email" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" value="" name="password" class="form-control" placeholder="Password" readonly>
                    </div>
                         
                    
                <?php echo form_close();?>
                </div>
        </div>
    </div>
</div>
