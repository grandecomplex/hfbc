$(function() {
  var overlay;
  var $document = window.$document || $(document);
  var isOverlayOpen = false;
  var $body = window.$body || $(document.body);
  var $main = $(".main.col-lg-12");
  var $overlay;
  
  window.overlay = {
    toggle: function toggleOverlay(overlay) {
      $overlay = $(overlay);
      $(".overlay-window").addClass("hidden");
    
      if (isOverlayOpen) {
        $main.removeClass("overlay");
        isOverlayOpen = false;
        unbindEvents();
      } else {
        $overlay.removeClass("hidden");
        $main.addClass("overlay");
        isOverlayOpen = true;
      
        if (window.outerWidth <= 500 || window.outerHeight <= 500) {
          $("body, html").scrollTop(1);
        }
        bindEvents();
      }
    }
  };
  
  $(".overlay-window").append("<a href=# class=overlay-close>Close</a>");
  
  $document.on("click", ".overlay-trigger", function(e) {
    e.preventDefault();
    window.overlay.toggle.call(this, this.getAttribute("href") );
  });
  
  function unbindEvents() {
    $main.unbind("click", closeOverlay);
    $(document).unbind("keyup", closeWithEscKey);
    $document.off("click", ".overlay-close", closeOverlay);
  }
  
  function bindEvents() {
    $main.bind("click", closeOverlay);
    $(document).bind("keyup", closeWithEscKey);
    $document.on("click", ".overlay-close", closeOverlay);
  }
    
  function closeWithEscKey(e) {
    if (e.keyCode == 27) {
       closeOverlay.call(this, e);
    }
  }
  
  function closeOverlay(e) {
    e.preventDefault();
    window.overlay.toggle.call(this, $overlay);
  }
  
});