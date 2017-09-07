<?php snippet('header') ?>

  <div class="page-title">
    <div class="grid-container">
      <h1><?= $page->parent()->title() ?></h1>
    </div>
  </div>
  <div class="page-content">
    <div class="grid-container grid-container--small">
      <h2><?= $page->title() ?></h2>
      <?= $page->intro()->kt() ?>
      <?= $page->text()->kt() ?>
    </div>
    <?php if($page->hasFiles()) : ?>
    <div class="grid-container center">
      <?= (new Asset("assets/images/icons/cloud.svg"))->content() ?>
      <ul>
        <?php
          $files = $page->files()->filterBy('type', 'document')->sortBy('extension');
          foreach($files as $file) :
        ?>
        <li>
          <a class="no-barba" href="<?= $file->url() ?>">
            <?= $file->filename() ?>
            (<?= $file->niceSize() ?>)
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
    <?php endif; ?>
  </div>

<?php snippet('footer') ?>
