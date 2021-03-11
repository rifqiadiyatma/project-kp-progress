<div class="row">
          <div class="col-md-11 mx-auto">
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
                        <label for="komponen">Pilar<label class="text-danger">&nbsp;*</label></label>
                        <select name="id_komponen" class="form-control select2bs4" id="komponen">
                            <option value="">--Pilih Pilar--</option>
                            <?php foreach ($komponen as $key => $value) { ?>
                                <option value="<?= $value['id_komponen'] ?>"><?= $value['nama_komponen'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subkomponen">Komponen<label class="text-danger">&nbsp;*</label></label>
                        <select name="id_sub_k" class="form-control select2bs4" id="subkomponen">
                        <option value="">--Pilih Sub Komponen--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subsubkomponen">Sub Komponen<label class="text-danger">&nbsp;*</label></label>
                        <select name="id_sub_sub_k" class="form-control select2bs4" id="subsubkomponen">
                        <option value="">--Pilih Sub komponen--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kelengkapan">Jenis Dokumen</label>
                        <select name="id_kelengkapan" class="form-control select2bs4" id="kelengkapan">
                        <option value="">--Pilih Jenis Dokumen--</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi (Optional)</label>
                        <textarea name="deskripsi" rows= "5" class="form-control" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class ="form-group">
                        <label>Upload File</label>
                        <input type="file" name="nama_dokumen" class="form-control">
                        <label class="text-danger">*File Harus Berformat .pdf/.doc/.xls/.jpg</label>
                    </div>

                    <div class="form-group text-right">
                        <a href="<?= previous_url()?>" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    
                <?php echo form_close();?>
              </div>
              </div>
            <!-- /.card -->
          </div>
</div>