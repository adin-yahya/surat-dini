<!-- Sidebar -->
<div class="sidebar sidebar-style-2">

  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <img src="<?= base_url('assets/atlantis-lite'); ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              Hizrian
              <span class="user-level">Administrator</span>
              <span class="caret"></span>
            </span>
          </a>
          <div class="clearfix"></div>

          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="#profile">
                  <span class="link-collapse">My Profile</span>
                </a>
              </li>
              <li>
                <a href="#edit">
                  <span class="link-collapse">Edit Profile</span>
                </a>
              </li>
              <li>
                <a href="#settings">
                  <span class="link-collapse">Settings</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav nav-primary">
        <?php $menu = $this->db->get('menu_kepsek')->result_array() ?>
        <?php foreach ($menu as $m) : ?>
          <?php if ($m['name'] == $title) : ?>
            <li class="nav-item active">
              <a href="<?= base_url($m['url']); ?>">
                <?= $m['icon']; ?>
                <p><?= $m['name']; ?></p>
              </a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a href="<?= base_url($m['url']); ?>">
                <?= $m['icon']; ?>
                <p><?= $m['name']; ?></p>
              </a>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</div>
<div class="main-panel">