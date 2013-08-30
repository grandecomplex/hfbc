<?php
/*
 * Template Name: Talks
 * Description: About for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections">
  
  <div class="section">
    <h1>Hack for Big Choices Talks</h1>
    <p class="subline">A series of talks on innovative technologies surrounding design, healthcare, and education.</p>
  </div>

  <div id="upcoming" class="section">
    <div class="row-fluid">
      <div class="span3">
        <h2 class="section_title">Upcoming Event</h2>
        <p class="subline">Opening Ceremony</p>
      </div>
      <div class="span6">
        <h4>Forget exit strategy, think global improvement</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <hr class="hr"></hr>
        <h4>Speakers</h3>
        <div class="circle-pic-list clearfix">      
          <div class="speaker" itemscope itemtype="http://schema.org/Person">

            <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/vivek-wadhwa.jpg" />
            <p>Vivek Wadhwa</p>

          </div>
          <div class="speaker" itemscope itemtype="http://schema.org/Person">

            <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dave-mosby.jpg" />
            <p>Dave Mosby</p>

          </div>
          <div class="speaker" itemscope itemtype="http://schema.org/Person">

            <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Bill-Reichert.jpg" />
            <p>Bill Reichert</p>

          </div>
        </div>
        <hr class="hr"></hr>
        <h4>Location</h4>
        <a target="_blank" href="https://maps.google.com/maps?q=1433+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1433+market+st.&hnear=1433+Market+St,+San+Francisco,+California+94102&t=m&z=16">1433 Market St., San Francisco</a>
      </div>
      <div class="span2 offset1 centered">
        <div class="datetime">OCT 10th</div>
        <a href="#" class="button button-primary button-large">Buy Tickets</a>
      </div>
    </div>
   
  </div>


  <div class="section">
    <div class="centered">
      <h2 class="section_title">Event Schedule</h2>
    </div>
  </div>
  
  <div id="section3" class="section clearfix centered">
    <h2 class="section_title">SPEAKERS</h2>
    <p class="subline">Speaker's present expertise in healthcare, design, technology, and education.</p>
  
    <?php include("speakers.php")?>
  </div>
  
  
</div>