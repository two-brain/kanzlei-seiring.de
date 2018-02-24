<!DOCTYPE html>
<html class="no-js" lang="<?= $site->language() ?>">

  <?php snippet('head') ?>

  <body>
    <header id="js-header" class="site-header">
      <div class="grid-container">
        <nav class="page-links">
          <ul>
            <?php snippet('menu') ?>
          </ul>
        </nav>
        <a href="/" class="logo" rel="home">
          <?= (new Asset("assets/images/logo/logo.svg"))->content() ?>
        </a>
      </div>
    </header>
    <main id="js-content" class="site-content">
      <div class="wrapper" data-namespace="<?= $page->uid() ?>">
        <div data-transition="fadeIn">
