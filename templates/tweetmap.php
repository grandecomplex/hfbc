<?php
/*
 * Template Name: Tweet Map
 * Description: Homepage for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>


<script type="text/javascript" charset="utf-8" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/tweetmap.js"></script>

<div id="map" class="leaflet-container leaflet-fade-anim" style="height:400px; width:auto"></div>