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
    $hari_ini['sk'] = $this->db->query($sk.$today)->num_rows();
    $hari_ini['sm'] = $this->db->query($sm.$today)->num_rows();
    $minggu_ini['sk'] = $this->db->query($sm.$week)->num_rows();
    $minggu_ini['sm'] = $this->db->query($sm.$week)->num_rows();
  ?>
  <script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/demo.js"></script>
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
        labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
        datasets: [{
          label: "Total Income",
          backgroundColor: '#ff9e27',
          borderColor: 'rgb(23, 125, 255)',
          data: [6, 4, 9, 5, 4, 6, 4],
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