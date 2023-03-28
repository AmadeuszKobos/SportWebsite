$(document).ready(function(){
    $("#headimg1").click(function(){
        $("#headimg2").animate({right: '551px'});
      $("#headimg1").animate({left: '550px'}, function(){
        $("#goal").text("🏆GOOOOOL🏆")
      });
      $("#headimg2").animate({right: '0px'});
      $("#headimg1").animate({left: '0px'});

    });
  });
