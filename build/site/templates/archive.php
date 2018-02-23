<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container grid-container--small">
      <header class="section-header">
        <h4><?= $page->text_subheading() ?></h4>
        <h2><?= $page->text_heading() ?></h2>
      </header>
      <div class="blog-list">
        <?= $page->text()->kt() ?>
        <?php foreach($page->children()->visible()->flip() as $article) : ?>
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

<?php snippet('footer') ?>
