/* Author:

*/


$(function() {


  window.$document = window.$document || $(document);
  $document.on("click", ".scrollLink",  function(e) {
    var href = this.getAttribute("href"); 
    e.preventDefault(); 
    $("body, html").animate({
     scrollTop: $(href).offset().top - 30 
    }); 
  });
  
  $document.on("click", ".buttons-group .button", function(e) {
    var $this = $(this), href = $this.attr("href");
    e.preventDefault();
    
    if ($this.hasClass("button-off")) {
      $this.removeClass("button-off");
      $(href).attr("selected", "selected");
    } else {
      $this.addClass("button-off");
      $(href).removeAttr("selected");
    }
  
  });
});
