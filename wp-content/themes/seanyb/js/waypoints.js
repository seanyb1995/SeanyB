//--------------------------------------------------waypoints animations--//
jQuery(document).ready(function($) {
    function scrollToAnchor(aid){
    var aTag = $("[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
    }
    
    $("#menu-item-145").click(function() {
       scrollToAnchor('work');
    });
  
    $("#menu-item-146").click(function() {
       scrollToAnchor('about');
    });
  
    $("#uparrow").click(function() {
       scrollToAnchor('top');
    });
  
});