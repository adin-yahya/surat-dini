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
            <div class="d-flex align-items-center">
             <a href="<?php echo base_url('user/detaildispo/pdf/') . $disposisi['id_dp'] ?>">
               <button class="btn btn-primary btn-round ml-auto">
              <i class="fas fa-file-pdf"></i>
                    PDF
            </button>
             </a>
            </div>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                <p>No Surat : <?php echo $disposisi['no_surat'] ?></p>
                <p>Tanggal Disposisi : <?php echo $disposisi['tgl_dp'] ?></p>
                <p>Pengirim : <?php echo $disposisi['pengirim'] ?></p>
                <p>Tujuan Disposisi : <?php echo $disposisi['tujuan_dp'] ?></p>
                <p>Sifat Surat : <?php echo $disposisi['sifatsurat'] ?></p>
                <p>Keterangan : <?php echo $disposisi['keterangan'] ?></p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>