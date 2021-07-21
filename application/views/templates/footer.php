<footer class="footer">
  <div class="container-fluid">
    <nav class="pull-left">
      <ul class="nav">
      </ul>
    </nav>
    <div class="copyright ml-auto">
      2021
    </div>
  </div>
</footer>
</div>

<!-- Custom template | don't include it in your project! -->
<div class="custom-template">
  <div class="title">Settings</div>
  <div class="custom-content">
    <div class="switcher">
      <div class="switch-block">
        <h4>Logo Header</h4>
        <div class="btnSwitch">
          <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
          <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
          <br />
          <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
          <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
        </div>
      </div>
      <div class="switch-block">
        <h4>Navbar Header</h4>
        <div class="btnSwitch">
          <button type="button" class="changeTopBarColor" data-color="dark"></button>
          <button type="button" class="changeTopBarColor" data-color="blue"></button>
          <button type="button" class="changeTopBarColor" data-color="purple"></button>
          <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
          <button type="button" class="changeTopBarColor" data-color="green"></button>
          <button type="button" class="changeTopBarColor" data-color="orange"></button>
          <button type="button" class="changeTopBarColor" data-color="red"></button>
          <button type="button" class="changeTopBarColor" data-color="white"></button>
          <br />
          <button type="button" class="changeTopBarColor" data-color="dark2"></button>
          <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
          <button type="button" class="changeTopBarColor" data-color="purple2"></button>
          <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
          <button type="button" class="changeTopBarColor" data-color="green2"></button>
          <button type="button" class="changeTopBarColor" data-color="orange2"></button>
          <button type="button" class="changeTopBarColor" data-color="red2"></button>
        </div>
      </div>
      <div class="switch-block">
        <h4>Sidebar</h4>
        <div class="btnSwitch">
          <button type="button" class="selected changeSideBarColor" data-color="white"></button>
          <button type="button" class="changeSideBarColor" data-color="dark"></button>
          <button type="button" class="changeSideBarColor" data-color="dark2"></button>
        </div>
      </div>
      <div class="switch-block">
        <h4>Background</h4>
        <div class="btnSwitch">
          <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
          <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
          <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
          <button type="button" class="changeBackgroundColor" data-color="dark"></button>
        </div>
      </div>
    </div>
  </div>
  <div class="custom-toggle">
    <i class="flaticon-settings"></i>
  </div>
</div>
<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/core/popper.min.js"></script>
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Chart JS -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/atlantis.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/setting-demo2.js"></script>
<?php if ($title == "Dashboard") : ?>
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

    $year['sm'] = "SELECT MONTH(tgl_input) as month , COUNT(tgl_input) as count FROM surat_masuk WHERE tgl_input >= NOW() - INTERVAL 1 YEAR GROUP BY month";
    $year['sk'] = "SELECT MONTH(tgl_input) as month , COUNT(tgl_input) as count FROM surat_keluar WHERE tgl_input >= NOW() - INTERVAL 1 YEAR GROUP BY month";

    $i=0;
    $perWeekQuery['sm'] = $this->db->query($perWeek['sm'])->result();
    $perWeekResult['sm'] = [];
    for($i=0;$i<6;$i++){
      $perWeekResult['sm'][$i] = 0;
      foreach($perWeekQuery['sm'] as $arr){
        $perWeekResult['sm'][$arr->day] = $arr->count;
      }
    }
    $i=0;
    $perWeekQuery['sk'] = $this->db->query($perWeek['sk'])->result();
    $perWeekResult['sk'] = [];
    for($i=0;$i<=6;$i++){
      $perWeekResult['sk'][$i] = 0;
      foreach($perWeekQuery['sk'] as $arr){
        $perWeekResult['sk'][$arr->day] = $arr->count;
      }
    }
    ksort($perWeekResult['sm']);
    ksort($perWeekResult['sk']); 

    $perYearQuery['sm'] = $this->db->query($year['sm'])->result();
    $perYearResult['sm'] = [];
    $perYearQuery['sk'] = $this->db->query($year['sk'])->result();
    $perYearResult['sk'] = [];

    $i=0;
    for($i=1;$i<=12;$i++){
      $perYearResult['sk'][$i] = 0;
      foreach($perYearQuery['sk'] as $arr){
        $perYearResult['sk'][$arr->month] = $arr->count;
      }
      $perYearResult['sm'][$i] = 0;
      foreach($perYearQuery['sm'] as $arr){
        $perYearResult['sm'][$arr->month] = $arr->count;
      }
    }
    ksort($perYearResult['sm']);
    ksort($perYearResult['sk']);
  ?>
  <script>
    Circles.create({
      id: 'circles-sm',
      radius: 45,
      value: <?= $hari_ini['sm']; ?>,
      maxValue: <?= $hari_ini['sk'] + $hari_ini['sm']; ?>,
      width: 7,
      text: <?= $hari_ini['sm']; ?>,
      colors: ['#f1f1f1', '#2BB930'],
      duration: 400,
      wrpClass: 'circles-wrp',
      textClass: 'circles-text',
      styleWrapper: true,
      styleText: true
    })

    Circles.create({
      id: 'circles-sk',
      radius: 45,
      value: <?= $hari_ini['sk']; ?>,
      maxValue: <?= $hari_ini['sk'] + $hari_ini['sm']; ?>,
      width: 7,
      text: <?= $hari_ini['sk']; ?>,
      colors: ['#f1f1f1', '#FF9E27'],
      duration: 400,
      wrpClass: 'circles-wrp',
      textClass: 'circles-text',
      styleWrapper: true,
      styleText: true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
      type: 'bar',
      data: {
        labels: ["Sabtu", "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat"],
        datasets: [{
          label: "Surat Masuk",
          backgroundColor: '#63da67',
          borderColor: 'rgb(23, 125, 255)',
          data: [<?= implode(',',$perWeekResult['sm']) ?>],
        },{
          label: "Surat Keluar",
          backgroundColor: '#f8a1a6',
          borderColor: 'rgb(23, 125, 255)',
          data: [<?= implode(',',$perWeekResult['sk']) ?>],
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        scales: {
          yAxes: [{
            ticks: {
              display: false //this will remove only the label
            },
            gridLines: {
              drawBorder: false,
              display: false
            }
          }],
          xAxes: [{
            gridLines: {
              drawBorder: false,
              display: false
            }
          }]
        },
      }
    });
    var ctx = document.getElementById('statisticsChart').getContext('2d');

    var statisticsChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [ {
          label: "Surat Keluar",
          borderColor: '#f3545d',
          pointBackgroundColor: 'rgba(243, 84, 93, 0.6)',
          pointRadius: 0,
          backgroundColor: 'rgba(243, 84, 93, 0.4)',
          legendColor: '#f3545d',
          fill: true,
          borderWidth: 2,
          data: [<?= implode(',',$perYearResult['sk']) ?>]
        }, {
          label: "Surat Masuk",
          borderColor: '#2bb930',
          pointBackgroundColor: '#9eeea0',
          pointRadius: 0,
          backgroundColor: '#9eeea0',
          legendColor: '#2bb930',
          fill: true,
          borderWidth: 2,
          data: [<?= implode(',',$perYearResult['sm']) ?>]
        }]
      },
      options : {
        responsive: true, 
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        tooltips: {
          bodySpacing: 4,
          mode:"nearest",
          intersect: 0,
          position:"nearest",
          xPadding:10,
          yPadding:10,
          caretPadding:10
        },
        layout:{
          padding:{left:5,right:5,top:15,bottom:15}
        },
        scales: {
          yAxes: [{
            ticks: {
              fontStyle: "500",
              beginAtZero: false,
              maxTicksLimit: 5,
              padding: 10
            },
            gridLines: {
              drawTicks: false,
              display: false
            }
          }],
          xAxes: [{
            gridLines: {
              zeroLineColor: "transparent"
            },
            ticks: {
              padding: 10,
              fontStyle: "500"
            }
          }]
        }, 
        legendCallback: function(chart) { 
          var text = []; 
          text.push('<ul class="' + chart.id + '-legend html-legend">'); 
          for (var i = 0; i < chart.data.datasets.length; i++) { 
            text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>'); 
            if (chart.data.datasets[i].label) { 
              text.push(chart.data.datasets[i].label); 
            } 
            text.push('</li>'); 
          } 
          text.push('</ul>'); 
          return text.join(''); 
        }  
      }
    });

    var myLegendContainer = document.getElementById("myChartLegend");

    // generate HTML legend
    myLegendContainer.innerHTML = statisticsChart.generateLegend();

    // bind onClick event to all LI-tags of the legend
    var legendItems = myLegendContainer.getElementsByTagName('li');
    for (var i = 0; i < legendItems.length; i += 1) {
      legendItems[i].addEventListener("click", legendClickCallback, false);
    }

    $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: 'line',
      height: '70',
      width: '100%',
      lineWidth: '2',
      lineColor: '#ffa534',
      fillColor: 'rgba(255, 165, 52, .14)'
    });
  </script>
<?php endif ?>
<script>
  $(document).ready(function() {
    $('#basic-datatables').DataTable({});

    $('#multi-filter-select').DataTable({
      "pageLength": 5,
      initComplete: function() {
        this.api().columns().every(function() {
          var column = this;
          var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo($(column.footer()).empty())
            .on('change', function() {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
              );

              column
                .search(val ? '^' + val + '$' : '', true, false)
                .draw();
            });

          column.data().unique().sort().each(function(d, j) {
            select.append('<option value="' + d + '">' + d + '</option>')
          });
        });
      }
    });

    // Add Row
    $('#add-row').DataTable({
      "pageLength": 5,
    });

    var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

    $('#addRowButton').click(function() {
      $('#add-row').dataTable().fnAddData([
        $("#addName").val(),
        $("#addPosition").val(),
        $("#addOffice").val(),
        action
      ]);
      $('#addRowModal').modal('hide');

    });
  });
</script>
</body>

</html>