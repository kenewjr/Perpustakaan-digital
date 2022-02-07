<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->Section('isi') ?>  
    <?php $tgl_pinjam = date('d-m-Y');
$tujuh_hari = mktime(0,0,0, date('n'), date('j') + 7, date('Y'));
$kembali = date('d-m-Y', $tujuh_hari);
?>
<div class="card-body">
    <h4 class="mt-0 header-title">Form ubah data mahasiswa</h4>
    <form action="/admin/update_mahasiswa/<?= $id['id'] ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="id_anggota" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="id_anggota" value="<?= $id['id_anggota'] ?>" name="id_anggota" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="nama" value="<?= $id['nama'] ?> " name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="email" value="<?= $id['email'] ?> " name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="password" value="<?= $id['password'] ?>" name="password">
            </div>
        </div>

        <div class="form-group row">
            <label for="Buku" class="col-sm-2 col-form-label">Buku</label>
            <div class="col-sm-10">
                <div class="btn-group-vertical m-b-10">
                    <select id="pdf" name="pdf">
                        <option class="dropdown-item" value="kosong">kosong</option>
                        <?php $nomor = 0;
                        foreach ($tampildata as $row) :
                        ?>
                            <option class="dropdown-item" value="<?= $row["pdf"] ?>"><?php echo $row['judul_buku']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
  
        <div class="form-group">
        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="text" name="tgl_pinjam" id="tgl_pinjam" class="form-control" readonly="" value="<?= $tgl_pinjam ?>">
    </div>
    <div class="form-group">
        <label for="tgl_kembali">Tanggal Kembali</label>
        <input type="text" name="tgl_kembali" id="tgl_kembali" class="form-control" readonly="" value="<?= $kembali ?>">
    </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
</div>
</form>

</div>
<?= $this->endSection() ?>