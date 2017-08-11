<!DOCTYPE html>
<html class="no-js" lang="de">

  <?php snippet('head') ?>

  <body>
    <header id="header" class="site-header" role="banner">

      <nav class="nav nav--secondary" role="navigation">
        <div class="grid-container">
          <nav class="one-third">
            <ul class="nav-meta">
              <li><a href="<?= page('datenschutz')->url() ?>">Datenschutz</a></li>
              <li><a href="<?= page('impressum')->url() ?>">Impressum</a></li>
            </ul>
          </nav>
          <div class="one-third center">
            <span class="emergency-phone">
              <?= (new Asset('assets/images/icons/phone.svg'))->content() ?>
              (0761) 72 523
            </span>
            <span class="timeline"> · Ihr Anliegen in guten Händen</span>
          </div>
          <nav class="one-third">
            <ul class="nav-lang">
              <?php foreach($site->languages() as $language) : ?>
                <li class="nav-link <?= $language->code() ?><?php e($site->language() == $language, ' is-active') ?>">
                  <a class="" href="<?= $page->url($language->code()) ?>">
                    <?= $language->code() ?>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </nav>
        </div>
      </nav>

      <nav id="js-sticky-nav" class="nav nav--primary">
        <div class="grid-container">
          <a href="/" class="logo" rel="home">
            <?= (new Asset("assets/images/logo/logo.svg"))->content() ?>
          </a>
          <nav class="page-links">
            <ul>
              <?php foreach($pages->visible() as $item) : ?>
                <li>
                  <a href="<?= $item->url() ?>">
                    <?= $item->title()->html() ?>
                  </a>
                </li>
              <?php endforeach ?>
            </ul>
          </nav>
        </div>
      </nav>

    </header>
    <main id="readout">
