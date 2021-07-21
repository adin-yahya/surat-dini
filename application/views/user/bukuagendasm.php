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
            <?php if ($dari === null || $sampai === null || count($suratmasuk) === 0) : ?>
              <a href="#">
                <button class="btn btn-icon btn-primary btn-round">
                  <i class="fas fa-file-pdf"></i>
                </button>
              </a>
            <?php else : ?>
              <a href="<?php echo base_url('user/bukuagendasm/pdf/') . $dari . '/' . $sampai ?>">
                <button class="btn btn-icon btn-primary btn-round">
                  <i class="fas fa-file-pdf"></i>
                </button>
              </a>
            <?php endif ?>
            <form action="" method="post">
              <div class="row mt-2">
                <div class="col">
                  <label>Dari Tanggal : </label>
                  <input type="date" name="dari" class="form-control">
                </div>
                <div class="col">
                  <label>Sampai Tanggal : </label>
                  <input type="date" name="sampai" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-icon btn-primary btn-round mt-4">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    No Surat
                  </th>
                  <th>
                    Perihal
                  </th>
                  <th>
                    Tanggal Surat
                  </th>
                  <th>
                    Tanggal Terima
                  </th>
                  <th>
                    Pengirim Surat
                  </th>
                  <th>
                    Keterangan
                  </th>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($suratmasuk as $sm) : ?>
                    <tr>
                      <td>
                        <?php echo $i++ ?>
                      </td>
                      <td>
                        <?php echo $sm['no_surat']; ?>
                      </td>
                      <td>
                        <?php echo $sm['perihal']; ?>
                      </td>
                      <td>
                        <?php echo $sm['tgl_surat']; ?>
                      </td>
                      <td>
                        <?php echo $sm['tgl_terima']; ?>
                      </td>
                      <td>
                        <?php echo $sm['pengirim']; ?>
                      </td>
                      <td>
                        <?php echo $sm['keterangan']; ?>
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