<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <?= $page->text()->kt() ?>
    </div>
  </div>

<?php snippet('footer') ?>
