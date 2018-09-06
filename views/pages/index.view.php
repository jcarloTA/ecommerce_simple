<?php include APP_PATH . '/views/partials/head.view.php'; ?>
<?php include APP_PATH . '/views/partials/header.view.php'; ?>
    <div class="l-slider">
      <div class="ed-container">
        <div class="ed-item">
            <img src="<?= PUBLIC_PATH ?>/img/banner.jpg"/>
        </div>
      </div>
    </div>
    <div class="l-main ed-container">
      <div class="ed-item">
        <h2 class="productos__title">Productos destacados</h2>
        <?php include APP_PATH . '/views/games/partials/list.view.php';?>
        <?php include APP_PATH . '/views/partials/sosial.view.php'; ?>
      </div>
    </div>

<?php include APP_PATH . '/views/partials/foot.view.php'; ?>