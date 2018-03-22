<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <?php snippet('partials/section-header', $page) ?>
      <div class="center">
        <?= $page->text()->kt() ?>
      </div>
      <ul class="bullets">
        <?php foreach ($bulletItems as $item) : ?>
        <li class="bullet">
          <div class="bullet-icon">
            <?= $item->image()->toFile()->content() ?>
          </div>
          <div class="bullet-body">
            <h3 class="bullet-title"><?= $item->title() ?></h3>
            <?= $item->description()->kt() ?>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <?php snippet('partials/testimonials') ?>

  <div class="team section">
    <header class="section-header">
      <h4><?= $page->team_subheading() ?></h4>
      <h2><?= $page->team_heading() ?></h2>
    </header>
    <div class="grid-container grid-container--small">
      <?php
        $count = 0;
        foreach ($teamItems as $item) :
      ?>
      <div <?php e($count > 0, ' class="assistant"', ' class="seiring"') ?>>
        <div class="card">
          <div class="photo">
            <img src="<?= $item->image()->toFile()->url() ?>" alt="">
          </div>
          <h3 class="slide-title"><?= $item->title() ?></h3>
          <h4 class="position"><?= $item->position() ?></h4>
          <?= $item->description()->kt() ?>
        </div>
      </div>
      <?php
        $count++;
        endforeach
      ?>
    </div>
  </div>

  <?php snippet('partials/lets-help'); ?>

<?php snippet('footer') ?>
