<?php
/*
 * Template Name: Hackathon
 * Description: About for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections main-content">
  
  <div class="section centered">
    <h1>Hackathon</h1>
    <p class="subline">New ideas to help the world in healthcare, education, and technology.</p>
  </div>
  
  <div id="how-it-works" class="section">
    <div class="centered">
      <h2 class="section_title">How it works</h2>
    </div>
    
    <div class="max-850-width">
    
      <p>In each city the hackathon teams will compete with their respective cities in three categories: health, education, and design &amp; technology. A winner will be selected in each city and will receive recognition for their discovery. The teams will communicate to themselves and to the world through an open forum called <a href="http://lyte.io" target="_blank">Lyte</a>.</p>
    
      <p>Anyone with imagination is encouraged to start a hackathon team, even if the idea is just a prototype or an early stage lean-style Minimum Viable Product. In fact, we recommend all teams test their ideas early and often to increase success.</p>
    
      <p>We can't wait to see the results. Please apply by selecting your city below.</p>
    </div>
    
  </div>

  <div id="hackathon-map" class="section">
    <div class="centered">
      <h2 class="section_title">Hackathon Map</h2>
      <p class="subline">Select a city below to apply</a>
    </div>
    <?php include("map.php") ?>
  </div>


</div>

<div id="sign-up-overlay" class="hidden mc_form overlay-window">
  <?php include("mail-chimp-forms/register-to-hack-form.php") ?>
</div>
