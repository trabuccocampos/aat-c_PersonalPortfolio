<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo html($site->title()) ?> | <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  <!-- Development -->
  <!-- <?php echo css('assets/styles/styles.css') ?> -->

  <!-- Production -->
  <?php echo css('assets/styles/styles.min.css') ?>

  <link rel="stylesheet" href="http://fonts.typotheque.com/WF-023505-008646.css" type="text/css" />

</head>
<body class="is--fading">
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <header class="cf" role="banner">
    <a class="logo pjax" href="<?php echo url() ?>">
      <!-- <img src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo html($site->title()) ?>" /> -->
      <?php echo html($site->author()) ?>
    </a>
    <?php snippet('menu') ?>
  </header>
