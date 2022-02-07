<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->Section('isi') ?>
<div class="card-body">
    <h4 class="mt-0 header-title">Form ubah data mahasiswa</h4>
    <form action="/admin/update_admin/<?= $id['id'] ?>" method="post">
        <?= csrf_field(); ?>
    <div class="form-group row">
        <label for="nama_pengguna" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">   
            <input class="form-control" type="text" id="nama_pengguna" value="<?= $id['nama_pengguna'] ?>" name="nama_pengguna" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">username</label>
        <div class="col-sm-10">   
            <input class="form-control" type="text" id="username" value="<?= $id['username'] ?> "name="username">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">   
            <input class="form-control" type="text" id="password" value="<?= $id['password'] ?>" name="password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">   
           <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </div>
</form>
</div>
<?= $this->endSection() ?>