<!DOCTYPE html>
<html class="no-js" lang="<?= $site->language() ?>">

  <?php snippet('head') ?>

  <body id="barba">
    <div class="wrapper" data-namespace="<?= $page->uid() ?>">
      <header id="js-header" class="site-header">

        <?php
          snippet('navigation/micro');
          snippet('navigation/macro');
        ?>

      </header>
      <div data-transition="fadeIn">
        <main class="site-content">
