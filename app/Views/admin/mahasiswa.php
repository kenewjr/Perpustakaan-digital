<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('isi') ?>
<div class="col-sm-12">
    <div class="page-title-box">
        <h4 class="page-title">Data Mahasiswa</h4>
    </div>
    <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>selamat!</strong> <?= session()->getFlashdata('pesan');?>
                                    </div>
                                   
                                    <?php endif; ?>
</div>
<div class="col-sm-12">
    <div class="card m-b-30">
    <a href="/admin/create" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
        <div class="card-body">
        <table class="table table-sm table-striped" id="datamahasiswa">
                <thead>
                    <tr>
                    <th>no</th>
                        <th>id</th>
                        <th>nama</th>               
                        <th>email</th>
                        <th>password</th>
                       <th>status</th>
                       <th>tanggal Pinjam</th>
                       <th>tanggal kembali</th>
                       <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=0; foreach($tampildata as $row):
                    $nomor++;
                    ?>
                    <tr>
                        <td> <?= $nomor ?> </td>
                        <td> <?= $row['id_anggota'] ?> </td>
                        <td> <?= $row['nama'] ?> </td>                    
                        <td> <?= $row['email'] ?> </td>                    
                        <td> <?= $row['password'] ?> </td>
                        <td> <?= $row['status'] ?> </td>
                        <td> <?= $row['tgl_pinjam'] ?> </td>
                        <td> <?= $row['tgl_kembali'] ?> </td>
                       
                        <td>
                            <a href="/admin/mahasiswa/<?= $row['id'] ?>" class="btn btn-success">detail</a> 
                            <a href="/admin/kembali/<?= $row['id'] ?>" class="btn btn-success">kembali</a> 
                        </td>
                    </tr>
                    
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p class="card-text viewdata">
           
            </p>

        </div>
    </div>
</div>
<div class="viewmodel" style="display: none;"></div>
<?= $this->endSection('') ?>