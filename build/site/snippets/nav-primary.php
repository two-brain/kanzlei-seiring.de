<nav data-gumshoe-header id="js-sticky-nav" class="nav nav--primary">
  <div class="grid-container">
    <a href="/" class="logo" rel="home">
      <?= (new Asset("assets/images/logo--stretched.svg"))->content() ?>
    </a>
    <nav class="page-links">
      <ul data-gumshoe>
        <li><a data-scroll href="<?= $site->url() ?>#practice-areas">Fachgebiete</a></li>
        <li><a data-scroll href="<?= $site->url() ?>#about-us">Über uns</a></li>
        <li><a data-scroll href="<?= $site->url() ?>#contact">Kontakt</a></li>
      </ul>
    </nav>
  </div>
</nav>
