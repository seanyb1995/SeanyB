$( document ).ready(function() {
  
  if (top.location.pathname === '/'){
      /* magic ... */
      var x = document.getElementById("masthead");
      if (x.className === "site-header") {
        x.className = "in-view";
      } else {
        x.className = "site-header";
      }
  }
  
});