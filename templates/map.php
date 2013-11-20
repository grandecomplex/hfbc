<div id="location-map-wrapper">
  <div id="location-map-cover" class="centered">
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
      <div class="city_name">Singapore</div>
    </a>
    <a class="city_block" id="hongkong" href="#">
      <div class="city_circle"></div>
      <div class="city_name">Hong Kong, China</div>
    </a>
    <a class="city_block" id="shanghai" href="#">
      <div class="city_circle"></div>
      <div class="city_name">Shanghai, China</div>
    </a>
    <a class="city_block" id="nyc" href="#">
      <div class="city_name">New York, USA</div>
      <div class="city_circle"></div>
    </a>
  </div>
</div>

<script type="text/javascript" charset="utf-8">
$(function() {
  
  $document = window.$document || $(document);

  $document.on("click", ".city_block", function(e) {
    var $cityOption = $("#"+$(this).prop("id")+"-form");
    e.preventDefault();
    overlay.toggle("#join-us-overlay");
    
    $cityOption.parent().prop("selectedIndex", $cityOption.index() );
  });
  
});
  
</script>