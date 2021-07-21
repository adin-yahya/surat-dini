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
            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
              <i class="fa fa-plus"></i>
              Tambah User
            </button>
          </div>
          <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <form method="post" action="<?php echo base_url('user/datauser/tambah') ?>">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Role</label>
                            <input type="text" class="form-control" placeholder="role" name="role">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Telp</label>
                            <input type="text" class="form-control" placeholder="Telp" name="telp">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="Password" name="password">
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
                    <th>
                      No
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Username
                    </th>
                    <th>
                      Role
                    </th>
                    <th>
                      Telp
                    </th>
                    <th>
                      Email
                    </th>
                    <th style="width: 10%">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($datauser as $d) : ?>
                    <tr>
                      <td>
                        <?php echo $i++ ?>
                      </td>
                      <td>
                        <?php echo $d['nama_user']; ?>
                      </td>
                      <td>
                        <?php echo $d['username']; ?>
                      </td>
                      <td>
                        <?php echo $d['role']; ?>
                      </td>
                      <td>
                        <?php echo $d['telp']; ?>
                      </td>
                      <td>
                        <?php echo $d['email']; ?>
                      </td>
                      <td>
                        <div class="form-button-action">
                          <a href="#" data-toggle="modal" data-target="#modalEdit" data-id="<?= $d['id_user'] ?>" data-nama_user="<?= $d['nama_user'] ?>" data-username="<?= $d['username'] ?>" data-role="<?= $d['role'] ?>" data-telp="<?= $d['telp'] ?>" data-email="<?= $d['email'] ?>" data-password="<?= $d['password'] ?>" onclick="loadEditData(this)">
                            <button class="btn btn-link btn-warning" type="button" data-toggle="tooltip" data-original-title="Ubah">
                              <i class="fa fa-edit"></i>
                            </button>
                          </a>
                          <a href="<?php echo base_url('user/datauser/hapus/') . $d['id_user']; ?>" onclick="return confirm('apakah anda yakin ingin menghapusnya?')">
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
                  <form name="edit" action="<?php echo base_url('user/datauser/update') ?>" method="post" onsubmit="return validateFormEdit()">
                    <input type="hidden" name="id_user">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Role</label>
                            <input type="text" class="form-control" placeholder="role" name="role">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Telp</label>
                            <input type="text" class="form-control" placeholder="Telp" name="telp">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="Password" name="password">
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
    var id_user = baris.getAttribute("data-id");
    var nama_user = baris.getAttribute("data-nama_user");
    var username = baris.getAttribute("data-username");
    var role = baris.getAttribute("data-role");
    var telp = baris.getAttribute("data-telp");
    var email = baris.getAttribute("data-email");
    var password = baris.getAttribute("data-password");

    document.edit.id_user.value = id_user;
    document.edit.nama_user.value = nama_user;
    document.edit.username.value = username;
    document.edit.role.value = role;
    document.edit.telp.value = telp;
    document.edit.email.value = email;
    document.edit.password.value = password;
  }
</script>