<?php
  $description = "Month long series of talks and hackathon surrounding design &amp; technology, education, and healthcare.";
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
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44840647-1', 'hackforbigchoices.com');
  ga('send', 'pageview');

</script>
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


<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "d12867cf-8e25-4884-a8ab-93eac90dac65", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>