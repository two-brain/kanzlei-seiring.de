<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <header class="section-header">
        <h4><?= $page->text_subheading() ?></h4>
        <h2><?= $page->text_heading() ?></h2>
      </header>
      <div class="center">
        <?= $page->text()->kt() ?>
      </div>
      <div class="flex-boxes">
        <?php
          $sliderItems = $page->carousel()->toStructure();
          foreach ($sliderItems as $item) :
        ?>
        <div class="flex-box<?php e($item->is_wide() == '1', ' flex-box--is-wide') ?>">
          <img src="<?= $item->image()->toFile()->url() ?>" alt="">
          <h3><?= $item->title() ?></h3>
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
        <?php
          $engagementItems = $page->engagement()->toStructure();
          foreach ($engagementItems as $item) :
        ?>
        <li><?= $item->text()->kt() ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
  <div class="page-content">
    <div class="grid-container">
      <?php snippet('lets-help'); ?>
    </div>
  </div>

<?php snippet('footer') ?>
