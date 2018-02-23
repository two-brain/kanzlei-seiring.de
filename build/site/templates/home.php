<?php snippet('header') ?>

  <div class="hero" style="background-image: url('<?= $page->bg()->toFile()->thumb(array('width' => 1440, 'height' => 960, 'quality' => 85, 'crop' => true))->url() ?>')">
    <div class="hero-content">
      <h1><?= $page->intro_heading() ?></h1>
      <p class="lead">
        <?= $page->intro() ?>
      </p>
      <p class="more-options">
        <a class="button" href="mailto:<?= $site->mail() ?>">
          <?= (new Asset('assets/images/icons/mail.svg'))->content() ?>
          <?= $site->mail() ?>
        </a>
        <a class="button transparent" href="#<?= $page->uid() ?>">
          Hier erfahren Sie mehr ↓
        </a>
      </p>
    </div>
    <div class="hero-bottom"></div>
  </div>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <header class="section-header">
        <h4><?= page('unsere-leistungen')->text_subheading() ?></h4>
        <h2><?= page('unsere-leistungen')->text_heading() ?></h2>
      </header>
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
          <?php
            $sliderItems = page('unsere-leistungen')->carousel()->toStructure();
            foreach ($sliderItems as $item) :
          ?>
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
        <a class="button" href="<?= page('unsere-leistungen')->url() ?>">Wir sind behilflich →</a>
      </div>
    </div>
  </div>

  <div id="<?= page('ueber-uns')->uid() ?>" class="testimonials overlay overlay--dark">
    <div class="grid-container">
      <?php
      $testimonials = $site->testimonials()->toStructure();
      foreach ($testimonials as $testimonial) :
        ?>
        <blockquote>
          <?= $testimonial->text()->kt() ?>
          <cite class="sr-only">Bewertung vom <?= $testimonial->date() ?> von <?= $testimonial->name() ?> auf <a href="<?= $testimonial->url() ?>"><?= $testimonial->source() ?></a></cite>
        </blockquote>
      <?php endforeach ?>
      <a class="button transparent" href="<?= page('ueber-uns')->url() ?>">Lernen Sie uns kennen →</a>
    </div>
  </div>

  <div id="<?= page('forschung-und-lehre')->uid() ?>" class="news section">
    <div class="grid-container">
      <div class="news-intro">
        <header class="section-header">
          <h4><?= page('forschung-und-lehre')->text_subheading() ?></h4>
          <h2><?= page('forschung-und-lehre')->text_heading() ?></h2>
        </header>
        <div class="clearfix">
          <?= page('forschung-und-lehre')->text()->kt() ?>
          <a class="button" href="<?= page('forschung-und-lehre')->url() ?>">Zum Archiv →</a>
        </div>
      </div>
      <div class="news-list">
        <div class="blog-list">
          <?php foreach(page('forschung-und-lehre')->children()->visible()->flip()->limit(2) as $article) : ?>
            <a class="blog-item blog-item--is-bordered" href="<?= $article->url() ?>">
              <div class="blog-date">
                <time datetime="<?= $article->date('%Y-%m-%d') ?>">
                  <?= $article->date('%d'); ?><br>
                  <span><?= $article->date('%b'); ?></span>
                </time>
              </div>
              <div class="blog-body">
                <h3 class="blog-title"><?= $article->title()->html() ?></h3>
                <?= $article->intro()->kirbytext() ?>
              </div>
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>

  <div id="<?= page('kontakt')->uid() ?>" class="contact section">
    <div class="grid-container">
      <div class="contact-block">
        <header class="section-header">
          <h4><?= page('kontakt')->form_subheading() ?></h4>
          <h2><?= page('kontakt')->form_heading() ?></h2>
        </header>
        <form class="form">
          <?php snippet('form-fields'); ?>
          <div class="more-options">
            <button class="button" type="submit">
              <?= (new Asset('assets/images/icons/send.svg'))->content() ?>
              Absenden
            </button>
            <a class="button transparent" href="<?= page('kontakt')->url() ?>"><?= page('kontakt')->text_heading() ?> →</a>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>
