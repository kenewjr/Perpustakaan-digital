<?= $this->extend('layout/main') ?>
<?= $this->section('menu') ?>
<li class="has-submenu">
    <a href="<?= site_url('layout/index') ?>"><i class="mdi mdi-airplay"></i>Beranda</a>
</li>

<li class="has-submenu">
    <a href="<?= site_url('admin/mahasiswa') ?>"><i class="mdi mdi-airplay"></i>Mahasiswa</a>
</li>

<li class="has-submenu">
    <a href="<?= site_url('admin/index') ?>"><i class="mdi mdi-airplay"></i>admin</a>
</li>
<li class="has-submenu">
    <a href="<?= site_url('buku/index') ?>"><i class="mdi mdi-airplay"></i>buku</a>
</li>
<?= $this->endSection('') ?>