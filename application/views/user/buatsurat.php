<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Surat</h4>
			<ul class="breadcrumbs">
				<li class="nav-home">
					<a href="#">
						<i class="flaticon-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('user/keluar') ?>">Surat Keluar</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Buat Surat</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Buat Surat</div>
					</div>
					<form action="<?= base_url('user/keluar/pdf/') . $id; ?>">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="isi">Pembuka</label>
										<textarea name="isi" class="form-control" id="isi" rows="5"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="isi">Isi</label>
										<textarea name="isi" class="form-control" id="isi" rows="5"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="isi">Penutup</label>
										<textarea name="isi" class="form-control" id="isi" rows="5"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="card-action">
							<button type="submit" class="btn btn-success">Buat</button>
							<button class="btn btn-danger">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>