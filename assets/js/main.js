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
  
  $document.on("click", "#join-us-overlay .checkboxes input", function(e) {
    debugger
    
    var $this = $(this), href = $this.data("value");
    e.preventDefault();
    if ($this.prop("checked")) {
      $this.removeClass("button-off");
      $(href).attr("selected", "selected");
    } else {
      $this.addClass("button-off");
      $(href).removeAttr("selected");
    }
  
  });
});
