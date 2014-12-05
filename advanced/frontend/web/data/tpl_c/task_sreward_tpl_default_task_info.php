<?php keke_tpl_class::checkrefresh('task/sreward/tpl/default/task_info', '1417744797' );?><?php $page_title=$task_info['task_title'].'--'.$_K['html_title']; ?>
<?php if($_K['inajax']) { ?>
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
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','task','') ?>
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
<!--公用样式-->
 <script type="text/javascript"> 
In.add('reward_task',{path:"task/<?php echo $model_code;?>/<?php echo SKIN_PATH;?>/<?php echo $model_code;?>_task.js",type:'js'});
In('task','reward_task','print');
</script>
 <!--页面内容区-->
 <div class="wrapper">
  <!--页面头部-->
  <header class="clearfix page_header">
  <div class="container_24 clearfix">

    <div class="clearfix po_re" >
    		<!--面包屑-->
     <div class="breadcrumbs clearfix">
      <a href="index.php"><?php echo $_lang['home'];?></a> &gt;
  <a href="index.php?do=task_list&path=B<?php echo $model_id;?>"><?php echo $_lang['task_hall'];?></a> &gt;
  <a href="index.php?do=task_list&path=A<?php echo $task_info['indus_pid'];?>B<?php echo $model_id;?>"><?php echo $indus_p_arr[$task_info['indus_pid']]['indus_name'];?></a> &gt;
<a href="index.php?do=task_list&path=A<?php echo $task_info['indus_pid'];?>B<?php echo $model_id;?>"><?php echo $indus_arr[$task_info['indus_id']]['indus_name'];?></a>
   </div>
  <!--end 面包屑-->
 			<div class="grid_19 ">
 				<div class="mre_l_con clearfix">
 					
  <div  id="taskScroll">
   <div class="page_title ws_break clearfix">
    <h2 class="title">
    	<?php if($task_info['is_trust']&&$task_info['trust_type']=='alipay_trust') { ?>
    		<img src="<?php echo $_K['siteurl'];?>/tpl/<?php echo $_K['template'];?>/img/ico/ico_32_alipay.gif" title="<?php echo $_lang['alipay_trust'];?>">
<?php } ?>
       <strong class="red mr_10"><?php  echo keke_curren_class::output(floatval($task_info['task_cash']),-1);  ?></strong>
                <a href="index.php?do=task&task_id=<?php echo $task_id;?>"><?php echo $task_info['task_title'];?></a>
    </h2>
    <div class="page_sub_title c666 mb_10">
       <span><?php echo $_lang['task_pub_time'];?><?php echo $_lang['zh_mh'];?><?php if($task_info[start_time]){echo date('Y-m-d H:i',$task_info[start_time]); } ?></span>
   <span class="border_l_c mar10">&nbsp;</span>
       <a class="mre_task_kind c333" href="javascript:void(0);" title="<?php echo $_lang['only_one_can_bid'];?>,威客中标后将得到：<?php  echo keke_curren_class::output(floatval($cash),-1);  ?>;"><?php echo $model_list[$task_info['model_id']]['model_name'];?><?php echo $_lang['model'];?><span>&nbsp;</span></a>
       <span class="border_l_c mar10">&nbsp;</span>
       <span><?php echo $_lang['id'];?><?php echo $_lang['zh_mh'];?>#<?php echo $task_id;?></span>
       <span class="border_l_c mar10">&nbsp;</span>
       <?php echo $task_info['view_num'];?> <?php echo $_lang['people'];?><?php echo $_lang['view'];?>
   <span class="border_l_c mar10">&nbsp;</span>
       <span><?php echo $show_payitem;?></span>
</div>
    </div>
</div>
 				</div>
 			</div>
<div class="grid_5">
<div class="mre_r_con clearfix">
<div class="control clearfix">
      <!--start提交稿件-->
     	<?php if($process_can['work_hand']) { ?>
<?php if($union_hand) { ?>
<a href="<?php echo $union_hand;?>" class="submit block"><?php echo $process_desc['work_hand'];?></a>
<?php } else { ?>
<a href="javascript:void(0)" onclick="workHand();" class="submit block"><?php echo $process_desc['work_hand'];?></a>
<?php } ?>
<?php } ?>
  <!--end 提交稿件-->
  <!--start延期加价-->
     	<?php if($process_can['delay']) { ?>
<a href="javascript:void(0)" onclick="taskDelay();" class="submit block "><?php echo $process_desc['delay'];?></a>
<?php } ?>
  <!--end 延期加价-->
      <!--start发起投票-->
     	<?php if($process_can['task_vote']) { ?>
     		<?php if($can_vote>0) { ?>
<a href="javascript:void(0)" onclick="taskVote();" class="submit block"><?php echo $process_desc['task_vote'];?></a>
<?php } ?>
<?php } ?>
  <!--end 发起投票-->
  <div class="clearfix mt_5">
      <!-- <div class="msg msg_ok block ">
  	<?php echo $_lang['status'];?><?php echo $_lang['zh_mh'];?><?php echo $status_arr[$task_status];?>							
  </div>-->
  <div class="msg msg_ok block ">
  <?php echo $time_desc['ext_desc'];?>
  </div>
  <div>
  	<span class="c333"><?php echo $time_desc['time_desc'];?></span>
    <span class="red d_time" ed="<?php echo $time_desc['time'];?>" title="<?php echo $time_desc['desc'];?>"></span>
  </div>
                 
  </div>
     </div>
</div>
</div>
 		</div>



    <!--操作区-->
   <div class="grid_6 hidden" id="taskScroll">
     <div class="control clearfix">
     <!--start提交稿件-->
     	<?php if($process_can['work_hand']) { ?>
<?php if($union_hand) { ?>
<a href="<?php echo $union_hand;?>" class="submit block"><?php echo $process_desc['work_hand'];?></a>
<?php } else { ?>
<a href="javascript:void(0)" onclick="workHand();" class="submit block"><?php echo $process_desc['work_hand'];?></a>
<?php } ?>
<?php } ?>
  <!--end 提交稿件-->
      <!--start补充需求-->
     	<?php if($process_can['reqedit']) { ?>
<a href="javascript:void(0)" onclick="taskReqedit();" class="big button pill t_c fl_l"><?php echo $process_desc['reqedit'];?></a>
<?php } ?>
  <!--end 补充需求-->
      <!--start延期加价-->
     	<?php if($process_can['delay']) { ?>
<a href="javascript:void(0)" onclick="taskDelay();" class="big button pill t_c fl_l ml_5 "><?php echo $process_desc['delay'];?></a>
<?php } ?>
  <!--end 延期加价-->
      
    
    
     </div>
   </div>
   <!--end 操作区-->
   
   
   
   
   
   
   
   
   
   
   
   <div class="clear"></div>
    <!--页面子导航-->
<div id="header_nav" class="po_re grid_19">
     <nav class="clearfix page_nav po_re" id="top_nav">
       <ul>
         <li <?php if(!$view||$view=='base') { ?>class="selected"<?php } ?>>
         	<a href="<?php echo $basic_url;?>" title="<?php echo $_lang['description'];?>">
            	<div class="icon16 notepad-2 mr_5"></div> <?php echo $_lang['description'];?>
            </a>
         </li>
         <li <?php if($view=='work') { ?>class="selected"<?php } ?>>
         	<a href="<?php echo $basic_url;?>&view=work" title="<?php echo $_lang['work'];?>[<?php echo $task_info['work_num'];?>]">
            	<div class="icon16 spechbubble-sq-line mr_5"></div><?php echo $_lang['work'];?> <span class="c999">[<?php echo $task_info['work_num'];?>]</span>
            </a>
         </li>
         <li <?php if($view=='comment') { ?>class="selected"<?php } ?>>
         	<a href="<?php echo $basic_url;?>&view=comment" title="<?php echo $_lang['leave_word'];?>[<?php echo $task_info['leave_num'];?>]">
            	<div class="icon16 spechbubble-2 mr_5"></div><?php echo $_lang['leave_word'];?> <span class="c999">[<?php echo $task_info['leave_num'];?>]</span>
            </a>
         </li>
        <li <?php if($view=='mark') { ?>class="selected"<?php } ?>>
        	<a href="<?php echo $basic_url;?>&view=mark" title="<?php echo $_lang['evaluate'];?>[<?php echo $task_info['mark']['all'];?>]">
            <div class="icon16 cert mr_5"></div><?php echo $_lang['evaluate'];?><span class="c999">[<?php echo $task_info['mark']['all'];?>]</span>
            </a>
         </li>
 	 <?php if($uid==$task_info['uid']) { ?><li <?php if($view=='tools') { ?> class="selected" <?php } ?>><a href="<?php echo $basic_url;?>&view=tools" ><span class="icon16 box mr_5">icon</span> 工具<span class="c999"></span></a></li><?php } ?>
        
         <!-- <li class="border_n">
         	<a href="javascript:void(0);" title="<?php echo $_lang['stay_left'];?>">
            	<div class="icon16 arrow-bottom-left block"  id="arrow-bottom-left"><?php echo $_lang['stay_left'];?></div>
            </a>
         </li> -->
       </ul>
 </nav>
 <!--工具栏--
    <div class="operate po_ab hidden">
    <?php if($task_info['task_file']) { ?>
      <a href="#file" class="" title="<?php echo $_lang['have_attachment'];?>"><span class="icon16 clip"><?php echo $_lang['have_attachment'];?></span></a>
<?php } ?>
      <a href="javascript:setfontsize();" class="" title="<?php echo $_lang['text_size'];?>"><div class="icon16 text-letter-t"><?php echo $_lang['text_size'];?></div></a>
      <a href="javascript:setprint('details');" class="" title="<?php echo $_lang['print'];?>"><div class="icon16 print"><?php echo $_lang['print'];?></div></a>
   </div>
  <!--end 工具栏-->
     <div class="clear"></div>
</div>
    
   <div class="clear"></div>
  </div> 
 </header>
 <!--end 页面头部-->
 <!--详细内容区-->
  <section class="content">
  <!--布局框-->  
  <div class="container_24">
  	<!--章节1-->
   <section class="clearfix section">
  	<!--左边导航 start--
<div class="second_menu container_24 po_ab hidden" id="left_nav">
        <div class="suffix_23 pull_1">
            <nav class="minor_nav box">
                <ul class="nav_group">
                   <li >
         	<a href="<?php echo $basic_url;?>" title="<?php echo $_lang['description'];?>" <?php if(!$view||$view=='base') { ?>class="selected"<?php } ?>>
            	<div class="icon16 notepad-2 mr_5 block"><?php echo $_lang['_miao_'];?></div>
            </a>
         </li>
         <li>
         	<a href="<?php echo $basic_url;?>&view=work" title="<?php echo $_lang['work'];?>[<?php echo $task_info['work_num'];?>]" <?php if($view=='work') { ?>class="selected"<?php } ?>>
            	<div class="icon16 spechbubble-sq-line mr_5 block"><?php echo $_lang['_gao_'];?></div>
            </a>
         </li>
         <li >
         	<a href="<?php echo $basic_url;?>&view=comment" title="<?php echo $_lang['leave_word'];?>[<?php echo $task_info['leave_num'];?>]" <?php if($view=='comment') { ?>class="selected"<?php } ?>>
            	<div class="icon16 spechbubble-2 mr_5 block"><?php echo $_lang['_liu_'];?></div>
            </a>
         </li>
        <li>
        	<a href="<?php echo $basic_url;?>&view=mark" title="<?php echo $_lang['evaluate'];?>[<?php echo $task_info['mark']['all'];?>]" <?php if($view=='mark') { ?>class="selected"<?php } ?>>
            <div class="icon16 cert mr_5 block"><?php echo $_lang['_ping_'];?></div>
            </a>
         </li>
       
        <?php if($uid==$task_info['uid']) { ?>
 <li>
 	<a href="<?php echo $basic_url;?>&view=tools" <?php if($view=='tools') { ?> class="selected" <?php } ?> title="<?php echo $_lang['tool'];?>">
 		<div class="icon16 box mr_5 block"><?php echo $_lang['_gong_'];?></div>
</a>
</li>
<?php } ?>
                </ul>
                <ul class="nav_group">
<li>
         	<a href="javascript:void(0);" class="" title="<?php echo $_lang['stay_top'];?>">
            	<div class="icon16 arrow-top-right block" id="arrow-top-right"><?php echo $_lang['stop'];?></div>
            </a>
         </li>
                </ul>
            </nav>
        </div>
    </div>
  	<!--左边导航 end-->

   
    <!---->
    <div class="show_panel container_24 ">
      <?php if(!$view||$view=='base') { ?>
  <div class="grid_19  clearfix">
  <div class="panel clearfix box">
      <!--布局 左-->
       <div class="clearfix">
        <!--布局 内边距-->
         <div class="pad20">
          <!--标题头部-->
         <header class="hidden">
          <div class="pad5 border_b_c po_re clearfix">
            <h2><?php echo $_lang['info'];?></h2>
            <!--工具栏--
            <div class="operate po_ab hidden">
            <?php if($task_info['task_file']) { ?>
              <a href="#file" class="" title="<?php echo $_lang['have_attachment'];?>"><span class="icon16 clip"><?php echo $_lang['have_attachment'];?></span></a>
<?php } ?>
              <a href="javascript:setfontsize();" class="" title="<?php echo $_lang['text_size'];?>"><div class="icon16 text-letter-t"><?php echo $_lang['text_size'];?></div></a>
              <a href="javascript:setprint('details');" class="" title="<?php echo $_lang['print'];?>"><div class="icon16 print"><?php echo $_lang['print'];?></div></a>
           </div>
          <!--end 工具栏-->
          </div>  
        </header>
       <!--end 标题头部-->
    <!--任务地图-->
<?php if($task_info['point']) { ?>
<details open  class="map">       
        <!-- <summary class="fontb"><?php echo $_lang['task_map'];?><em class="c999 font_normal"></em></summary>  -->
<?php if($_K['map_api']=='baidu') { ?>
<?php if($_K['map_api']=='baidu') { ?>
<script type="text/javascript" src="<?php echo $_K['baidu_api'];?>"></script>
<?php } else { ?>
<script type="text/javascript" src="<?php echo $_K['google_api'];?>"></script>
<?php } ?>
<div id="div_map"  >
<script type="text/javascript">
$(function(){	
var px = parseFloat("<?php echo $px;?>");
var py = parseFloat("<?php echo $py;?>");												
init(px,py,8);
})
function init(px,py,zo){							
map = new BMap.Map("container"); // 创建地图实例
var point = new BMap.Point(py,px); // 创建点坐标												
map.centerAndZoom(point, zo); // 初始化地图，设置中心点坐标和地图级别
map.enableScrollWheelZoom(); //鼠标滑动设置地图级别
var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL};
map.addControl(new BMap.NavigationControl(opts)); //添加平移缩放控件	
var marker = new BMap.Marker(point);
map.addOverlay(marker);	
}						
</script>
<input type="hidden" name="px" id="px" value="<?php echo $px;?>"/>
<input type="hidden" name="py" id="py" value="<?php echo $py;?>"/> 

<div id="container" style="width:200px;height:200px"></div>

</div>
<?php } else { ?>
<?php if($_K['map_api']=='baidu') { ?>
<script type="text/javascript" src="<?php echo $_K['baidu_api'];?>"></script>
<?php } else { ?>
<script type="text/javascript" src="<?php echo $_K['google_api'];?>"></script>
<?php } ?>
<div id="div_map"  >
<script type="text/javascript">
$(function(){	
var px = parseFloat("<?php echo $px;?>");
var py = parseFloat("<?php echo $py;?>");												
init(px,py,8);
})
function init(px,py,zo){
var myLatlng = new google.maps.LatLng(px,py);
var myOptions = {center: myLatlng,	zoom: 6,mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById('container'),myOptions); 
   var marker = new google.maps.Marker({map: map,position:myLatlng	})

}	

</script>
<input type="hidden" name="px" id="px" value="<?php echo $px;?>"/>
<input type="hidden" name="py" id="py" value="<?php echo py;?>"/> 		
<div id="container" style="width:200px;height:200px"></div>

</div>
<?php } ?>  
<div>地址：<?php echo $task_info['city']?></div>   
    </details>	
<?php } ?>
<!--end任务地图-->
       <!--内容1-->
       <details open class="mb_20 " id="details">
       <!--标题-->
        <summary  class="fontb"><?php echo $_lang['requirement'];?></summary>
         <!--内容-->
        
<pre class="ws_prewrap ws_break" >
<?php echo htmlspecialchars_decode($task_info[task_desc]) ?>
</pre> 
      </details>
      <!--end 内容1-->
      <div class="clear"></div>
      <!--start补充需求-->
     	<?php if($process_can['reqedit']) { ?>
<a href="javascript:void(0)" onclick="taskReqedit();" class=" button"><?php if($task_info['ext_desc']) { ?><?php echo $_lang['edit_add_need']?><?php } else { ?><?php echo $process_desc['reqedit'];?><?php } ?></a>
<?php } ?>
  <!--end 补充需求-->
  <!--任务补充需求-->
  <?php if($task_info['ext_desc']) { ?>
      <details open  class="mb_20">
       <!--标题-->
         <summary class="fontb"><?php echo $_lang['supply_description'];?><em class="c999 font_normal"><?php echo $_lang['des_zc'];?></em></summary>
            <pre class="ws_prewrap ws_break"  id="reqedit"><?php echo kekezu::escape($task_info['ext_desc']) ?></pre>
<?php if($task_info['ext_time']) { ?>
<span>修改时间<?php echo date('Y-m-d',$task_info['ext_time']) ?></span>
<?php } ?>
      </details>
  <?php } ?>
     <!--end 任务补充需求-->
   

 <!--任务附件-->
 <?php if($task_info['task_file']) { ?>
     <details open  class="mb_20" id="file">
     <!--标题-->
     <summary class=" fontb"><?php echo $_lang['attachment'];?></summary>
      <div class="affix pl_10">
       <ul>
       	<?php if(is_array($task_file)) { foreach($task_file as $v) { ?>
<?php $v['file_name_ext']=urlencode($v['file_name']); ?>
          <li>
             <a id="ddd" target="_blank" href="index.php?do=ajax&view=file&ajax=download&file_name=<?php echo $v['file_name_ext'];?>&file_path=<?php echo $v['save_name'];?>#file" >
             	<?php echo $v['file_name'];?><span class="c999">（<?php echo is_file($v['save_name'])?kekezu::get_format_size(filesize($v[save_name])):'' ?>）</span><span class="icon16 download"></span></a>
          </li>
<?php } } ?>


      </ul>
     </div>
   </details>
   <?php } ?>
    <!--end 任务附件-->

   </div>
   <!--end 布局 内边距-->
  </div>
  <!--end 布局 左-->
   
   <!--工具栏--
      <div class="operate fl_r mt_10 hidden">

        <a href="index.php" class="" title="<?php echo $_lang['return_home'];?>"><div class="icon16 home"><?php echo $_lang['return_home'];?></div></a>

        <a href="javascript:void(0)" class="scrollTop" title="<?php echo $_lang['return_top'];?>"><div class="icon16 arrow-top"><?php echo $_lang['return_top'];?></div></a>
      </div>
    <!--end 工具栏-->  
</div>
</div>
  <div class="grid_5  clearfix mre_btns">
 	<!--作者信息-->
            	<div class="shop_author box normal2 clearfix mb_10">
            	<div class="inner">
            		<div class="box_header">
                	<h2 class="title"><?php echo $_lang['employer_info'];?></h2>
                	</div>
<div class="pad5 clearfix border_b_c">
<div class="clearfix">
                        <div class="t_c fl_l mr_10">
                                <?php echo  keke_user_class::get_user_pic($task_info['uid'],'small') ?>
                        </div>
<p class="shop_sign fl_l">
                            <a href="index.php?do=space&member_id=<?php echo $task_info['uid'];?>" class="font14b block" target="_blank"><?php echo $task_info['username'];?></a>
<?php $user_leve=unserialize($sub_task_user_level['buyer_level']) ?><?php echo $user_leve['pic'];?>
                        </p>
</div>
                    <p>
                    	<!--卖家的认证信息-->
                        <?php if(is_array($auth_info)) { foreach($auth_info as $k => $v) { ?>
<a href="javascript:void(0)" title="<?php echo $v['auth_title'];?>" class="mr_5">
<img src="<?php echo $_K['siteurl'];?>/<?php echo $v['auth_small_ico'];?>" alt=''>
</a>
<?php } } ?>
                    </p>
<p  class="clearfix"><span class="fl_l"><?php echo $_lang['good_rate'];?><?php if($g_info['seller_total_num']) { ?></span><span class="cc00 ml_10 pl_5 fl_l"><?php echo number_format($g_info['seller_good_num']/$g_info['seller_total_num'],4)*100 ?><?php } else { ?>0<?php } ?>%</span>
<?php if($square_open&&$task_info['uid']!=$uid) { ?>
<?php $weth = kekezu::get_if_focus($uid,$task_info['uid']); ?>
<?php if(!$weth) { ?>
<a href="javascript:void(0);" class="fl_r" onclick="add_follow('add_focus','<?php echo $task_info['uid'];?>');"  id="add_follow_<?php echo $task_info['uid'];?>">加关注</a></p>
<?php } else { ?>
<a href="javascript:void(0);" class="fl_r" onclick="follow('remove_focus','<?php echo $task_info['uid'];?>');" id="add_follow_<?php echo $task_info['uid'];?>">取消关注</a>
<?php } ?>
<?php } ?>
</p>
<?php echo $task_obj->em_mark() ?>        
            	</div>
<div class="shop_author_link clearfix">
<a href="index.php?do=space&member_id=<?php echo $g_info['uid'];?>" target="_blank" class="fl_l"><?php echo $_lang['view_shop_space'];?></a>
<a href="javascript:void(0)" onclick="sendMessage(<?php echo $task_info['uid']?>,'<?php echo $task_info['username']?>')" class="fl_r"><?php echo $_lang['send_web_msg'];?></a>
</div>
</div>
</div>	
            <!--end 作者信息-->
<div class="">
<?php if($process_can['task_audit']) { ?>
<a class="button block" href="javascript:misc(1);">
<span class="round-checkmark  icon16"></span>
 <?php echo $_lang['pass'];?>
</a>
<a class="button block" href="javascript:misc(2);">
<span class="round-delete  icon16"></span>
<?php echo $_lang['nopass'];?>
</a>
<?php } ?>
<?php if($process_can['task_recommend']) { ?>
<a class="button block" href="javascript:misc(3);">
<span class="hand-pro  icon16"></span>
 <?php echo $_lang['recommend_top'];?>
</a>
<?php } ?>
<?php if($process_can['task_freeze']) { ?>
<a class="button block" href="javascript:misc(4);">
<span class="padlock-closed  icon16"></span>
 <?php echo $_lang['freeze'];?><?php echo $_lang['task'];?>
</a>
<?php } ?>
</div>
<?php if($process_can['tools']) { ?>
<div class="">	
  <?php if(is_array($item_list)) { foreach($item_list as $v) { ?>
<a class="button block" href="index.php?do=task&task_id=<?php echo $task_id?>&view=tools">
<span style=" vertical-align:middle; display:inline-block;"><img src="<?php echo $v['small_pic'];?>" alt="<?php echo $v['item_name'];?>"></span>
 <?php echo $v['item_name'];?>
</a>
<?php } } ?>
</div>
<?php } ?>
<?php if($task_status==8) { ?>
<div class="award clearfix box normal2 mb_10">
<div class="inner">
<div class="award_top clearfix">
<div class="box_header clearfix">
<h2 class="title">
<?php echo $_lang['task_bider'];?>
</h2>
</div>
<div class="srewar_user box_detail clearfix">
<ul class="clearfix">
<?php if(is_array($list_work)) { foreach($list_work as $v) { ?>
<li>
<a href="index.php?do=space&member_id=<?php echo $v['uid'];?>" title="<?php echo $v['username'];?>" target="_blank"><?php echo  keke_user_class::get_user_pic($v['uid'],'small') ?></a>
 
</li>
<li>
<p class="shop_sign fl_l">
                            <a href="index.php?do=space&member_id=<?php echo $v['uid'];?>" class="font14b block" target="_blank"><?php echo $v['username'];?></a>
<?php $list_work_leve=unserialize($v['seller_level']) ?><?php echo $list_work_leve['pic'];?>
                        </p>
</li>
<?php } } ?>
</ul>
</div>

</div>
</div>

 </div>	
<?php } ?>
<?php if($process_can['task_report']) { ?>
<a class="button block mt_10" href="javascript:void(0)"  onclick="report('task','2','<?php echo $task_id;?>','<?php echo $task_info['uid'];?>','<?php echo $task_info['username'];?>');" title="<?php echo $_lang['report'];?>">
         	<span class="icon16 hand-1"></span>
<?php echo $_lang['report'];?>
         </a>
 <?php } ?>
 <?php if($uid!=$task_info['uid']) { ?>
<a class="button block" href="javascript:void(0);" onclick="favor('task_id','task','<?php echo $model_code;?>','<?php echo $task_info['uid'];?>','<?php echo $task_id;?>','<?php echo $task_info['task_title'];?>','<?php echo $task_id;?>')">
<span class="star-fav-empty  icon16"></span>
 <?php echo $task_info['focus_num'];?> <?php echo $_lang['times'];?><?php echo $_lang['favorit'];?>
</a>
<?php } ?>
<a class="button block" href="index.php?do=ajax&view=share&oid=1&title=<?php echo $task_info['task_title'];?>" id="share1" onclick="return false;"   onmouseover="share(this)" title="<?php echo $_lang['share'];?>">
         	<span class="icon16 share"  id="test_aaa"></span>
<?php echo $_lang['share'];?>
 </a>

 
 </div>
  
  <!--end 布局 右-->
   <?php } elseif($view=='work') { ?>
   <link rel="stylesheet" type="text/css" href="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.css" media="screen">
<script src="resource/js/jqplugins/fancybox/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
<script src="resource/js/jqplugins/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
     <div class="grid_24 po_re">
     	<div class="panel clearfix box">
       <header class="clearfix box_header">
       	
  <div class="pl_20">
          	<nav class="box_nav">
            	<ul class="clearfix">
                    <li><a href="<?php echo $basic_url;?>&view=work"><?php echo $_lang['all_works'];?>[<?php echo $task_info['work_num'];?>]</a></li>
                    <li><a href="<?php echo $basic_url;?>&view=work&st=4"><?php echo $_lang['bided_work'];?>[<?php echo intval($search_condit['4']['count']) ?>]</a> </li>
                    <li><a href="<?php echo $basic_url;?>&view=work&st=7"><?php echo $_lang['out_work'];?>[<?php echo intval($search_condit['7']['count']) ?>]</a> </li>
                    <li><a href="<?php echo $basic_url;?>&view=work&st=5"><?php echo $_lang['in_work'];?>[<?php echo intval($search_condit['5']['count']) ?>]</a></li>
                	<?php if($uid==$task_info['uid']) { ?>
            <li><a href="<?php echo $basic_url;?>&view=work&st=0"><?php echo $_lang['no_auth_work'];?>(<?php if($search_condit['0']['count']) { ?><?php echo $search_condit['0']['count']?><?php } else { ?>0<?php } ?>)</a></li>
                    <?php } ?>	
                    <?php if($task_obj->_guid != $uid) { ?>
<li><a href="<?php echo $basic_url;?>&view=work&ut=my"><?php echo $_lang['my_works'];?></a></li>
<?php } ?>

            	</ul>
            </nav>
</div>
       </header>
   
     	
   <!--摘要-->
       <div class="gj_summery clearfix">
       	<div  id="gj_summery">
       <?php if($work_info) { ?>
      <?php if(is_array($work_info)) { foreach($work_info as $v) { ?>
      	<div class="items clearfix">
      	<!--稿件标题栏 start-->
         <div id="work_<?php echo $v['work_id'];?>" class="sum_title po_re clearfix ">
           	 
             
             <div class="sum_left">
             	<a href="#" class="button fl_r mr_10 view_ctrl" >-收起</a>
             	<strong class="gj_bg">NO.<?php echo $v['work_id'];?></strong>
             	<span><?php echo $_lang['contribute_time'];?><?php echo $_lang['zh_mh'];?><?php if($v['work_time']){echo date('Y-m-d H:i:s',$v['work_time']); } ?></span> 
            
 <?php if($v['uid']==$uid||$uid==$task_info['uid']||$user_info['group']) { ?>
<strong class='c396'>
<?php if($v['is_view']||$uid==$task_info['uid']) { ?>
<?php echo $_lang['has_viewed'];?>
<?php } else { ?>
<?php echo $_lang['not_vies'];?>
<?php } ?>
</strong> 
<?php } ?>


             </div>
             
          </div>
          <!--稿件标题栏 end-->
          <!--稿件内容栏 start-->
          <div class="sum_content clearfix work_<?php echo $v['work_id'];?>">
          <!--用户信息栏 start-->
           <div class="sc_left t_c">
             <div class="user_info po_re pt_10" uid="<?php echo $v['uid'];?>" wid="<?php echo $v['work_id'];?>">
              
<!--浮出层-->
                 <div class="po_ab user_detail hidden"></div>
                <!--end 浮出层-->

<!--用户信息-->
<div class="pl_20 t_l clearfix">
<div class="fl_l mr_10">
<a href="index.php?do=space&member_id=<?php echo $v['uid'];?>" target="_blank"> <?php echo  keke_user_class::get_user_pic($v['uid'],'small') ?></a>
</div>
<?php $user_leve=unserialize($v['seller_level']) ?>
<div>
             			<p><a href="index.php?do=space&member_id=<?php echo $v['uid'];?>" target="_blank"><strong><?php echo $v['username'];?></strong></a></p>
<p class="ml_10"><?php echo $user_leve['pic'];?> </p>
</div>
              		<div class="clear"></div>
               	 	<p><?php echo $v['residency']?></p>
              
             	</div>
<!--end 用户信息-->
             </div>
             

           </div>
             <!--用户信息栏 end-->
             
             <div class="sc_right pad20 po_re clearfix" id="<?php echo $v['work_id'];?>">

<!--稿件操作 start-->
<div class="pl_20 mb_20">
<?php if($process_can['work_choose']) { ?>
              <?php if(!in_array($v['work_status'],array('4','7','8'))) { ?>
              <span id="work_4_<?php echo $v['work_id'];?>">
              	<a href="javascript:void(0);" class="button" onclick="workBid('<?php echo $v['work_id'];?>','4',this)"><?php echo $_lang['bid'];?></a>
              </span>
              <?php } ?>
  <?php if(!in_array($v['work_status'],array('4','5','7','8'))) { ?>
              <span id="work_5_<?php echo $v['work_id'];?>">
              	<a href="javascript:void(0);" class="button"  onclick="workBid('<?php echo $v['work_id'];?>','5',this)"><?php echo $_lang['in'];?></a>
              </span>
              <?php } ?>
  <?php if(!in_array($v['work_status'],array('4','7','8'))) { ?>
              	<span id="work_7_<?php echo $v['work_id'];?>">
                	<a href="javascript:void(0);" class="button"  onclick="workBid('<?php echo $v['work_id'];?>','7',this)"><?php echo $_lang['no_qualified'];?></a>
                </span>
                <?php } ?>
<?php } ?> 
<?php if($process_can['task_agree']&&$v['work_status']=='4'&&($uid==$task_info['uid']||$v['uid']==$uid)) { ?>
            <span id="task_agree">
            	<a class="button" href="javascript:taskAgree(<?php echo $agree_id;?>);"><?php echo $_lang['deliver_agreement'];?></a>
            </span>
            <?php } ?>
<?php if($process_can['work_vote']&&$v['work_status']=='5'&&$uid!=$v['uid']&&$can_vote>0) { ?>
            	<span>
                	<a class="button" href="javascript:void(0);" id="work_vote_<?php echo $v['work_id'];?>" onclick="workVote('<?php echo $v['work_id'];?>','<?php echo $v['uid'];?>',this)"><?php echo $_lang['vote'];?></a>　
                    <span class="red" id="vote_num_<?php echo $v['work_id'];?>"><?php echo $v['vote_num'];?></span> <?php echo $_lang['vote_num'];?>
                 </span>
            <?php } ?>
<?php if((!$mark[$v['work_id']]||($mark[$v['work_id']]['mark_status']!=1&&$mark[$v['work_id']]['mark_count']<2))&&!$check_right) { ?>
<?php if($process_can['work_mark']&&$v['work_status']=='4'&&$uid==$task_info['uid']) { ?>
            	<span>
                	<a class="button" href="javascript:void(0);" onclick="mark('<?php echo $basic_url;?>&op=mark&role_type=2&obj_id=<?php echo $v['work_id'];?>&task_id=<?php echo $task_id;?>');"><?php if($mark[$v['work_id']]['mark_status']) { ?><?php echo $_lang['modify_mark_info'];?><?php } else { ?><?php echo $_lang['mark_to_work'];?><?php } ?></a>
                </span>
            <?php } ?>
<?php if($process_can['task_mark']&&$v['work_status']=='4'&&$uid==$v['uid']) { ?>
            	<span>
                	<a class="button" href="javascript:void(0);" onclick="mark('<?php echo $basic_url;?>&op=mark&role_type=1&obj_id=<?php echo $v['work_id'];?>&task_id=<?php echo $task_id;?>');"><?php if($mark[$v['work_id']]['mark_status']) { ?><?php echo $_lang['modify_mark_info'];?><?php } else { ?><?php echo $_lang['mark_to_g'];?><?php } ?></a>
               </span>
            <?php } ?>
            <?php } ?>
</div>
<!--稿件操作 end-->

             <!--稿件详细 start-->
             <div class="work_status_big work_<?php echo $v['work_status'];?>_big qualified_big1 po_ab" alt="<?php echo $work_status[$v['work_status']];?>" title="<?php echo $work_status[$v['work_status']];?>"></div>
       		 <div class="pl_20">
<?php if($v['hide_work']==1&&$uid!=$task_info['uid']&&$uid!=$v['uid']&&$v['work_status']!=4&&$user_info['group_id']<1) { ?><!--隐藏，非雇主-->
<div><img src="<?php echo $style_path;?>/img/task/workhide.jpg" alt=''></div>
   <?php } else { ?>
               
 	 <div class="ws_prewrap ws_break"><?php echo kekezu::escape($v['work_desc']) ?></div>
                 	<?php if($v['work_pic']) { ?>
<?php $pic = explode(',',$v['work_pic']); ?>
<?php if(is_array($pic)) { foreach($pic as $vc) { ?>
<span class="work_img_box">
<a href="<?php echo $vc;?>" class="group" rel="example_group"><img src="<?php echo $vc;?>" alt=''></a>
</span>
<?php } } ?>
<?php } ?>
               		 <!--稿件附件-->
 	<?php if($v['work_file']) { ?>
   		  <details open  class="mb_20" id="file">
    		 <!--标题-->
 <?php $file_count = sizeof(explode(",",$v['work_file'])) ?>
     		<summary class="pad5 fontb"><a href="javascript:void(0);" onclick="loadFile('<?php echo $v['work_id'];?>')"><?php echo $_lang['see_attachment'];?>(<?php echo $file_count?>)</a></summary>
      		<div class="affix pl_10" id="work_<?php echo $v['work_id'];?>_file"></div>
  		 </details>
  	   <?php } ?>
       <!--end 稿件附件-->
<?php } ?>
<?php if($v['comment_num']) { ?>
<summary class="pad5 fontb">
<a href="javascript:void(0);" onclick="loadComment(this,'<?php echo $v['work_id'];?>','<?php echo $v['uid'];?>')">
<?php if($has_new[$v['work_id']]&&$uid==$v['uid']) { ?>
(<?php echo intval($has_new[$v['work_id']]['count']) ?>)<?php echo $_lang['tiao_new_words'];?>
<?php } else { ?>
(<?php echo $v['comment_num'];?>)<?php echo $_lang['tiao_words'];?>
<?php } ?>
</a>
</summary>
 <?php } ?>
 <!---->
  
 <div id="work_<?php echo $v['work_id'];?>_comment" class="pb_10">
 	
 </div>
 <?php if($uid==$task_info['uid']) { ?>
              <div class="review"><a href="#" class="button ml_5" >我要点评</a></div>
    <?php } ?>
  
<?php if($uid==$task_info['uid']) { ?>
 <div class="work_answer pt_10 pb_10 clearfix hidden" >
<div class="answer-form ">
                    	<div class="grid_10">
<textarea class="tar_comment txt_input" id="tar_comment" onkeydown="checkCommentInner(this,event)" cols="70">我要说几句...</textarea>
                       
                            <div class="answer-textarea  answer-zone pt_10" >
                                <button type="button" class="button answer-zone" value="<?php echo $_lang['confirm'];?>" onclick="work_comment(this,'<?php echo $v['work_id'];?>')"><span class="check icon"></span><?php echo $_lang['public'];?></button>
                                <span class="answer_word"><?php echo $_lang['you_can_input'];?></span>
                            </div>
                        </div>
</div>
</div>
<?php } ?>
                </div>

              </div>
  
  <div class="operate fl_r">
  	
            	<?php if($user_info['group_id']=='7'&&$v['work_status'] != 4 &&$v['work_status'] != 5&&($uid==$task_info['uid']||$v['uid']==$uid)) { ?>
                	<a href="javascript:void(0);" title="<?php echo $_lang['del_work'];?>" onclick="workDel('<?php echo $v['work_id'];?>')"><div class=" icon16 trash mr_5"></div><?php echo $_lang['del_work'];?></a>
                <?php } ?>

<?php if($uid!=$v['uid']) { ?>

                	<a href="javascript:void(0);" title="<?php echo $_lang['favorit'];?>" onclick="favor('work_id','work','<?php echo $model_code;?>','<?php echo $v['uid'];?>','<?php echo $v['work_id'];?>','<?php echo $task_info['task_title'];?><?php echo $_lang['ones_work'];?>','<?php echo $task_id;?>')"><div class="icon16 star-fav-empty mr_5"></div><?php echo $_lang['favorit'];?></a>
                <?php } ?>

<?php if($process_can['work_rights']&&$uid!=$v['uid']) { ?>
                	<a href="javascript:void(0);" title="<?php echo $_lang['complaint'];?><?php echo $_lang['report'];?>" onclick="report('work','2','<?php echo $v['work_id'];?>','<?php echo $v['uid'];?>','<?php echo $v['username'];?>')"><div class=" icon16 hand-1 mr_5"></div><?php echo $_lang['complaint'];?><?php echo $_lang['report'];?></a>
                <?php } ?>
<!--
<?php if($process_can['work_complaint']&&$uid!=$v['uid']) { ?>
                	<a href="javascript:void(0);" title="<?php echo $_lang['complaint'];?>" onclick="report('work','3','<?php echo $v['work_id'];?>','<?php echo $v['uid'];?>','<?php echo $v['username'];?>')"><div class=" icon16 cog mr_5"></div><?php echo $_lang['complaint'];?></a>
                <?php } ?>
-->
</div>
            </div>

            <!--稿件标题栏 end-->
            </div>
 <?php } } ?>
 <?php } else { ?>
 	<div class="t_c"><span class="c999"><?php echo $_lang['now_no_record'];?></span></div>
 <?php } ?>
         <!--page 翻页 start-->
         <div class="page">
             <p class="clearfix"><span class="stats"><?php echo $_lang['total'];?><?php echo $task_info['work_num'];?><?php echo $_lang['tiao'];?> </span><?php echo $pages['page'];?> </p>
             <div class="clear">
           </div>
         </div>
         <!--page 翻页 end-->
       </div>
   </div><!--end 摘要-->
     </div>
 </div>
 <script type="text/javascript" >
 	///In('xheditor');
 	$(document).ready(function() {
$("a.group").fancybox({

});

});
 </script>
   <?php } elseif($view=='comment') { ?>
   <div class="grid_24 po_re">
<div class="panel clearfix box">
                
<!--留言部分-->
                <div class="lyk pl_20 mt_10 mb_20 clearfix">
                	<h3 id="h3_pub_comment"><?php echo $_lang['pub_new_msg'];?></h3>
                    <div class="grid_14">
                    	
 <div class="work_answer">
<div class="answer-form">
                       <textarea class="font14 txt_input"  id="tar_comment"  cols="100" onkeydown="checkCommentInner(this,event)"><?php echo $_lang['pub_new_comment'];?></textarea>
<div class=" ">
<button type="button" class="button block fl_l" value="<?php echo $_lang['send_comment'];?>" onclick="comment_add()"><span class="check icon"></span><?php echo $_lang['public'];?></button>
<span class="answer_word"><?php echo $_lang['you_can_input'];?></span>
</div>
</div>
</div>

                    </div>
                    <div class="grid_8">
                        <p class="ly_notice">
                            	<?php echo $_lang['to_people_notice'];?>
                        </p>
                    </div>
                </div>
                <!--end 留言部分-->
<div class="clear"></div>
                <div class="pl_20 pr_20">
                	

<h3><?php echo $_lang['leave_word'];?>[<?php echo $task_info['leave_num'];?>]</h3>	


                	<div id="comment_page">
                     
                    <!--留言-->
<?php if(is_array($comment_data)) { foreach($comment_data as $k => $v) { ?>
                    <div class="ly1 mt_10 mb_10" id="p_<?php echo $v['comment_id']?>">
                        <div class="top1 clearfix">
                            <a href="index.php?do=space&member_id=<?php echo $v['uid']?>" class="block fl_l">
                            	<?php echo  keke_user_class::get_user_pic($v['uid'],'small') ?>
</a>
<?php if($uid ==ADMIN_UID||$user_info['group_id']==7) { ?>
<div class="operate po_ab hidden"> 
<a href="javascript:;" onclick="comment_del('p_<?php echo $v['comment_id'];?>','<?php echo $v['comment_id']?>');return false;"><span class="icon16 trash"></span><?php echo $_lang['delete'];?></a>
<a href="javascript:;" onclick="comment_reply('<?php echo $v['comment_id']?>');return false;"><span class="icon16 spechbubble"></span><?php echo $_lang['reply'];?></a>
                            </div>
<?php } ?>
<div class="comment_detail">
<a href="index.php?do=space&member_id=<?php echo $v['uid']?>"><?php echo $v['username'];?></a>
                            <span><?php if($v['on_time']){echo date('Y-m-d H:i:s',$v['on_time']); } ?></span>
                             <p class="font14 ws_prewrap ws_break"><?php echo $v['content'];?></p> 
                        </div>
</div>

<!--留言回复开始-->
<div class="cc pl_30 mt_10" id="p_reply_<?php echo $v['comment_id'];?>">
<?php if(is_array($reply_arr)) { foreach($reply_arr as $k1 => $v1) { ?>
    <?php if($v1['p_id']==$v['comment_id']) { ?>
 <div id="div_reply_<?php echo $v1['comment_id']?>" class="comment_item po_re clearfix">

<div class="fl_l mr_10">
    	<a href="index.php?do=space&member_id=<?php echo $v1['uid']?>" title="<?php echo $v1['username'];?>"><?php echo  keke_user_class::get_user_pic($v1['uid'],'small') ?></a>
</div>
<div class="grid_19 alpha">
<a href="index.php?do=space&member_id=<?php echo $v1['uid']?>"><?php echo $v1['username'];?></a><?php echo $_lang['yu'];?><?php if($v1['on_time']){echo date('Y-m-d H:i:s',$v1['on_time']); } ?><?php echo $_lang['comment'];?>:
<p class="db ws_prewrap ws_break"><?php echo $v1['content'];?></p>
</div>
<div class="operate po_ab hidden">
<?php if($uid == $v1['uid'] || $uid ==ADMIN_UID||$user_info['group_id']==7) { ?>
 	<a href="javascript:;" onclick="comment_del('div_reply_<?php echo $v1['comment_id']?>','<?php echo $v1['comment_id']?>');return false;"><span class="icon16 trash"></span><?php echo $_lang['delete'];?></a>
                                	<?php } ?>
</div>
<div class="clear"></div>

 </div>
<?php } ?>
 		<?php } } ?>
</div>
<!--留言回复结束-->
                    </div>

 <!--有留言才有回复-->
<?php if($uid==$task_info['uid']) { ?>
<div class="work_answer pl_30 pt_10 pb_10 clearfix hidden" id="answers_<?php echo $v['comment_id']?>">
<div class="answer-form ">
                    	<div class="grid_10 alpha">
<textarea class=" txt_input reply_comment" onkeydown="checkCommentInner(this,event)" cols="70" id="txt_reply_<?php echo $v['comment_id'];?>" style="height:15px;"><?php echo $_lang['reply'];?></textarea>
                       	   <div class="answer-textarea  answer-zone pt_10" >
                                <button type="button" class="button answer-zone" value="<?php echo $_lang['confirm'];?>" onclick="comment_reply('<?php echo $v['comment_id']?>')"><span class="check icon"></span><?php echo $_lang['reply'];?></button>
                                <span class="answer_word"><?php echo $_lang['you_can_input'];?></span>
                            </div>
                        </div>
</div>
  	</div>
<?php } ?>
<?php } } ?>

<!--end留言-->
                <!--page 翻页 start-->
                <?php if($comment_page['page']) { ?>
<div class="page">
                    <p class="clearfix" >                       
                         <?php echo $comment_page['page'];?>
                    </p>
<div class="clear">
                    </div>
                </div>
<?php } ?>
                <!--page 翻页 end-->
                <div class="clear">
                </div>
</div>
</div>
<div class="clear"></div>

                
            </div>
</div>
<script type="text/javascript">
$(function (){ 
notice_comment();
})
//增加评论
function comment_add()
{
var uid = '<?php echo $uid?>';
if(check_user_login())
{
var t = $("#tar_comment").val().toString().substr(0,100);
if(t=="<?php echo $_lang['pub_new_comment'];?>"||t==''){
showDialog("<?php echo $_lang['say_little'];?>",'alert',"<?php echo $_lang['msg_fail'];?>","",1);return false;
}else{
$.post(basic_url+"&view=comment&op=add",{content:t},function(text){ 
if(text=='2'){
showDialog("<?php echo $_lang['donot_submit_again'];?>",'alert',"<?php echo $_lang['deal_fail'];?>","",1); 
}else if(text=='3'){
showDialog("<?php echo $_lang['sensitive_word'];?>",'alert',"<?php echo $_lang['deal_fail'];?>","",1); 
}
else 
                    if (text == '5') {
                            showDialog("操作过于频繁,请稍候再试", 'alert', "提交失败", "", 1);
                        }
else{
var text_val = $(text);
$("#comment_page").before(text_val); 
comment();
notice_comment();
}
 },'text');
 $("#tar_comment").val(''); 
}
}
}

//删除评论
function comment_del(obj,comment_id){ 
var obj = obj ;
var comment_id = comment_id;
$.post(basic_url+"&view=comment&op=del",{comment_id:comment_id},function(json){
if(json.status!=0){ 
$("#"+obj).slideUp(600);  
$("#answers_"+comment_id).slideUp(600); 
}else{ 
     showDialog(json.data,"alert",json.msg);	
} 
},'json');  
}
//回复
function comment_reply(comment_id){
var reply_box = $('#answers_'+comment_id);
if(reply_box.is(':visible')){
var comment_id = comment_id;
var t = $("#txt_reply_"+comment_id).val().toString().substr(0,100);
$.post(basic_url+"&view=comment&op=reply",{content:t,pid:comment_id},function(text){
if(text=='2'){
showDialog("<?php echo $_lang['you_haved_replied'];?>",'alert',"<?php echo $_lang['operate_fail'];?>","",1); 
}else if(text=='3'){
showDialog("<?php echo $_lang['sensitive_word'];?>",'alert',"<?php echo $_lang['deal_fail'];?>","",1); 
}
else if (text == '5') {
                            showDialog("操作过于频繁,请稍候再试", 'alert', "提交失败", "", 1);
                        }
else{ 
var text_val = $(text);
$(text_val).appendTo($("#p_reply_"+comment_id)); 
text_val.hide(); 
text_val.slideDown(500); 
comment();
}
},'text'); 
$("#txt_reply_"+comment_id).val('');
}else{
reply_box.removeClass('hidden');
}


} 
function comment(){
$('.operate a').tipsy({gravity:$.fn.tipsy.autoNS}).hover(function(){
$(this).children('.icon16').addClass("reverse");
}, function(){
$(this).children('.icon16').removeClass("reverse");
});
//评论鼠标移动事件显示工具栏
$(".top1,.comment_item").hover(function(){
$(this).children('.operate').removeClass('hidden');

},function(){
$(this).children('.operate').addClass('hidden');
}); 
};

function notice_comment(){

$(".reply_comment").focus(function(){ 
    var content = $(this).val(); 
    if (content == "<?php echo $_lang['reply'];?>") {

        $(this).val("");
//			$(this).siblings('.answer-zone').removeClass('hidden');
    }
    }); 
    $(".reply_comment").blur(function(){
        var content = $(this).val();
        if (!content) {
            $(this).val("<?php echo $_lang['reply'];?>");
//				$(this).siblings('.answer-zone').addClass('hidden');
        }
    });
}
$(function (){ 
$(".reply_comment").live('click',function(){
notice_comment();
})
$("#tar_comment").focus(function(){
if(this.value=="<?php echo $_lang['pub_new_comment'];?>"){
 this.value = ''; 
 }
}).blur(function(){
this.value==''?this.value="<?php echo $_lang['pub_new_comment'];?>":'';
})
$(".top1,.comment_item").live("hover",function(){
$(this).children('.operate').removeClass('hidden');

}),
$(".top1,.comment_item").live("mouseleave",function(){
$(this).children('.operate').addClass('hidden');
}); 
})	
</script>
   <?php } elseif($view=='mark') { ?>
   <!--星级评定样式-->

            <div class="grid_24 po_re">
            	<div class="panel clearfix box">
                <header class="clearfix box_header">
  <div class="pl_20">
                      	<nav class="box_nav">
                        	<ul class="clearfix">
  	<li><a href="<?php echo $basic_url;?>&view=mark"><?php echo $_lang['all_value'];?>[<?php echo $task_info['mark']['all'];?>]</a></li>
  	<li><a href="<?php echo $basic_url;?>&view=mark&st=1"><?php echo $_lang['good_value'];?>[ <?php echo intval($mark_count['1']['count']) ?> ]</a></li>
<li><a href="<?php echo $basic_url;?>&view=mark&st=2"><?php echo $_lang['middle_value'];?>[ <?php echo intval($mark_count['2']['count']) ?> ]</a></li>
<li><a href="<?php echo $basic_url;?>&view=mark&st=3"><?php echo $_lang['bad_value'];?>[ <?php echo intval($mark_count['3']['count']) ?> ]</a></li>
  	<li><a href="<?php echo $basic_url;?>&view=mark&ut=2"><?php echo $_lang['from_employer'];?>[<?php echo $task_info['mark']['master'];?>]</a></li>
<li><a href="<?php echo $basic_url;?>&view=mark&ut=1"><?php echo $_lang['from_witkey'];?>[<?php echo $task_info['mark']['wiki'];?>]</a></li>
                            </ul>
                         </nav>
     </div>
                </header>
                <div class="prefix_1 suffix_1">
<?php if($mark_info) { ?> <!--评价-->
<?php if(is_array($mark_info)) { foreach($mark_info as $v) { ?>
                    <div class="ly1 mt_10 mb_10">
                        <div class="top1 clearfix mb_10 mt_10 po_re">
                        	<a class="block fl_l" href="index.php?do=space&member_id=<?php echo $v['uid'];?>" title="<?php echo $v['username'];?>"><?php echo  keke_user_class::get_user_pic($v['by_uid'],'small') ?></a>
                            <div class=" comment_detail">
                            	<p>
 	<?php echo $v['by_username'];?> 
<?php echo $_lang['to'];?> 
<?php echo $v['username'];?> 
<strong class="cc00"><?php if($v['mark_status']==1) { ?><?php echo $_lang['good_value'];?><?php } elseif($v['mark_status']==2) { ?><?php echo $_lang['middle_value'];?><?php } elseif($v['mark_status']=='3') { ?><?php echo $_lang['bad_value'];?><?php } else { ?><?php echo $_lang['no_reply_value'];?><?php } ?></strong>
<img src="resource/img/ico/ico_mark_<?php echo $v['mark_status'];?>.gif" alt='<?php echo $v['mark_status'];?>'>
<a onclick="return false;" href="index.php?do=ajax&view=task&ajax=mark_aid&auid=<?php echo $v['uid'];?>&mark_type=<?php echo $v['mark_type'];?>&mark_status=<?php echo $v['mark_status'];?>&obj_id=<?php echo $v['obj_id'];?>"
 onmouseover="loadMarkAid(this)" id="task_mark_<?php echo $v['mark_id'];?>"><?php echo $_lang['check_evalue'];?></a>
</p>
 <p class="font14 ws_prewrap ws_break"><?php echo $v['mark_content'];?></p>
 
                            </div>
                        </div>
                   

                    </div>
<div class="clear"></div>
<?php } } ?><!--end评价-->
<?php } else { ?>
<div class="t_c"><span class="c999"><?php echo $_lang['now_no_record'];?></span></div>
<?php } ?>
                    <!--page 翻页 start-->
<?php if($pages['page']) { ?>	
                <div class="page">
                    <p class="clearfix"><?php echo $pages['page'];?> </p>
                    <div class="clear">
                    </div>
                </div>
<?php } ?>
                <!--page 翻页 end-->
                    
                </div>
                
                <div class="clear">
                </div>
            </div>
</div>
    <?php } elseif($view=='tools'&&$uid==$task_info['uid']) { ?>
   <?php require S_ROOT.'/control/payitem_tools.php' ?>
   <?php } ?>
       <div class="clear"></div>
   
   </div>
   <!---->
   </section>
   <!--end 章节1-->
  

   <!--任务详情_底部广告-->
   <?php keke_loaddata_class::ad_show('TASKINFO_BOTTOM','task','') ?>

  
  
  
  
  
  
  
  <!--其他推荐-->
    <aside class="clearfix mb_10">
     <div class="grid_8">
      <div class="box  normal2">
        <div class="inner">
        	<div class="box_header">
          <h3 class="title"><?php echo $_lang['view'];?><span class="c369"><a href="index.php?do=task_list&path=B<?php echo $model_id;?>A<?php echo $task_info['indus_pid'];?>" target="_blank"><?php echo $indus_p_arr[$task_info['indus_pid']]['indus_name'];?></a></span><?php echo $_lang['other_view'];?></h3>
      	</div>
           <div class="clearfix box_detail">             

               <ul>
               	<?php if($related_task['same']) { ?>
<?php if(is_array($related_task['same'])) { foreach($related_task['same'] as $v) { ?>
                  		<li>
                        <div class="item clearfix">
                        <a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" target="_blank" title="<?php echo $v['task_title'];?>">
                        	<span class="c900">
                        	<?php if($v['model_id']==4||$v['model_id']==5||$v['model_id']==12) { ?>
                        		<?php  echo keke_curren_class::output(floatval($cover_cash[$v['task_cash_coverage']]['start_cove']),-1);  ?>-<?php  echo keke_curren_class::output(floatval($cover_cash[$v['task_cash_coverage']]['end_cove']),-1);  ?>
                        	<?php } else { ?>
                        		<?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?>
                        	<?php } ?>
                        	</span><?php echo $v['task_title'];?>
                        	
                        </a>
                        </div>
                        </li>	
<?php } } ?>
<?php } else { ?>
                   <li class="t_c"><span class="c999"><?php echo $_lang['now_no_record'];?></span></li>
<?php } ?>
               </ul>

           </div>
        </div>
      </div>
     </div>
     <div class="grid_8">
      <div class="box  normal2">
       <div class="inner">
       	<div class="box_header">
         <h3 class="title"><?php echo $_lang['you_may_insterest'];?></h3>
     	</div>
         <div class="clearfix box_detail">
        <ul>
        	
               	<?php if($related_task['favor']) { ?>
<?php if(is_array($related_task['favor'])) { foreach($related_task['favor'] as $v) { ?>
                  		<li>
                        <div class="item clearfix">
                        <a href="index.php?do=task&task_id=<?php echo $v['task_id'];?>" target="_blank" title="<?php echo $v['task_title'];?>"><span class="c900">
                         
                         
                        	<?php if($v['model_id']==4||$v['model_id']==5||$v['model_id']==12) { ?>
                        		<?php  echo keke_curren_class::output(floatval($cover_cash[$v['task_cash_coverage']]['start_cove']),-1);  ?>-<?php  echo keke_curren_class::output(floatval($cover_cash[$v['task_cash_coverage']]['end_cove']),-1);  ?>
                        	<?php } else { ?>
                        		<?php  echo keke_curren_class::output(floatval($v['task_cash']),-1);  ?>
                        	<?php } ?>
                        
                        </span> <?php echo $v['task_title'];?></a>
                        </div>
                        </li>	
<?php } } ?>
<?php } else { ?>
                   <li class="t_c"><span class="c999"><?php echo $_lang['now_no_record'];?></span></li>
<?php } ?>
          </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="grid_8">
       <div class="box  normal2">
         <div class="inner">
         	<div class="box_header">
            <h3 class="title"><?php echo $_lang['view_history_record'];?></h3>
        </div>
              <div class="clearfix box_detail">
                <ul class="small_list">
               	<?php if($browing_history) { ?>
<?php if(is_array($browing_history)) { foreach($browing_history as $v) { ?>
<li>
<div class="item clearfix">
<?php list($a,$b) = explode('-',$v[1]); ?>
<a href="index.php?do=task&task_id=<?php echo $v['0'];?>" target="_blank" title="<?php echo $v['2'];?>"><span class="c900">
<?php if($a and $b) { ?>
<?php  echo keke_curren_class::output(floatval($a),-1);  ?>-<?php  echo keke_curren_class::output(floatval($b),-1);  ?>
<?php } else { ?>
<?php  echo keke_curren_class::output(floatval($a),-1);  ?>
<?php } ?>
</span> <?php echo $v['2'];?>
</a>
</div>
</li>	
<?php } } ?>
<?php } else { ?>
                   <li class="t_c"><span class="c999"><?php echo $_lang['now_no_record'];?></span></li>
<?php } ?>
</ul>
               </div>          
         </div>
        </div>
     </div>
    </aside>
    <!--end 其他推荐-->
    </div>
    <!--end 布局框-->     	
   </section>
   <!--end 详细内容区-->
  </div>
<!--end 页面内容区-->
<script src="resource/js/uploadify/jquery.uploadify-3.1.min.js" type="text/javascript"></script>
<link href="resource/js/uploadify/uploadify.css" rel="stylesheet">
<script type="text/javascript" src="resource/js/jqplugins/jQuery.mouseDelay.js"></script>
<script type="text/javascript">
var guid  	 	= parseInt(<?php echo $task_info['uid']?>)+0;
var task_id		= parseInt(<?php echo $task_id?>)+0;
var uid 		= parseInt('<?php echo $uid;?>')+0;
var task_status = parseInt(<?php echo $task_status?>)+0;
var basic_url	= "<?php echo $basic_url;?>";
var datePrv     = "<?php echo $date_prv;?>";
var username    = "<?php echo $username;?>";
var delay_count = parseInt('<?php echo $delay_count;?>')+0;
var delay_total = parseInt('<?php echo $delay_total;?>')+0;
var trust_mode  = "<?php echo $trust_mode;?>";
</script>

 
 
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
<?php } ?>	<?php keke_tpl_class::ob_out();?>