function updateTime(){
  console.log("updatetime");
  var d=new Date();
  var hh=d.getHours();
  var mm=d.getMinutes();
  var ss=d.getSeconds();
var ampm="am";
  if(hh>12){
    hh-=12;
    ampm="pm"; 
  }
  var date=d.getDate();
  var mon=d.getMonth();
  var year=d.getYear()+1900;
    $("#date_time").html(hh+":"+mm+":"+ss+" "+ampm+" "+date+"/"+mon+"/"+year);

}

function borderline(){
  $("#background").width(($("body").width()-19)+"px");
  $("#inner_background").width(($("body").width()-25)+"px");
    $("#background").height(($("body").height()-19)+"px");
    $("#inner_background").height(($("body").height()-25)+"px");
  $("#background").animate({left:"9px",top:"9px"});
  $("#inner_background").animate({left:"12px",top:"12px"});
  $("#Sys_type").animate({left:"30px",top:($("body").height()-20)+"px"});
  $("#date_time").animate({right:"50px",top:($("body").height()-20)+"px"});
  updateTime();
}
function loader(){
  console.log("Page script started");
  borderline();
  setInterval(function(){
      updateTime();
  },1000);
  console.log("Page load script complete");
  $(window).resize(function(){
    borderline();
  });
}
