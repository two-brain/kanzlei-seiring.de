<div class="hero">
  <div class="grid-container">
    <div class="hero-content">
      <h1>Willkommen bei Seiring & Seiring.</h1>
      <p class="lead">
        Gemeinsam finden wir professionelle Antworten auf Ihre rechtlichen Fragen.<br>
        Wir nehmen uns Zeit für Ihr Anliegen, sprechen Sie uns an!
      </p>
      <p class="contact-us">
        <a class="button" href="mailto:<?= $site->mail()->html() ?>">
          <?= (new Asset('assets/images/icons/mail.svg'))->content() ?>
          <?= $site->mail()->html() ?>
        </a>
        <a data-scroll class="button transparent" href="#practice-areas">
          Lernen Sie uns kennen!
        </a>
      </p>
    </div>
  </div>
  <div class="hero-bottom"></div>
</div>
