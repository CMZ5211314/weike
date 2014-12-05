<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_tool_file', '1417744631' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['attachment_manage'];?></h1>
         <div class="tool"> 
            <a href="index.php?do=tool&view=file" <?php if($view == 'file') { ?>class="here"<?php } ?> ><?php echo $_lang['attachment'];?></a>
    	</div>
</div>
<div class="box search p_relative">
    	<div class="title"><h2><?php echo $_lang['search'];?></h2></div>
        <div class="detail" id="detail">
<form action="#" method="get" id="frm_list">
        	<input type="hidden" name="do"   value="<?php echo $do?>">
<input type="hidden" name="view" value="<?php echo $view?>">
<input type="hidden" name="type" value="<?php echo $type?>">
<input type="hidden" name="page" value="<?php echo $page?>">
<table cellspacing="0" cellpadding="0">
 <tbody>
 	<tr>
 		<th><?php echo $_lang['attachment'];?>ID</th>
<td><input type="text" class="txt" name="txt_file_id" value="<?php echo $txt_file_id?>" onkeyup="clearstr(this);"></td>
<th><?php echo $_lang['attachment_name'];?></th>
<td><input type="text" class="txt" name='txt_file_name' value="<?php echo $txt_file_name;?>" onkeyup="clearspecial(this);"></td>
 	</tr>

<tr>
<th><?php echo $_lang['show_number'];?></th>
<td>
<select name="wh[page_size]" class="ps vm">
<option value="10" <?php if($wh['page_size']=='10') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>10</option>
<option value="20" <?php if($wh['page_size']=='20') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>20</option>
<option value="30" <?php if($wh['page_size']=='30') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>30</option>
</select>
</td>
<th><?php echo $_lang['result_order'];?></th>
<td>

<select name="ord[]">
                        <option value="file_id" <?php if($ord['0']=='file_id' or !isset($ord['0'])) { ?> selected="selected"<?php } ?>><?php echo $_lang['default_order_by_id'];?></option>
                        <option value="file_name" <?php if($ord['0']=='file_name' ) { ?> selected="selected"<?php } ?>><?php echo $_lang['attachment_name'];?></option>
<option value="on_time" <?php if($ord['0']=='on_time' ) { ?> selected="selected"<?php } ?>><?php echo $_lang['upload_time'];?></option>
                        </select>
                        <select name="ord[]">
                        <option <?php if($ord['1']=='desc' or !isset($ord['1'])) { ?>selected="selected" <?php } ?> value="desc"><?php echo $_lang['desc'];?></option>
                        <option <?php if($ord['1']=='asc') { ?>selected="selected" <?php } ?> value="asc"><?php echo $_lang['asc'];?></option>
                        </select>
<button type="submit" name="sbt_search" value=<?php echo $_lang['search'];?> class="pill" />
<span class="icon magnifier">&nbsp;</span><?php echo $_lang['search'];?></button>
</td>
</tr>
 
 </tbody>
</table>
</form>
        </div>
 </div>


 <div class="box list">
 
  	  	<div class="title"><h2><?php echo $_lang['attachment_manage'];?></h2></div>
        	<div class="detail">
        		<form name="frm" id="frm" method="post" action="index.php?do=<?php echo $do?>&view=<?php echo $view?>">
        			<div id="ajax_dom">
        				<input type="hidden" name="page" value="<?php echo $page;?>">
          		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
                <tr>
                	<th width="15">
                		<input type="checkbox" id="checkbox" onclick="checkall();">
                	</th>
                    <th width="130" >
                        <?php echo $_lang['attachment'];?>ID
                    </th>
                    <th class="100" >
                        <?php echo $_lang['belongs_object'];?>
                    </th>
                    <th class="motif" >
                        <?php echo $_lang['attachment_name'];?>
                    </th>
                    <th width="200">
                        <?php echo $_lang['time'];?> 
                    </th>
                    <th width="60">
                      <?php echo $_lang['delete'];?>
                    </th>
                </tr>
                <?php if(is_array($file_arr)) { foreach($file_arr as $key => $value) { ?>
                <tr class="item">
                	<td >
                        <input type="checkbox" name="ckb[]" class="checkbox" value="<?php echo $value['file_id'];?>">
                    </td>
                    <td >
                        <?php echo $value['file_id'];?>
                    </td>
                    <td >
                        <?php echo $file_type_arr[$value['obj_type']];?>
                    </td>
                    <td >
                        <a href="../../<?php echo $value['save_name']?>" target="_blank" ><?php echo $value['file_name'];?></a>
                    </td>
                    <td>
                        <?php if($value['on_time']){echo date('Y-m-d H:i:s',$value['on_time']); } ?>
                    </td>
                    <td>
                        <a href="<?php echo $url?>&ac=del&file_id=<?php echo $value['file_id'];?>"
 onclick="return cdel(this);" class="button dbl_target">
                        	<span class="trash icon"></span><?php echo $_lang['delete'];?></a>
                    </td>
                </tr>
<?php } } ?>
                <tr>
                    <td colspan="6" >
                    	
                        <label for="checkbox"><?php echo $_lang['select_all'];?></label>

<input type="hidden" name="sbt_action" class="sbt_action"/>　
<button type="submit" name="sbt_del" class="negative pill button" value="<?php echo $_lang['mulit_delete'];?>" onclick="return batch_act(this,'frm')" >
<span class="trash icon"></span><?php echo $_lang['mulit_delete'];?></button> 
                            </td>
                        </tr>
                        </table>
<div class="page">
                                    <?php echo $pages['page'];?>
                                </div>
</div>
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
<?php keke_tpl_class::ob_out();?>