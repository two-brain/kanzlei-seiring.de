<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <header class="section-header">
        <h4><?= $page->text_subheading() ?></h4>
        <h2><?= $page->text_heading() ?></h2>
      </header>
      <div class="contact-intro">
        <?= $page->text()->kt() ?>
      </div>
      <div class="contact-info">
        <address>
          <?= $site->address()->kt() ?>
        </address>
        <p>
          Telefon: <?= $site->fon() ?><br>
          Telefax<?= $site->fax() ?>
        </p>
        <p>
          <a class="no-barba" href="<?= $site->vcard()->toFile()->url() ?>" target="_blank">
            <?= (new Asset('assets/images/icons/download.svg'))->content() ?>
            <strong class="thick">
              Visitenkarte als Download
            </strong>
          </a>
        </p>
      </div>
    </div>
    <div class="send-mail">
      <p class="lead">
        <strong><?= $page->send_mail() ?></strong>
      </p>
      <a class="button" href="mailto:<?= $site->mail() ?>">
        <?= (new Asset('assets/images/icons/mail.svg'))->content() ?>
        <?= $site->mail() ?>
      </a>
    </div>
  </div>
  <div id="map_canvas"></div>
  <div class="contact-form section">
    <div class="grid-container">
      <header class="section-header">
        <h4><?= $page->form_subheading() ?></h4>
        <h2><?= $page->form_heading() ?></h2>
      </header>
      <form class="form">
        <?php snippet('form-fields'); ?>
        <div class="center">
          <button class="button" type="submit">
            <?= (new Asset('assets/images/icons/send.svg'))->content() ?>
            Absenden
          </button>
        </div>
      </form>
    </div>
  </div>

<?php snippet('footer') ?>
