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
            <a href="<?php echo base_url('user/keluar/input/')?>">
              <button class="btn btn-primary btn-round ml-auto" type="button" data-toggle="tooltip" >
              <i class="fa fa-plus"></i>
              Input Surat Keluar
              </button>
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perihal</th>
                    <th>Lampiran</th>
                    <th>Penerima Surat</th>
                    <th>Keterangan</th>
                    <th>Pembuka Surat</th>
                    <th>Isi Surat</th>
                    <th>Penutup Surat</th>
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
                      <td><?= $sk['lampiran']; ?></td>
                      <td><?= $sk['penerima']; ?></td>
                      <td><?= $sk['keterangan']; ?></td>
                      <td><?= $sk['pembuka_sk']; ?></td>
                      <td><?= $sk['isi_sk']; ?></td>
                      <td><?= $sk['penutup_sk']; ?></td>
                      <td>
                        <div class="form-button-action">
                          <a href="<?php echo base_url('user/keluar/edit/') . $sk['id_sk']; ?>">
                        <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip">
                        <i class="fa fa-edit"></i>
                        </button>
                        </a>
                          <a href="<?php echo base_url('user/keluar/pdf/') . $sk['id_sk']; ?>">
                            <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="Buat Surat">
                              <i class="fas fa-file-alt"></i>
                            </button>
                          </a>
                          <a href="<?php echo base_url('user/keluar/hapus/') . $sk['id_sk']; ?> " onclick="return confirm('apakah anda yakin ingin menghapusnya?')">
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>