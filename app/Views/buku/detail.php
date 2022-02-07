<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->Section('isi') ?>

<div class="container-fluid">
	<div class="row ">
		<div  style="max-height:350px" class="col-3 shadow rounded mx-auto ">

			<div class="row mx-auto ">

				<h5 class="col" style="word-wrap: break-word;"><b>judul buku : </b><?= $id['judul_buku']; ?></h5>

			</div>
			<div class="row mx-auto">
				<h5 class="col" style="word-wrap: break-word;"><b>penerbit : </b><?= $id['penerbit']; ?></h5>
			</div>
			<div class="row mx-auto mb-2 mt-5">
				<a href="/buku/edit/<?= $id['id']; ?>" class="btn btn-warning col ">Edit</a>
			</div>

			<div class="row mx-auto mb-3">
				<a href="/buku/delete/<?= $id['id']; ?>" class="btn btn-danger col	">Delete</a>
			</div>


		</div>
		<div class="col-8 mx-auto shadow rounded">
			<div class="row py-2 mx-auto">
				<h3 class="col" style="word-wrap: break-word;">
					Judul Buku :
					<?php echo $id['judul_buku']; ?>
				</h3>
			</div>
			<div class="row   mx-auto">
				<iframe src="<?= base_url('pdf/' . $id['pdf']) ?>" width="100%" height="400px" style="border:none; height:1000px;" title="view buku"></iframe>
			</div>
			<div class="row  mx-auto py-2">
				<b>Perpustakaan Didital Versi 2022</b>
			</div>

		</div>

	</div>

</div>


<?= $this->endSection() ?>