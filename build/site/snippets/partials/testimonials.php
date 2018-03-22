<div class="testimonials overlay overlay--dark">
  <div class="grid-container">
    <h3 class="engagement-title">Kompetenz liegt im Trend:</h3>
    <?php
      $testimonials = $site->testimonials()->toStructure();
      foreach ($testimonials as $testimonial) :
    ?>
    <blockquote>
      <?= $testimonial->text()->kt() ?>
      <cite class="sr-only">
        Bewertung vom <?= date('d.m.Y', $testimonial->date()) ?> auf <a href="<?= $testimonial->url() ?>"><?= $testimonial->source() ?></a>
      </cite>
    </blockquote>
    <?php endforeach ?>
    <?php if ($page->isHomePage()) : ?>
    <a class="button transparent" href="<?= page('kanzlei-und-team')->url() ?>">
      Lernen Sie uns kennen →
    </a>
    <?php endif ?>
  </div>
</div>
