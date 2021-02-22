<div class="row">
    <div class="col-md-3">
        </div>
          <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Dokumen</h3>
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
                <?php echo form_open_multipart('dokumen/update/'.$dokumen['id_dokumen']);?>
                    
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" rows= "5" class="form-control" placeholder="Deskripsi"><?= $dokumen['deskripsi']?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Komponen</label>
                        <select name="id_komponen" class="form-control" id="komponen">
                            <option value="">--Pilih Komponen--</option>
                            <option value="<?= $dokumen['id_komponen']?>" selected><?= $dokumen['nama_komponen'] ?></option>
                            <?php foreach ($komponen as $key => $value) { ?>
                                <option value="<?= $value['id_komponen'] ?>"><?= $value['nama_komponen'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Sub Komponen</label>
                        <select name="id_sub_k" class="form-control" id="subkomponen">
                            <option value="">--Pilih Sub Komponen--</option>
                            <option value="<?= $dokumen['id_sub_k']?>" selected><?= $dokumen['nama_sub_k'] ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Sub Sub Komponen</label>
                        <select name="id_sub_sub_k" class="form-control" id="subsubkomponen">
                            <option value="">--Pilih Sub Sub Komponen--</option>
                            <option value="<?= $dokumen['id_sub_sub_k']?>" selected><?= $dokumen['nama_sub_sub_k'] ?></option>
                        </select>
                    </div>
                    
                    <div class ="form-group">
                        <label>Ganti File</label>
                        <input type="file" name="nama_dokumen" class="form-control">
                        <label class="text-danger">*File Harus Berformat .pdf/.doc/.xls/.jpg</label>
                    </div>

                    

                    <div class="form-group text-right">
                        <a href="<?= base_url('dokumen')?>" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    
                <?php echo form_close();?>
              </div>
              </div>
            <!-- /.card -->
          </div>
        <div class="col-md-3">
    </div>
</div>