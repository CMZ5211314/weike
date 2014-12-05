<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_tool_dboptim', '1417606216' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['db_mange'];?></h1>
          <div class="tool">         
            <a href="index.php?do=tool&view=dbbackup"><?php echo $_lang['backup'];?></a>
            <a href="index.php?do=tool&view=dbrestore"><?php echo $_lang['restore'];?></a>
<a href="index.php?do=tool&view=dboptim" <?php if(!$op) { ?>class="here"<?php } ?>><?php echo $_lang['optim'];?></a>
<a href="index.php?do=tool&view=dboptim&op=repair" <?php if($op=='repair') { ?>class="here"<?php } ?>><?php echo $_lang['repair'];?></a>
</div>
</div>
<?php if($op=='repair') { ?>
<div class="box tip clearfix p_relative">
   <div class="control"><a href="javascript:void(0);" title=<?php echo $_lang['close'];?>><b>&times;</b></a></div>
   <div class="title"><h2><?php echo $_lang['tips'];?></h2></div>
   <div class="detail pad10">
      <ul>
         <li><?php echo $_lang['repair_tip1'];?></li>
         <li><?php echo $_lang['repair_tip2'];?></li>
      </ul>
   </div>
</div>
<div class="box post">
  <div class="tabcon">
    <div class="title"><h2><?php echo $_lang['db_repair'];?></h2></div>
 <div class="detail t_c">
<form method="post" action="#" id="frm_art_search">
 			<input type="hidden" name="op" value="repair">
 			<input type="hidden" name="is_submit" value="1">
      		<button class="primary positive pill button" type="submit">
      			<span class="check icon"></span><?php echo $_lang['start'];?><?php echo $_lang['repair'];?>
</button> 
   		</form>
</div>	
</div>
</div>
<?php } else { ?>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2><?php echo $_lang['db_optim'];?></h2></div>
<div class="detail">
<form method="post" action="#" id="frm_art_search">
   			
 			<input type="hidden" name="is_submit" value="1">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php if($table_free_list) { ?>
                <tr>
                    <th class="100" align="left">
                       	<?php echo $_lang['db_table'];?>
                    </th>
                    <th width="200">
                       <?php echo $_lang['type'];?>
                    </th>
                    <th width="60">
                        <?php echo $_lang['record'];?>
                    </th>
   
                    <th width="60">
                       <?php echo $_lang['data'];?>
                    </th>
<th width="60">
                       <?php echo $_lang['home'];?>
                    </th>
 <th width="60">
                       <?php echo $_lang['chip'];?>
                    </th>
                </tr>
                <?php if(is_array($table_free_list)) { foreach($table_free_list as $k => $v) { ?>
                <tr>
                    <td align="left">
                    <label>
                      <input  type="checkbox" name="optimizetables[]" value="<?php echo $v['Name']?>" checked="checked"> <?php echo $v['Name']?>
                    </label>
</td>
                    <td>
                        <?php echo $v['Engine']?>
                    </td>
                    <td>
                      <?php echo $v['Rows']?>
                    </td>
                 	 <td>
                   		<?php echo kekezu::get_format_size($v['Data_length']) ?>
     </td>
  <td>
                   		<?php echo $v['Index_length']?>
     </td>
  <td>
  	<?php echo kekezu::get_format_size($v['Data_free']) ?>
                   	 </td>
                </tr>
<?php } } ?>
                <tr>
                	<th  align="left">
                		<button class="primary positive pill button" original-title="" type="submit"><span class="check icon"></span><?php echo $_lang['submit'];?></button> 
                	</th>
                  
                </tr>
<?php } else { ?>
                <tr>
                	<th align="center"><?php echo $_lang['no_optimizations'];?></th>
                </tr>

<?php } ?>
            </table>
  </form>
</div>	
</div>
</div>
<?php } ?>
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