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
            <a href="<?php echo base_url('user/masuk/input/')?>">
              <button class="btn btn-primary btn-round ml-auto" type="button" data-toggle="tooltip" >
              <i class="fa fa-plus"></i>
              Input Surat Masuk
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
                        <a href="<?php echo base_url('user/masuk/edit/') . $sm['id_sm']; ?>">
                        <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip"  data-original-title="Edit">
                        <i class="fa fa-edit"></i>
                        </button>
                        </a>
                        <a href="<?php echo base_url('user/disposisi/listDisposisi/') . $sm['id_sm']; ?>">
                          <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="Disposisi">
                          <i class="fas fa-envelope-open"></i>
                          </button>
                        </a>
                        <a href="<?php echo base_url('user/masuk/hapus/') . $sm['id_sm']; ?>" onclick="return confirm('apakah anda yakin ingin menghapusnya?')">
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