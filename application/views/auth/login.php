<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?= base_url('assets/atlantis-lite'); ?>/assets/img/icon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="<?= base_url('assets/atlantis-lite'); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['<?= base_url('assets/atlantis-lite'); ?>/assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/atlantis-lite'); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/atlantis-lite'); ?>/assets/css/atlantis.min.css">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="<?= base_url('assets/atlantis-lite'); ?>/assets/css/demo.css">
</head>

<body>
  <div class="container">
    <div class="row" style="height: 100vh">
      <div class="col align-self-center">
        <div class="row justify-content-center">
          <div class="card">
            <div class="card-body">
              <img class="mb-3" src="<?= base_url('assets') ?>/img/logo.png" alt="logo">
              <form method="post" action="<?= base_url('login/masuk') ?>">
                <div class="form-group">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <i class="fa fa-user"></i>
                    </span>
                    <input value="" name="username" type="text" class="form-control" autofocus placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <i class="fas fa-lock"></i>
                    </span>
                    <input value="" id="myPassword" name="password" type="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-check ml-2">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" onclick="showPassword()">
                    <span class="form-check-sign">tampilkan password</span>
                  </label>
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-block mt-3">Login</button>
              </form>
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
</body>

</html>