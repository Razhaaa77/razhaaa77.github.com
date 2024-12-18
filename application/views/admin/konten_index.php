<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="card-body table-border-style">
	<button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModal"
		data-whatever="@getbootstrap">Tambah konten</button>
	<h5 class="mt-4">Kategori Konten</h5>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah konten</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-form-label">judul</label>
							<input type="text" class="form-control" placeholder="judul" name="judul" required>
						</div>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-form-label">kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $rr) {?>
								<option value="<?= $rr['id_kategori'];?>"><?= $rr['nama_kategori'];?></option>
								<?php }?>
							</select>
						</div>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-form-label">keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label class="col-form-label">foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn  btn-secondary" data-dismiss="modal">keluar</button>
						<button type="submit" class="btn  btn-primary">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Judul</th>
				<th scope="col">kategori konten</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Kreator</th>
				<th scope="col">foto</th>
				<th scope="col">Aksi</th>
			</tr>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($konten as $rr) {?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $rr['judul'];?></td>
				<td><?= $rr['nama_kategori'];?></td>
				<td><?= $rr['tanggal'];?></td>
				<td><?= $rr['nama'];?></td>
				<td>
					<a href="<?= base_url('assets/flat_able/upload/konten/'. $rr['foto'])?>" target="_blank">
						<span class="bi bi-search"></span> Lihat foto
					</a>
				</td>
				<td>
					<a class="me-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
						href="<?= base_url('admin/konten/delete/'.$rr['foto'])?>">
						<i class="bi bi-trash"></i>
					</a>
					<button type="button" class="btn-primary" data-toggle="modal"data-target="#edit<?= $rr['id_kategori'];?>" data-whatever="@getbootstrap">
						<i class="bi bi-pencil-square"></i>
					</button>
					<div class="modal fade" id="edit<?= $rr['id_kategori']?>" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<form action="<?= base_url('admin/konten/update') ?>" method="post"
								enctype='multipart/form-data'>
								<input type="hidden" name="nama_foto" value="<?= $rr['foto']?>">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel"><?= $rr['judul']?></h5>
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label class="col-form-label">judul</label>
											<input type="text" class="form-control" value="<?= $rr['judul']?>" 
												name="judul">
										</div>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label class="col-form-label">kategori</label>
											<select name="id_kategori" class="form-control">
												<?php foreach($kategori as $uu) {?>
												<option
												<?php if($uu['id_kategori']==$rr['id_kategori']){ echo"selected"; }?>
												value="<?= $uu['id_kategori']?>">
													<?= $uu['nama_kategori']?></option>
												<?php }?>
											</select>
										</div>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label class="col-form-label">keterangan</label>
											<textarea name="keterangan" class="form-control"><?= $rr['keterangan']?></textarea>
										</div>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label class="col-form-label">foto</label>
											<input type="file" name="foto" class="form-control"
												accept="image/png, image/jpeg">
										</div>
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
				</td>
			</tr>
			<?php $no++; }?>
		</tbody>
	</table>
</div>
</div>
