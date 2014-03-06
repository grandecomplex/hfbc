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
    <h1>Hackathons</h1>
    <p class="subline">New ideas to help the world in healthcare, education, and technology.</p>
    <p class="subline">Hacking is a mindset. A hacker is an innovator, a person who challenge the system to make it better. Do you want to make your world a better place?</p>
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
