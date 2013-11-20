<?php
/*
 * Template Name: Homepage
 * Description: Homepage for HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections main-content">
  
  <div id="section1" class="section">
    <div class="row-fluid" id="section1">
      <div class="span5">
        <iframe width="100%" height="335" src="//www.youtube.com/embed/vRMFX9TawLk?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="span7" itemscope itemtype="http://schema.org/Event">
        <h1 itemprop="name">hacking for the<br> greater good</h1>
        <p>We’re looking for the crazy ones, misfits, rebels, troublemakers, and all you who see things differently to have an impact in design/technology, education, and healthcare.</p>
        <p>Hack for Big Choices is a global series of hackathons and talks to empower people worldwide to take action and use their talents to make “big choices” that impact their communities and change the world.</p> 

        <ul class="datetime clearfix row-fluid">
          <li class="span6 clearfix"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" /> <span class="title-font">12 Locations, 5 continents</span></li>
          <li class="span6 clearfix"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif /> <a href="/talks"><span class="title-font" itemprop="startDate">Started on October 4th, 2013</span></a></li>
        </ul>
      </div>

    </div>
    <hr class="hr"></hr>
    <div class="register">
      <h3>Join Us</h3>
      <?php include("email-text.php") ?>
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
      <div id="upcoming">


<div itemscope itemtype="http://schema.org/Event">
        <div class="schedule_box max-1000-width">
          <div class="inner">
            <div class="row-fluid marginBottom10">
              <div class="span2 clearfix">
                <dl class="datetime-label">
                  <dt>Date time</dt>
                  <dd class="title-font"  itemprop="startDate">Mon 25th<br>NOV, 2013</dd>
                  <dt>Location</dt>
                  <dd class="event-details"><a target="_blank" href="https://www.google.com/maps?t=m&q=AOL+Palo+Alto"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif">AOL Palo Alto</a></dd>
                </dl>
              </div>
              <div class="span7">
                <h3>The Future of Education in a Globally Connected World</h3>
                              <div class="circle-pic-list clearfix">      
                <div class="speaker" itemscope itemtype="http://schema.org/Person">

   
                <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/vivek-wadhwa.jpg" />
                <p>Vivek Wadhwa</p>

                </div>
                <div class="speaker" itemscope itemtype="http://schema.org/Person">

                  <img class="circle_pic" alt="Penina Rybak" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/penina-rybak.jpg" />
                  <p>Penina Rybak</p>

                </div>
                <div class="speaker" itemscope itemtype="http://schema.org/Person">

                <img class="circle_pic" alt="Bill Reichert" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Bill-Reichert.jpg" />
                <p>Bill Reichert</p>


                </div>

                <div class="speaker" itemscope itemtype="http://schema.org/Person">

                <img class="circle_pic" alt="Dwalu Khasu" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dwalu-khasu.jpg" />
                <p>Dwalu Khasu</p>


                </div>
                <div class="speaker" itemscope itemtype="http://schema.org/Person">

                <img class="circle_pic" alt="Dave Mosby" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dave-mosby.jpg" />
                <p>Dave Mosby</p>


                </div>
                </div>
                <p>In sub-Saharan Africa: 1.8 million lives could be saved each year just if all women had a secondary education. An individual who does not graduate from high school earns on average $23,452, less than the U.S. average wage of $41,444 per year.  Further, 68% of the prison population is made up of non-high school graduates.</p>

                <p>Entrepreneurs, key drivers of innovation locally and globally, in general tend to be highly-educated, but is attaining a high level of education the only way to be capable of starting new businesses?</p>

                <p>The nexus of education and entrepreneurship carries great potential to drive global economic development and social progress. How can we realize such potential?</p>

                <p>This panel, "The Future of Education in a Globally Connected World" will be a gathering of thought leaders from a broad range of disciplines to discuss how to shape the future of education and entrepreneurship. Below are the main talking points to be covered:</p>
                <ul class="bullet-list">
                <li>How technology can play a major role in the future of education.</li>
                <li>What skills need to be taught in the Era of Information in developing and developed countries.</li>
                <li>What impact education can have in developing/ed countries.</li>
                <li>How entrepreneurs need to be educated.</li>
                <li>What investment is needed in the education space.</li>
                </ul>
                <p>Moderated by <strong>Eva Santana</strong>, Ceo of Invasive Code and <strong>Heather Cochran</strong>, founder of SliceBiz and The Next Wave Africa.</p>

  
                </div>
              <div class="span3 clearfix" style="margin-top:40px">
                <div class="button-outer">
                  <ul class="button-list-vertical pull-right">
                    <li>
                      <a href="http://h4bcthefutureofeducation.eventbrite.com/"  target="_blank" class="button button-large">Register Now</a>
                    </li>
                  </ul>
                </div>
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
      
        <a class="speaker" href="/opening-ceremony/" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dcvc-zachary-bogue.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Zachary Bogue</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Co-Managing Partner at Data Collective</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment</dd>
          </dl>

        </a>
        <a class="speaker" href="/opening-ceremony/" itemscope itemtype="http://schema.org/Person">

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

        </a>

  
          <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/penina-rybak.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Penina Rybak</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Author</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Author of Socially Speaking&trade; Social Skills Curriculum</dd>
          </dl>

        </a>

        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dwalu-khasu.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Dwalu Khasu</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Principal/Founder of KDM Technology Solutions</dd>
          </dl>

        </a>

        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/vivek-wadhwa.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Vivek Wadhwa</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Vivek Wadhwa is Vice President of Innovation and Research at Singularity University.</dd>
          </dl>

        </a>
      
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Bill-Reichert.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Bill Reichert</dd>
              <dt>Position</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Managing Director at Garage Technology Ventures</dd>
          </dl>

        </a>
        
         <a class="speaker" href="/opening-ceremony/" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/tom-serres.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Tom Serres</dd>
              <dt>Position</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Founder &amp; CEO at Rally.org</dd>
          </dl>

        </a>

      
      
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dave-mosby.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Dave Mosby</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Enterprise Architect</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Executive Director, Keiretsu Forum Academy</dd>
          </dl>

        </a>
        
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/bintabrown.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Binta Brown</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Global Leader</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Senior Fellow at Mossavar-Rahmani Center for Business and Government at Harvard Kennedy School of Government</dd>
          </dl>

        </a>

      
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/David-Orban.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">David Orban</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">CEO, Dotsub / Entrepreneur</dd>
          </dl>

        </a>
      
        <a class="speaker" href="/the-end-of-illness" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/davidagus.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">David Agus</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Biomedical Researcher</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Professor of Medicine and Engineering, University of Southern California</dd>
          </dl>

        </a>
      

      
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/John-Roberts.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">John Roberts</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Social Entrepreneur</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Co-Founder and President (pro tempore) at Open University of West Africa</dd>
          </dl>

        </a>
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Salil.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Salil Deshpande</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Venture Capitalist</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Top 100 Vc by Forbes, Managing Director at Bain Capital</dd>
          </dl>

        </a>

        
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

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

        </a>
        
        <a class="speaker" href="/opening-ceremony/" itemscope itemtype="http://schema.org/Person">

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

        </a>
		
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

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

        </a>
        
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Heather-anne-cochran.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Heather Anne Cochran</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Co-Founder at Hub Accra &amp; SliceBiz</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">Social worker and humanitarian</dd>
          </dl>
        </a>
        
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/mario-valle.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Mario Valle</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Director of Business Development</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">EA - Electronic Arts</dd>
          </dl>
        </a>
        
        <a class="speaker" href="/talks" itemscope itemtype="http://schema.org/Person">

          <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/jack-andraka.jpg" />
          <dl class="person-label">
              <dt>full name</dt>
              <dd itemprop="name">Jack Andraka</dd>
              <dt>company</dt>
              <dd class="company" itemprop="jobTitle">Inventor, scientist and cancer researcher</dd>
              <dt>description</dt>
              <dd class="description" itemprop="description">High school student</dd>
          </dl>
        </a>
        

      </div>
  </div>

  <div id="section4" class="centered section">
    <h2 id="locations" class="section_title">Global Hackathons</h2>
    <p class="subline">Pick your city to <a class="button button-primary overlay-trigger" href="#join-us-overlay">register</a></p>
    <?php include "map.php" ?>
  </div>

  <div id="section6" class="section centered">
    <h2 class="section_title">Partners</h2>
    <p class="subline">Thanks to those that support our mission.</p>
      <div id="sponsor-wrapper" class="clearfix circle-pic-list">
        
        <?php include("sponsor-list.php")?>
        
    
        <?php foreach($sponsors as $sponsor) {?>
        
          <div class="sponsor">
            <img class="circle_pic" alt="" src='<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/partners/<?php echo $sponsor["image"]?>' width=150 height=150 />
            <dl class="person-label">
              <dt>Sponsor Name</dt>
              <dd itemprop="name"><a target="_blank" href="<?php echo $sponsor["link"]?>"><?php echo $sponsor["name"]?></a></dd>
            </dl>
          </div>
        <?php } ?>
    
        
        <div class="sponsor">
          <a id="be-sponsor" href="mailto:partner@hackforbigchoices.com?subject=Sponsorship&body=My company would like to partner with Hack For Big Choices." class="sponsor">
            <div id="sponsor-circle">
              <h4>Your Company</h4>
            </div>
          </a>
        </div>
        
        
      </div>
    </div>
  </div>
  
</div><!-- sections -->


<div id="sign-up-overlay" class="hidden mc_form overlay-window">
  <?php include("mail-chimp-forms/register-to-hack-form.php") ?>
</div>

<div id="request-invite-educational" class="hidden mc_form overlay-window">
  <iframe src="/request-invite-to-educational-talk" height=450></iframe>
</div>

<!-- <div id="attend-event-overlay" class="hidden mc_form overlay-window">
</div> -->
