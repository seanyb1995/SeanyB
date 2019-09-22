jQuery(document).ready(function($) {
  
  $(".sticky-nav svg").mouseenter(function(){    
    $(".sticky-nav svg").addClass('animate');
  });
  
  $(".sticky-nav svg").mouseleave(function(){    
    $(".sticky-nav svg").removeClass('animate');
  });
  
  $(".sticky-nav-project svg").mouseenter(function(){    
    $(".sticky-nav-project svg").addClass('animate');
  });
  
  $(".sticky-nav-project svg").mouseleave(function(){    
    $(".sticky-nav-project svg").removeClass('animate');
  });
  
});