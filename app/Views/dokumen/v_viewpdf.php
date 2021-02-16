<div class="row">
<div class="col-sm-12"></div>
    <table class="table table-borderless">
        <tr>
            <th>Deskripsi</th>
            <th>:</th>
            <td><?= $dokumen['deskripsi']?></td>
            <th>Tanggal Upload</th>
            <th>:</th>
            <td><?= $dokumen['tgl_upload']?></td>
        </tr>

        <tr>
            <th>Ukuran File</th>
            <th>:</th>
            <td><?= $dokumen['ukuran_dokumen']?> Byte</td>
            <th>Author</th>
            <th>:</th>
            <td><?= $dokumen['nama_user']?></td>
        </tr>
    </table>
</div>

    <div class="col-sm-12">
        <iframe src="<?= base_url('file_dokumen/'.$dokumen['nama_dokumen']) ?>" target="_blank"  height="500px" width="100%"></iframe>
    </div>
</div>