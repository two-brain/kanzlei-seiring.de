<?php snippet('header') ?>

  <div class="page-title">
    <div class="grid-container">
      <h1><?= $page->title()->html() ?></h1>
    </div>
  </div>
  <div class="page-content">
    <div class="grid-container">
      <?= $page->text()->kirbytext() ?>
    </div>
  </div>

<?php snippet('footer') ?>
