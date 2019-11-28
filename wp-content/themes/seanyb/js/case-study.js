// $(document).ready(function(){
//   //--case study hover animation--//
  
//   $(".odd a").mouseenter(function(){    
//     $(".odd img").addClass('animate');
//     $(".odd h1").addClass('animate');
//     $(".odd h3").addClass('animate');
//     $(".odd p").addClass('animate');
//   });
  
//   $(".even a").mouseenter(function(){    
//     $(".even img").addClass('animate'); 
//     $(".even h1").addClass('animate');
//     $(".even h3").addClass('animate');
//     $(".even p").addClass('animate');
//   });
  
//   $(".odd a").mouseleave(function(){ 
//     $(".odd img").removeClass('animate');
//     $(".odd h1").removeClass('animate');
//     $(".odd h3").removeClass('animate');
//     $(".odd p").removeClass('animate');
//   });
  
//   $(".even a").mouseleave(function(){ 
//     $(".even img").removeClass('animate');
//     $(".even h1").removeClass('animate');
//     $(".even h3").removeClass('animate');
//     $(".even p").removeClass('animate');
//   });
  
//   //--case study click animation--//
//   $(".odd a").click(function(e){  
//     e.preventDefault();
//     var href = $(this).attr('href');
//     $(".sticky-nav").hide();
//     $("body").css("overflow","hidden");
//     $(".odd h1").addClass('clicked');
//     $(".odd h3").addClass('clicked');
//     $(".odd p").addClass('clicked');
//     $(".odd img").addClass('clicked');
//     $( ".odd img" ).animate({
//       width: 960,
//       height: 642,
//       opacity: 0
//     }, 2000, function() {
//     $(".load-in").addClass('animate');
//     window.location = href; 
//       // Animation complete.
//     });
//   });
  
//   //--case study click animation--//
//   $("#masthead > div > a").click(function(e){  
//     e.preventDefault();
//     var href = $(this).attr('href');
//     $("body").css("overflow","hidden");
//     $(".project-banner h1").addClass('clicked');
//     $(".project-information").addClass('clicked');
//     $(".project-indicator").addClass('clicked');
//     $(".project-banner img").animate({
//       opacity: 0
//     }, 2000, function() {
//     $(".load-in").addClass('animate');
//     window.location = href; 
//       // Animation complete.
//     });
//   });
  
//  //--case study click animation--//
//   $("#menu-item-152").click(function(e){  
//     e.preventDefault();
//     var href = $(this).find("a[href]").attr('href');
//     $(this).fadeOut();
//     $("body").css("overflow","hidden");
//     $(".project-banner h1").addClass('clicked');
//     $(".project-information").addClass('clicked');
//     $(".project-indicator").addClass('clicked');
//     $(".project-banner img").animate({
//       opacity: 0
//     }, 2000, function() {
//     $(".load-in").addClass('animate');
//     window.location = href; 
//       // Animation complete.
//     });
//   });
  
// });