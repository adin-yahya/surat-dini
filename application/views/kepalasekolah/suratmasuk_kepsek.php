<div class="content">
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">
        <?php if (!$subtitle) {
          echo $title;
        } else {
          echo $subtitle;
        } ?>
      </h4>
      <ul class="breadcrumbs">
        <li class="nav-home">
          <a href="<?= base_url(); ?>">
            <i class="flaticon-home"></i>
          </a>
        </li>
        <li class="separator">
          <i class="flaticon-right-arrow"></i>
        </li>
        <li class="nav-item">
          <a href="<?= base_url($url); ?>">
            <?php if (!$subtitle) {
              echo $title;
            } else {
              echo $subtitle;
            } ?></a>
        </li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><?= $title; ?></h4>
          </div>
          <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form method="post" action="<?php echo base_url('user/masuk/tambah') ?>">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Nomor Surat</label>
                            <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Perihal</label>
                            <input type="text" class="form-control" placeholder="Perihal" name="perihal">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" class="form-control" placeholder="" name="tgl_surat">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Tanggal Terima</label>
                            <input type="date" class="form-control" placeholder="" name="tgl_terima">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Pengirim</label>
                            <input type="text" class="form-control" placeholder="Surat Dari" name="pengirim">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer no-bd">
                      <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Perihal</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Terima</th>
                    <th>Pengirim Surat</th>
                    <th>Keterangan</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($surat_masuk as $sm) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $sm['no_surat']; ?></td>
                      <td><?= $sm['perihal']; ?></td>
                      <td><?= $sm['tgl_surat']; ?></td>
                      <td><?= $sm['tgl_terima']; ?></td>
                      <td><?= $sm['pengirim']; ?></td>
                      <td><?= $sm['keterangan']; ?></td>
                      <td> 
                        <a href="<?= base_url('assets/suratmasuk/'.$sm['file']); ?>" target="_blank">
                        <img src="<?= base_url('assets/suratmasuk/'.$sm['file']); ?>" alt="" style="width:50px;height:50px;object-fit:cover;border-radius:8px">
                        </a>
                      </td>
                      <td>
                        <div class="form-button-action">
                          <a href="<?php echo base_url('kepalasekolah/suratmasuk_kepsek/detail/') . $sm['id_sm']; ?>">
                            <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="detail">
                              <i class="fas fa-file-alt"></i>
                            </button>
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- Modal Edit -->
            <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form name="edit" action="<?php echo base_url('user/masuk/update') ?>" method="post" onsubmit="return validateFormEdit()">
                    <input type="hidden" name="id_sm">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Nomor Surat</label>
                            <input type="text" class="form-control" placeholder="Nomor Surat" name="no_surat">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Perihal</label>
                            <input type="text" class="form-control" placeholder="Perihal" name="perihal">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" class="form-control" placeholder="" name="tgl_surat">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Tanggal Terima</label>
                            <input type="date" class="form-control" placeholder="" name="tgl_terima">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Pengirim</label>
                            <input type="text" class="form-control" placeholder="Surat Dari" name="pengirim">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer no-bd">
                      <button type="submit" id="addRowButton" class="btn btn-primary">Update</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function loadEditData(ganti) {
    var id_sm = ganti.getAttribute("data-id");
    var no_surat = ganti.getAttribute("data-no_surat");
    var perihal = ganti.getAttribute("data-perihal");
    var tgl_surat = ganti.getAttribute("data-tgl_surat");
    var tgl_terima = ganti.getAttribute("data-tgl_terima");
    var pengirim = ganti.getAttribute("data-pengirim");
    var keterangan = ganti.getAttribute("data-keterangan");

    document.edit.id_sm.value = id_sm;
    document.edit.no_surat.value = no_surat;
    document.edit.perihal.value = perihal;
    document.edit.tgl_surat.value = tgl_surat;
    document.edit.tgl_terima.value = tgl_terima;
    document.edit.pengirim.value = pengirim;
    document.edit.keterangan.value = keterangan;
  }
</script>