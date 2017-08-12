<?php snippet('header') ?>

  <div class="page-title">
    <div class="grid-container">
      <h1><?= $page->title() ?></h1>
    </div>
  </div>
  <div class="page-content">
    <div class="grid-container">
      <?= $page->intro()->kt() ?>
      <?= $page->text()->kt() ?>
      <div class="carousel">
        <div class="slider">
          <?php $sliderItems = page('unsere-leistungen')->carousel()->toStructure(); ?>
          <?php foreach ($sliderItems as $item) : ?>
            <div>
              <img src="<?= $item->image()->toFile()->url() ?>" alt="">
              <h3><?= $item->title() ?></h3>
              <?= $item->description()->kt() ?>
            </div>
          <?php endforeach ?>
        </div>
        <div class="slider-controls">
          <button class="bullet-icon" type="button">
            <?= (new Asset("assets/images/icons/chevron-left.svg"))->content() ?>
            <span class="sr-only">Zurück</span>
          </button>
          <button class="bullet-icon" type="button">
            <?= (new Asset("assets/images/icons/chevron-right.svg"))->content() ?>
            <span class="sr-only">Weiter</span>
          </button>
        </div>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>
