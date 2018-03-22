<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <?php snippet('partials/section-header', $page) ?>
      <div class="center">
        <?= $page->text()->kt() ?>
      </div>
    </div>
    <div class="grid-container grid-container--small">
      <div id="accordion" class="accordion">
        <?php
          $count = 0;
          foreach ($specialties as $item) :
          $count++;
        ?>
        <div id="accordion-trigger-<?= $count ?>" class="accordion-trigger" data-controls="accordion-panel-<?= $count ?>" aria-level="2">
          <h3 class="accordion-title"><?= $item->title() ?></h3>
          <?= $accordionImage ?>
        </div>
        <div id="accordion-panel-<?= $count ?>" class="accordion-panel">
          <?= $item->long()->kt() ?>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>

  <div class="engagement">
    <div class="grid-container">
      <h3 class="engagement-title">Engagement:</h3>
      <ul class="has-bullets">
        <?php foreach ($engagements as $item) : ?>
        <li><?= $item->text()->kt() ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <?php snippet('partials/lets-help') ?>

<?php snippet('footer') ?>
