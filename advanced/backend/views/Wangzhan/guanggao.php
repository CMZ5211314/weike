
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>KPPW 2.2--后台管理 - 客客专业威客系统</title>
<link rel="shortcut icon" href="./resource/img/system/logo.ico" />
<link rel="apple-touch-icon" href="./resource/img/system/logo.ico"/>
<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="./resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="./resource/js/jquery.js"></script>
<script type="text/javascript" src="../../lang/cn/script/lang.js" ></script>
</head>

<body class="skin" scroll="no">
<!--[if IE 6]><div id="ie6"><![endif]-->
<!--[if IE 7]><div id="ie7"><![endif]-->
<!--[if IE 8]><div id="ie8"><![endif]-->
<div class="login_box">
<div class="header">
<div class="logo">
<h1><img src="tpl/img/logo.png" alt="后台管理 - 客客专业威客系统" title="后台管理 - 客客专业威客系统"/></h1>
    </div>

   <script type="text/javascript">
    	$(function (){
show_a();
$("body,iframe").click(function(){
$(".hide_nav").hide();
});

  $(window).resize(function() { 
  				show_a();
});

$('#show_much').click(function(e){
   			$('.hide_nav').toggle();
e.stopPropagation();
return false;
         });


})
 
  function show_a(){
  	
var nav_width = $("#nav_div").width();

if(nav_width<558){ 
$("#a_show_more").show();
$("#show_much").show();

}else{

$("#a_show_more").hide();
$("#show_much").hide(); 
}		 
  }
 
    </script>
</div>

<script>
function del_cache(){
var src = $("#display_frame").attr("src");
$.post('index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1&ajax=1',function (json){
if(json.status==1){

artDialog.tips(L.clear_success,'1.5');
}


},'json');

 
//$("#display_frame").attr("src","src""&index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1");

}
function fresh(){
document.getElementById("display_frame").contentDocument.location.reload(true); 
 
}
window.onload = function(){ 
   
 $("body").ajaxStart(function(){
   $("#ajaxwaitid").fadeIn();
   }).ajaxComplete(function(){
   
   $("#ajaxwaitid").fadeOut();
   })	
 
}
</script>

 
</body>
</html>

