<div class="micro-navigation">
  <ul id="top-menu" class="show-for-medium">
    <?php snippet('navigation/secondary-menu') ?>
  </ul>
  <?php if ($site->fon()->isNotEmpty()) : ?>
  <div id="call-us" class="center">
    <span class="bold-blue">
      <?= (new Asset('assets/images/icons/phone.svg'))->content() ?>
      <?= $site->fon() ?>
    </span>
    <span class="inline-for-large"> · <?= $site->fon_text() ?></span>
  </div>
  <?php endif ?>
  <div id="lang-menu" class="center">
    <span class="bold-blue inline-for-large">
      <?= (new Asset("assets/images/icons/languages.svg"))->content() ?>
      Sprache:
    </span>
    <ul class="language-navigation">
      <?php foreach($site->languages() as $language) : ?>
      <li class="nav-link <?= $language->code() ?>">
        <a<?php e($site->language() == $language, ' class="is-active"') ?> href="<?= $page->url($language->code()) ?>">
          <?= $language->code() ?>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>
