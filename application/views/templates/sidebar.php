<!-- Sidebar -->
<div class="sidebar sidebar-style-2">

  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-primary">
        <?php $menu = $this->db->get('menu')->result_array() ?>
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