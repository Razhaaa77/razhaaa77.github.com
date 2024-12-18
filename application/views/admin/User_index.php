<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="card-body table-border-style">
	<button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModal"
		data-whatever="@getbootstrap">Tambah User</button>
	<h5 class="mt-4">Data User</h5>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('admin/User/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label class="col-form-label">Nama</label>
								<input type="text" class="form-control" placeholder="Nama" name="nama" required>
							</div>
							<div class="form-group">
								<label class="col-form-label">Username</label>
								<input type="text" class="form-control" placeholder="Username" name="username" required>
							</div>
							<div class="form-group">
								<label class="col-form-label">Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password"
									required>
							</div>
							<div class="form-group">
								<label class="col-form-label">Level</label>
								<div class="col-sm-9">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="level" id="gridRadios1"
											value="admin">
										<label class="form-check-label" for="gridRadios1">Admin</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="level" id="gridRadios2"
											value="user">
										<label class="form-check-label" for="gridRadios2">User</label>
									</div>
								</div>
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
				<th scope="col">#</th>
				<th scope="col">Username</th>
				<th scope="col">Nama</th>
				<th scope="col">level</th>
				<th scope="col">Aksi</th>
			</tr>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($user as $rr) {?>
			<tr>
				<th scope="row"><?= $no; ?></th>
				<td><?= $rr['username'];?></td>
				<td><?= $rr['nama'];?></td>
				<td><?= $rr['level'];?></td>
				<td>
					<a class="me-3" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
						href="<?= base_url('admin/user/delete/'.$rr['id_user'])?>">
						<i class="bi bi-trash"></i>
					</a>
					<button type="button" class="btn-primary" data-toggle="modal" data-target="#edit<?= $rr['id_user'];?>"
						data-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i>
					</button>
					<div class="modal fade" id="edit<?= $rr['id_user'];?>" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<form action="<?= base_url('admin/User/update') ?>" method="post">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Perbarui nama user</h5>
										<button type="button" class="close" data-dismiss="modal"
											aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="modal-body">
										<form>
										<input type="hidden" name="id_user" value="<?= $rr['id_user'];?>" >
											
											<div class="form-group">
												<label class="col-form-label">Nama</label>
												<input type="text" class="form-control" value="<?= $rr['nama'];?>" name="nama">
											</div>
											<div class="form-group">
												<label class="col-form-label">Username</label>
												<input type="text" class="form-control" value="<?= $rr['username'];?>"
													name="username" readonly>
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
