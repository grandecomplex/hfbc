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
});
