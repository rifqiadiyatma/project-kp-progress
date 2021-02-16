<div class="row">
    <div class="col-md-3">
        </div>
          <div class="col-md-6">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Dokumen</h3>
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
                <?php echo form_open_multipart('dokumen/insert');?>
                    
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" rows= "5" class="form-control" placeholder="Deskripsi"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="komponen">Komponen</label>
                        <select name="id_komponen" class="form-control" id="komponen">
                            <option value="">--Pilih Kategori--</option>
                            <?php foreach ($komponen as $key => $value) { ?>
                                <option value="<?= $value['id_komponen'] ?>"><?= $value['nama_komponen'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subkomponen">Sub Komponen</label>
                        <select name="id_sub_k" class="form-control" id="subkomponen">
                        <option value="">--Pilih Sub Komponen--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subsubkomponen">Sub Komponen</label>
                        <select name="id_sub_sub_k" class="form-control" id="subsubkomponen">
                        <option value="">--Pilih Sub Sub Komponen--</option>
                        </select>
                    </div>

                    <div class ="form-group">
                        <label>File Dokumen</label>
                        <input type="file" name="nama_dokumen" class="form-control">
                        <label class="text-danger">*File Harus Berformat .pdf/.doc/.xls/.jpg</label>
                    </div>

                    <div class="form-group text-right">
                        <a href="<?= base_url('dokumen')?>" class="btn btn-success">Kembali</a>
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