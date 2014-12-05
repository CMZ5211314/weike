<?php keke_tpl_class::checkrefresh('task/sreward/control/admin/tpl/task_list', '1417606201' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $model_info['model_name'];?><?php echo $_lang['manage'];?></h1>
         <div class="tool">
         	<a href="index.php?do=model&model_id=1&view=list&status=0" class="here"><?php echo $_lang['task_list'];?></a>
<!--	<a href="index.php?do=model&model_id=1&view=config"><?php echo $_lang['task_config'];?></a>-->
 </div>
</div>
    <!--页头结束-->

    <!--提示结束-->
     
        <div class="box search p_relative">
    	<div class="title"><h2><?php echo $_lang['search'];?></h2></div>
        <div class="detail" id="detail">
           
    <form action="index.php?do=model&model_id=1&view=list" method="post">
 <input type="hidden" value="<?php echo $page;?>" name="page">
<table cellspacing="0" cellpadding="0">
<tbody>
                        <tr>
                            <th><?php echo $_lang['task_id'];?></th>
                            <td><input type="text" value="<?php echo $w['task_id']?>" name="w[task_id]" class="txt"/></td>
                            <th><?php echo $_lang['task_title'];?></th>
                            <td><input type="text" value="<?php echo $w['task_title']?>" name="w[task_title]" class="txt"/> <?php echo $_lang['search_by_like'];?></td>
                             <th></th><td>
                             	<button class="pill" type="submit" value="<?php echo $_lang['search'];?>" name="sbt_search">
                            		<span class="magnifier icon">&nbsp;</span><?php echo $_lang['search'];?>
</button></td>
                             </td>
 	
</tr>
                        <tr>
                            <th><?php echo $_lang['choose_task_status'];?></th>
                            <td>
                            	<select class="ps vm" name="w[task_status]" id="catid" onchange="statusJump(this.value)">
                            		<option value="" <?php if(!$w['task_status']) { ?> selected="selected" <?php } ?>>全部</option>
                            	<?php if(is_array($task_status)) { foreach($task_status as $k => $v) { ?>
    <?php $k = strval($k); ?>
<option value="<?php echo $k?>" <?php if($w['task_status']===$k) { ?> selected="selected" <?php } ?> ><?php echo $v;?></option>
<?php } } ?>	
</select>
</td>
<th><?php echo $_lang['result_order'];?></th>
<td>

<select name="ord[]" id="ord1">
                                <option value="task_id" <?php if($ord['0']=='task_id' or !isset($ord['0'])) { ?> selected="selected"<?php } ?>><?php echo $_lang['default_order'];?></option>
                                <option value="start_time" <?php if($ord['0']=='start_time' ) { ?> selected="selected"<?php } ?>><?php echo $_lang['pub_time'];?></option>
                                </select>
                                <select name="ord[]" onchange="orderJump(this.value)">
                                <option <?php if($ord['1']=='desc' or !isset($ord['1'])) { ?>selected="selected" <?php } ?> value="desc"><?php echo $_lang['desc'];?></option>
                                <option <?php if($ord['1']=='asc') { ?>selected="selected" <?php } ?> value="asc"><?php echo $_lang['asc'];?></option>
                                </select>
</td>
                            <th><?php echo $_lang['list_result'];?></th>
                            <td><select name="page_size" onchange="pageJump(this.value)">
<option value="10" <?php if($page_size=='10') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>10</option>
<option value="20" <?php if($page_size=='20') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>20</option>
<option value="30" <?php if($page_size=='30') { ?>selected="selected"<?php } ?>><?php echo $_lang['page_size'];?>30</option>
</select>
                              
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
    <!--搜索结束-->
    
    <div class="box list">
    	<div class="title"><h2><?php echo $_lang['reward_task_list'];?></h2></div>
        <div class="detail">
        	<form action="#" id='frm_list' method="post">
        	<input type="hidden" value="<?php echo $page;?>" name="page">
<input type="hidden" name="w['page_size']" value="<?php echo $page_size;?>">
               <div id="ajax_dom"><input type="hidden" value="<?php echo $page;?>" name="page">
               <table cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th width="8%">ID</th>
                    <th width="27%"><?php echo $_lang['task_title'];?></th>
                    
                    <th width="15%"><?php echo $_lang['task_cash'];?></th>
<th width="10%"><?php echo $_lang['pub_name'];?></th>
<th width="10%"><?php echo $_lang['task_status'];?></th>
                    <th width="25%"><?php echo $_lang['operate'];?></th>
                  </tr>
                  <?php if(is_array($task_arr)) { foreach($task_arr as $k => $v) { ?>
                  <tr class="item">
                 	<td class="td25"><input type="checkbox" name="ckb[]" class="checkbox" value="<?php echo $v['task_id'];?>" class="checkbox"><?php echo $v['task_id'];?></td>
                    <td class="td28">
                    	<a href="../../index.php?do=task&task_id=<?php echo $v['task_id'];?>" target="_blank"><?php echo kekezu::cutstr($v['task_title'],40) ?></a>
<?php if($v['is_top']==1) { ?><font color="red">[<?php echo $_lang['recommend'];?>]</font><?php } ?>
</td>
                   
                    <td><?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?></td>
                    <td><?php echo $v['username']?></td>
 <td><?php echo $task_status[$v['task_status']];?></td>
                    <td>
                    	<?php if($v['task_status']==1||$v['task_status']==0) { ?>
                    	<a href="index.php?do=model&model_id=<?php echo $v['model_id']?>&view=list&task_id=<?php echo $v['task_id']?>&ac=pass&page=<?php echo $page;?>" onclick="return cpass(this,'',1);" class="button"><span class="check icon"></span>审核通过</a>
<a href="index.php?do=model&model_id=<?php echo $v['model_id']?>&view=list&task_id=<?php echo $v['task_id']?>&ac=nopass&page=<?php echo $page;?>" onclick="return cpass(this,'',2);" class="button"><span class="cross icon"></span>审核失败</a>
<?php } ?>

<?php if($v['task_status']==2 && $v['is_top']!=1) { ?>
<a href="index.php?do=model&model_id=<?php echo $v['model_id']?>&view=list&task_id=<?php echo $v['task_id']?>&ac=recommend&page=<?php echo $page;?>" onclick="return crecomm(this,'',1);" class="button"><span class="uparrow icon"></span><?php echo $_lang['recommend'];?></a>
<?php } ?>
<?php if($v['task_status']==2 && $v['is_top']==1) { ?>
<a href="index.php?do=model&model_id=<?php echo $model_id?>&view=list&ac=unrecommend&task_id=<?php echo $v['task_id'];?>&page=<?php echo $page;?>" onclick="return crecomm(this,'',2);" class="button"><span class="downarrow icon"></span><?php echo $_lang['cancel_recommend'];?></a>
<?php } ?>
<a href="index.php?do=model&model_id=<?php echo $v['model_id']?>&view=edit&task_id=<?php echo $v['task_id']?>&page=<?php echo $page;?>" class="button dbl_target"><span class="pen icon"></span>查看</a>
<?php if(in_array($v['task_status'],array('8','9','10'))) { ?>
<a href="index.php?do=model&model_id=<?php echo $v['model_id']?>&view=list&ac=del&task_id=<?php echo $v['task_id']?>&page=<?php echo $page;?>" class="button"  onclick="return cdel(this);"><span class="trash icon"></span><?php echo $_lang['delete'];?></a>
<?php } ?>
<?php if($v['is_trust']&&$v['task_status']=='9'&&time()>$v['end_time']) { ?><!--担保模式，任务失败退款-->
<a href="index.php?do=model&model_id=<?php echo $v['model_id']?>&view=list&ac=refund&task_id=<?php echo $v['task_id']?>&page=<?php echo $page;?>" class="button"><span class="trash icon"></span>申请退款</a>
<?php } ?>
</td>
                  </tr>
                  <?php } } ?>
                  
                  <tr>
                    <td colspan="7">
                    <div class="page fl_right"><?php echo $pages['page'];?></div>
                    
                    <div class="clearfix">
                  		<input type="checkbox" onclick="checkall();" id="checkbox" name="checkbox"/>
                        <label for="checkbox"><?php echo $_lang['select_all'];?></label>
                        <input type="hidden" name="sbt_action" class="sbt_action"/>
                        <button type="submit" value="<?php echo $_lang['mulit_delete'];?>" onclick="return batch_act(this,'frm_list');" class="pill negative" ><span class="icon trash"></span><?php echo $_lang['mulit_delete'];?></button>
                        <button type="submit" value="<?php echo $_lang['mulit_pass'];?>" onclick="return batch_act(this,'frm_list');"  class="positive pill negative"><span class="icon check">&nbsp;</span><?php echo $_lang['mulit_pass'];?></button>
                    </div>
                    </td>
                  </tr>
                </tbody>
              </table></div>
        	</form>
        </div>       
    </div>
<!--主体结束-->
 


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
var url = '<?php echo $url_str;?>';
function statusJump(task_status){
window.location.href = url+'&w[task_status]='+task_status;
}
function orderJump(value){
var ord1 = $("#ord1").children("option:selected").val();//selected的值
window.location.href= url+'&ord[0]='+ord1+'&ord[1]='+value;
}
function pageJump(value){
window.location.href = url+'&page_size='+value;
}
</script>
<?php keke_tpl_class::ob_out();?>