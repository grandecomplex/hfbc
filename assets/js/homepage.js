$(function() {
  
  $document = window.$document || $(document);

  $document.on("click", ".city_block", function(e) {
    var $cityOption = $("#"+$(this).prop("id")+"-form");
    e.preventDefault();
    overlay.toggle("#sign-up-overlay");
    
    $cityOption.parent().prop("selectedIndex", $cityOption.index() );
  });
  
});
