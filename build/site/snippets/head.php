<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

  <link href='https://fonts.googleapis.com/css?family=Fira+Sans:300,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600' rel='stylesheet' type='text/css'>

  <?= css('assets/styles/main.css'); ?>

  <?php if(c::get('piwik_enable') == true) : ?>
    <?php snippet('piwik') ?>
  <?php endif ?>

</head>
