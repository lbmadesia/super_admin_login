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
});