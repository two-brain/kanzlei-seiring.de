<div class="hero" style="background-image: url('<?= $page->bg()->toFile()->thumb(array('width' => 1440, 'height' => 960, 'quality' => 85, 'crop' => true))->url() ?>')">
  <div class="hero-content">
    <h1><?= $page->intro_heading() ?></h1>
    <p class="lead">
      <?= $page->intro() ?>
    </p>
    <div class="more-options">
      <a class="button transparent" href="#<?= $page->uid() ?>">
        Hier erfahren Sie mehr ↓
      </a>
    </div>
  </div>
  <div class="hero-bottom"></div>
</div>
