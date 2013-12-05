<?php
/*
 * Template Name: Focus-areas
 * Description: About for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections main-content">
  
  <div class="section centered">
    <h1>Focus Areas</h1>
    <p class="subline">The hackathon challenges focus on three vital tracks to improving the world in health, technology, and education.</p>
  </div>
  
  <div class="section">
    <div class="max-700-width">
      <div class="row-fluid">
        <div class="span3">
          <img class="circle_pic" alt="Healthcare" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/health-icon.png" />
        </div>
        <div class="span9">
          <h2 class="item_head">Healthcare</h2>
          <ol class="focus-list marginBottom15">
            <li>Challenge 1: Confronting Depression</li>
            <li>Challenge 2: Health Data In Action</li>
            <li>Challenge 3: Geo-Localized Health Solutions</li>
            <li>Challenge 4: Sexual Health</li>
          </ol>
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/focus-areas/healthcare.pdf" class="button">Download PDF Healthcare details</a>
        </div>
      </div>
    </div>    
  </div>

  <div class="section">
    <div class="max-700-width">
      <div class="row-fluid">
        <div class="span3">
          <img class="circle_pic" alt="Education" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/education-icon.png" />
        </div>
        <div class="span9">
          <h2 class="item_head">Education Track</h2>
          <ol class="focus-list marginBottom15">
            <li>Challenge 1: International Accreditation of Academic Programs</li>
            <li>Challenge 2: Education in remote areas</li>
            <li>Challenge 3: Education for Special Needs Students</li>
            <li>Challenge 4: Nutrition education at school</li>
            <li>Challenge 5: Bridging the gap between research and markets</li>
          </ol>
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/focus-areas/education.pdf" class="button">Download PDF Education details</a>

        </div>
      </div>
    </div>    
  </div>

  <div class="section">
    <div class="max-700-width">
      <div class="row-fluid">
        <div class="span3">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/design-icon.png" />
        </div>
        <div class="span9">
          <h2 class="item_head">Design &amp; Technology</h2>
          <ol class="focus-list">
            <li>Challenge 1: Car driving safety</li>
            <li>Challenge 2: Simulation of crisis management activities</li>
            <li>Challenge 3: Human identiﬁcation on-the-ﬂy</li>
            <li>Challenge 4: Automatic people counting</li>
          </ol>
          <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/focus-areas/design-technology.pdf" class="button">Download PDF Design &amp; Technology details</a>

        </div>
      </div>
    </div>    
  </div>