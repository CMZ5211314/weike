<?php keke_tpl_class::checkrefresh('tpl/default/seller_list', '1417682596' );?><?php if($_K['inajax']) { ?>
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
<?php keke_loaddata_class::ad_show('GLOBAL_TOP_BANNER','seller_list','') ?>
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
<link href="<?php echo SKIN_PATH;?>/css/shop.css" rel="stylesheet" type="text/css">
<div class="wrapper">      
        <!--页面头部-->
        <header class="clearfix page_header">
        	<div class="container_24">
        		<!--服务商_头部广告-->
        		<?php keke_loaddata_class::ad_show('SELLERLIST_HEAD','seller_list','') ?>
            <!--页面导航-->
            <div class="breadcrumbs clearfix">
                <a href="index.php"><?php echo $_lang['home'];?></a> &gt; <span><?php echo $_lang['service_provider'];?></span>
              </div>
            <!--end 页面导航-->
          </div>
        </header> 
        <!--end 页面标题-->
        <!--主内容-->
        <section class="clearfix content">
            <div class="container_24">
    	<div class="clear"></div>
<div class="clear"></div>
                <div class="mb_10 clearfix">
                	<div class="grid_24">
                    <!--筛选条件-->
                    <div class="filter box normal po_re">
                    	<div class="inner" id="condition_list">
                      <!--条件列表-->
                      <div class="condition_list pad10"  > 
                        <!--服务商行业分类-->
                        <dl class="condition clearfix">
                            <dt class="grid_2 omega">
                                    <?php echo $_lang['industrial_classification'];?>
                            </dt>
                            <dd class="grid_21">
                                <?php $exist = stristr($path, "A"); ?>
<a href="<?php echo $check_all['A']?>"  <?php if(!$exist) { ?>  class='selected' <?php } ?>><?php echo $_lang['all'];?> </a>
                                <?php if(is_array($check_url_arr['A'])) { foreach($check_url_arr['A'] as $k => $v) { ?>
<a href="<?php echo $v['url']?>" <?php if($v['selected']) { ?>  class="selected" <?php } ?>><?php echo $v['indus_name']?></a>
                                <?php } } ?> 
                            </dd>
                        </dl>
                         <!--end 分类-->
                       
                      	  <!--条件1-->
                          <dl class="condition clearfix">
                            <dt class="grid_2 omega"><?php echo $_lang['store_category'];?></dt>
                            <dd class="grid_21">
                            	<?php $exist = stristr($path, "C"); ?>
                                <a href="<?php echo $check_all['C']?>" <?php if(!$exist) { ?> class="selected" <?php } ?>><?php echo $_lang['all'];?></a> 
<?php if(is_array($check_url_arr['C'])) { foreach($check_url_arr['C'] as $k => $v) { ?>
    <a href="<?php echo $v['url']?>"  <?php if($v['selected']) { ?> class="selected" <?php } ?>><?php echo $v['name']?></a> 
                                <?php } } ?>
                                </dd>
                           </dl>
   
                          
                           <!--条件2-->
 

                       </div>
                       <!--end 条件列表-->
                       
                       
                       <!--已选条件-->
                       <div class="select_condition clearfix pad10 m_h">
                       
                           <div class="grid_2 omega">
                           		<h3 class="title"><?php echo $_lang['selected_terms'];?></h3>
                           </div>
                        
                        	<div class="grid_21">
                            		<!--当无选择条件时显示span标记-->
                                    
<?php if(is_array($select_arr)) { foreach($select_arr as $k => $v) { ?>
                                    <a href="<?php echo $v['url']?>" class="selected" ><span><?php echo $v['name']?> <span class="close">&times;</span></a> 
<?php } } ?>
<?php if($select_arr) { ?>

<a href="index.php?do=seller_list" class="button"><span class="icon reload"></span><?php echo $_lang['reset'];?>　</a>
<a href="javascript:save_cookie()" class="button"><span class="icon check"></span><?php echo $_lang['save_search_terms'];?></a>

<div class="success" style="color:#2f55a0;display:none" id="success">
                                        <?php echo $_lang['save_suc'];?>
                                    </div>
<?php } else { ?>
<span><?php echo $_lang['no_selected_terms'];?></span> 
<?php } ?>
                            </div>
                       </div>
                       <!--end 已选条件-->
   </div>
                    </div>
                     <!--end 筛选条件-->
 
                    </div>
                </div>

            
            
                <section class="clearfix section"> 
                    <div class="second_menu container_24 po_ab m_h">
                        <div class="suffix_23 pull_1">
                            <nav class="minor_nav box">
                                <ul class="nav_group clearfix">                                	
                                    <li>
                                    	<a href="index.php?do=help&fpid=291" title="<?php echo $_lang['help_center'];?>"><span class="icon16 help"></span></a>
</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="show_panel container_24 po_re">
                        <div class="po_re clearfix box">
                                  
                                <!--左边内容-->
                                <div class="grid_20">
                                    <div class="box normal clearfix">
                                        <!--左内容头-->
                                    	<div class="border_b_c clearfix hidden">
                                    	<div class="grid_5 omega">
                                            <div class="sum clearfix">
                                                <p><?php echo $_lang['total_find'];?><span class="cc00"> <?php echo $count?> </span><?php echo $_lang['tiao_result'];?></p>
                                             </div>
                                        </div>
                                         <div class="grid_15 alpha omega m_h"> 
                                              <!--列表项数量-->
                                              <div class="page_count fl_r">
                                                  <a href="index.php?do=seller_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=20" <?php if($page_size==20||!$page_size) { ?> class="selected" <?php } ?>>20</a>
                                                  <a href="index.php?do=seller_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=40" <?php if($page_size==40) { ?> class="selected" <?php } ?>>40</a>
                                                  <a href="index.php?do=seller_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=60" <?php if($page_size==60) { ?> class="selected" <?php } ?>>60</a>
                                                  <a href="index.php?do=seller_list&path=<?php echo $path?>&min=<?php echo $min?>&max=<?php echo $max?>&page_size=80" <?php if($page_size==80) { ?> class="selected" <?php } ?>>80</a>
                                              </div>
                                              <!--end 列表项数量-->
  <!--小翻页-->
                                              <div class="min_page  fl_l pl_10">
                                                <p class="clearfix">
                                                         <?php echo $pages['page']?>
                                                  </p>
                                                  <div class="clear"></div>
                                              </div>
                                              <!--end 小翻页-->
                                          </div>
  </div>
                                          <!--end 左内容头-->
                                        
                                        <!--列表主内容-->
                                        <div class="list">
                                            <dl>
                                              <dt><?php echo $_lang['reward_goods'];?></dt>
                                              <dd class="tags clearfix">
                                                <ul> 
                                                    <li class="w4 info"><?php echo $_lang['service_provider_intro'];?></li>
                                                    <li class="w3d5 skill"><?php echo $_lang['skill'];?> | <?php echo $_lang['goods'];?></li>
<li class="w2d5 former">
                              
<a href="index.php?do=seller_list&path=<?php echo $path?>&page_size=<?php echo $page_size?>&ord=2" <?php if(!$ord||$ord==2) { ?> style="display:none" <?php } ?> title="<?php echo $_lang['low_praised_the_former'];?>"> <?php echo $_lang['composite_index'];?> | <?php echo $_lang['positive_feedback'];?> ▲</a> 
<a href="index.php?do=seller_list&path=<?php echo $path?>&page_size=<?php echo $page_size?>&ord=1" <?php if($ord==1) { ?> style="display:none" <?php } ?> title="<?php echo $_lang['high_praised_the_former'];?>"><?php echo $_lang['composite_index'];?> | <?php echo $_lang['positive_feedback'];?> ▼</a>

</li>												
                                                </ul>
                                              </dd>
                            
 
 <?php if(is_array($service_arr)) { foreach($service_arr as $k => $v) { ?>
                                           <dd class="po_re shop_tags clearfix">
                                                <ul class="clearfix pt_10">
                                                    <li class="w4 info ws_break ">
                                                    	 <div class="img_box fl_l pr_10 m_col2">
                                                        	<a href="index.php?do=space&member_id=<?php echo $v['uid'];?>&view=index">
                                                        		<?php echo  keke_user_class::get_user_pic($v['uid'],middle) ?>
</a>
                                                        </div>
                                                        <div class="img_des">	
                                                            <p class=" font14b"><a href="index.php?do=space&member_id=<?php echo $v['uid'];?>&view=index" title="<?php echo $v['shop_name']?>"><?php echo kekezu::cutstr(htmlspecialchars_decode($v['shop_name']), 20); ?></a></p>
                                                            <p class="block">
                                                            	<?php if($v['shop_type']==1) { ?>
<strong class="c393"><?php echo $_lang['person'];?></strong>
<?php } else { ?>
<strong class="c939"><?php echo $_lang['enterprise'];?></strong>
<?php } ?>
</p>
<p>
<?php $credit_level = unserialize($v['seller_level']) ?>
<!--能力等级-->
<?php echo $_lang['ability_level'];?>：<?php echo $credit_level['pic'];?>
</p>

<p><?php echo rz_show($v['uid']); ?></p>			
<?php $time=time(); ?>
                                                        	<?php if($v['top_time']>$time&&$item_config['2']['small_pic']) { ?>
<img src="<?php echo $_K['siteurl'];?>/<?php echo $item_config['2']['small_pic'];?>"  title="<?php echo $_lang['recommend'];?>">
<?php } ?>
                                                        </div>
                                                    </li>
                                                    <li class="w3d5 skill">
                                                    	
                                                        <p>
<?php echo $_lang['skill_tag'];?>：	<?php if($v['skill_ids']) { ?><?php echo $v['skill_ids'];?><?php } else { ?><span class="c999"><?php echo $_lang['no_skill_label'];?></span><?php } ?>
</p>
<p>
<!--地区-->
<?php echo $_lang['area'];?><?php echo $_lang['zh_mh'];?><?php if($v['residency']) { ?><?php echo $v['residency']?><?php } else { ?><?php echo $_lang['unknown'];?><?php } ?>
</p>
<p>
<span class="mr_20"><?php echo $_lang['on_sale'];?> ：<strong class="cc00"><?php echo $v['on_sale'];?></strong></span>
<?php if($v['on_sale']) { ?><a href="javascript:void(0);" class="show_sell" onclick="loadSale(<?php echo $v['shop_id']?>)"><?php echo $_lang['view_latest_commodity'];?>▼</a><?php } ?>
</p>
<?php if($v['on_sale']) { ?>
<ul class="sell_list mt_10 clearfix" id="sell_list_<?php echo $v['shop_id'];?>"></ul>
<?php } ?>
                                                    </li>
                                                    <li class="w2d5 former">
                                                    	<?php $seller_aid = star_show ( $v[uid]); ?>
                                                    	<p><?php echo $_lang['praise'];?>：<span class="cc00"><?php echo round(($v['good_rate'])*100).'%'; ?>  </span> </p>
                                                    	<p><?php echo $_lang['work_pace'];?>：<span class="cc00"><?php echo $seller_aid['1']['avg'];?> <?php echo keke_user_mark_class::gen_star2($seller_aid[1][avg]); ?></span></p>
<p><?php echo $_lang['work_quality'];?>：<span class="cc00"><?php echo $seller_aid['2']['avg'];?><?php echo keke_user_mark_class::gen_star2($seller_aid[2][avg]); ?></span> </p>
<p><?php echo $_lang['work_attitude'];?>：<span class="cc00"><?php echo $seller_aid['3']['avg'];?> <?php echo keke_user_mark_class::gen_star2($seller_aid[3][avg]); ?> </span></p>                                                 
                                                    </li>
                                                    
                                                </ul>
                                                <div class="clear"></div>
                                              </dd>
  <?php } } ?> 
                                            </dl>    
                                        </div>
                                        <!--end 列表主内容-->
<!--右下角的返回顶部--
                                        <div class="operate mt_10 fl_r">
                                                    <a href="index.php" class="" title="<?php echo $_lang['return_home'];?>"><span class="icon16 home"></span><span class="return_word"><?php echo $_lang['return_home'];?></span></a>
                                                    <a href="#" class="" title="<?php echo $_lang['return_top'];?>"><span class="icon16 arrow-top"></span><span class="return_word"><?php echo $_lang['return_top'];?></span></a>
                                        </div>
                                        <!--end右下角的返回顶部-->      
                                    </div>
                                     
                                    <!--page 翻页 start-->
                                    <div class="page">
                                        <p class="clearfix">
                                            <span class="stats"><?php echo $_lang['total'];?> <?php echo $count?> <?php echo $_lang['tiao'];?> </span>
                                           <?php echo $pages['page']?>
                                        </p>
                                        <div class="clear"></div>
                                    </div>
                                    <!--page 翻页 end-->
                                    <div class="clear"></div>
                                         
                                </div>
                                <!--end 左边部分-->
                                
                                <!--右边部分-->
                                <div class="grid_4 m_h">
                                    
<div class="mb_10">
   	<a href="<?php echo $_K['siteurl'];?>/index.php?do=user&view=setting&op=space" class="submit block">开通店铺</a>
   </div> 
    
<div class="box normal2">
                                        <!--任务动态-->
                                        <div class="inner">
                                        		<div class="box_header">
                                                	<h3 class="title"><?php echo $_lang['seller_dt'];?></h3>
</div>
                                                <div class=" pl_10 pr_10 pb_10">
                                                
                                                   <ul id="history_collect ">
                                                	<?php if(is_array($dynamic_arr)) { foreach($dynamic_arr as $k => $v) { ?>
                                                    <li class="border_b_c ws_break">
                                                    	<p><a href="<?php echo $v['feed_username']['url']?>"><?php echo $v['feed_username']['content']?></a> <?php echo $v['action']['content']?></p>  
<p><a href="<?php echo $v['event']['url']?>"><?php echo $v['event']['content']?></a></p>
<p><?php echo kekezu::feed_time ($v['feed_time'] ); ?></p>
</li>
                                                   <?php } } ?>
                                                </ul>
</div>
                                        </div>
                                    	</div>
                                        
<div class="clear"></div>
<!--服务商_右侧广告-->
<div style="margin:0 -5px;">
<?php keke_loaddata_class::ad_show('SELLERLIST_CENTAL_RIGHT','seller_list','') ?>
</div>
<div class="clear"></div>
                                        
                                    </div>
                                
                                <!--end 右边部分-->         
                            
                        </div>
                    </div>
                                    
                </section>    
<div class="clear"></div>
 		 <?php keke_loaddata_class::ad_show('SELLERLIST_BOTTOM','seller_list','服务商_底部广告') ?>
<div class="clear"></div>                
            </div>  
        </section> 
</div>  
        <!--end 主内容--> 

<script type="text/javascript">
/** 检查用户是否登陆 */
var uid = parseInt('<?php echo $uid;?>')+0; 
function check_user_login() {
if (isNaN(uid) || uid == 0) {
showDialog("<?php echo $_lang['if_now_login'];?>", 'confirm', "<?php echo $_lang['login_notice'];?>", 'user_login()', 0);
return false;
} else {
return true;
}
}


/** 用户登陆 */

function user_login() {
showWindow('user_login', 'index.php?do=login', 'get');
return false;
} 
//页面加载，判断搜索条件是现实还是隐藏
        $(function(){
            var show_cookie = getcookie('show_cookie');
            
            if (show_cookie == 1) {
                $("#condition_list").show();
                $("#tool_hide").show();
                $("#tool_show").hide();
            }
        });
        
        //搜索条件现实 /隐藏
        function show_hide(){
            $("#condition_list").toggle(0, function(){
                if ($("#tool_show").is(":hidden")) {
                    setcookie('show_cookie', '');
                    $("#tool_show").show();
                    $("#tool_hide").hide();
                }
                else {
                    setcookie('show_cookie', 1,3600);
                    $("#tool_hide").show();
                    $("#tool_show").hide();
                }
            });
        }	
 $(function(){
 	 $('.show_sell').toggle(function(){
        $(this).text("<?php echo $_lang['less_commodity_list'];?>▲");
     },function(){
        $(this).text("<?php echo $_lang['view_latest_commodity'];?>▼");
     });
 });
 function loadSale(sid){
 	if(sid){
var url = SITEURL+'/index.php?do=ajax&view=shop&action=load_sale&shop_id='+sid;
if($('#sell_list_'+sid).html()==''){
$('#sell_list_'+sid).slideUp().load(url).slideDown();
}else{
$('#sell_list_'+sid).slideToggle();
}
}
 }
</script>		
<script type="text/javascript"> 
    In.config('serial',true);
In.add('search',{path:"<?php echo $style_path;?>/js/search.js",type:'js'});
In('search','lazy',function(){loadPics();});
 
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
<?php } ?><?php keke_tpl_class::ob_out();?>