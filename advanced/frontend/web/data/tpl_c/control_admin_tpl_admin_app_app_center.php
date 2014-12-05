<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_app_app_center', '1417606207' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_K['charset'];?>">
<title>keke admin</title>


<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="../../resource/css/buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="../../resource/js/jquery.js"></script>
<script type="text/javascript" src="../../resource/js/system/keke.js"></script>
<script type="text/javascript" src="../../resource/js/in.js"></script>
</head>
<body class="frame_body">
<div class="frame_content">
<div id="append_parent"></div> 

<div class="page_title">
<h1>插件管理</h1>
     
</div>
<!--页头结束--> 

      <div class="box search p_relative">
    	<div class="title"><h2>未启用的插件</h2></div>
        <div class="gc" id="detail">
        	<form>
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<?php if(is_array($plug_close)) { foreach($plug_close as $v) { ?>
 	<tr>
 		<th width="8%"><?php echo $v['plug_name']?></th>
<td><a href="index.php?do=app&view=app_center&ac=open&plug_id=<?php echo $v['plug_id'];?>" class="button" type="button" >启用</a></td>
<td><?php echo $v['plug_desc']?></td>

 	</tr>
<?php } } ?>	
 </tbody>
</table>
</form>
        </div>
 </div>
 
  
      <div class="box search p_relative">
    	<div class="title"><h2>已启用的插件</h2></div>
        <div class="gc" id="detail">
        	<form>
<table cellspacing="0" cellpadding="0">
 <tbody>
<?php if(is_array($plug_open)) { foreach($plug_open as $v) { ?>	
<tr>
<th width="8%"><?php echo $v['plug_name']?></th>
<td><a href="index.php?do=app&view=app_center&ac=close&plug_id=<?php echo $v['plug_id'];?>" class="button" type="button" >关闭</a></td>
<td class="pl">
<?php echo $v['plug_desc']?>
    <ul>
    	<?php if(is_array($resource_new_arr[$v['submenu_id']])) { foreach($resource_new_arr[$v['submenu_id']] as $v) { ?>
    	<li><a href="<?php echo $v['resource_url']?>"><?php echo $v['resource_name']?></a></li>
<?php } } ?>
    </ul>
</td>
</tr>
<?php } } ?>
 </tbody>
</table>
</form>
        </div>
 </div>

     

</div>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript"
src="../../resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="../../lang/<?php echo $language?>/script/lang.js"></script>
<script type="text/javascript">
In.add('form_and_validation', {
path : "../../resource/js/system/form_and_validation.js",
type : 'js'
});
In.add('xheditor', {
path : "../../resource/js/xheditor/xheditor.js",
type : 'js'
});
In.add('mousewheel', {
path : "tpl/js/jquery.mousewheel.min.js",
type : 'js'
});
//In.add('styleswitch',{path:"tpl/js/styleswitch.js",type:'js'});
In.add('table', {
path : "tpl/js/table.js",
type : 'js'
});
In.add('calendar', {
path : "../../resource/js/system/script_calendar.js"
});
In('form_and_validation', 'xheditor', 'mousewheel', 'table', 'calendar');
</script>

<script type="text/javascript">
function cdel(o, s) {
d = art.dialog;
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cpass(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认审核通过？";
} else {
var c = "确认审核失败？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function cfreeze(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认冻结？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function crecomm(o, s, type) {
d = art.dialog;
if (type == 1) {
var c = "确认推荐？";
} else {
var c = "确认取消推荐？";
}
if (s) {
c = s;
}
d.confirm(c, function() {
window.location.href = o.href;
});
return false;
}
function pdel(frm) {
d = art.dialog;
var frm = frm;
var c = "<?php echo $_lang['you_comfirm_delete_operate'];?>";
d.confirm(c, function() {
$("#" + frm).submit();
});
return false;
}
function batch_act(obj, frm) {
d = art.dialog;
var frm = frm;
var c = $(obj).val();
var conf = $(":checkbox[name='ckb[]']:checked").length;
if (conf > 0) {
d.confirm("<?php echo $_lang['confirm'];?>" + c + '?', function() {
$(".sbt_action").val(c);
$("#" + frm).submit();
});
} else {
d.alert("<?php echo $_lang['has_none_being_choose'];?>");
}
return false;
}
</script>
<?php if(KEKE_DEBUG) { ?>
<div
style="background-color: red; color: #fff; width: 400px; text-align: center;">
querys:
<?php echo db_factory::create()->get_query_num() ?>
&nbsp; times:
<?php echo kekezu::execute_time() ?>
</div>

<?php } ?>
</body>
</html>
<script type="text/javascript">
function open_plug(plug_id){
d = art.dialog;
c = "确认开启？";
var url = "index.php?do=app&view=app_center&ac=open&plug_id="+plug_id;

d.confirm(c, function(){
window.location.href = url ;
});
return false;
}
function close_plug(plug_id){
d = art.dialog;
c = "确认关闭？";
var url = "index.php?do=app&view=app_center&ac=close&plug_id="+plug_id;

d.confirm(c, function(){
window.location.href = url ;
});
return false;
}
</script>
<?php keke_tpl_class::ob_out();?>