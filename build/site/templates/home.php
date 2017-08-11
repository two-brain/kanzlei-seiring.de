<?php snippet('header') ?>

  <?php snippet('hero'); ?>

  <section id="practice-areas" class="section practice-areas">
    <div class="grid-container">
      <header class="section-header">
        <strong>Ihr Partner im Strafrecht</strong>
        <h2>Unsere Fachgebiete</h2>
      </header>
      <div class="carousel">
        <div class="one-fourth">
          <img src="assets/images/practice-areas_youth.png" alt="">
          <h3>Jugendstrafrecht</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
          </p>
        </div>
        <div class="one-fourth">
          <img src="assets/images/practice-areas_petty.png" alt="">
          <h3>Ordnungswidrigkeiten</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
          </p>
        </div>
        <div class="one-fourth">
          <img src="assets/images/practice-areas_drugs.png" alt="">
          <h3>Betäubungsmittelstrafrecht</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
          </p>
        </div>
        <div class="one-fourth">
          <img src="assets/images/practice-areas_traffic.png" alt="">
          <h3>Verkehrsstrafrecht</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
          </p>
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
            <p>Die Kanzlei befindet sich in Innenstadtnähe von Freiburg im schönen Altbauviertel Wiehre. Kostenlose Mandantenparkplätze stehen vor dem Haus zur Verfügung, sowie in 200 m die Haltestelle „Brauerei Ganter“ der Straßenbahnlinie 1.</p>
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
        <p>Hier finden Sie Informationen über aktuelle Entwicklungen in Rechtsprechung und Lehre. Außerdem stellen wir in unserem Archiv alle Materialien für die Studenten der DHBW Lörrach zur Verfügung.</p>
        <a class="button" href="<?= page('forschung-und-lehre')->url() ?>" style="margin-top: 1em;">Zum Archiv →</a>
      </div>

      <div class="two-thirds">
        <div class="bullets">
          <div class="bullet">
            <div class="date-icon">
              <time>
                01<br>
                <span>Nov</span>
              </time>
            </div>
            <div class="date-content">
              <h3>Wichtige Dokumente!</h3>
              <p>Wahl-, Pflichtverteidigung, jede Prozesssituation, AG/LG/OLG! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
            </div>
          </div>
          <div class="bullet">
            <div class="date-icon">
              <time>
                01<br>
                <span>Nov</span>
              </time>
            </div>
            <div class="date-content">
              <h3>Wichtige Dokumente!</h3>
              <p>Wahl-, Pflichtverteidigung, jede Prozesssituation, AG/LG/OLG! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
            </div>
          </div>
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
