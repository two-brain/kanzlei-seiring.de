<?php
  $hero = $page->hero();

  if ($hero->isNotEmpty()) {
    $heroImage = $hero->toFile()->thumb(array(
      'width' => 1440,
      'height' => 960,
      'quality' => 85
    ));
  } else {
    $heroImage = (new Asset('assets/images/fallback.jpg'));
  }
?>

<div class="hero" style="background-image: url('<?=$heroImage->url() ?>')">
  <div class="hero-content">
    <h1><?= $page->intro_heading() ?></h1>
    <p class="lead">
      <?= $page->intro() ?>
    </p>
    <div class="more-options">
      <?php if ($page->isHomePage()) : ?>
      <a class="button" href="mailto:<?= $site->mail() ?>">
        <?= (new Asset('assets/images/icons/mail.svg'))->content() ?>
        <?= $site->mail() ?>
      </a>
      <?php endif ?>
      <a class="button transparent" href="#<?= $page->uid() ?>">
        Hier erfahren Sie mehr ↓
      </a>
    </div>
  </div>
  <div class="hero-bottom"></div>
</div>
