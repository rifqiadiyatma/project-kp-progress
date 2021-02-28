<style>
  .dataTables_wrapper {
    font-size: 16px;
  }
</style>
<div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Periode</h3>
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
                            <th>Tahun</th>
                            <th>Status</th>
                            <th width="100px">Aksi</th>                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($periode as $key => $value) { ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><?= $value['tahun_periode']; ?></td>
                                <?php if($value['status_periode']==0){ ?>
                                    <td class="project-state align-middle text-center">
                                        <span class="badge badge-danger">Tidak Aktif</span>
                                    </td>
                                <?php }else{ ?>
                                    <td class="project-state align-middle text-center">
                                      <span class="badge badge-success">Aktif</span>
                                    </td>
                                <?php } ?>
                                <?php if($value['status_periode']==0){ ?>
                                <td class="text-center">
                                <a href="<?= base_url('periode/aktivasi/'.$value['id_periode'])?>" class="btn btn-success btn-sm">
                                    <i class="fas fa-check mr-1"></i>
                                     Aktivasi</a>
                                </td>
                                <?php }else{ ?>
                                <td></td>
                                <?php } ?>
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