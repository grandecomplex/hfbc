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
  
  <div class="section centered">
    <h1>Talks</h1>
    <p class="centered subline" style="width:800px;margin:auto auto;">A series of talks on innovative technologies surrounding design, healthcare, and education.</p>
  </div>

  <div id="upcoming" class="section">
    <div class="centered">
      <h2 class="section_title">Upcoming Event</h2>
    </div>
    <div class="row-fluid">
      <div class="span3">
        <h3 class="subline">Opening Ceremony</h3>

      </div>
      <div class="span6">
        <h4>Forget exit strategy, think global improvement</h4>
        <ul class="event-details clearfix">
          <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />October 5th</li>
          <li><a target="_blank" href="https://maps.google.com/maps?q=1433+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1433+market+st.&hnear=1433+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />1433 Market St., San Francisco</a></li>
        </ul>
        <p>This is an occasion to commemorate the 2nd anniversary of the late Steve Jobs. He has inspired us and encouraged young people, reminding us that we don’t need to stare death in the face to make “Big Choices”. Our speakers will talk about entrepreneurship and big data. During the ceremony, our team will launch the challenges related to deign and technology, education and healthcare.</p>
        <hr class="hr"></hr>
        <h4>Speakers</h4>
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
      </div>
      <div class="span2 offset1 centered">
        <a href="#" class="button button-primary button-large">Buy Tickets</a>
      </div>
    </div>
   
  </div>


  <div id="events" class="section">
    <div class="centered">
      <h2 class="section_title">Event Schedule</h2>
    </div>
    
    <ul id="schedule">
      <li><div class="schedule-item">
          <div class="row-fluid">
          <div class="span5">
            <h3>Title of talk</h3>
            <ul class="event-details clearfix">
              <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />October 10th</li>
              <li><a target="_blank" href="https://maps.google.com/maps?q=1433+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1433+market+st.&hnear=1433+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />1433 Market St., San Francisco</a></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
          </div>
          <div class="span5">
            <h4 class="offscreen">Speakers</h4>
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
          </div>
          <div class="span2">
            <a href="#" class="button">Buy tickets</a>
          </div>
        </div>
      </li>
        
        <li><div class="schedule-item"><div class="row-fluid">
          <div class="span5">
            <h3>Title of talk</h3>
            <ul class="event-details clearfix">
              <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />October 10th</li>
              <li><a target="_blank" href="https://maps.google.com/maps?q=1433+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1433+market+st.&hnear=1433+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />1433 Market St., San Francisco</a></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
          </div>
          <div class="span5">
            <h4 class="offscreen">Speakers</h4>
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
          </div>
          <div class="span2">
            <a href="#" class="button">Buy tickets</a>
          </div>
        </div></div></li>
        <li><div class="schedule-item"><div class="row-fluid">
          <div class="span5">
            <h3>Title of talk</h3>
            <ul class="event-details clearfix">
              <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />October 10th</li>
              <li><a target="_blank" href="https://maps.google.com/maps?q=1433+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1433+market+st.&hnear=1433+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />1433 Market St., San Francisco</a></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
          </div>
          <div class="span5">
            <h4 class="offscreen">Speakers</h4>
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
          </div>
          <div class="span2">
            <a href="#" class="button">Buy tickets</a>
          </div>
        </div></div></li>
        <li><div class="schedule-item"><div class="row-fluid">
          <div class="span5">
            <h3>Title of talk</h3>
            <ul class="event-details clearfix">
              <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />October 10th</li>
              <li><a target="_blank" href="https://maps.google.com/maps?q=1433+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1433+market+st.&hnear=1433+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />1433 Market St., San Francisco</a></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
          </div>
          <div class="span5">
            <h4>Speakers</h4>
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
          </div>
          <div class="span2">
            <a href="#" class="button">Buy tickets</a>
          </div>
        </div></div></li>
      </li>
    </ul>
  </div>
  
  <div id="section3" class="section clearfix centered">
    <h2 class="section_title">SPEAKERS</h2>
    <p class="subline">Speaker's present expertise in healthcare, design, technology, and education.</p>
  
    <?php 
    $speakers = array(
      array("name" => "Zachary Bogue", 
                "image" => "/assets/img/pages/homepage/speakers/dcvc-zachary-bogue.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Vivek Wadhwa", 
                "image" => "/assets/img/pages/homepage/speakers/vivek-wadhwa.jpg",
                "title" => "Entrepreneur", 
                "description" => "Vivek Wadhwa is Vice President of Innovation and Research at Singularity University.",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Bill Reichert", 
                "image" => "/assets/img/pages/homepage/speakers/Bill-Reichert.jpg",
                "title" => "Entrepreneur", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Binta Brown", 
                "image" => "/assets/img/pages/homepage/speakers/bintabrown.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "David Mosby", 
                "image" => "/assets/img/pages/homepage/speakers/dave-mosby.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "David Orban", 
                "image" => "/assets/img/pages/homepage/speakers/David-Orban.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "David Agus", 
                "image" => "/assets/img/pages/homepage/speakers/davidagus.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "John Roberts", 
                "image" => "/assets/img/pages/homepage/speakers/John-Roberts.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Salil Deshpande", 
                "image" => "/assets/img/pages/homepage/speakers/Salil.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Jeremey Howard", 
                "image" => "/assets/img/pages/homepage/speakers/Jeremy-howard.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Bjoern Lasse Herrmann", 
                "image" => "/assets/img/pages/homepage/speakers/bjoern-lasse.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Francis Pedraza", 
                "image" => "/assets/img/pages/homepage/speakers/francis-pedraza.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),

      array("name" => "Kory Russel", 
                "title" => "Co-Managing Partner at Data Collective", 
                "image" => "/assets/img/pages/homepage/speakers/kory-russel.jpg",
                "description" => "Data Collective (@DCVC); Founders Den (@foundersden); data; startups; environment",
                "talk_description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."))
    ?>

    <div class="speaker-wrapper circle-pic-list">
      <?php foreach($speakers as $speaker) { ?>
      <div class="row-fluid speaker-row">
        <div class="span3">
          <img class="circle_pic" alt="" src="<?php echo bloginfo('stylesheet_directory').$speaker['image']; ?>" />
        </div>
        <div class="span9">
          <h3><?php echo $speaker["name"]?></h3>
          <h4><?php echo $speaker["description"]?></h4>
          <p><?php echo $speaker["talk_description"]?></p>
        </div>
      </div>    
      <?php } ?>
    </div>
    <?php //include("speakers.php")?>
  </div>
  
  
</div>