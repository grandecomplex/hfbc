<?php
  $description = "A month long Hackathon and talks surrounding design &amp; technology, education, and healthcare.";
  $favicon = "/assets/img/chrome/logo-mark.png";
  $url = "http://www.hackforbigchoices.com";
  $siteName = "Hack For Big Choices";
  $title = $siteName;
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon"
        type="image/png"
        href="<?= $favicon ?>">

  <meta property="og:title" content="<?= $title ?>">

  <meta property="og:description" content="<?= $description ?>">

  <meta property="og:type" content="Website">

  <meta property="og:url" content="<?= $url ?>">

  <meta property="og:image" content="<?= $favicon ?>">

  <meta property="og:site_name" content="<?= $siteName ?>">


  <meta name="twitter:card" content="<?= $siteName ?>">

  <meta name="twitter:url" content="<?= $url ?>">

  <meta name="twitter:title" content="<?= $title ?>">

  <meta name="twitter:description" content="<?= $description ?>">

  <meta name="twitter:image" content="<?= $favicon ?>">

  <meta itemprop="name" content="<?= $siteName ?>">

  <meta itemprop="description" content="<?= $description ?>">

  <meta itemprop="image" content="<?= $favicon ?>">


  <?php wp_head(); ?>

  <script type="text/javascript" src="/assets/js/about.js"></script>
  <script type="text/javascript" src="/assets/js/overlay.js"></script>
  <script type="text/javascript" charset="utf-8" src="/assets/js/vendor/mailchimp.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/hogan.js/2.0.0/hogan.js"></script>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>