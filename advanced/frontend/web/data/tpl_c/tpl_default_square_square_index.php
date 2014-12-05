<?php keke_tpl_class::checkrefresh('tpl/default/square/square_index', '1417682618' );?><?php if($_K['inajax']) { ?>
     <?php if(!isset($ajaxmenu)) { ?>
<h3 class="flb"><em><?php echo $title;?></em><span><a href="javascript:;" class="flbc" onClick="hideWindow('<?php echo $handlekey?>');" title="close"><?php echo $_lang['close'];?></a></span></h3>
<?php } ?>
<?php } else { ?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="<?php echo $_K['charset'];?>">
<title><?php echo $page_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="<?php echo $page_keyword;?>">
<meta name="description" content="<?php echo $page_description;?>">
<meta name="generator" content="<?php echo $_lang['keke_pub'];?> <?php echo KEKE_VERSION;?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="<?php echo $basic_config['copyright'];?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
<script type="text/javascript">
var SITEURL= "<?php echo $_K['siteurl'];?>",
    SKIN_PATH = '<?php echo SKIN_PATH;?>',
LANG       = '<?php echo $language;?>',
    INDEX      = '<?php echo $do;?>',
    CHARSET    = "<?php echo $_K['charset'];?>";
</script>
<link href="resource/css/reset.css" rel="stylesheet" charset="utf-8">
<!--公用样式-->
<link href="resource/css/base.css" rel="stylesheet" charset="utf-8">
<!--布局样式-->

<link rel="stylesheet" media="all" href="resource/css/layout/960.min.css" charset="utf-8">


<!--box样式-->
<link href="resource/css/box.css" rel="stylesheet" charset="utf-8">

<link href="resource/css/animate.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/css/common.css" rel="stylesheet" charset="utf-8">
<link href="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/css/<?php echo $_K['theme'];?>_style.css" rel="stylesheet" charset="utf-8">
<link href="resource/js/jqplugins/tipsy/tipsy.css" rel="stylesheet">
<link href="resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" charset="utf-8">
<!--[if lt IE 9]>
<script src="resource/js/system/html5.js" type="text/javascript"></script>
<![endif]-->


<!--jQuery1.4.4库-->
<script src="resource/js/jquery.js" type="text/javascript"></script>
<script src="lang/<?php echo $language;?>/script/lang.js" type="text/javascript"></script>
<script src="resource/js/system/keke.js" type="text/javascript"></script>
<script src="resource/js/in.js" type="text/javascript"></script>
<script type="text/javascript">
 //js异步加载预定义
 	In.add('mouseDelay',{path:"resource/js/jqplugins/jQuery.mouseDelay.js",type:'js'});
In.add('waypoints',{path:"resource/js/jqplugins/waypoints/waypoints.min.js",type:'js'});
In.add('custom',{path:"resource/js/system/custom.js",type:'js',rely:['waypoints']});
 	In.add('form',{path:"resource/js/system/form_and_validation.js",type:'js'});
In.add('print',{path:"resource/js/jqplugins/jquery.print.js",type:'js'});
In.add('task',{path:"resource/js/system/task.js",type:'js'});
 	In.add('calendar',{path:"resource/js/system/script_calendar.js",type:'js'}); 
In.add('xheditor',{path:"resource/js/xheditor/xheditor.js",type:'js'});  
 	In.add('script_city',{path:"resource/js/system/script_city.js",type:'js'}); 
In.add('lavalamp',{path:"resource/js/jqplugins/lavalamp/jquery.lavalamp-1.3.5.min.js",type:'js'});
In.add('tipsy',{path:"resource/js/jqplugins/tipsy/jquery.tipsy.js",type:'js'});
In.add('autoIMG',{path:"resource/js/jqplugins/autoimg/jQuery.autoIMG.min.js",type:'js'});
 	In.add('slides',{path:"resource/js/jqplugins/slides.min.jquery.js",type:'js'});
In.add('ajaxfileupload',{path:"resource/js/system/ajaxfileupload.js",type:'js'});
In.add('header_top',{path:"resource/js/system/header_top.js",type:'js',rely:['mouseDelay']}); 
In.add('lazy',{path:"resource/js/system/lazy.js",type:'js'});
In.add('pcas',{path:"resource/js/system/PCASClass.js",type:'js'});
  		

</script>



</head>
    <body id="<?php echo $do;?>">

<div class="<?php echo $_K['theme'];?>_style" id="wrapper">

        <div id="append_parent">
        </div>
        <div id="ajaxwaitid">
        	<div>
        	<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/system/loading.gif" alt="loading"/>
<?php echo $_lang['request_processing'];?>
</div>
</div>
 
<!--无刷新临时替换层-->
        <div id="noflushwarper">
        	<div id="noflushwarper_sub"></div>
        </div>
 	
<!--body start-->


<!--顶部广告位 start-->
<div class="t_c site_messages">
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','square','') ?>
</div>
<!--顶部广告位-->




    <!--头部 start-->
    <header class="header" id="pageTop">
        <div class="container_24 clearfix">
        	<!--logo start-->
            <hgroup class="grid_7 logo">
             	 <h1><a href="index.php">
             	 	<?php if(isset($custom_logo)) { ?>
<img src="<?php echo $basic_config['web_logo'];?>"
<?php } else { ?>
<img src="<?php echo SKIN_PATH;?>/theme/<?php echo $_K['theme'];?>/img/style/<?php echo $basic_config['web_logo'];?>"
<?php } ?>
 title="<?php echo $_K['html_title'];?>" alt="<?php echo $_K['html_title'];?>"></a></h1>
            </hgroup>
            <!--logo end-->
            
            <div id="search" class="grid_12 m_h">
            	
            	<?php if($task_open||$shop_open) { ?>

            	<!--主搜索 start-->
                <div class="search clearfix po_re">
                    <!--搜索框和选项 start-->
                    <form action="" method="post" id="frm_search" class="clearfix fl_l">
                    <div class="search_box">
                        <div class="fl_l search_selcecter">
                        	<div id="search_select" class="search_options">
                        	<?php if($task_open) { ?>
                           		 <a href="javascript:void(0);" class="selected" rel="task_list"><span><?php echo $_lang['task'];?></span>▼</a>
                            <?php } elseif(!$task_open&&$shop_open) { ?>
 <a href="javascript:void(0);" class="selected" rel="shop_list"><span><?php echo $_lang['goods'];?></span>▼</a>
                            <?php } ?>
<?php if($task_open) { ?>
   		 <a href="javascript:void(0);" class="hidden"   rel="task_list"><?php echo $_lang['task'];?></a>
<?php } ?>
<?php if($shop_open) { ?>
                           	 	<a href="javascript:void(0);" class="hidden"   rel="shop_list"><?php echo $_lang['goods'];?></a>
 <?php } ?>
                            </div>
                        </div>
<input type="text" name="search_key" onkeydown="search_keydown(event);" id="search_key" class="fl_l search_input txt_input togg c999"
 value="<?php echo $_lang['input'];?><?php if($task_open) { ?><?php echo $_lang['task'];?><?php } ?><?php if($task_open&&$shop_open) { ?>/<?php } ?><?php if($shop_open) { ?><?php echo $_lang['goods'];?><?php } ?>" 
   x-webkit-speech x-webkit-grammar="bUIltin:search" lang="zh-CN">
                    </div>
</form>
                    <!--搜索框和选项 end-->
                    <!--搜索提交 start-->
                    <div class="fl_l header_btn">
                    	<button class="search_btn" id="search_btn" type="button" onclick="topSearch();"><span class="icon magnifier"></span><?php echo $_lang['search'];?></button>
                    </div>
                    <!--搜索提交 end-->
                </div>
                <!--主搜索 end-->
<?php } else { ?>
&nbsp;
<?php } ?>

            </div>
            


          
            	<!--用户登录注册 start-->
            	<div class="user_box clearfix grid_5">
                	<!--注册登录按钮 start-->
                  	<ul id="login_sub" class="user_login <?php if($uid) { ?>hidden<?php } ?>">
                        <li><a href="index.php?do=register" class="m_h"><?php echo $_lang['free_register'];?></a></li>
                        <li><a href="index.php?do=login"><?php echo $_lang['login'];?></a></li>
                    </ul>
                    <!--注册登录按钮 end--> 
<div class="clear"></div>




                    <!--登录成功 start-->
                    <div id="logined" class="<?php if(!$uid) { ?>hidden<?php } ?>">
                    	<!--用户登录后内容 start-->
                        <ul class="user_logined clearfix">
                            <li id="avatar">
                            	<a href="index.php?do=user" title="<?php echo $username;?>" rel="user_menu">
                            		<?php echo  keke_user_class::get_user_pic($uid,'small') ?>
                                    <span class="user_named m_h"><?php echo $username;?></span>
                            	</a>
<!--用户登录后导航菜单 start-->
                    <div id="user_menu" class="user_nav_pop grid_5 alpha omega hidden m_h">
                        <ul class="nav_list clearfix">
                                    	<li class="clearfix"><a href="index.php?do=user&view=finance&op=detail" title="<?php echo $_lang['money'];?> | <?php echo CREDIT_NAME;?>" id="money"> <div class="icon16 cur-yen reverse"></div><?php  echo keke_curren_class::output(floatval($user_info['balance']),-1);  ?>| <?php  echo keke_curren_class::output(floatval($user_info['credit']),-1);  ?></a></li>
                                        <?php if($task_open) { ?>
<li class="clearfix"><a href="index.php?do=release" title="<?php echo $_lang['pub_task'];?>" class="selected" ><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_task'];?></a></li>
<?php } ?>
<?php if($shop_open) { ?>
<li class="clearfix"><a href="index.php?do=shop_release" title="<?php echo $_lang['pub_goods'];?>" class="selected"><div class="icon16 doc-new reverse"></div><?php echo $_lang['pub_goods'];?></a></li>
<?php } ?>
<li class="clearfix <?php if($uid ==ADMIN_UID || $user_info['group_id']>0) { ?><?php } else { ?>hidden<?php } ?>" id="manage_center"><a href="control/admin/index.php" title="<?php echo $_lang['manage_center'];?>" ><div class="icon16 key reverse"></div><?php echo $_lang['manage_center'];?></a></li>
<li class="clearfix"><a href="index.php?do=user&view=index" title="<?php echo $_lang['user_center'];?>"><div class="icon16 cog reverse"></div><?php echo $_lang['user_center'];?></a></li>
<?php if($space_config==1) { ?>
<li class="clearfix"><a href="<?php echo kekezu::build_space_url($uid); ?>" title="<?php echo $_lang['my_space'];?>" id="space"><div class="icon16 compass reverse"></div><?php echo $_lang['my_space'];?></a></li>
<?php } ?>
<!--<li class="clearfix"><a href="index.php?do=user&view=message" title="<?php echo $_lang['website_msg'];?>"><div class="icon16 mail reverse"></div><?php echo $_lang['website_msg'];?></a></li>-->
<li class="clearfix"><a onclick="showWindow('out','index.php?do=logout');return false;" title="<?php echo $_lang['logout'];?>" href="index.php?do=logout"><?php echo $_lang['logout'];?></a></li>
                         </ul>
                    </div>
                    <!--用户登录后导航菜单 end-->
</li>
                            <li class="line m_h"></li>
                            <li class="logout m_h"><a title="<?php echo $_lang['website_msg'];?>" href="index.php?do=user&view=message"><?php echo $_lang['website_msg'];?></a></li>
                            <li class="clear"></li>
                        </ul>
                        <!--用户登录后内容 end-->


                    </div>
                    <!--登录成功 end-->
                    
                    
                    <div class="clear"></div>
                </div>
                <!--用户登录注册 end-->
      
            <!--移动端菜单-->
<div class="m_ctrl">
<a class="icon32 zoom reverse" href="#" rel="search"></a>
            <a class="icon32 align-just reverse" href="#" rel="nav"></a>
</div>
            <!--移动端菜单 end-->

            

        </div>
    </header>
    <!--头部 end-->
        <!--tool_E-->
 <nav id="nav" class="nav m_h">
        <div class="container_24" >
        	<div class="menu grid_24 clearfix">
                <ul class="clearfix">
                	<?php if(is_array($nav_arr)) { foreach($nav_arr as $k => $v) { ?>
                   		<li>
                   			<a href="<?php echo $v['nav_url'];?>" <?php if(isset($nav_active_index) && $v['nav_style']==$nav_active_index) { ?>class="selected"<?php } ?> <?php if($v['newwindow']) { ?>target="_blank"<?php } ?>>
                   			<span><?php echo $v['nav_title'];?></span></a>
</li>
<li class="line"></li>
<?php } } ?>
                </ul>
                <!---->
                  <div class="operate po_ab">
                    	<a href="index.php?do=help" target="_blank" title="<?php echo $_lang['help_center'];?>">
                        	<span class="icon16 help reverse"></span>
<?php echo $_lang['help_center'];?>
                        </a>
                   </div>
                <!---->
</div>
                <div class="clear"></div>
        </div>
    </nav>
    <div class="clear"></div>
<?php } ?>
<div class="wrapper">
<div class="mt_20">
<div class="container_24 clearfix">
<div class="box clearfix">
<!-- index_left start  -->
<div class="index_left clearfix">
<div class="left_nav clearfix">
    <dl>
    	<dd><a href="index.php?do=square" <?php if($do==square && $view==index) { ?> class="selected" <?php } ?>><span class="icon16 home mr_5 "></span> 广场首页</a></dd>
<?php if($uid) { ?>
<dd><h2>我的</h2></dd>
    	<dd><a href="index.php?do=square&view=demand" <?php if($view==demand) { ?> class="selected" <?php } ?>><span class="icon16 notepad-2 mr_5 "></span>需求</a></dd>
    	<dd><a href="index.php?do=square&view=goods" <?php if($view==goods) { ?> class="selected" <?php } ?>><span class="icon16 case mr_5 "></span>服务</a></dd>
    	<!--<dd><a href="index.php?do=square&view=manuscript" <?php if($view==manuscript) { ?> class="selected" <?php } ?>><span class="icon16 clipboard-copy mr_5"></span>稿件</a></dd>-->
    	<dd><a href="index.php?do=square&view=message" <?php if($view==message) { ?> class="selected" <?php } ?>><span class="icon16 spechbubble-sq-line mr_5"></span>留言</a></dd>
    	<dd><a href="index.php?do=square&view=favor" <?php if($view==favor) { ?> class="selected" <?php } ?>><span class="icon16 star-fav-empty mr_5"></span>收藏</a></dd>
    	<dd><a href="index.php?do=square&view=focus" <?php if($view==focus) { ?> class="selected" <?php } ?>><span class="icon16 user mr_5"></span>关注</a></dd>
        <?php } ?>
</dl>
</div>
</div>
<!-- index_left end  -->
<div class="core clearfix">
<!-- core_top start  -->
<div class="core_top clearfix">
<div class="core_header">
<img src="<?php echo SKIN_PATH;?>/img/square/tell.png">
</div>
<div class="core_center clearfix">
<form id="free_form" name="free_form" action="index.php?do=square&view=index" method="post">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<input type="hidden" name="pub_type" id="pub_type">
<div class="core_com clearfix">
<div class="core_com_up">
<div class="drop_down" id="pub_select">
<a href="javascript:void(0);" class="selected" rel="free_task"><span>免费需求</span>▼</a>
<a href="javascript:void(0);"  class="hidden" rel="free_task">免费需求</a>
<a href="javascript:void(0);"  class="hidden" rel="free_service">免费服务</a>
</div> 
<input type="text" id="txt_title" class="togg_a" name="txt_title" onkeydown="checkTitleLen()" value="需求设计标志、取名、开发网站、写策划案..." rel="需求设计标志、取名、开发网站、写策划案...">
</div>
<div class="core_com_down" id="upload_tip">
<textarea class="togg_b" name="tar_content" id="tar_content" onkeydown="checkTitleLen()" rel="说出你的需求   >    让众多威客来帮你   >   讨论和评价">说出你的需求   >    让众多威客来帮你   >   讨论和评价</textarea>
</div>
</div>
<div class="core_footer mt_10 clearfix">
<ul >
<li class="clearfix">
<a href="javascript:void(0)" id="add_file" ><span class="icon16 round-plus "></span><span class="arrow_t"></span></a>
<div class="add_des" style="display:none">

                                                 <!--上传内容-->
<div class="grid_10 po_re">
                <input type="file" class="file" name="file_upload_i" id="file_upload_i">
                      <div class="po_ab" style="left:150px;top:5px;">
                            <span class="mr_20"><?php echo $_lang['upload_limit'];?>5个附件</span>
                              <a href="javascript:void();" class="file_type" title="<ol class='t_l'><li><?php echo $_lang['upload_max'];?><?php echo $basic_config['max_size'];?>M.</li><li><?php echo $_lang['upload_style'];?>*.rar;*.zip*;.xls;*.doc;*.ppt</li></ol>">无法上传?</a>
                         </div>
                            <input type="hidden" name="file_path_2" id="file_path_2">
             </div> 

<script type="text/javascript">
             				var max_filecount = "<?php echo $goods_config['max_filecount'];?>";
max_filecount?'':max_filecount=5;
$(function(){
uploadify({
auto:true,
size:"<?php echo $basic_config['max_size'];?>MB",
exts:'*.rar;*.zip;*.xls;*.doc;*.ppt',
file:'file_upload_i',

limit:max_filecount},
{
fileType:'att',
objType:'service'
});
})
</script>
            <!--end 上传内容-->
</div>
</li>
<li class="clearfix">
<a href="javascript:void(0)" id="add_pic" ><span class="icon16 picture "></span><span class="arrow_t"></span></a>
<div class="add_des" style="display:none">

 <div class="rowElem clearfix ">
                          
                            <!--上传内容-->
                            <div class="grid_10 po_re">
                                <input type="file" class="file" name="upload" id="upload">
                                <div class="po_ab" style="left:150px;top:5px;">
                                    <span class="mr_20">最多可添加5个附件</span>
                                    <a href="javascript:void();" class="file_type" title="<ol class='t_l'><li><?php echo $_lang['upload_max'];?><?php echo $basic_config['max_size'];?>M.</li><li><?php echo $_lang['upload_style'];?><?php echo $ext;?></li></ol>">无法上传?</a>
                                </div>
                                    <input type="hidden" name="file_ids" id="file_ids">
                            </div> 
                  
<script type="text/javascript">
$(function(){
uploadify({
auto:true,
size:"<?php echo $basic_config['max_size'];?>MB",
exts:'<?php echo $ext;?>',
limit:5}
,{
fileType:'service',
objType:'service'
});
})
</script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
<!--end 上传内容-->
</div>
</li>
</ul>

<a href="javascript:void(0);" onclick="freeSub();" id="sub_button" class="submit fl_r" disabled="disabled" >发布</a>
</div>
</form>
</div>
</div>
<!-- core_top end  -->
<!-- core_down start  -->
<div class="core_down clearfix">
<h2>最新动态</h2>
<div class="core_down_nav ml_20 mr_20">
<a href="index.php?do=square&view=index" <?php if(!$t||$t=='all') { ?>class="selected"<?php } ?>>所有</a>
<a href="index.php?do=square&view=index&t=free_task" <?php if($t=='free_task') { ?>class="selected"<?php } ?>>免费需求</a>
<a href="index.php?do=square&view=index&t=task" <?php if($t=='task') { ?>class="selected"<?php } ?>>赏金任务</a>
<a href="index.php?do=square&view=index&t=free_service" <?php if($t=='free_service') { ?>class="selected"<?php } ?>>免费服务</a>
<a href="index.php?do=square&view=index&t=service" <?php if($t=='service') { ?>class="selected"<?php } ?>>付费商品</a>
</div>
<input type="hidden" value="<?php echo $weibo_last_id;?>" id="last_id">
<input type="hidden" value="<?php echo $weibo_last_time;?>" id="last_time">
<div class="msg msg_need block ml_20 mr_20 hidden" id="show_new" >
<a href="#"  class="block" >有15条新动态，点击查看</a>
</div>
<div class="core_down_info mt_10 mb_10 clearfix" >
<ul id="data_contain">
<?php if(is_array($weibo_list)) { foreach($weibo_list as $v) { ?>

<li class="clearfix frame">
<div class="info_van clearfix">
<a href="index.php?do=space&member_id=<?php echo $v['obj_uid']?>" target="_blank">
<?php echo  keke_user_class::get_user_pic($v['obj_uid'],small) ?>
<p class="c999"><?php echo $v['obj_username']?></p>
</a>
</div>
<div class="info_body clearfix">
<div>
<span class="<?php if($v['obj_type']=='free_task'||$v['obj_type']=='task') { ?>needs<?php } else { ?>sale<?php } ?> mr_5"><?php if($v['obj_type']=='free_task'||$v['obj_type']=='task') { ?>需求<?php } else { ?>出售<?php } ?> </span>
<?php if($v['obj_type']=='task') { ?>
<a href="index.php?do=task&task_id=<?php echo $v['obj_id']?>"  class="task_info" target="_blank"><?php echo $v['obj_title']?></a>
<?php } elseif($v['obj_type']=='free_task') { ?>
<a href="index.php?do=square&view=task_detail&task_id=<?php echo $v['obj_id']?>"  class="task_info" target="_blank"><?php echo $v['obj_title']?></a>
<?php } elseif($v['obj_type']=='service') { ?>
<a href="index.php?do=service&sid=<?php echo $v['obj_id']?>"  class="task_info" target="_blank"><?php echo $v['obj_title']?></a>
<?php } elseif($v['obj_type']=='free_service') { ?>
<a href="index.php?do=square&view=goods_detail&service_id=<?php echo $v['obj_id']?>"  class="task_info" target="_blank"><?php echo $v['obj_title']?></a>
<?php } ?>

<?php $time_desc = kekezu::time2Units(time()-$v[on_time],minute) ?>
<span class="ml_5 mr_5 c999"><?php if($time_desc) { ?><?php echo $time_desc;?>前<?php } else { ?>刚刚<?php } ?></span>
<a href="index.php?do=space&member_id=<?php echo $v['op_uid']?>" target="_blank"><?php echo $v['op_username'];?></a><span class="c999"><?php echo $op_desc[$v['op_type']];?></span>
</div>
<div><?php if($v['obj_type']=='task'||$v['obj_type']=='free_task') { ?>赏金<?php } else { ?>售价<?php } ?>：<span class="mr_5 org">
<?php if(in_array($v['detail_type'],array('tender','dtender','match'))) { ?>
<?php $cash = intval($v[obj_cash]) ?>
<?php  echo keke_curren_class::output(floatval($cash_cove[$cash][start_cove]),-1);  ?>-<?php  echo keke_curren_class::output(floatval($cash_cove[$cash][end_cove]),-1);  ?>
<?php } else { ?>
<?php  echo keke_curren_class::output(floatval($v['obj_cash']),-1);  ?>
<?php } ?></span>来自：<span><?php if($v['detail_type']=='free_task') { ?>免费需求<?php } elseif($v['detail_type']=='free_service') { ?>免费服务<?php } else { ?><?php echo $model_info[$v['detail_type']]['model_name'];?><?php } ?></span>
</div>
<div class="info_talk clearfix">
<?php if($v['obj_type']=='task') { ?>
<a href="javascript:void(0);" class="border_r_c"><span><?php echo $v['work_num']?></span>投标</a>
<?php } ?>
<a href="javascript:void(0);" class="border_r_c"><span><?php echo $v['leave_num']?></span>留言</a>
<a href="javascript:void(0);" class="border_r_c"><span><?php echo $v['focus_num']?></span>收藏</a>
<?php if($v['obj_type']=='service') { ?>
<a href="javascript:void(0)" class="border_r_c"><span><?php echo $v['work_num']?></span>售出</a>
<?php } ?>
<?php if(($v['obj_type']=='free_task'||$v['obj_type']=='free_service')&&$v['op_type']=='pub'&&$uid!=$v['obj_uid']) { ?>
<a href="javascript:void(0)" class="border_r_c" onclick="denounce('<?php echo $v['obj_id'];?>','<?php echo $v['obj_type'];?>','<?php echo $v['obj_uid'];?>','<?php echo $v['obj_username'];?>','<?php echo $v['obj_title'];?>');" >举报</a>
    <?php } ?>
<?php if($v['obj_type']=='task'&&$v['op_type']=='pub'&&$uid!=$v['obj_uid']) { ?>
<a href="index.php?do=task&task_id=<?php echo $v['obj_id']?>" class="border_r_c">举报</a>
<?php } ?>
<?php if($v['obj_type']=='service'&&$v['op_type']=='pub'&&$uid!=$v['obj_uid']) { ?>
<a href="index.php?do=service&sid=<?php echo $v['obj_id']?>" class="border_r_c">举报</a>
<?php } ?>
</div>
</div>
</li>
<?php } } ?>
</ul>

<!--翻页-->
<?php if($pages['page']) { ?>
                                  <div class="page">
                                    <p class="clearfix">
                                             <?php echo $pages['page']?>
                                      </p>
                                      <div class="clear"></div>
                                  </div>
                                  <?php } ?>
                                  <!--end 翻页-->
                                  
</div>
</div>
<!-- core_down end -->
</div>
<div class="index_right clearfix">
                      <?php if($uid) { ?>
<div class="person_info clearfix">
<?php echo  keke_user_class::get_user_pic($uid,'middle') ?>
</div>
<div class="name_box">
<p><a href="index.php?do=space&member_id=<?php echo $uid;?>" target="_blank"><?php echo $username;?></a></p>
<p class="mb_10"><?php $seller_leve=unserialize($user_info['seller_level']) ?><?php echo $seller_leve['pic'];?></p>
<p><?php $buyer_leve=unserialize($user_info['buyer_level']) ?><?php echo $buyer_leve['pic'];?></p>
</div>	
<div class="clear"></div>
<div class="user_atten clearfix user_atten_l">
<ul>
<li>
<a href="index.php?do=square&view=demand" class="s_func1" target="_blank">
<strong><?php echo $t_count;?></strong>
<span>需求</span>
</a>

</li>
<li >
<a href="index.php?do=square&view=goods" class="s_func1" target="_blank">
<strong><?php echo $s_count;?></strong>
<span>商品</span>
</a>

</li>

</ul>

</div>
<div class="clear"></div>
<div class="balance weibo">
<div class="box_header clearfix">
<h2>余额</h2>
<div class="active">
<a href="index.php?do=user&view=finance&op=recharge" target="_blank">充值</a>
<a href="index.php?do=user&view=finance&op=withdraw" target="_blank">提现</a>
</div>
</div>
<div class="box_detail">
<p>现金：<span class="org"><?php  echo keke_curren_class::output(floatval($user_info['balance']),-1);  ?></span></p>
<p>元宝：<span class="org"><?php  echo keke_curren_class::output(floatval($user_info['credit']),-1);  ?></span></p>
</div>
</div>
<?php } ?>
<div class="clear"></div>
<div class="notice_right weibo">
<div class="box_header clearfix">
<h2>公告</h2>
</div>
<div class="box_detail">
 <ul class="no_right_detail">
 	<?php if(is_array($bulletin_arr)) { foreach($bulletin_arr as $v) { ?>
 	<li><a href="index.php?do=single&art_id=<?php echo $v['art_id'];?>" target="_blank"><?php echo $v['art_title']?></a></li>
 	<?php } } ?>
 </ul>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
<?php if(!isset($inajax)) { ?>

<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






            <!--网站版权声明 start-->
            <section class="site_copyright clearfix">
            	<div class="container_24 clearfix ">
            		
            		
                    	 	<dl>
<dt>
                    	 		<?php echo $_lang['company'];?><?php echo $basic_config['company'];?><span class="pad10"><?php echo $_lang['address'];?><?php echo $basic_config['address'];?></span><?php echo $_lang['contact_phone'];?><?php echo $basic_config['phone'];?>
</dt>
<dd>
                    	 	<?php echo P_NAME;?><?php echo KEKE_VERSION;?> <?php echo $basic_config['copyright'];?><a href="http://icp.valu.cn/" target="_blank"><?php echo $basic_config['filing'];?></a>
<?php if(KEKE_DEBUG) { ?>
<span>
Querys: <?php echo db_factory::create()->get_query_num() ?>
 &nbsp;
Times:<?php echo kekezu::execute_time() ?>
</span>			
<?php } ?>
</dd>  
                    	 	</dl>
 <div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

                    <div class="site_attach clearfix">
<?php if($attent_api_open) { ?>

                        	<div class="social">
                            	<?php echo $_lang['about_us_'];?>
                            	
                                <?php if(is_array($attent_api_open)) { foreach($attent_api_open as $k => $v) { ?>
<?php if($attent_list[$k]['v']) { ?>

<?php $i = explode("_", $k);$i = $i['0'];$j=($attent_list[$k]); ?> 
<a href="index.php?do=wb&focus=<?php echo $j?>&wb_type=<?php echo $i?>"><img src="resource/img/ico/<?php echo $i;?>_t.gif" title="<?php echo $attent_list[$k]?>"></a> 

<?php } ?>
<?php } } ?>

                            </div>
     
<?php } ?>

                        <div class="lan_box">
                            <form action="" method="post" id="lan_bottom">
                                <div class="clearfix">
                                     <label><?php echo $_lang['language'];?></label>
                                     <select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
  <?php if(is_array($lang_list)) { foreach($lang_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" c="<?php echo $curr_list[$k]['0'];?>" <?php if($k==$language) { ?>selected<?php } ?>><?php echo $v;?></option>
  <?php } } ?>
                                     </select>
                                
                           
                               
                                     <label> <?php echo $_lang['currency'];?><?php echo $_lang['zh_mh'];?></label>
                                     <select  style="width:100px" onchange="setCurr(this.value,1);">
  <?php if(is_array($f_c_list)) { foreach($f_c_list as $k => $v) { ?>
    <option value="<?php echo $k;?>" id="<?php echo $k;?>" <?php if($currency==$k) { ?>selected<?php } ?>><?php echo $v['title'];?></option>
  <?php } } ?>
                                     </select>
                                 </div>
                            </form>
</div>	
                        

</div>

                  
                    <!--语言栏 关注我们 搜索 end-->


                </div>
   				<div class="clearfix"><?php echo htmlspecialchars_decode($basic_config['stats_code']) ?></div>
            </section>
            <!--网站版权声明 end-->
            
            <!--返回顶部 start-->

        	<a class="top animated hidden" href="javascript:void(0);" title="<?php echo $_lang['return_top'];?>"><em>&diams;</em>Top</a>
              
            <!--返回顶部 end-->
    </footer>
    <!--页脚 end-->
</div>
<?php if($uid) { ?>
<?php kekezu::update_oltime($uid,$username) ?>
<?php } ?>
<script type="text/javascript">
var uid='<?php echo $uid;?>';
var xyq = "<?php echo $xyq = session_id(); ?>";
<?php if($exec_time_traver) { ?>
$(function(){
   $.get('js.php?op=time&r='+Math.random());	
})
<?php } ?>
 //js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');




</script>

<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
<?php } ?>
<script type="text/javascript" src="<?php echo SKIN_PATH;?>/js/square.js"></script>
<script type="text/javascript">
In('form');
var t = '<?php echo $t;?>';
//alert(last_id);
</script>
<?php keke_tpl_class::ob_out();?>