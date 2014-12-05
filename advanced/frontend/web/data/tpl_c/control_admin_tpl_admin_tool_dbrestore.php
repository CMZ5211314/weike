<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_tool_dbrestore', '1417606214' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <a href="index.php?do=tool&view=dbrestore" class="here"><?php echo $_lang['restore'];?></a>
<a href="index.php?do=tool&view=dboptim"><?php echo $_lang['optim'];?></a>
<a href="index.php?do=tool&view=dboptim&op=repair"><?php echo $_lang['repair'];?></a>
</div>
</div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2><?php echo $_lang['database_restore'];?></h2></div>
<div class="detail">
<form method="post" action="#" id="frm_art_search">
   			
 
        <div id="loading" style="background:url('tpl/img/loading.gif') no-repeat center;width:400px;height:150px;position:absolute;left:50%;margin-left:-200px;text-align:center;line-height:150px;display:none;">
            <?php echo $_lang['just_a_moment_restoring'];?>
        </div>
             
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th class="100" align="left">
                        <?php echo $_lang['database_name'];?>
                    </th>
                    <th width="200">
                       <?php echo $_lang['time'];?>
                    </th>
                    <th width="60">
                        <?php echo $_lang['restore'];?>
                    </th>
   
                    <th width="60">
                        <?php echo $_lang['delete'];?>
                    </th>
                </tr>
                <?php if(is_array($file_arr)) { foreach($file_arr as $k => $value) { ?>
                <tr>
                    <td align="left">
                    	 <?php echo kekezu::set_star($value['name'],7,11,'3','*'); ?> 
                    </td>
                    <td>
                        <?php echo  date('Y-m-d H:i:s',$value['date']); ?>
                    </td>
                    <td>
                        <a href="#" onclick="restore('<?php echo $k;?>');" class="button"><span calss="reload icon"></span><?php echo $_lang['restore'];?></a>
                    </td>
                 	 <td>
                        <a href="index.php?do=<?php echo $do;?>&view=<?php echo $view;?>&ac=del&restore_name=<?php echo $k?>" class="button" onclick="return cdel(this);"><span calss="trash icon"></span><?php echo $_lang['delete'];?></a>
                    </td>
                </tr><?php } } ?>
                <tr>
                    <th colspan="5" align="left">
                        <div class="page">
                            <?php echo $pages['page'];?>
                        </div>
                    </th>
                </tr>
            </table>
  </form>
</div>	
</div>


<script type="text/javascript">
    $(function(){
        $("#loading").ajaxStart(function(){
            $(this).show();
        }).ajaxStop(function(){
            $(this).hide();
        })
    })
    
    function restore(id){
art.dialog({
   				title: "<?php echo $_lang['comfirm_to_tips'];?>",
  				content: "<?php echo $_lang['comfirm_to_restore_data'];?>",
icon: 'succeed',
   				yesFn: function(){
url = 'index.php?do=<?php echo $do;?>&view=<?php echo $view;?>&ac=restore&restore_name=' + id;
          			  $.getJSON(url, function(json){
art.dialog(json.msg);
           		 })},
noFn :function(){this.close();return false;}
})
    }
    
    function download(filename){
    	var i = confirm("<?php echo $_lang['comfirm_to_upload_data_file'];?>");
        if ( i== true) {
            url = 'index.php?do=<?php echo $do;?>&view=<?php echo $view;?>&ac=download&file_name=' + filename;
            location.href = url;
        }
    }
    
</script>
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