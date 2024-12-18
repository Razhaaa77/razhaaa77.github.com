<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-md-6">
	<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
		<h5 class="mt-3">File Input</h5>
		<div class="input-group mb-3">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">judul</label>
					<input type="text" class="form-control" placeholder="judul foto" name="judul" required>
				</div>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">Pilih foto dengan ukuran (1:3)</label>
					<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn  btn-primary">Simpan</button>
		</div>
		</from>
</div>
<?php foreach($carousel as $rr){?>
<div class="card">
	<img class="img-fluid card-img-top" src="<?= base_url('assets/flat_able/upload/caraousel/'. $rr['foto'])?>">
	<div class="card-body">
		<h5 class="card-title"><?= $rr['judul'];?></h5>
		<a class="me-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
			href="<?= base_url('admin/caraousel/delete_data/'.$rr['foto'])?>">
			<i class="bi bi-trash"></i>
		</a>
	</div>
</div>
<?php } ?>
