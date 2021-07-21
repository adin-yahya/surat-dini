<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Input Surat Masuk</h4>
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
					<form method="post" action="<?php echo base_url('user/masuk/tambah') ?>" enctype="multipart/form-data">
						<div class="col">
							<div class="form-group">
								<label>Nomor Surat</label>
								<input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Perihal</label>
								<input type="text" class="form-control" placeholder="Perihal" name="perihal">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Tanggal Surat</label>
								<input type="date" class="form-control" placeholder="" name="tgl_surat">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Tanggal Terima</label>
								<input type="date" class="form-control" placeholder="" name="tgl_terima">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Pengirim</label>
								<input type="text" class="form-control" placeholder="Surat Dari" name="pengirim">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Upload File</label>
								<input type="file" class="form-control" name="data">
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