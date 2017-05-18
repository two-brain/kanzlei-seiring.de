<?php snippet('header') ?>

  <?php snippet('hero'); ?>

  <!-- our-skills -->
  <section id="practice-areas" class="section practice-areas">
    <header class="section-header">
      <strong>Ihr Partner im Strafrecht</strong>
      <h2>Unsere Fachgebiete</h2>
    </header>
    <div class="grid-container">
      <div class="one-fourth">
        <img src="assets/images/practice-areas-youth.png" alt="">
        <h3>Jugendstrafrecht</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
        </p>
      </div>
      <div class="one-fourth">
        <img src="assets/images/practice-areas-petty.png" alt="">
        <h3>Ordnungswidrigkeiten</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
        </p>
      </div>
      <div class="one-fourth">
        <img src="assets/images/practice-areas-drugs.png" alt="">
        <h3>Betäubungsmittelstrafrecht</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
        </p>
      </div>
      <div class="one-fourth">
        <img src="assets/images/practice-areas-traffic.png" alt="">
        <h3>Verkehrsstrafrecht</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus ante massa, at lacinia dolor ultrices in.
        </p>
      </div>
    </div>
  </section>

  <!-- what-we-do -->
  <section id="about-us" class="section about-us">
    <div class="left-side overlay overlay--blue">
      <div class="inner">
        <h4>Unsere Kanzleiräume</h4>
        <p>einladend, echt schön & stilvoll eingerichtet</p>
      </div>
    </div>
    <div class="right-side">
      <div class="inner">
        <header class="section-header">
          <strong>Wir stellen uns vor</strong>
          <h2>Unsere Kanzlei</h2>
        </header>
        <p>Lorem ipsum</p>
      </div>
    </div>
  </section>


  <section class="section dummy">
    <h1>ACCORDION!</h1>

    <h2>Philosophie</h2>
    <p>Wir bieten eine fundierte und diskrete Bearbeitung Ihrer Rechtsprobleme. Dabei kann auf jahrelange Praxis, die durch ständige Fortbildungen erweitert wird, zurückgegriffen werden. Auf dieses Wissen können Sie vertrauen.</p>

    <h2>Mitgliedschaften</h2>
    <ul>
      <li>Deutscher Anwaltverein</li>
      <li>Freiburger Anwaltverein</li>
      <li>Strafverteidiger Baden Württemberg</li>
    </ul>

    <h2>Fremdsprachen</h2>
    <p>
      <ul>
        <li>Französisch</li>
        <li>Englisch</li>
        <li>Spanisch</li>
      </ul>
    </p>

    <h2>Standort</h2>
    <p>Die Kanzlei befindet sich in Innenstadtnähe von Freiburg im schönen Altbauviertel Wiehre. Kostenlose Mandantenparkplätze stehen vor dem Haus zur Verfügung, sowie in 200 m die Haltestelle „Brauerei Ganter“ der Straßenbahnlinie 1.</p>

  </section>

  <section id="contact" class="section contact overlay">
    <header class="section-header">
      <strong>Unverbindliche Anfrage</strong>
      <h2>Kontakt</h2>
    </header>
    <div class="grid-container">
      <div class="one-half">
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
      <div class="one-half">
        <ul>
          <li class="contact-option">
            <div class="contact-option-image">
              <?= (new Asset("assets/images/contact-option-address.svg"))->content() ?>
            </div>
            <div class="contact-option-content">
              <address>
                Dreikönigstraße 12<br>
                79102 Freiburg
              </address>
            </div>
          </li>
          <li class="contact-option">
            <div class="contact-option-image">
              <?= (new Asset("assets/images/contact-option-calendar.svg"))->content() ?>
            </div>
            <div class="contact-option-content">
              <p>Die Sprechzeiten sind Montag-Freitag von 8:30- 12:30 Uhr und 14:00 – 17:00 Uhr. Freitag ist das Telefon bis 13:30 besetzt.</p>
            </div>
          </li>
          <li class="contact-option">
            <div class="contact-option-image">
              <?= (new Asset("assets/images/contact-option-phone.svg"))->content() ?>
            </div>
            <div class="contact-option-content">
              <p>
                Fon: (0761) 72 523, Fax: (0761) 73 631<br>
                Mail: info@kanzlei-seiring.de
              </p>
            </div>
          </li>
        </ul>
        <p>Gerne können Termine außerhalb der Sprechzeiten vereinbart werden.</p>
      </div>
    </div>
  </section>

<?php snippet('footer') ?>
