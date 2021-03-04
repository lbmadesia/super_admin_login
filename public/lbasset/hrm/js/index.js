// start left menu list angle icon control
$(document).ready(function(){
  $(".li-group-dropdown").click(function(){
      var downDive = $(this).attr("aria-expanded");
      if(downDive == "false"){
          $(".angle-left").removeClass("fa-angle-left");
          $(".angle-left").addClass("fa-angle-down");
      }
      else{
        $(".angle-left").removeClass("fa-angle-down");
        $(".angle-left").addClass("fa-angle-left");
      }
  });
  

  // start menu cog
  $("#cog").click(function(){
    var baction = $(this).attr("lbaction");
    if(baction == "full"){
      $(this).attr("lbaction","small");
      $(".right-side").css({width: 'calc(100% - 40px)'});
    }
    else{
      $(this).attr("lbaction","full");
      $(".right-side").css({width: 'calc(100% - 260px)'});
    }
  });
  // start full screen code
  $("#fullscreen").click(function(){
    var elem = document.documentElement;
    var baction = $(this).attr("lbaction");
    if(baction == "full"){
      $(this).attr("lbaction","small");
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
      elem.msRequestFullscreen();
    }
  }
  else{
    $(this).attr("lbaction","full");
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) { /* Safari */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE11 */
      document.msExitFullscreen();
    }
  }
  });
});