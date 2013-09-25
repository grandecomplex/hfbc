<?php
/*
 * Template Name: Live
 * Description: Homepage for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections main-content">
  <div class="section centered">
    <h1>Conversations</h1>
    <p class="subline">Join a discussion with Hack For Big Choices participants.</p>
  </div>
</div>

<div class="section">

  <div id="widget"></div>

</div>


 <script type="text/javascript">

 var _lyteWidgets = _lyteWidgets || [];
 _lyteWidgets.push({container: '#widget', group: '1'});

 (function() {
   var lw = document.createElement('script'); lw.type = 'text/javascript'; lw.async = true;
   lw.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'localhost:3000/widgets/threads.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lw, s);
 })();

</script>
