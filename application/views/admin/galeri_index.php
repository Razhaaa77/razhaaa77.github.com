<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-md-6">
	<form action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype='multipart/form-data'>
		<h5 class="mt-3">File Input</h5>
		<div class="input-group mb-3">
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">judul</label>
					<input type="text" class="form-control" placeholder="judul foto" name="judul_galeri" required>
				</div>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label class="col-form-label">Pilih foto dengan ukuran (1:3)</label>
					<input type="file" name="foto_galeri" class="form-control">
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn  btn-primary">Simpan</button>
		</div>
		</from>
</div>
<?php foreach($galeri as $rr){?>
<div class="card">
	<img class="img-fluid card-img-top" src="<?= base_url('assets/flat_able/upload/galeri/'. $rr['foto_galeri'])?>">
	<div class="card-body">
		<h5 class="card-title"><?= $gg['judul_galeri'];?></h5>
		<a class="me-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
			href="<?= base_url('admin/galeri/hapus/'.$rr['foto_galeri'])?>">
			<i class="bi bi-trash"></i>
		</a>
	</div>
</div>
<?php } ?>
