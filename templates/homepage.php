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

<div class="sections main-content">
  
  <div id="section1" class="section">
    <div class="row-fluid" id="section1">
      <div class="span5">
        <iframe width="100%" height="335" src="//www.youtube.com/embed/vRMFX9TawLk" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="span7" itemscope itemtype="http://schema.org/Event">
        <h1 itemprop="name">hacking for the<br> greater good</h1>
        <p>We’re looking for the crazy ones, misfits, rebels, troublemakers, and all you who see things differently to have an impact in design/technology, education, and healthcare.</p>
        <p>Hack for Big Choices is a global series of hackathons and talks to empower people worldwide to take action and use their talents to make “big choices” that impact their communities and change the world.</p> 

        <ul class="datetime clearfix row-fluid">
          <li class="span6 clearfix"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" /> <span class="title-font">12 Locations, 5 continents</span></li>
          <li class="span6 clearfix"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif /> <span class="title-font" itemprop="startDate">starting on October 4th, 2013</span></li>
        </ul>
      </div>

    </div>
    <hr class="hr"></hr>
    <div class="register">
      <a class="button button-primary button-huge overlay-trigger" href="#join-us-overlay">Join us</a>
    </div>
  </div>

  <div id="section2" class="centered section">
    <h2 class="section_title">Focus Areas</h2>
    <p class="subline">We believe that every person with passion and talent can have an impact on their communities, neighborhoods, cities and countries. Teaming up together we can solve real problems in design/technology, education, and healthcare.</p>
    <div class="max-850-width">
      <div class="row-fluid">
        <div class="span4">
          <div class="item">
            <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/design-icon.png" />
            <h3 class="item_head">Design &amp; Technology</h3>
          </div>
        </div>
        <div class="span4">
          <div class="item">
            <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/education-icon.png" />
            <h3 class="item_head">Education</h3>
          </div>
        </div>
        <div class="span4">
          <div class="item">
            <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/topics/health-icon.png" />
            <h3 class="item_head">Healthcare</h3>
          </div>
        </div>
      </div>
    
    </div>
  </div>

  <div id="section5" class="section">
    <div class="centered">
      <h2 id="schedule" class="section_title">Upcoming Events</h2>
      <p class="subline">A series of talks to inspire the world.</p>
    </div>
    
    <div class="inner">
    
      <div itemscope itemtype="http://schema.org/Event">
        <div id="local" class="schedule_box max-850-width">
          <!-- <a class="overlay-trigger button pull-right" href="#attend-event-overlay">Attend an Event</a> -->
          <!-- <a class="overlay-trigger button" href="#attend-event-overlay">Sign up</a> -->
          <div class="inner">
            <div class="row-fluid marginBottom10">
              <div class="span8">
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font"  itemprop="startDate">SAT<br>OCT 5th</dd>
                </dl>
                <div class="content">
                  <h3>Opening Ceremony</h3>
                  
                  <ul class="event-details clearfix">
                    <li><a target="_blank" href="https://maps.google.com/maps?q=1355+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1355+market+st.&hnear=1355+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />1355 Market St., San Francisco</a></li>
                  </ul>
                  
                  <p>This is an occasion to commemorate the 2nd anniversary of the late Steve Jobs. He has inspired us and encouraged young people, reminding us that we don’t need to stare death in the face to make “Big Choices”. Our speakers will talk about entrepreneurship and big data. During the ceremony, our team will launch the challenges related to design and technology, education and healthcare.
</p>
                </div>
              </div>
              <div class="span4" style="margin-top:40px">
                <div class="button-outer">
                  <ul class="button-list-vertical pull-right">
                    <li>
                      <a class="overlay-trigger button pull-right button-primary button-large" href="#request-invite-open-ceremony">Request an Invite</a>
                    </li>
                    <!-- <li>
                      <a class="button button-secondary" href="google.com">Liveview</a>
                    </li> -->
                  </ul>
                </div>
              </div>
            </div>
                    
          </div>
        </div>
      
      </div>
    </div>
  </div>

  <div id="section3" class="section clearfix centered">
    <h2 class="section_title">Speakers</h2>

    <div class="speaker-wrapper circle-pic-list">
      
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dcvc-zachary-bogue.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Zachary Bogue</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Co-Managing Partner at Data Collective</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment</dd>
          </dl>

        </div>
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Jeremy-howard.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Jeremey Howard</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Data Scientist</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Kaggle President and Chief Scientist, faculty at Singularity University.
</dd>
          </dl>

        </div>

  

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

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/David-Orban.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">David Orban</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">CEO, Dotsub / Entrepreneur</dd>
          </dl>

        </div>
      
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/davidagus.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">David Agus</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Biomedical Researcher</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Professor of Medicine and Engineering, University of Southern California</dd>
          </dl>

        </div>
      

      
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/John-Roberts.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">John Roberts</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Social Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Co-Founder and President (pro tempore) at Open University of West Africa</dd>
          </dl>

        </div>
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Salil.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Salil Deshpande</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Venture Capitalist</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Top 100 Vc by Forbes, Managing Director at Bain Capital</dd>
          </dl>

        </div>

        
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/bjoern-lasse.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Bjoern Lasse Herrmann</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Bjoern is an expert on data products, education, and organizational development. 
</dd>
          </dl>

        </div>
        
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/francis-pedraza.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Francis Pedraza</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Francis is CEO of Everest. Everest's vision is to unlock human potential.
</dd>
          </dl>

        </div>
		
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/kory-russel.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Kory Russel</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Founder of Re.sources</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Environmental Engineering & Science program of the Civil and Environmental Engineering Department.
</dd>
          </dl>

        </div>
        
        <div class="speaker" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/mario-valle.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Mario Valle</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Director of Business Development</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">EA - Electronic Arts</dd>
          </dl>
        </div>
      </div>
  </div>

  <div id="section4" class="centered section">
    <h2 id="locations" class="section_title">Global Hackathons</h2>
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

  <div id="section6" class="section centered">
    <h2 class="section_title">Partners</h2>
    <p class="subline">Thanks to those that support our mission.</p>
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
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/umano.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Umano</dd>
          </dl>
        </div>
        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/markerly.png" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Markerly</dd>
          </dl>
        </div>

        <div class="sponsor">
          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/bizzabo.jpg" />
          <dl class="person-label">
            <dt>Company Name</dt>
            <dd itemprop="name">Bizzabo</dd>
          </dl>
        </div>
        
        <a id="be-sponsor" href="mailto:info@hackforbigchoices.com&subject=Sponsorship&body=My company would like to partner with Hack For Big Choices." class="sponsor">
          <div id="sponsor-circle">
            <h4>Your Company</h4>
          </div>
        </a>
        
        
      </div>
    </div>
  </div>
  
</div><!-- sections -->


<div id="sign-up-overlay" class="hidden mc_form overlay-window">
  <?php include("mail-chimp-forms/register-to-hack-form.php") ?>
</div>

<div id="request-invite-open-ceremony" class="hidden mc_form overlay-window">
  <iframe src="/request-invite-opening-ceremony" height=450></iframe>
</div>

<!-- <div id="attend-event-overlay" class="hidden mc_form overlay-window">
</div> -->
