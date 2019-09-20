jQuery(document).ready(function($) {
  
  $(".sticky-nav svg").mouseenter(function(){    
    $(".sticky-nav svg").addClass('animate');
  });
  
  $(".sticky-nav svg").mouseleave(function(){    
    $(".sticky-nav svg").removeClass('animate');
  });
  
});