<?= $this->extend('layout/main-user') ?>
<?= $this->extend('layout/menu-user') ?>
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
        <div class="card-body">
        <table class="table table-sm table-striped" id="datamahasiswa">
                <thead>
                    <tr>
                    <th>no</th>
                        <th>id</th>
                        <th>nama</th>                                     
                        <th>Judul Buku</th>                                     
                        <th>Status</th>    
                        <th>tanggal Pinjam</th>
                       <th>tanggal kembali</th>                                 
                       <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=0;             
                    $nomor++;
                    ?>
                    <tr>
                        <td> <?= $nomor ?> </td>
                        <td> <?= $id['id_anggota'] ?> </td>
                        <td> <?= $id['nama'] ?> </td>                                 
                        <td> <?= $pdf['judul_buku'] ?> </td>                                 
                        <td> <?= $id['status'] ?> </td>   
                        <td> <?= $id['tgl_pinjam'] ?> </td>
                        <td> <?= $id['tgl_kembali'] ?> </td>                              
                        <td>
                            <a href="/mahasiswa/<?= $id['id'] ?>" class="btn btn-success">detail</a> 
                        </td>
                    </tr>
                    
                   
                </tbody>
            </table>
            <p class="card-text viewdata">
           
            </p>

        </div>
    </div>
</div>
<div class="viewmodel" style="display: none;"></div>
<?= $this->endSection('') ?>