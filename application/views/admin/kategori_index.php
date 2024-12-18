<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="card-body table-border-style">
	<button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModal"
		data-whatever="@getbootstrap">Tambah kategori</button>
	<h5 class="mt-4">Kategori Konten</h5>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah kategori</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label class="col-form-label">Nama ketegori</label>
								<input type="text" class="form-control" placeholder="Nama" name="nama kategori" required>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn  btn-secondary" data-dismiss="modal">keluar</button>
						<button type="submit" class="btn  btn-primary">Simpan</button>
					</div>
				</div>
		</div>
	</div>
</div>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Kategori konten</th>
				<th scope="col">Aksi</th>
			</tr>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($kategori as $rr) {?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $rr['nama_kategori'];?></td>
				<td>
					<a class="me-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
						href="<?= base_url('admin/kategori/delete/'.$rr['id_kategori'])?>">
						<i class="bi bi-trash"></i>
					</a>
					<button type="button" class="btn-primary" data-toggle="modal" data-target="#edit<?= $rr['id_kategori'];?>"
						data-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i>
					</button>
					<div class="modal fade" id="edit<?= $rr['id_kategori'];?>" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<form action="<?= base_url('admin/kategori/update') ?>" method="post">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Perbarui Kategori</h5>
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<form>
										<input type="hidden" name="id_kategori" value="<?= $rr['id_kategori'];?>" >
											
											<div class="form-group">
												<label class="col-form-label">Nama kategori konten</label>
												<input type="text" class="form-control" value="<?= $rr['nama_kategori'];?>" name="nama_kategori">
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn  btn-secondary"
											data-dismiss="modal">keluar</button>
										<button type="submit" class="btn  btn-primary">Simpan</button>
									</div>
								</div>
							</form>
						</div>
					</div>
</div>
</td>
</tr>
<?php $no++; }?>
</tbody>
</table>
</div>
</div>
