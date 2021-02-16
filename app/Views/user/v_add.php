<div class="row">
    <div class="col-md-3">
        </div>
          <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
              </div>
              <!-- /.card-header -->
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
                <?php echo form_open_multipart('user/insert');?>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input name="nama_user" class="form-control" placeholder="Nama User" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" class="form-control" placeholder="Email" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control">
                            <option value="">--Pilih Level--</option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>

                    <div class ="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="form-group text-right">
                        <a href="<?= base_url('user')?>" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    
                <?php echo form_close();?>
              </div>
              </div>
            <!-- /.card -->
          </div>
        <div class="col-md-3">
    </div>
</div>