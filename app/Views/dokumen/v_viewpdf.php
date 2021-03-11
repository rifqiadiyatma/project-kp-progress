<div class="row">
    <div class="col-sm-6">
        <table class="table table-borderless">
            <tr><th>Deskripsi</th><td> : </td> <td><?= wordwrap($dokumen['deskripsi'],30,"<br>\n",TRUE)?></td></tr>
            <tr><th>Pilar</th><td> : </td> <td><?= $dokumen['nama_komponen']?></td></tr>
            <tr><th>Komponen</th><td> : </td> <td><?= $dokumen['nama_sub_k']?></td></tr>
            <tr><th>Nama File</th><td> : </td> <td><?= substr($dokumen['nama_dokumen'],12)?></td></tr>
            <tr><th>Jenis Dokumen</th><td> : </td> <td><?= $dokumen['nama_kelengkapan'] ?></td></tr>
        </table>
    </div>
    <div class="col-sm-6">
        <table class="table table-borderless">
            <tr><th>Tgl Upload</th><td> : </td> <td><?= $dokumen['tgl_upload']?></td></tr>
            <tr><th>Author</th><td> : </td> <td><?= $dokumen['nama_user']?></td></tr>
            <tr><th>Sub Komponen</th><td> : </td> <td><?= $dokumen['nama_sub_sub_k']?></td></tr>
            <tr><th>Status</th><td> : </td> <td><?php if($dokumen['status']==1){ echo "Terverifikasi";} else { echo "Belum Terverifikasi"; }?></td></tr>
            <tr><th>Download</th><td> : </td> <td><a href ="<?= base_url('dokumen/download/'.$dokumen['id_dokumen'])?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-download"></i>Download</a></td></tr>
        </table>
    </div>
</div>


    <div class="embed-responsive embed-responsive-1by1">
        <iframe class="embed-responsive-item" src="<?= base_url('file_dokumen/'.$dokumen['nama_dokumen']) ?>"></iframe>
    </div>
