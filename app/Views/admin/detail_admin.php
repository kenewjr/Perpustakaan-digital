<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->Section('isi') ?>
<div class="container-fluid">
<div class="col-md-6 col-lg-6 col-xl-3">
    <!-- Simple card -->  
    <div class="card m-b-30">
        <div class="card-body">
            <h4 class="card-title font-20 mt-0"><b>Nama : </b><?= $id['nama_pengguna']; ?></h4>
            <h4 class="card-title font-20 mt-0"><b>Id : </b><?= $id['username']; ?></h4>
            <h4 class="card-title font-20 mt-0"><b>Password : </b><?= $id['password']; ?></h4>
            <a href="/admin/edit_admin/<?= $id['id']; ?>" class="btn btn-warning">Edit</a>
            <a href="/admin/delete_admin/<?= $id['id']; ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>