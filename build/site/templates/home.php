<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <?php snippet('partials/section-header', $services) ?>
      <div class="carousel">
        <div id="slider-controls" class="slider-controls">
          <button class="bullet-icon" type="button">
            <?= (new Asset("assets/images/icons/chevron-left.svg"))->content() ?>
            <span class="sr-only">Zurück</span>
          </button>
          <button class="bullet-icon" type="button">
            <?= (new Asset("assets/images/icons/chevron-right.svg"))->content() ?>
            <span class="sr-only">Weiter</span>
          </button>
        </div>
        <div id="slider" class="slider">
          <?php foreach ($specialties as $item) : ?>
          <div class="slide">
            <img src="<?= $item->image()->toFile()->url() ?>" alt="">
            <h3 class="slide-title"><?= $item->title() ?></h3>
            <?= $item->short()->kt() ?>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="center">
        <p class="lead">
          <strong><?= $page->text() ?></strong>
        </p>
        <a class="button" href="<?= $services->url() ?>">Wir sind behilflich →</a>
      </div>
    </div>
  </div>
  <?php
    snippet('partials/testimonials');
    snippet('partials/lets-help');
  ?>

<?php snippet('footer') ?>
