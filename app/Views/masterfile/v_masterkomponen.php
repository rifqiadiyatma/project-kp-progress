<style>
  .dataTables_wrapper {
    font-size: 14px;
  }
</style>
<div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Komponen</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add" >
                        <i class="fas fa-plus"> Tambah Komponen</i>
                    </button>
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
                <table class = "table table-bordered" id ="example2">
                    <thead>
                        <tr>
                            <th class="text-center" width="20px">No</th>                        
                            <th>Nama Komponen</th>                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($komponen as $key => $value) { ?>
                            <tr>
                                <td class="text-center align-middle"><?= $no++; ?></td>
                                <td><?= $value['nama_sub_k']; ?></td>
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

<!-- /.modal  add komponen-->
<div class="modal fade" id="add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Komponen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php echo form_open('masterfile/addKomponen')?>
                <div class="form-group">
                    <label for="komponen">Pilar<label class="text-danger">&nbsp;*</label></label>
                    <select name="id_komponen" class="form-control select2bs4" id="komponen" required>
                        <option value="">--Pilih Pilar--</option>
                            <?php foreach ($pilar as $key => $value) { ?>
                                <option value="<?= $value['id_komponen'] ?>"><?= $value['nama_komponen'] ?></option>
                            <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="nama_sub_k">Nama Komponen<label class="text-danger">&nbsp;*</label></label>
                    <input name="nama_sub_k" class="form-control" placeholder="Nama Komponen" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- modal add end -->