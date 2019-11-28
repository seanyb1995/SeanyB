//--------------------------------------------------waypoints animations--//
jQuery(document).ready(function($) {
    function scrollToAnchorTop(aid){
      var aTag = $("[name='"+ aid +"']");
      $('html,body').animate({scrollTop: aTag.offset().top},'slow');
    }
    
    $("#menu-item-145").click(function() {
       scrollToAnchorTop('work');
    });
  
    $("#menu-item-146").click(function() {
       scrollToAnchorTop('about');
    });
  
    $("#menu-item-206").click(function() {
       scrollToAnchorTop('contact');
    });
  
});