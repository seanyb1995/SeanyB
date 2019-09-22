$(document).ready(function(){
  
  if (top.location.pathname === '/case_study/activated-almond-digital/'){
  /* magic ... */
    $(".load-out").addClass('animate');
    
    $("#menu-item-145").css("opacity","0");
    $("#menu-item-146").css("opacity","0");

    $( ".project-banner img" ).animate({
      opacity: 1
    }, 1000, function() {
      // Animation complete.
    });

  }
  
  if (top.location.pathname === '/case_study/zoom-ride-hailing/'){
  /* magic ... */
    $(".load-out").addClass('animate');
    
    $("#menu-item-145").css("opacity","0");
    $("#menu-item-146").css("opacity","0");

    $( ".project-banner img" ).animate({
      opacity: 1
    }, 1000, function() {
      // Animation complete.
    });

  }
  
  if (top.location.pathname === '/case_study/plastafab-proprietary-limited/'){
  /* magic ... */
    $(".load-out").addClass('animate');
    
    $("#menu-item-145").css("opacity","0");
    $("#menu-item-146").css("opacity","0");

    $( ".project-banner img" ).animate({
      opacity: 1
    }, 1000, function() {
      // Animation complete.
    });

  }
  
  if (top.location.pathname === '/'){
  /* magic ... */
    $(".load-out").addClass('animate');
    $("#menu-item-152").hide();
    $( ".project-banner img" ).animate({
      opacity: 1
    }, 1000, function() {
      // Animation complete.
    });

  }
  
  $("#main > section > div.project-other > a").mouseenter(function(){    
    $(".even img").addClass('animate'); 
    $(".even h1").addClass('animate');
    $(".even h3").addClass('animate');
    $(".even p").addClass('animate');
  });
  
  $("#main > section > div.project-other > a").mouseleave(function(){ 
    $(".even img").removeClass('animate');
    $(".even h1").removeClass('animate');
    $(".even h3").removeClass('animate');
    $(".even p").removeClass('animate');
  });
  
    //--case study click animation--//
  $("#main > section > div.project-other > a").click(function(e){  
    e.preventDefault();
    var href = $(this).attr('href');
    $(".sticky-nav-project").hide();
    $("footer").hide();
    $("body").css("overflow","hidden");
    $(".even h1").addClass('clicked');
    $(".even h3").addClass('clicked');
    $(".even p").addClass('clicked');
    $(".project-other h3").addClass('clicked');
    $(".even img").addClass('clicked');
    $(".even img" ).animate({
      width: 960,
      height: 642,
      opacity: 0
    }, 2000, function() {
    $(".load-in").addClass('animate');
    window.location = href; 
      // Animation complete.
    });
  });
  
});