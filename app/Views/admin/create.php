<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->Section('isi') ?>
<div class="card-body">
    <h4 class="mt-0 header-title">Form data mahasiswa</h4>
    <form action="/admin/tambah_mahasiswa" method="post">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="id_anggota" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="id_anggota" name="id_anggota" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="password" name="password">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>