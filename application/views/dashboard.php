<?php
    $sk ="SELECT * FROM surat_keluar ";
    $sm ="SELECT * FROM surat_masuk ";
    $today = "where DATE_FORMAT(tgl_input, \"%Y-%m-%d\") = '".date("Y-m-d")."'";
    $week = "where WEEK(NOW())=WEEK(tgl_input)";

    $perWeek['sm'] = "SELECT DAYOFWEEK(DATE(tgl_input)) as day, COUNT(tgl_input) as count FROM surat_masuk GROUP BY DAYOFWEEK(DATE(tgl_input))";
    $perWeek['sk'] = "SELECT DAYOFWEEK(DATE(tgl_input)) as day, COUNT(tgl_input) as count FROM surat_keluar GROUP BY DAYOFWEEK(DATE(tgl_input))";

    $hari_ini['sk'] = $this->db->query($sk.$today)->num_rows();
    $hari_ini['sm'] = $this->db->query($sm.$today)->num_rows();

    $minggu_ini['sk'] = $this->db->query($sk.$week)->num_rows();
    $minggu_ini['sm'] = $this->db->query($sm.$week)->num_rows();

    $perWeekQuery['sm'] = $this->db->query($perWeek['sm'])->result();
    $perWeekResult['sm'] = [];
    for($i=0;$i<=7;$i++){
      $perWeekResult['sm'][$i] = 0;
      foreach($perWeekQuery['sm'] as $arr){
        $perWeekResult['sm'][$arr->day] = $arr->count;
      }
    }
    $perWeekQuery['sk'] = $this->db->query($perWeek['sk'])->result();
    $perWeekResult['sk'] = [];
    for($i=0;$i<=7;$i++){
      $perWeekResult['sk'][$i] = 0;
      foreach($perWeekQuery['sk'] as $arr){
        $perWeekResult['sk'][$arr->day] = $arr->count;
      }
    }
    ksort($perWeekResult['sm']);
    ksort($perWeekResult['sk']); 
  ?>
<div class="content">
  <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div class="text-white">
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