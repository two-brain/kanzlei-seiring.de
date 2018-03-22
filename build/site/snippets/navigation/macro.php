<div id="main-menu" class="macro-navigation">
  <a href="<?= $site->language()->url() ?>" class="logo" rel="home">
    <?= (new Asset("assets/images/logo/logo.svg"))->content() ?>
  </a>
  <nav>
    <ul class="center">
      <?php snippet('navigation/primary-menu') ?>
    </ul>
  </nav>
</div>
