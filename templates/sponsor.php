<?php
/*
 * Template Name: sponsors
 * Description: Homepage for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections">
  <div class="section centered">
    <h1>Our partners</h1>
    <p class='subline' style="margin:auto auto">We thank our partners for the funding and for the guidance.</p>
  </div>
  
  <div id="premium" class="section circle-pic-list">
    <div class="centered">
      <h2 class="section_title">Premium Partners</h2>
    </div>
    
    <div class="row-fluid" style="width:1024px;margin:auto auto">
      <div class="span2">
        <a href="http://unilever.com/" target="_blank"><img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/unilever.jpg" /></a>
      </div>
      <div class="span8">
        <h3>Unilever</h3>
        <p>Unilever is one of the world’s leading suppliers of fast moving consumer goods with strong operations in more than 100 countries and sales in 180. With products that are used over two billion times a day around the world, we work to create a better future every day and help people feel good, look good and get more out of life with brands and services that are good for them and good for others. </p>
      </div>
    </div>
  
  </div>
  
  <div id="normal" class="section circle-pic-list">
    <div class="centered">
      <h2 class="section_title">Partners</h2>
    </div>
    
    <div class="sponsors clearfix">
     
      <?php include("sponsor-list.php")?>


      <?php foreach($sponsors as $key=>$sponsor) { ?>
        <?php if ($key == 0) {continue;} ?>
        <div class="sponsor-list-item">
          <div class="row-fluid">
            <div class="span5">
              <img class="circle_pic" alt="<?php echo $sponsor["name"]?>" src='<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/<?php echo $sponsor["image"]?>' />
            </div>
          
            <div class="span7">
              <h3><a href="<?php echo $sponsor["link"]?>" target="_blank"><?php echo $sponsor["name"]?></a></h3>
              <p><?php echo $sponsor["description"]?></p>
            </div>
          </div>
          <hr class="hr"></hr>
          
        </div>
        <?php } ?>

    </div>
    
  </div>
</div>

