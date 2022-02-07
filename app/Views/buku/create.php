<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->Section('isi') ?>
<div class="card-body">
    <h4 class="mt-0 header-title">Form data Buku</h4>
    <form action="/buku/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="judul_buku" class="col-sm-2 col-form-label">judul</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="judul_buku" name="judul_buku">
            </div>
        </div>
        <div class="form-group row">
            <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="penerbit" name="penerbit">
            </div>
        </div>
        <div class="input-group mb-3">
  <input type="file" class="form-control" id="pdf" name="pdf">
  <label class="input-group-text" for="Pdf">Upload</label>
</div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>