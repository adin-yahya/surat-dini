<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Update Surat Masuk</h4>
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
					<a href="<?= base_url('user/masuk')?>">Surat Masuk</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">Input</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Isi Data</div>
					</div>
					<form method="post" action="<?= base_url('user/masuk/update/')?>">
						<div class="col">
							<div class="form-group">
								<label>Nomor Surat</label>
								<input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat" value="<?= $surat_masuk['no_surat']?>">
								<input type="hidden" class="form-control" placeholder="Nomor Surat" name="id_sm" value="<?= $surat_masuk['id_sm']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Perihal</label>
								<input type="text" class="form-control" name="perihal" value="<?= $surat_masuk['perihal']?>">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Tanggal Surat</label>
								<input type="date" class="form-control" name="tgl_surat" value="<?= $surat_masuk['tgl_surat']?>">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Tanggal Terima</label>
								<input type="date" class="form-control" name="tgl_terima" value="<?= $surat_masuk['tgl_terima']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Pengirim</label>
								<input type="text" class="form-control" name="pengirim" value="<?= $surat_masuk['pengirim']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="keterangan" value="<?= $surat_masuk['pengirim']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Upload Files</label>
								<input type="file" class="form-control" name="data">
								<span class="help-text">Abaikan jika tidak ingin mengubah Filey</span>
							</div>
						</div>
						<div class="card-action">
							<button type="submit" class="btn btn-success">Tambah</button>
							<button class="btn btn-danger">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>