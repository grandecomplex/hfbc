<?php
/*
 * Template Name: Homepage
 * Description: Homepage for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>


<script type="text/javascript" charset="utf-8" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/homepage.js"></script>

<div class="sections">
  <div id="section1" class="section">
    <div class="row-fluid" id="section1">
      <div class="span7">
  <iframe width="100%" height="360" id="video" src="//www.youtube.com/embed/xoUfvIb-9U4?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="span5" itemscope itemtype="http://schema.org/Event">
        <h1 itemprop="name">Hacking for<br> the greater good</h1>
        <p>A month long hackathon and series of talks surrounding design, technology, education, and healthcare.</p>
        <p>We believe that every person with passion and talent can have an impact on their communities, neighborhoods, cities and countries. If they team up together they can solve real and local problems. Steve Jobs reminded us that we don’t need to stare at death to make big choices. </p> 
		<p> Calling the crazy ones, misfits, rebels, troublemakers, and all you who see things differently.</p>
		
        <div class="register">
          <a class="button button-large button-primary scrollLink" href="#schedule">ATTEND TALKS</a>
          <span class="title-font"><div class="attend_line">OR <a class="register-to-hack-trigger overlay-trigger" href="#sign-up-overlay"><span>Register to Hack</span> </a></span></div>
        </div>
		
        <ul class="datetime clearfix row-fluid">
          <li class="span6"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif /> <span class="title-font" itemprop="startDate">starting on October 5th, 2013</span></li>
          <li class="span6"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" /> <span class="title-font">12 Locations, 5 continents</span></li>
        </ul>
		
        
      </div>
    </div>
  </div>

  <div id="section2" class="centered section">
    <h2 class="section_title">Topics</h2>
    <p class="subline">Hack for Big Choices is about exploring the potential of three main areas.</p>
    <div class="row-fluid">
      <div class="span4">
        <div class="item">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/design-icon.png" />
          <h3 class="item_head">DESIGN&TECHNOLOGY</h3>
        </div>
      </div>
      <div class="span4">
        <div class="item">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/education-icon.png" />
          <h3 class="item_head">EDUCATION</h3>
        </div>
      </div>
      <div class="span4">
        <div class="item">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/health-icon.png" />
          <h3 class="item_head">HEALTHCARE</h3>
        </div>
      </div>
    </div>
    

  </div>

  <div id="section3" class="section clearfix centered">
    <h2 class="section_title">SPEAKERS</h2>
    <p class="subline">See all the speakers and talks in the <a href="/talks" class="button">schedule</a></p>

    <div class="speaker-wrapper circle-pic-list">
      
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/vivek-wadhwa.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Vivek Wadhwa</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Vivek Wadhwa is Vice President of Innovation and Research at Singularity University.</dd>
          </dl>

        </div>
      
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Bill-Reichert.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Bill Reichert</dd>
              <dt>Position</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Managing Director at Garage Technology Ventures</dd>
          </dl>

        </div>
      
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/bintabrown.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Binta Brown</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Global Leader</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Senior Fellow at Mossavar-Rahmani Center for Business and Government at Harvard Kennedy School of Government</dd>
          </dl>

        </div>
      
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dave-mosby.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Dave Mosby</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Enterprise Architect</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Executive Director, Keiretsu Forum Academy</dd>
          </dl>

        </div>
      </div>
  </div>


  <div id="section4" class="centered section">
    <h2 id="locations" class="section_title">Hackathon Cities</h2>
    <p class="subline">Pick your city to <a class="button button-primary overlay-trigger" href="#sign-up-overlay">register</a></p>
    <div id="location-map-wrapper">
      <div id="location-map-cover">
        <a class="city_block" id="sanFrancisco" href="#sign-up-overlay">
          <div class="city_name">San Francisco, USA</div>
          <div class="city_circle"></div>
          
        </a>
        <a class="city_block" id="mexicoCity" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Mexico City, Mexico</div>
        </a>
        <a class="city_block" id="saoPaulo" href="#">
          <div class="city_circle"></div>
          <div class="city_name">S&#227;o Paulo, Brazil</div>
        </a>
        <a class="city_block" id="sydney" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Sydney, Australia</div>
        </a>
        <a class="city_block" id="london" href="#">
          <div class="city_name">London, UK</div>
          <div class="city_circle"></div>
        </a>
        <a class="city_block" id="venice" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Venice, Italy</div>
        </a>
        <a class="city_block" id="moscow" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Moscow, Russia</div>
        </a>
        <a class="city_block" id="accra" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Accra, Ghana</div>
        </a>
        <a class="city_block" id="bangalore" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Bangalore, India</div>
        </a>
        <a class="city_block" id="singapore" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Singapore, Malaysia</div>
        </a>
        <a class="city_block" id="hongkong" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Hong Kong, China</div>
        </a>
        <a class="city_block" id="shanghai" href="#">
          <div class="city_circle"></div>
          <div class="city_name">Shanghai, China</div>
        </a>
      </div>
    </div>
  </div>


  <div id="section5" class="section">
    <div class="centered">
      <h2 id="schedule" class="section_title">Event Schedule</h2>
      <p class="subline"><a class="overlay-trigger button" href="#attend-event-overlay">Sign up</a> to receive event updates.</p>
    </div>
    
    <div class="inner">
    
      <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
        <div id="local" class="schedule_box span5">
          <h3>Coming events</h3>
          <div class="inner">
            <div class="row-fluid marginBottom10">
              <div class="span12">
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font"  itemprop="startDate">SAT<br>OCT 5th</dd>
                </dl>
                <div class="content">
                  <h4 itemprop="description">Opening ceremony</h4>
                  <p>Join us for the opening ceremony of Hack for Big Choices where we'll introduce the topics and challenges.</p>
                </div>
              </div>
              <!-- <div class="span2">
                <div class="button-outer">
                  <ul class="button-list-vertical pull-right">
                    <li>
                      <a class="button " href="google.com">Attend</a>
                    </li>
                    <li>
                      <a class="button button-secondary" href="google.com">Liveview</a>
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
        
            <hr class="hr">
            
            <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
              <div class="span12">
              
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font" itemprop="startDate">TBA</dd>
                </dl>
              
                <div class="content">
                  <h4 itemprop="description">Design &amp; technology Talk</h4>
                  <p>This inspirational speaker panel will involve some of the most influencial voices in the technology.</p>
                </div>
              </div>
              <!-- <div class="span2">
                <ul class="button-list-vertical pull-right">
                  <li>
                    <a class="button " href="google.com">Attend</a>
                  </li>
                  <li>
                    <a class="button button-secondary" href="google.com">Liveview</a>
                  </li>
                </ul>
              </div> -->
            </div>
            
            <hr class="hr">
            
            <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
              <div class="span12">
              
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font" itemprop="startDate">TBA</dd>
                </dl>
              
                <div class="content">
                  <h4 itemprop="description">Education Talk</h4>
                  <p>Our panel will show ways educational technology can thrive even in the face of public school hardships.</p>
                </div>
              </div>
              <!-- <div class="span2">
                <ul class="button-list-vertical pull-right">
                  <li>
                    <a class="button " href="google.com">Attend</a>
                  </li>
                  <li>
                    <a class="button button-secondary" href="google.com">Liveview</a>
                  </li>
                </ul>
              </div> -->
            </div>
            
            <hr class="hr">
            
            <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
              <div class="span12">
              
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font" itemprop="startDate">TBA</dd>
                </dl>
              
                <div class="content">
                  <h4 itemprop="description">Healthcare Talk</h4>
                  <p>Explore with us how technology can promote wellbeing with the latest health innovations as key to the future.</p>
                </div>
              </div>
              <!-- <div class="span2">
                <ul class="button-list-vertical pull-right">
                  <li>
                    <a class="button " href="google.com">Attend</a>
                  </li>
                  <li>
                    <a class="button button-secondary" href="google.com">Liveview</a>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
        <div class="schedule_box span7">
          <div class="clearfix">
            <h3 class="pull-left">Global Hackathons Schedule</h3>
            <a class="overlay-trigger button button-primary pull-right" href="#attend-event-overlay">Attend an Event</a>
          </div>
          <div class="inner">
            <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
              <div class="span2">
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font" itemprop="startDate">November<br>2013</dd>
                </dl>
                
              </div>
              <div class="span10">
                <h4 itemprop="description">Hackathon in San Francisco</h4>
              </div>

            </div>
            <hr class="hr">
            <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
              <div class="span2">
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font" itemprop="startDate">Nov - Dec<br>2013</dd>
                </dl>
                
              </div>
              <div class="span10">
                <h4 itemprop="description">Hackathons</h4>
                <p>Hackathons will take place in <a href="#locations" class="scrollLink">12 major cities</a>, including San Francisco, Moscow, and Bangalore. A hackathon winner is selected from ever city.</p>

              </div>
            </div>
            <hr class="hr">
            <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
              <div class="span2">
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font" itemprop="startDate">December<br>2013</dd>
                </dl>
                
              </div>
              <div class="span10">

                <h4 itemprop="description">Popular Vote</h4>
                <p>Online voting will open to select a winner.</p>

              </div>
            </div>
            <hr class="hr">
            <div class="row-fluid" itemscope itemtype="http://schema.org/Event">
              <div class="span2">
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font" itemprop="startDate">December<br>2013</dd>
                </dl>
                
              </div>
              <div class="span10">
                <h4 itemprop="description">Committee Vote</h4>
                <p>A committee of international judges will select final winner.</p>

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>


  
  <div id="section6" class="section centered">
    <h2 class="section_title">PARTNERS</h2>
    <p class="subline">Big thanks to our sponsors for providing the resources to make this happen.</p>
      <div id="sponsor-wrapper" class="clearfix circle-pic-list">
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/unilever.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Unilever</dd>
          </dl>
        </div>

        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/eye-fi.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Eye Fi</dd>
          </dl>
        </div>

        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/lyte.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Lyte</dd>
          </dl>
        </div>
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/invasive_code.png" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">InvasiveCode</dd>
          </dl>
        </div>
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/google.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Google</dd>
          </dl>
        </div>
        
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/dotsub.png" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">dotsub</dd>
          </dl>
        </div>
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/garage.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Garage</dd>
          </dl>
        </div>
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/rally.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Rally</dd>
          </dl>
        </div>


        
        
      </div>
    </div>
  </div>
  
</div><!-- sections -->


<div id="sign-up-overlay" class="hidden mc_form overlay-window">
  <?php include("mail-chimp-forms/register-to-hack-form.php") ?>
</div>

<div id="attend-event-overlay" class="hidden mc_form overlay-window">
  <?php include("mail-chimp-forms/register-for-event-form.php") ?>
</div>