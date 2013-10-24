<?php
/*
 * Template Name: Talks
 * Description: Talks at HFBC
 */

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
?>

<div class="sections main-content">
  
  <div class="section centered">
    <h1>Talks</h1>
    <p class="subline">A series of talks on innovative technologies surrounding design, healthcare, and education.</p>
  </div>



  <div id="events" class="section">
    <div class="centered">
      <h2 class="section_title">Upcoming Events</h2>
    </div>
    
    <ul id="schedule">
        <li><div class="schedule-item">
          <div class="row-fluid">
          <div class="span4">
            <h3>The Powerful Combination of Empathy and Technology</h3>
            <ul class="event-details clearfix">
              <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />2:00pm, TUE, OCT 22, 2013</li>
              <li>
                <a target="_blank" href="https://plus.google.com/events/cho5tbjvshjflbrij99sbsf079g">
                  <span class="plus"></span><span class="plus-hangout-text">Online, Google Hangout</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="span5">
            <p style="margin-bottom: 15px;">The evolution of technology allows us to amplify our powers as humans, not only for increased physical leverage, but also for emotional amplification. How can we implement systems which engender virtuous feedback circles? What is the role of empathy in a connected world of instantaneous communication?</p>
            <h4>Speakers</h4>
            <div class="circle-pic-list clearfix">      
              <div class="speaker" itemscope itemtype="http://schema.org/Person">

                <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/David-Orban.jpg" />
                <p>David Orban</p>

              </div>
            </div>
          </div>
          <div class="span3">
            <a href="https://plus.google.com/events/cu6v4nkr8l7p2o9rjl19sm7hka8" class="button button-primary button-large pull-right" target="_blank"><span class="social-white-icon plus-white"></span> Register</a>
          </div>
        </div>
      </li>




      <li><div class="schedule-item">
          <div class="row-fluid">
          <div class="span4">
            <h3>The New Role of Education</h3>
            <ul class="event-details clearfix">
              <li class="datetime"><img alt="some_text" src=<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/cal.gif />November 2013</li>
              <li><a target="_blank" href="https://maps.google.com/maps?q=1355+Market+St,+San+Francisco,+CA&hl=en&sll=37.7577,-122.4376&sspn=0.192446,0.277748&oq=1355+market+st.&hnear=1355+Market+St,+San+Francisco,+California+94102&t=m&z=16"><img alt="some_text" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icons/point.gif" />Silicon Valley</a></li>
            </ul>
            <p></p>
          </div>
          <div class="span5">
            <h4>Speakers</h4>
            <div class="circle-pic-list clearfix">      
              <div class="speaker" itemscope itemtype="http://schema.org/Person">

                <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/vivek-wadhwa.jpg" />
                <p>Vivek Wadhwa</p>

              </div>
              <div class="speaker" itemscope itemtype="http://schema.org/Person">

                <img class="circle_pic" alt="" src="/assets/img/pages/homepage/speakers/mario-valle.jpg" />
                <p>Mario Valle</p>

              </div>
              <div class="speaker" itemscope itemtype="http://schema.org/Person">

                <img class="circle_pic" alt="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/pages/homepage/speakers/Bill-Reichert.jpg" />
                <p>Bill Reichert</p>

              </div>
            </div>
          </div>
          <div class="span3">
            <a href="#request-invite-educational" class="button button-large overlay-trigger pull-right">Request an Invite</a>
          </div>
        </div>
      </li>

       
    </ul>
  </div>

  <div id="section4" class="section clearfix centered">
    <h2 class="section_title">Past Events</h2>
    <p class="subline">Video and information about the event is available on individual event pages.</p>
    <ul class="past-events">
      <li>

        <dl class="datetime-label">
        <dt>Date time</dt>
        <dd class="title-font"  itemprop="startDate">FRI, OCT 4th, 2013</dd>
        </dl>
        <a href="/opening-ceremony"><h3>Opening Ceremony</h3></a>
      </li>

        <li>

          <dl class="datetime-label">
          <dt>Date time</dt>
          <dd class="title-font"  itemprop="startDate">FRI, OCT 11th, 2013</dd>
          </dl>
          <a href="/the-end-of-illness"><h3>The End of Illness</h3></a>
        </li>
    </ul>

  </div>
  
  <div id="section3" class="section clearfix centered">
    <h2 class="section_title">Speakers</h2>
    <p class="subline">Speaker's present expertise in healthcare, design, technology, and education.</p>
  
    <?php 
    $speakers = array(
      array("name" => "Zachary Bogue", 
                "image" => "/assets/img/pages/homepage/speakers/dcvc-zachary-bogue.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Data Collective (<a href='http://twitter.com/DCVC' target='_blank'>@DCVC</a>); Founders Den (<a href='http://twitter.com/foundersden' target='_blank'>@foundersden</a>); data; startups; environment",
                "talk_description" => "Zack is a cofounder of Data Collective, a venture fund with a unique team of experienced venture capitalists, technology entrepreneurs and practicing engineers, investing together in seed and early stage Big Data and IT infrastructure companies. Zack also is a cofounder and managing partner of Founders Den, a shared workspace for experienced technology entrepreneurs."),

      array("name" => "Vivek Wadhwa", 
                "image" => "/assets/img/pages/homepage/speakers/vivek-wadhwa.jpg",
                "title" => "Entrepreneur", 
                "description" => "Vice President of Innovation and Research at Singularity University.",
                "talk_description" => "Vivek Wadhwa is Vice President of Academics and Innovation at Singularity University; Fellow, Arthur & Toni Rembe Rock Center for Corporate Governance, Stanford University; Director of Research at the Center for Entrepreneurship and Research Commercialization at the Pratt School of Engineering, Duke University; and distinguished visiting scholar, Halle Institute of Global Learning, Emory University.
Wadhwa oversees the academic programs at Singularity University, which educates a select group of leaders about the exponentially growing technologies that are soon going to change our world. These advances—in fields such as robotics, A.I., computing, synthetic biology, 3D printing, medicine, and nanomaterials—are making it possible for small teams to do what was once possible only for governments and large corporations to do: solve the grand challenges in education, water, food, shelter, health, and security."),



      array("name" => "Bill Reichert", 
                "image" => "/assets/img/pages/homepage/speakers/Bill-Reichert.jpg",
                "title" => "Entrepreneur", 
                "description" => "Managing Director at Garage Venture",
                "talk_description" => "Bill Reichert has over 20 years of experience as an entrepreneur and operating executive. Since joining Garage in 1998, Bill has focused on early-stage information technology and materials science companies. He has been a board director or board observer at CaseStack, WhiteHat Security, ClearFuels Technology, Simply Hired, MiaSole, D.light Design, ThermoCeramix, and VisaNow, among others. Prior to Garage, Bill was a co-founder or senior executive in several venture-backed technology startups, including Trademark Software, The Learning Company, and Academic Systems. Earlier in his career, he worked at McKinsey & Company, Brown Brothers Harriman & Co., and the World Bank. Bill earned a B.A. at Harvard College and an M.B.A. from Stanford University. He was a founding board member and a Chairman of the Churchill Club, and a Board Member of the Silicon Valley Association of Startup Entrepreneurs. Currently he is the Chairman of the Small Fund Roundtable of the VC Taskforce and a member of the Council on Foreign Relations in New York."),

      array("name" => "Binta Brown", 
                "image" => "/assets/img/pages/homepage/speakers/bintabrown.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "40 under 40 “hottest rising stars by Time, YGL and Senior Fellow at Mossavar-Rahmani Center for Business and Government at Harvard Kennedy School of Government",
                "talk_description" => "Binta Niambi Brown has represented corporate clients in connection with m&a transactions, public and private debt and equity offerings, and secured debt financings. Fortune Magazine listed her on its list of business’s 40 under 40 “hottest rising stars,” and the World Economic Forum honored her as a Young Global Leader in early 2012. Binta was the only lawyer in private practice in North America honored as a Young Global Leader in 2012, and is the only lawyer in private practice on the October 2012 Fortune 40 under 40 list. She was also named as one of the 2011 “40 Under 40” professionals in Crain’s New York Business, and the National Organization for Women recognized her as a “Woman of Power and Influence” in June 2011.

She was an informal national security adviser to Senator Hillary Rodham Clinton’s presidential campaign. In 2010, Binta served on Governor Andrew Cuomo’s transition team, again as a member of his Transportation Policy Advisory Committee. Binta is a member of the Council on Foreign Relations and a Truman National Security Fellow. She is also a member of the Board of Trustees of Barnard College, Columbia University, the New York City Parks Foundation and the American Theatre Wing, and is a member of the Board of Directors of Human Rights First.
"),

      array("name" => "Dave Mosby", 
                "image" => "/assets/img/pages/homepage/speakers/dave-mosby.jpg",
                "title" => "Executive Director at Keiretsu Forum Academy", 
                "description" => "Executive Director at Keiretsu Forum Academy",
                "talk_description" => "Mosby is a business and technology veteran with thirty-five years of experience including nearly 20 years in CEO positions. As founder and CEO of InterWorks Software, Inc., a software development firm that creates specialized customer retention and value reinforcement solutions, Mosby built solutions for a variety of Global 2000 companies including DHL, Kaiser Permanente, and Link Logistics/Starbucks.
                Mosby is co-author of the highly acclaimed new book, The Paradox of Excellence: How Great Performance Can Kill Your Business, excerpts of which have appeared in Fast Company, Entrepreneur Magazine, the Harvard Business Review, The Chicago Tribune, The Dallas Morning News and Canada’s Globe and Mail."),

      array("name" => "David Orban", 
                "image" => "/assets/img/pages/homepage/speakers/David-Orban.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "CEO Dotsub",
                "talk_description" => "David Orban is an entrepreneur and visionary. Prior to Dotsub, David was a Founder and Chief Evangelist of WideTag, Inc., a high technology start-up company providing the infrastructure for an open Internet of Things. David was also Co-Founder of Startupbusiness, a social network aimed at enabling the technology startup ecosystem, and of Questar, an Italian software publishing and distribution company. He is also on the Faculty of and an Advisor to the Singularity University. Born in Budapest, Hungary, his educational background includes studies in Physics at both the University of Milan and the University of Padua. David's personal motto is: What is the question I should be asking?"),

      array("name" => "David Agus", 
                "image" => "/assets/img/pages/homepage/speakers/davidagus.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Professor of Medicine and Engineering, University of Southern California",
                "talk_description" => "Dr. David B. Agus is one of the world’s leading cancer doctors and pioneering biomedical researchers. Over the past twenty years he’s received acclaim for his innovations in medicine and contributions to new technologies that will change how all of us maintain our health. He’s also built a reputation for having a unique way of looking at the relationship of the body to health and disease. He explains, “Sometimes you have to go to war to understand peace. My work in the cancer war has taught me a lot about all things health-related, much of which goes against conventional wisdom.”

Dr. Agus is professor of medicine and engineering at the University of Southern California Keck School of Medicine and the Viterbi School of Engineering and heads USC’s Westside Cancer Center and the Center for Applied Molecular Medicine. He received his bachelor’s degree from Princeton and his M.D. from the University of Pennsylvania. He trained at Johns Hopkins and Memorial Sloan-Kettering Cancer Center. A staunch advocate for personalized medicine, he chairs the Global Agenda Council on Genetics for the World Economic Forum, and is co-founder of Applied Proteomics and Navigenics, two health-care technology and wellness companies.

Dr. Agus’s honors and awards include the American Cancer Society Physician Research Award, a Clinical Scholar Award from the Sloan-Kettering Institute, and the 2009 Geoffrey Beene Foundation’s Rock Stars of Science Award.

"),

     array("name" =>  "Tom Serres", 
                "image" => "/assets/img/pages/homepage/speakers/tom-serres.jpg",
                "title" => "Entrepreneur", 
                "description" => "Founder and Chief Rally Officer",
                "talk_description" => "Tom Serres is Founder and CEO of Rally.org, an online funding platform for causes. He is one of country’s leading thinkers on social giving, the cause economy, and digital fund raising.  Through Rally, Tom has helped millions of supports connect with nonprofits, charities, advocacy groups, political campaigns, school groups, and independent causes to raise awareness and money online.<span class='paragraph-block'></span>

Tom received the Campaigns & Election's Innovator Award in April of 2012, and back in 2009, he was named a Rising Political Star by the organization. The New Leaders Council also awarded Tom the title of “40 under 40” that same year. "
                ),

      array("name" => "John Roberts", 
                "image" => "/assets/img/pages/homepage/speakers/John-Roberts.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Co-Founder and President (pro tempore) at Open University of West Africa",
                "talk_description" => "John Roberts grew up in Southern California and founded his first project in his early twenties, serving food to the homeless in this neighborhood four times a week. In 2007, John graduated from the American University of Pairs with a bachelor in International Affairs. Later, in 2011 he received his master of Public Policy Development/IR from the National University of Singapore. John is currently expecting to complete his Ed.D of Organizational Leadership in 2014 from Pepperdine University. By February 2007 John founded the nonprofit organization, Heal the World. Heal the World wishes to form a symbiotic network between learning and investment, connecting the developing and developed nations. John is to this present day still the active president of Heal the World. In November 2011, John co-founded OUWA, together with Patrick Steele. OUWA benefits thousands of young people throughout the continent, promising a quality education throughout."),

      array("name" => "Salil Deshpande", 
                "image" => "/assets/img/pages/homepage/speakers/Salil.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Managing director Bain Capital Venture",
                "talk_description" => "Salil focuses on software infrastructure, open source, middleware and enterprise software. Prior to BCV Salil spent seven years as General Partner at Bay Partners, where he invested approximately $85M into 20 companies including DynaTrace (application performance management; acquired by Compuware), Buddy Media (platform for brands to engage with customers on social media; acquired by Salesforce.com), SpringSource (open source; acquired by VMware), Engine Yard (open source, Platform as a Service), Mulesoft (open source, cloud and enterprise integration), Lending Club (peer to peer lending), G2One (open source, Groovy, Grails; acquired by SpringSource), Sonatype (open source, software component management), Jambool (virtual currencies for social graphs; acquired by Google), Covestor (marketplace for hedge fund managers), FantasyBook (fantasy sports apps on Facebook; acquired by Citizen Sports, now part of Yahoo), and Vaxart (oral vaccine platform). Salil also served as board member at Tealeaf (customer experience management; acquired by IBM). Salil’s numerous angel investments include ZeroTurnaround (making Java faster), and Datastax (the Cassandra NoSQL database)."),

      array("name" => "Jeremey Howard", 
                "image" => "/assets/img/pages/homepage/speakers/Jeremy-howard.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Kaggle President and Chief Scientist, faculty at Singularity University",
                "talk_description" => "Jeremy Howard is president and chief scientist at Kaggle, a consulting platform that hosts competitions in which scientists from many disciplines use predictive modeling to solve problems that require analyzing large amounts of data. A self-taught data analyst, Howard began competing in Kaggle contests because he enjoyed the intellectual challenge, earning the top spot on Kaggle’s overall competitor rankings of 20,000 data scientists before assuming his leadership role.<span class='paragraph-block'></span>
Howard studied philosophy and worked as a management consultant before developing a passion for applying algorithms to data. Today he competes regularly in data mining competitions, which he uses to test himself and stay on the leading edge of machine learning and predictive modeling technology.<span class='paragraph-block'></span>

Before joining Kaggle he founded and sold two successful companies. His first commercial effort using algorithms was an insurance pricing company that became the Optimal Decisions Group. He then created FastMail, an independent-hosted email company in Australia that had over a million users before being sold."),
                
      array("name" => "Bjoern Lasse Herrmann", 
                "image" => "/assets/img/pages/homepage/speakers/bjoern-lasse.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "Founder Startup Compass ",
                "talk_description" => "Bjoern was born in Germany, and has become a recognized entrepreneur and expert on data products, data driven decision making, education, innovation, entrepreneurship and organizational development. 


He founded and led 5 for and non profit ventures in Germany, Bangladesh & the US. He also worked as an executive in Russia for one year for a mid sized marketing firm. In his free time he is an advisor to multiple companies, a mentor for the Thiel Fellowship, Startup Bootcamp and Spark Labs and a speaker at various conferences (e.g Strata & Hadoop World, Pioneers Festival, International Startup Festival) and Universities (e.g. Stanford, Oxford, Cambridge, Singularity University). He is also a member of the Sandbox Network and the Silicon Valley Leadership group. He is actively engaged into German, European and US politics on the issues of entrepreneurship and immigration. 


Most recently he & his team set out to decrease the massive failure rate of businesses by transforming the business world from gut driven to data driven. The first product Startup Compass now serves tens of thousands of software businesses around the world. Its success has been covered in WSJ, PBS, ARD, Techcrunch, Wired and Forbes. The young company has been backed by prominent investors including Steve Blank, Allen Morgan, Roger Krakoff, Daniel Recanati, Gianluca Dettori, Erik Jansen and Stefan Glaenzer."),

      array("name" => "Francis Pedraza", 
                "image" => "/assets/img/pages/homepage/speakers/francis-pedraza.jpg",
                "title" => "Co-Managing Partner at Data Collective", 
                "description" => "CEO of Everest",
                "talk_description" => "Francis Pedraza is CEO and co-founder of Everest, a technology start-up helping people reach personal goals and live their dreams. He previously founded DoBand and dreams to one day to run all of England’s National Trails."),
                
                
                array("name" => "Heather Anne Cochran", 
                          "image" => "/assets/img/pages/homepage/speakers/Heather-anne-cochran.jpg",
                          "title" => "Social worker and humanitarian", 
                          "description" => "Co-Founder at Hub Accra &amp; SliceBiz",
                          "talk_description" => "Heather Cochran is a Cofounder and Chief Operating Officer of SliceBiz. Her background is human-focused, having tackled countless challenges in the US as a Social Worker. Heather has worked in both the foster care and school system to advocate for the rights of youth. She completed her Bachelors of Arts in Sociology at San Diego State University, and a Masters in Social Work from Arizona State University. Heather moved to Africa to work as Chief Impact Officer at the Open University of West Africa to conduct research on entrepreneurship and educations.She then joined a team and won Startup Weekend Accra to form SliceBiz. Her startup has won several awards to include Apps4Africa and World Bank top 20 new SME's. As an advocate of gender equality, Heather organizes events and projects to promote female entrepreneurship in Africa. She is a Kairos Global Fellow, and has been named Top 50 People to know involved with Africa."),
                          
                          array("name" => "Jack Andraka", 
                                    "image" => "/assets/img/pages/homepage/speakers/jack-andraka.jpg",
                                    "title" => "High school student", 
                                    "description" => "Inventor, scientist and cancer researcher",
                                    "talk_description" => "Jack Andraka is a Maryland high school sophomore who at age 15 invented an inexpensive and sensitive dipstick-like sensor for the rapid and early detection of pancreatic, ovarian and lung cancers. After a close family friend died of pancreatic cancer, Jack (then a ninth grader) became interested in finding a better early-detection diagnostic test."),

      array("name" => "Kory Russel", 
                "title" => " Stanford Phd Student in Civil & Environmental Engineering,", 
                "image" => "/assets/img/pages/homepage/speakers/kory-russel.jpg",
                "description" => "Founder re.source",
                "talk_description" => "Kory is a PhD student in the Environmental Engineering & Science program of the Civil and Environmental Engineering Department.  He is currently working on the topic of non-networked water supply and sanitation in Mozambique and Haiti. He has been working on a large rural water improvement impact evaluation in Nampula, Mozambique. He specifically studies the caloric energy women expend when carrying water. Additionally, Kory and fellow WHD member Sebastien Tilmans are Bill and Melinda Gates Foundation Grand Explorations Grantees pursuing extremely low-cost sanitation business, service and product development in Haitian slums (Integrated Mobile Sanitation Solutions in Peri-urban Settings: Haiti, re.source).

Kory was born and grew up in Oregon till the age of 10 and still considers it home. He lived in Texas, North Carolina and the Ukraine before moving to Papua New Guinea for four years. After graduating from Ukarumpa International Secondary School, he went on to receive a BS in Environmental Biology and MS in Environmental Science from Taylor University. His research focused on dialectic variations in the Florida Scrub Jay female hiccup call and was conducted in Florida, primarily at Canaveral National Seashore. After completion of his studies he joined the Peace Corps and served as a Biology teacher in Mozambique for two years. He then extended his service for a third year as the Peace Corps Volunteer Leader for Project Development, where he performed financial oversight, assisted in planning and helped realize several nationwide projects that focused on women’s empowerment, skills training, HIV prevention and science education.

Kory is an EPA Star Fellow. He also received a 2009-2010 James H. Polhemus Fellowship, a 2010-2011 FLAS Fellowship in Portuguese, a Stanford University Center for African Studies 2011 Summer Fellowship and a 2011-2012 Rotary District Fellowship."))
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
  </div>
  
  
</div>

<div id="request-invite-educational" class="hidden mc_form overlay-window">
  <iframe src="/request-invite-to-educational-talk" height=450></iframe>
</div>