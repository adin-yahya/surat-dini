<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Update Surat Keluar</h4>
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
					<a href="<?= base_url('user/keluar')?>">Surat Keluar</a>
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
					<form method="post" action="<?= base_url('user/keluar/update/')?>">
						<div class="col">
							<div class="form-group">
								<label>Nomor Surat</label>
								<input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat" value="<?= $surat_keluar['no_surat']?>">
								<input type="hidden" class="form-control" placeholder="Nomor Surat" name="id_sk" value="<?= $surat_keluar['id_sk']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Tanggal Surat</label>
								<input type="date" class="form-control" placeholder="Home Address" name="tgl_surat" value="<?= $surat_keluar['tgl_surat']?>">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Perihal</label>
								<input type="text" class="form-control" placeholder="Perihal" name="perihal" value="<?= $surat_keluar['perihal']?>">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Lampiran</label>
								<input type="text" class="form-control" placeholder="Surat Dari" name="lampiran" value="<?= $surat_keluar['lampiran']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Penerima</label>
								<input type="text" class="form-control" placeholder="Surat Dari" name="penerima" value="<?= $surat_keluar['penerima']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="<?= $surat_keluar['keterangan']?>">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="pembuka_sk">Pembuka Surat</label>
								<textarea name="pembuka_sk" class="form-control" id="pembuka_sk" rows="5"><?= $surat_keluar['pembuka_sk']?></textarea>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="isi_sk">Isi Surat</label>
								<textarea name="isi_sk" class="form-control" id="isi_sk" rows="5"><?= $surat_keluar['isi_sk']?></textarea>
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="penutup_sk">Penutup Surat</label>
								<textarea name="penutup_sk" class="form-control" id="penutup_sk" rows="5"><?= $surat_keluar['penutup_sk']?></textarea>
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