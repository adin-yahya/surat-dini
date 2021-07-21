<?php
  $sk ="SELECT * FROM surat_keluar ";
  $sm ="SELECT * FROM surat_masuk ";
  $today = "where DATE_FORMAT(tgl_input, \"%Y-%m-%d\") = '".date("Y-m-d")."'";
  $week = "where WEEK(NOW())=WEEK(tgl_input)";
  $hari_ini['sk'] = $this->db->query($sk.$today)->num_rows();
  $hari_ini['sm'] = $this->db->query($sm.$today)->num_rows();
  $minggu_ini['sk'] = $this->db->query($sm.$week)->num_rows();
  $minggu_ini['sm'] = $this->db->query($sm.$week)->num_rows();
?>
<div class="content">
  <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
          <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
          <h5 class="text-white op-7 mb-2">Manajemen Surat Keluar - Masuk</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="page-inner mt--5">
    <div class="row mt--2">
      <div class="col-md-6">
        <div class="card full-height">
          <div class="card-body">
            <div class="card-title">Statistik Harian</div>
            <div class="card-category">Surat keluar masuk hari ini</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
              <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-sk"></div>
                <h6 class="fw-bold mt-3 mb-0">Surat Keluar</h6>
              </div>
              <div class="px-2 pb-2 pb-md-0 text-center">
                <div id="circles-sm"></div>
                <h6 class="fw-bold mt-3 mb-0">Surat Masuk</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card full-height">
          <div class="card-body">
            <div class="card-title">Total surat keluar &amp; masuk minggu ini</div>
            <div class="row py-3">
              <div class="col-md-4 d-flex flex-column justify-content-around">
                <div>
                  <h6 class="fw-bold text-uppercase text-success op-8">Surat Masuk</h6>
                  <h3 class="fw-bold"><?= $minggu_ini['sm'] ?> Surat</h3>
                </div>
                <div>
                  <h6 class="fw-bold text-uppercase text-danger op-8">Surat Keluar</h6>
                  <h3 class="fw-bold"><?= $minggu_ini['sk'] ?> Surat</h3>
                </div>
              </div>
              <div class="col-md-8">
                <div id="chart-container">
                  <canvas id="totalIncomeChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-head-row">
              <div class="card-title">Statistik Surat Tahun <?= date("Y") ?></div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-container" style="min-height: 375px">
              <canvas id="statisticsChart"></canvas>
            </div>
            <div id="myChartLegend"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
   $(document).ready(function() {
      Circles.create({
      id: 'circles-sk',
      radius: 45,
      value: 60,
      maxValue: 100,
      width: 7,
      text: 5,
      colors: ['#f1f1f1', '#FF9E27'],
      duration: 400,
      wrpClass: 'circles-wrp',
      textClass: 'circles-text',
      styleWrapper: true,
      styleText: true
    })

    Circles.create({
      id: 'circles-sm',
      radius: 45,
      value: 70,
      maxValue: 100,
      width: 7,
      text: 36,
      colors: ['#f1f1f1', '#2BB930'],
      duration: 400,
      wrpClass: 'circles-wrp',
      textClass: 'circles-text',
      styleWrapper: true,
      styleText: true
    })
  })
</script>