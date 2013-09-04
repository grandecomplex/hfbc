<div class="navbar">
  <div class="navbar-inner">
    <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a id="logo" class="brand" href="/">Hack For Big Choices</a>
    <div class="nav-collapse collapse" style="height: 0px;">
      <ul id="menu-primary-navigation" class="nav navbar-nav"><li class="active menu-home">      
        <li><a href="/about">About</a></li>
        <li><a href="/talks">Talks</a></li>
        <li><a href="/partners">Partners</a></li>
      </ul>
      <!-- <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?> -->
    </div>
    
    <div id="navbar-aside" class="pull-right clearfix">
      <div class="pull-left">
        <?php include("social-links.php")?>
      </div>
    </div>
  </div>
</div>