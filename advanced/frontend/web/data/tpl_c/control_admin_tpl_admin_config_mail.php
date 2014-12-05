<?php keke_tpl_class::checkrefresh('control/admin/tpl/admin_config_mail', '1417682443' );?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    	<h1><?php echo $_lang['global_config'];?></h1>
        <div class="tool">         
            <a href="index.php?do=config&view=basic&op=info" <?php if($op == 'info') { ?>class="here"<?php } ?> > <?php echo $_lang['global_config'];?></a>
            <a href="index.php?do=config&view=basic&op=conf" <?php if($op == 'conf') { ?>class="here"<?php } ?> > <?php echo $_lang['basic_config'];?></a>
<a href="index.php?do=config&view=basic&op=seo" <?php if($op == 'seo') { ?>class="here"<?php } ?> ><?php echo $_lang['seo_config'];?></a>
            <a href="index.php?do=config&view=mail" <?php if($view == 'mail') { ?>class="here"<?php } ?> ><?php echo $_lang['mail_config'];?></a>
    	</div>
</div>
<div class="box post">
        <div class="tabcon">
        	<div class="title"><h2><?php echo $_lang['mail_config'];?></h2></div>
            <div class="detail">
    <form name="frm_config_pay" action="#" method="post">
 
        <table width="100%"  border="0" cellspacing="0" cellpadding="0" class="tab_m t_l">
            <tr>
                <th scope="row" width="160">
                    <?php echo $_lang['mail_serve'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <label for="rdo_mail_server_cat_mail">
                        <input id="rdo_mail_server_cat_mail" type="radio" name="mail_server_cat"<?php if($config_arr['mail_server_cat'] == "mail") { ?>checked="checked" <?php } ?>value="mail"  /><?php echo $_lang['built_in_mail_serve'];?>
                    </label>
                    <label for="rdo_mail_server_cat_smtp">
                        <input id="rdo_mail_server_cat_smtp" type="radio" name="mail_server_cat"<?php if($config_arr['mail_server_cat'] == "smtp") { ?>checked="checked" <?php } ?>value="smtp" /><?php echo $_lang['other_mail_serve'];?>
                    </label>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['open_ssl'];?>(SSL)<?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <label for="rdo_mail_ssl_no">
                        <input id="rdo_mail_ssl_no" type="radio" name="mail_ssl"<?php if($config_arr['mail_ssl']==2) { ?>checked="checked"<?php } ?> value="2" id="rdo_mail_ssl_no"><?php echo $_lang['no'];?>
                    </label>
                    <label for="rdo_mail_ssl_yes">
                        <input id="rdo_mail_ssl_yes" type="radio" name="mail_ssl"<?php if($config_arr['mail_ssl']==1) { ?>checked="checked"<?php } ?> value="1"  id="rdo_mail_ssl_yes"><?php echo $_lang['yes'];?>
                    </label>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['outgoing_mail_server'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="smtp_url" value="<?php echo $config_arr['smtp_url'];?>" limit="len:3-100" msg="<?php echo $_lang['tips_about_outgoing_mail_server_length'];?>3-100" msgArea="txt_reg_limit_msg" class="txt"/><span id="txt_reg_limit_msg"></span>
                    (<?php echo $_lang['mail_host'];?>)
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['mail_server_port'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="mail_server_port" value="<?php echo $config_arr['mail_server_port'];?>" limit="type:int" msg="<?php echo $_lang['port_must_be_an_integer'];?>" msgArea="txt_mail_server_port_msg" class="txt"/><span id="txt_mail_server_port_msg"></span>
                    (<?php echo $_lang['port_default'];?><?php echo $_lang['zh_mh'];?>25)
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['mail_account_number'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="post_account" value="<?php echo $config_arr['post_account'];?>" limit="type:email" msg="<?php echo $_lang['mail_address_incorrect_format'];?>" msgArea="txt_post_account_msg" class="txt"/><span id="txt_post_account_msg"></span>
                    (<?php echo $_lang['tips_about_account'];?>)
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['mail_password'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="password" size="50" name="account_pwd" value="<?php echo $config_arr['account_pwd'];?>" limit="len:0-20" msg="" msgArea="txt_account_pwd_msg" class="txt"/><span id="txt_account_pwd_msg"></span>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['mail_reply_address'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" name="mail_replay" value="<?php echo $config_arr['mail_replay'];?>" limit="type:email" msg="<?php echo $_lang['mail_address_incorrect_format'];?>" msgArea="txt_mail_replay_msg" class="txt"/><span id="txt_mail_replay_msg"></span>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['mail_coding'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <label for="rdo_mail_charset_utf8">
                        <input type="radio" id="rdo_mail_charset_utf8" name="mail_charset"<?php if($config_arr['mail_charset']=="utf-8") { ?>
                        checked="checked"<?php } ?>
                        value="utf-8" ><?php echo $_lang['mail_global_coding'];?>(utf-8)
                    </label>
                    <label for="rdo_mail_charset_gbk">
                        <input type="radio" id="rdo_mail_charset_gbk" name="mail_charset"<?php if($config_arr['mail_charset']=="gbk") { ?>
                        checked="checked"<?php } ?>
                        value="gbk" ><?php echo $_lang['simplified_chinese'];?>
                    </label>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo $_lang['mail_address'];?><?php echo $_lang['zh_mh'];?>
                </th>
                <td>
                    <input type="text" size="50" id="txt_test_mail" name="txt_test_mail" class="txt"/>
<button type="button" id="btn_send_test" class="button pill" ><?php echo $_lang['mail_send_testing_mail'];?> </button>
                </td>
            </tr>
            <tr>
                <th scope="row">&nbsp;
                    					
                </th>
                <td>
                	<button type="submit"  name="submit" class="positive pill primary button" ><span class="check icon"></span><?php echo $_lang['submit'];?></button>

                </td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
<script type="text/javascript">
    $(function(){
        $("#btn_send_test").click(function(){
            var mail = $.trim($("#txt_test_mail").val());
            if (isEmail(mail)) {
                $.get("index.php?do=config&view=mail&email=" + mail, function(data){
art.dialog.alert(data); 
                });
            }
            else {
art.dialog.alert("<?php echo $_lang['mail_address_incorrect_format'];?>");
 ;
            }
        })
    })
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