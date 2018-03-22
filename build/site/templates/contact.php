<?php snippet('header') ?>

  <?php snippet('hero') ?>

  <div id="<?= $page->uid() ?>" class="section">
    <div class="grid-container">
      <?php snippet('partials/section-header', $page) ?>
      <div class="contact-intro">
        <?= $page->text()->kt() ?>
      </div>
      <div class="contact-info">
        <?php if ($address = $site->address()) : ?>
        <address>
          <?= $address->kt() ?>
        </address>
        <?php endif ?>
        <?php if ($phone || $fax) : ?>
        <p>
          <?php e($phone, 'Telefon: ' . $phone . '<br>') ?>
          <?php e($fax, 'Telefax: ' . $fax) ?>
        </p>
        <?php endif ?>
        <?php if (file_exists($vcard)) : ?>
        <p>
          <a class="no-barba" href="<?php $vcard->url() ?>" target="_blank">
            <?= $vcardImage ?>
            <strong class="thick">
              <?= $page->vcard_text() ?>
            </strong>
          </a>
        </p>
        <?php endif ?>
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
      <?php snippet('partials/contact-form') ?>
    </div>
  </div>

<?php snippet('footer') ?>
