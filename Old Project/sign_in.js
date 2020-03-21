$(document).ready(function(){
  loader();
});
function pusherror(t){
  if(t!=undefined){
  $("#error_box").html(t);
  $("#error_box").fadeIn();
  setTimeout(function(){
    $("#error_box").fadeOut();
  },4000);}
}
