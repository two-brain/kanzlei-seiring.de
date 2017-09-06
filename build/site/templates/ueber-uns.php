<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <header class="section-header">
        <h4><?= $page->text_subheading() ?></h4>
        <h2><?= $page->text_heading() ?></h2>
      </header>
      <div class="center">
        <?= $page->text()->kt() ?>
      </div>
      <ul class="bullets">
        <?php
          $bulletItems = $page->skills()->toStructure();
          foreach ($bulletItems as $item) : ?>
          <li class="bullet">
            <div class="bullet-icon">
              <?php
                $slug = str::slug($item->title());
                $string = 'assets/images/icons/' . $slug . '.svg';
                echo (new Asset($string))->content();
              ?>
            </div>
            <div class="bullet-body">
              <h3 class="bullet-title"><?= $item->title() ?></h3>
              <?= $item->description()->kt() ?>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
  <div class="testimonials overlay overlay--dark">
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
    </div>
  </div>
  <div class="team section">
    <header class="section-header">
      <h4><?= $page->team_subheading() ?></h4>
      <h2><?= $page->team_heading() ?></h2>
    </header>
    <div class="grid-container grid-container--small">
      <?php
        $teamItems = $page->team()->toStructure();
        $count = 0;

        foreach ($teamItems as $item) :
      ?>
      <div <?php e($count > 0, ' class="assistant"', ' class="seiring"') ?>>
        <div class="card">
          <div class="photo">
            <img src="<?= $item->image()->toFile()->url() ?>" alt="">
          </div>
          <h3 class="slide-title"><?= $item->title() ?></h3>
          <h4 class="position"><?= $item->position() ?></h4>
          <?= $item->description()->kt() ?>
        </div>
      </div>
      <?php
        $count++;
        endforeach
      ?>
    </div>
  </div>
  <div class="page-content">
    <div class="grid-container">
      <?php snippet('lets-help'); ?>
    </div>
  </div>

<?php snippet('footer') ?>
