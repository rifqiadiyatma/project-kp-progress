<div class="row">
    <div class="col-sm-6">
        <table class="table table-borderless">
            <tr><th>Deskripsi</th><td> : </td> <td><?= $dokumen['deskripsi']?></td></tr>
            <tr><th>Komponen</th><td> : </td> <td><?= $dokumen['nama_komponen']?></td></tr>
            <tr><th>Sub Komponen</th><td> : </td> <td><?= $dokumen['nama_sub_k']?></td></tr>
        </table>
    </div>
    <div class="col-sm-6">
        <table class="table table-borderless">
            <tr><th>Tgl Upload</th><td> : </td> <td><?= $dokumen['tgl_upload']?></td></tr>
            <tr><th>Author</th><td> : </td> <td><?= $dokumen['nama_user']?></td></tr>
            <tr><th>Sub Sub Komponen</th><td> : </td> <td><?= $dokumen['nama_sub_sub_k']?></td></tr>
        </table>
    </div>
</div>


    <div class="embed-responsive embed-responsive-1by1">
        <iframe class="embed-responsive-item" src="<?= base_url('file_dokumen/'.$dokumen['nama_dokumen']) ?>"></iframe>
    </div>
