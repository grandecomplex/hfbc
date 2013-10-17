<?php
/*
 * Template Name: experts
 * Description: Experts By Your Side
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<link rel="stylesheet" href="<?php get_template_directory_uri() ?>/assets/css/font-awesome.min.css" >

<style>

  .section.centered h1 {
    margin-top: -45px;
  } 
  
  #search-field{
    max-width: 935px;
    min-width: 837px;
    font-size: 1.5em;
    font-weight: 200;
    height: 66px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    padding-left: 10px;
    margin-bottom: 5px;


    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border: 1px solid #d2d6be;
    padding: 10px 6px 10px 20px;
  }

  .ose-container {
    margin-top: 60px;
  }

  .search-input {
    margin-top: 24px; 
    margin-bottom: 45px;
  }


  .why-us {
    background-color: #F8FCFB;
    /*background-color: rgb(248, 252, 251);*/
    /*background-color: red;*/
    padding-top: 30px;
  }

  .why-us .line {
    margin: 10px auto;
    display: block;
    padding: 30px 30px;
    position: relative;
    border-bottom: 1px lighten($beige1,5%) solid;
  }

/*@media (min-width: 1200px) { .why-us .line { width: 750px; } }*/
/*@media (min-width: 960px) and (max-width: 1199px) { .why-us .line { width: 750px; } }*/
/*@media (max-width: 959px) { .why-us .line { width: 90%; } }*/


@media (max-width: 1174px) {

.container {
  max-width: 840px;
  min-width: 100px;
}

#search-field{
  max-width: 840px;
  min-width: 470px;
 }

}


.why-use {
  background: #4E576B;
  width: 500px;
  text-align: center;
  margin: 0px auto 10px;
  color: white;
  font-size: 24px;
  position: relative;
  padding: 5px;
  line-height: 40px;
}

.why-use:before {
    content:'';
    display: block;
    width:0;
    height:0;
    border: 25px solid #4E576B;
    border-color: #4E576B transparent #4E576B transparent;
    border-width: 25px 15px 25px 15px;
    position: absolute;
    left:-15px;
    top:0;
  }

.why-use:after {
    content:'';
    display: block;
    width:0;
    height:0;
    border: 25px solid #4E576B;
    border-color: #4E576B transparent #4E576B transparent;
    border-width: 25px 15px 25px 15px;
    position: absolute;
    right:-15px;
    top:0;
  }



.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: white;
  border: 1px solid #e3e3e3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  

}

.well.top-section h2 {
  margin-bottom: 12px;
}

.text-center {
  text-align: center;
}

.top-section-icons {
  padding: 20px 0;
  background-color: red;
}

.top-section-icons > title {
    font-size: 20px;
    text-align: center;
    color: $green1;
    line-height: 30px;
    margin-bottom: 10px;
    margin-top: 15px;
  }
  .top-section-icons  > sub-title {
    font-size: 15px;
    color: lighten($green1, 5%);
  }

.top-section-icons .icon-border {
  border-color: #6eb4a4;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  background-color: transparent;
  }

.top-section-icon {
  text-align: center;
  color: #4E576B;
  font-size: 3.0em;
  padding-bottom: 30px;
  padding-top: 20px;
}
.icon-border {
  border-color: #4E576B;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  background-color: transparent;


/*padding: .2em .25em .15em;*/
/*-webkit-border-radius: 3px;*/
/*-moz-border-radius: 3px;*/
/*border-radius: 3px;*/
}

.video-container {
    position: relative;
    padding-bottom: 49.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}

.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

video-side-container {
  width: 90%;
  float:right;
  padding: 4px;
  background-color: blue;
  border: 2px solid rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  display:block;
}



}

  </style>



 <div class="wrap ose-container" role="document">
    <div class="row-fluid">
      <div class="section centered">
        <h1>Experts By Your Side</h1>
        <h3>Access experts for free to assist you with your HFBC hackathon project.<br />
        Screenshare, videochat, and work together in real-time.</h3>
      
        <form accept-charset="UTF-8" action="http://onscreenexpert.com/expert_profiles" method="get" target="_blank">
          <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"></div>
            <div class="search-input">     
              <input id="search-field" name="query" placeholder="Enter keywords: Rails, Javascript..." type="text">
              <input class="button-primary button-large" id="search-button" type="submit" value="Find Your Expert">
              <p>  Powered by <a href="http://www.OnScreenExpert.com" target="_blank">OnScreenExpert.com</a> </p>
              <div style="clear:both;"></div>
            </div>
        </form>
      </div> <!-- /.section centered -->
    </div><!-- /.row-fluid -->
  </div><!-- /.wrap -->



  <div class="why-us">
    <div class="container">
      <h2 class="why-use"> How it works</h2>
    </div>
  </div>

  <div class="why-us">
    <div class="container">
      <div class="row-fluid text-center">
        <div class="span4">
          <div class="well top-section">
            <div class="top-section-icon">
              <i class="icon-search icon-3-5x icon-border"></i>
            </div>
            <h2>
              Find an Expert
            </h2>
            <p class="lead">
              Provide keywords and search terms. Find the experts who have the right skillset for your needs.
            </p>
          </div>
        </div>
        <div class="span4">
          <div class="well top-section">
            <div class="top-section-icon">
              <i class="icon-calendar icon-3-5x icon-border"></i>
            </div>
            <h2>
              Book
            </h2>
            <p class="lead">
              Start a session immediately if an expert is online. Schedule a session based on expert availability.
            </p>
          </div>
        </div>
        <div class="span4">
          <div class="well top-section">
            <div class="top-section-icon">
              <i class="icon-thumbs-up icon-3-5x icon-border"></i>
            </div>
            <h2>
              Solve
            </h2>
            <p class="lead">
              Join a videochat with your expert. Pair program via remote desktop. Screenshare, chat, and learn.
            </p>
          </div>
        </div>
      </div>

      <h2 class="why-use" style="margin-top:40px;">A video if you're still curious</h2>

      <div class="row-fluid text-center">
        <div class="span12">
          <div class="video-side-container" style="margin:30px auto;width: 40%;float:none;">
            <div class="video-container">
              <!-- <iframe width="420" height="315" src="//www.youtube.com/embed/g9tJDOxYVR0?rel=0&showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe> -->
              <iframe width="420" height="315" src="https://www.youtube.com/embed/ho0a6tlZ2vU?rel=0&showinfo=0&autohide=1&wmode=transparent&wmode=Opaque" frameborder="0" allowfullscreen></iframe>
            </div>
           </div>
        </div>
      </div>
    </div>
  </div>
