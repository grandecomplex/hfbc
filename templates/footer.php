<footer id="footer">
  <div class="row-fluid">
    <div class="span2 offset1">
      <ul class="nav">
        <li>
          <a href="mailto:info@hackforbigchoices.com">Contact</a>
        </li>
        <li>
          <a href="#">Press</a>
        </li>
        <li>
          <a href="#join-us-overlay" class="overlay-trigger">Join Us</a>
        </li>
        <li>
          <a href="/#schedule">Events</a>
        </li>
        <li>
          <a href="#">Newsletter</a>
        </li>
      </ul>
    </div>
    <div class="span5">
      <h3>Mission</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </p>
    </div>
    
    <div class="span2 offset1">
      <?php include("social-links.php")?>
    </div>
  </div>
  


</footer>

<?php wp_footer(); ?>

<div id="join-us-overlay" class="hidden mc_form overlay-window">
  <?php include("mail-chimp-forms/join-us.php") ?>
</div>