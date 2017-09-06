<?php snippet('header') ?>

  <div class="page-title">
    <div class="grid-container">
      <h1><?= $page->title() ?></h1>
    </div>
  </div>
  <div class="page-content">
    <div class="grid-container grid-container--small">
      <?= $page->intro()->kt() ?>
      <?= $page->text()->kt() ?>
    </div>
  </div>

<?php snippet('footer') ?>
