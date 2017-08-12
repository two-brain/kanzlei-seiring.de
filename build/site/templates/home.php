<?php snippet('header') ?>

  <?php snippet('hero'); ?>

  <section id="services" class="section services">
    <div class="grid-container">
      <header class="section-header">
        <strong>Ihr Partner in Rechtsfragen</strong>
        <h2>Unsere Fachgebiete</h2>
      </header>
      <div class="carousel">
        <div class="slider">
          <?php $sliderItems = page('unsere-leistungen')->carousel()->toStructure(); ?>
          <?php foreach ($sliderItems as $item) : ?>
            <div>
              <img src="<?= $item->image()->toFile()->url() ?>" alt="">
              <h3><?= $item->title() ?></h3>
              <?= $item->description()->kt() ?>
            </div>
          <?php endforeach ?>
        </div>
        <div class="slider-controls">
          <button class="bullet-icon" type="button">
            <?= (new Asset("assets/images/icons/chevron-left.svg"))->content() ?>
            <span class="sr-only">Zurück</span>
          </button>
          <button class="bullet-icon" type="button">
            <?= (new Asset("assets/images/icons/chevron-right.svg"))->content() ?>
            <span class="sr-only">Weiter</span>
          </button>
        </div>
      </div>
      <div class="lets-help">
        <strong>Sie sind sich bei der Einordnung unsicher?</strong><br>
        <a class="button" href="<?= page('unsere-leistungen')->url() ?>">Wir sind behilflich →</a>
      </div>
    </div>
  </section>

  <section id="about-us" class="section about-us overlay overlay--dark">
    <div class="grid-container">
      <header class="section-header">
        <strong>Wir stellen uns vor</strong>
        <h2>Unsere Kanzlei</h2>
      </header>
      <ul class="bullets">
        <li class="bullet">
          <div class="bullet-icon">
            <?= (new Asset("assets/images/icons/lightbulb.svg"))->content() ?>
          </div>
          <div class="bullet-content">
            <h3>Unser Selbstverständnis</h3>
            <p>Wir bieten eine fundierte und diskrete Bearbeitung Ihrer Rechtsprobleme. Dabei kann auf jahrelange Praxis, die durch ständige Fortbildungen erweitert wird, zurückgegriffen werden. Auf dieses Wissen können Sie vertrauen.</p>
          </div>
        </li>
        <li class="bullet">
          <div class="bullet-icon">
            <?= (new Asset("assets/images/icons/gavel.svg"))->content() ?>
          </div>
          <div class="bullet-content">
            <h3>In jeder Lebenslage</h3>
            <p>Wahl-, Pflichtverteidigung, jede Prozesssituation, AG/LG/OLG! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
          </div>
        </li>
        <li class="bullet">
          <div class="bullet-icon">
            <?= (new Asset("assets/images/icons/languages.svg"))->content() ?>
          </div>
          <div class="bullet-content">
            <h3>International unterwegs</h3>
            <p>Wir bieten ihnen rechtliche Hilfe neben Deutsch auch in:</p>
            <ul>
              <li>Französisch</li>
              <li>Englisch</li>
              <li>Spanisch</li>
            </ul>
          </div>
        </li>
        <li class="bullet">
          <div class="bullet-icon">
            <?= (new Asset("assets/images/icons/star.svg"))->content() ?>
          </div>
          <div class="bullet-content">
            <h3>Zu Ihrer Zufriedenheit</h3>
            <p>Die Kanzlei befindet sich in Innenstadtnähe von Freiburg im schönen Altbauviertel Wiehre.</p>
            <p>Kostenlose Mandantenparkplätze stehen vor dem Haus zur Verfügung, sowie in 200 m die Haltestelle „Brauerei Ganter“ der Straßenbahnlinie 1.</p>
          </div>
          <a class="button transparent" href="<?= page('ueber-uns')->url() ?>" style="float: right; margin-right: 2em;">Lernen Sie uns kennen →</a>
        </li>
      </ul>
    </div>
  </section>

  <section id="news" class="section news">
    <div class="grid-container">
      <div class="one-third">
        <header class="section-header">
          <strong>Auf dem neuesten Stand</strong>
          <h2>Aktuelles</h2>
        </header>
        <?= page('forschung-und-lehre')->intro()->kt() ?>
        <a class="button" href="<?= page('forschung-und-lehre')->url() ?>" style="margin-top: 1em;">Zum Archiv →</a>
      </div>
      <div class="two-thirds">
        <div class="bullets">
          <?php foreach(page('forschung-und-lehre')->children()->visible()->flip()->limit(2) as $article) : ?>
          <a class="bullet-date" href="<?= $article->url() ?>">
            <article class="bullet">
              <div class="date-icon">
                <time datetime="<?= $article->date('%Y-%m-%d') ?>">
                  <?= $article->date('%d'); ?><br>
                  <span><?= $article->date('%b'); ?></span>
                </time>
              </div>
              <div class="date-content">
                <h3><?= $article->title()->html() ?></h3>
                <?= $article->intro()->kirbytext() ?>
              </div>
            </article>
          </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section contact">
    <div class="grid-container">
      <div class="one-half">
        <header class="section-header">
          <strong>Unverbindliche Anfrage</strong>
          <h2>Kontakt</h2>
        </header>
        <div class="contact-form">
          <form>
            <input placeholder="Ihr Vor- und Nachname" type="text">
            <input placeholder="Ihre Telefonnummer" type="text">
            <input placeholder="Ihre Mail-Adresse" type="text">
            <textarea placeholder="Beschreibung Ihres Anliegens"></textarea>
            <button type="submit">Absenden</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php snippet('footer') ?>
