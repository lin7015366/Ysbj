$(document).ready(function(){
 $(".trcolor").find("tr").each(function(i){this.style.backgroundColor=['#ffffff','#ffffff'][i%2]})//隔行换色
 $(".trcolor").find("tr").mouseover(function(){
  $(this).css("background-color","#edf5fa");
 });
 $(".trcolor").find("tr").mouseout(function(){
   $("tr:even").css("background-color","#ffffff"); //偶数行的颜色
   $("tr:odd").css("background-color","#ffffff");  //奇数行的颜色
 });
});