 <?php
/*
 * Template Name: Opening Ceremony
 * Description: Talks at HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections main-content">
  
  <div class="section centered">
    <h1>Opening Ceremony</h1>
    <p class="subline">This was an occasion to commemorate the 2nd anniversary of the late Steve Jobs. He inspired us and encouraged young people, reminding us that we don’t need to stare death in the face to make “Big Choices”. Our speakers spoke about entrepreneurship and big data. During the ceremony, our team launched the challenges related to design and technology, education and healthcare.</p>
  </div>


  <div id="upcoming" class="section">
    <div class="centered">
      <h2 class="section_title">Emphasis on big data, deep learning alogrithms, and achieving one's goals</h2>
    </div>
    <div class="row-fluid max-900-width">
      <div class="schedule-item">
        <div class="span12">
          <h3>Speakers</h3>
          <div class="circle-pic-list clearfix">      
            <div class="speaker" itemscope itemtype="http://schema.org/Person">

              <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dcvc-zachary-bogue.jpg" />
              <p>Zachary Bogue</p>

            </div>
            <!-- <div class="speaker" itemscope itemtype="http://schema.org/Person">

              <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/dave-mosby.jpg" />
              <p>Dave Mosby</p>

            </div> -->
            <div class="speaker" itemscope itemtype="http://schema.org/Person">

              <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Jeremy-howard.jpg" />
              <p>Jeremy Howard</p>

            </div>
            <div class="speaker" itemscope itemtype="http://schema.org/Person">

              <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/francis-pedraza.jpg" />
              <p>Francis Pedranza</p>

            </div>
            
             <div class="speaker" itemscope itemtype="http://schema.org/Person">

              <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/tom-serres.jpg" />
              <p>Tom Serres</p>

            </div>
            
          </div>

          <hr class="hr"></hr>

          <h3>Agenda</h3>

<?php 
  $agenda = array(
            
        array("time" => "7:00pm", 
        "description" => 'Unveil "Hack for Big Choices"',
        "presenter" => "Aurora Chiste and Irina Issakova, founders of Hack for Big Choices."),

        array("time" => "7:15pm", 
        "description" => '"Why Big Data is Hot"',
        "presenter" => "Zach Bogue,  managing partner at Data Collective and cofounder Founders Den."),

        array("time" => "7:35pm", 
        "description" => '"Data Science and Machine Learning: Discovery Tools for Any Domain"',
        "presenter" => "Jeremy Howard, president and chief scientist of Kaggle."),

        array("time" => "7:55pm", 
        "description" => '"Digital Fundraising for Social Impact"',
        "presenter" => "Tom Serres, founder and chief officer at Rally.org."),

        array("time" => "8:15pm", 
        "description" => 'Introduces Design &amp; Technology Challenges',
        "presenter" => "Geppy Parziale, cofounder at Invasivecode."),         

        array("time" => "8:30pm", 
        "description" => 'Introduces Healthcare Challenges',
        "presenter" => "Rahman Johnson, founder at OpenMedical Data Solutions,  and Stefan Broda, founder at BeforeWeDo."),   

        array("time" => "8:45pm", 
        "description" => 'Introduces Education Challenges',
        "presenter" => "Eva Diaz, cofounder at Invasivecode."),   

        array("time" => "9:00pm", 
        "description" => '"How to Achieve Goals in Life"',
        "presenter" => "Francis Pedraza, cofounder and CEO at Everest."),                  
        );
          
  
?>


  <?php foreach($agenda as $agendaItem) { ?>

          <div style="position: relative">
            <h5 style="position: absolute; top: 0; left: 0;"><?php echo $agendaItem["time"] ?></h5>
            <p style="padding-left: 80px;"><strong><?php echo $agendaItem["description"] ?></strong><br><?php echo $agendaItem["presenter"] ?></p>
          </div>

<?php } ?>
        </div>
      </div>

      <h3>Event Details</h3>
      <ul class="event-details clearfix">
        <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />October 4th, 6:30pm</li>
        <li><a target="_blank" href="https://maps.google.com/maps?q=1355+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1355+market+st.&hnear=1355+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />1355 Market St., San Francisco</a></li>
      </ul>

    
    </div>
   

  </div>


</div>