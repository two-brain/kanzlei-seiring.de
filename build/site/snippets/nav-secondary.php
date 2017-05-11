<nav class="nav nav--secondary" role="navigation">
  <div class="grid-container">
    <nav class="one-third">
      <ul class="nav-meta">
        <li><a href="#">Datenschutz</a></li>
        <li><a href="#">Impressum</a></li>
      </ul>
    </nav>
    <div class="one-third center">
      <span class="emergency-phone">
        <?= (new Asset('assets/images/phone-alt2.svg'))->content() ?>
        (0177) 64 322
      </span>
      <span class="timeline"> · die Nummer für dringende Fälle</span>
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
