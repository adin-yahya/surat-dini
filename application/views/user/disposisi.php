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
          <a href="<?= base_url('user/masuk') ?>">Surat Masuk</a>
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
            } ?>
          </a>
        </li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
              <i class="fa fa-plus"></i>
              Add Row
            </button>
          </div>
          <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form method="post" action="<?php echo base_url('user/disposisi/tambah/') . $id_sm; ?>">
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
                            <label>Tanggal</label>
                            <input type="date" class="form-control" placeholder="" name="tgl_dp">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Pengirim</label>
                            <input type="text" class="form-control" placeholder="Pengirim" name="pengirim">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Disposisi Kepada</label>
                            <input type="text" class="form-control" placeholder="Kepada" name="tujuan_dp">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Sifat Surat</label>
                            <input type="text" class="form-control" placeholder="" name="sifatsurat">
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
                    <th>Tanggal Disposisi</th>
                    <th>Pengirim</th>
                    <th>Tujuan Disposisi</th>
                    <th>Sifat Surat</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  if($disposisi) foreach ($disposisi as $d) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $d['no_surat']; ?></td>
                      <td><?= $d['tgl_dp']; ?></td>
                      <td><?= $d['pengirim']; ?></td>
                      <td><?= $d['tujuan_dp']; ?></td>
                      <td><?= $d['sifatsurat']; ?></td>
                      <td><?= $d['keterangan']; ?></td>
                      <td>
                        <div class="form-button-action">
                          <a href="#" data-toggle="modal" data-target="#modalEdit" data-id="<?= $d['id_dp'] ?>" data-no_surat="<?= $d['no_surat'] ?>" data-tgl_dp="<?= $d['tgl_dp'] ?>" data-pengirim="<?= $d['pengirim'] ?>" data-tujuan_dp="<?= $d['tujuan_dp'] ?>" data-sifatsurat="<?= $d['sifatsurat'] ?>" data-keterangan="<?= $d['keterangan'] ?>" onclick="loadEditData(this)">
                            <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="Ubah">
                              <i class="fa fa-edit"></i>
                            </button>
                          </a>
                          <a href="<?php echo base_url('user/disposisi/detail/') . $d['id_dp']; ?>">
                            <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="detail">
                              <i class="fas fa-file-alt"></i>
                            </button>
                          </a>
                          <a href="<?php echo base_url('user/disposisi/hapus/') . $d['id_dp'].'/'.$id_sm; ?>" onclick="return confirm('apakah anda yakin ingin menghapusnya?')">
                            <button class="btn btn-link btn-danger" type="button" data-toggle="tooltip" data-original-title="Hapus">
                              <i class="fa fa-trash"></i>
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
                  <form name="edit" action="<?php echo base_url('user/disposisi/update/').$id_sm ?>" method="post" onsubmit="return validateFormEdit()">
                    <input type="hidden" name="id_dp">
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
                            <label>Tanggal Disposisi</label>
                            <input type="date" class="form-control" placeholder="" name="tgl_dp">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Pengirim</label>
                            <input type="text" class="form-control" placeholder="" name="pengirim">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Tujuan</label>
                            <input type="text" class="form-control" placeholder="" name="tujuan_dp">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Sifat Surat</label>
                            <input type="text" class="form-control" placeholder="" name="sifatsurat">
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
    var id_dp = baris.getAttribute("data-id");
    var no_surat = baris.getAttribute("data-no_surat");
    var tgl_dp = baris.getAttribute("data-tgl_dp");
    var pengirim = baris.getAttribute("data-pengirim");
    var tujuan_dp = baris.getAttribute("data-tujuan_dp");
    var sifatsurat = baris.getAttribute("data-sifatsurat");
    var keterangan = baris.getAttribute("data-keterangan");

    document.edit.id_dp.value = id_dp;
    document.edit.no_surat.value = no_surat;
    document.edit.tgl_dp.value = tgl_dp;
    document.edit.pengirim.value = pengirim;
    document.edit.tujuan_dp.value = tujuan_dp;
    document.edit.sifatsurat.value = sifatsurat;
    document.edit.keterangan.value = keterangan;
  }
</script>