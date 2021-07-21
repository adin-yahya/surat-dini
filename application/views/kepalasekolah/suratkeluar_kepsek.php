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
                  <form method="post" action="<?php echo base_url('user/keluar/tambah') ?>">
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
                            <label>Tanggal Surat</label>
                            <input type="date" class="form-control" placeholder="Home Address" name="tgl_surat">
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
                            <label>Penerima</label>
                            <input type="text" class="form-control" placeholder="Surat Dari" name="penerima">
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
                    <th>Tanggal Surat</th>
                    <th>Perihal</th>
                    <th>Penerima Surat</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($surat_keluar as $sk) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $sk['no_surat']; ?></td>
                      <td><?= $sk['tgl_surat']; ?></td>
                      <td><?= $sk['perihal']; ?></td>
                      <td><?= $sk['penerima']; ?></td>
                      <td><?= $sk['keterangan']; ?></td>
                      <td>
                        <div class="form-button-action">
                          <a href="<?php echo base_url('kepalasekolah/suratkeluar_kepsek/detail/') . $sk['id_sk']; ?>">
                            <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="detail">
                              <i class="fas fa-search"></i>
                            </button>
                          </a>
                          <a href="<?php echo base_url('user/keluar/pdf/') . $sk['id_sk']; ?>">
                            <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="Lihat Surat">
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
                  <form name="edit" action="<?php echo base_url('user/keluar/update') ?>" method="post" onsubmit="return validateFormEdit()">
                    <input type="hidden" name="id_sk">
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
                            <label>Tanggal Surat</label>
                            <input type="date" class="form-control" placeholder="Home Address" name="tgl_surat">
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
                            <label>Penerima</label>
                            <input type="text" class="form-control" placeholder="Surat Dari" name="penerima">
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
  function loadEditData(baris) {
    var id_sk = baris.getAttribute("data-id");
    var no_surat = baris.getAttribute("data-no_surat");
    var tgl_surat = baris.getAttribute("data-tgl_surat");
    var perihal = baris.getAttribute("data-perihal");
    var penerima = baris.getAttribute("data-penerima");
    var keterangan = baris.getAttribute("data-keterangan");

    document.edit.id_sk.value = id_sk;
    document.edit.no_surat.value = no_surat;
    document.edit.tgl_surat.value = tgl_surat;
    document.edit.perihal.value = perihal;
    document.edit.penerima.value = penerima;
    document.edit.keterangan.value = keterangan;
  }
</script>