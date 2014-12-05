<!DOCTYPE HTML>
<!--[if lt IE 7]> <html dir="ltr" lang="zh-cn" id="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="zh-cn" id="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="zh-cn" id="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="zh-cn"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>客客出品专业威客系统</title>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE,chrome=1">
<meta name="keywords" content="客客出品专业威客系统">
<meta name="description" content="客客出品专业威客系统">
<meta name="generator" content="客客出品 2.2" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style” content=black" /> 
<meta name="author" content="kekezu" />
<meta name="copyright" content="Copyright &#169; 2010 -2013 kekezu. All rights reserved" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="apple-touch-icon" href="favicon.ico"/>
<script type="text/javascript">
var SITEURL= "http://www.dashixun.com/one/weike",
SKIN_PATH = 'tpl/default',
LANG       = 'cn',
INDEX      = 'index',
CHARSET    = "utf-8";
</script>
<link href="resource/css/reset.css" rel="stylesheet" charset="utf-8">
<!--公用样式-->
<link href="resource/css/base.css" rel="stylesheet" charset="utf-8">
<!--布局样式-->
<link rel="stylesheet" media="all" href="resource/css/layout/960.min.css" charset="utf-8">
<!--box样式-->
<link href="resource/css/box.css" rel="stylesheet" charset="utf-8">
<link href="resource/css/animate.css" rel="stylesheet" charset="utf-8">
<link href="tpl/default/css/common.css" rel="stylesheet" charset="utf-8">
<link href="tpl/default/theme/blue/css/blue_style.css" rel="stylesheet" charset="utf-8">
<link href="resource/js/jqplugins/tipsy/tipsy.css" rel="stylesheet">
<link href="resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" charset="utf-8">
<!--[if lt IE 9]>
<script src="resource/js/system/html5.js" type="text/javascript"></script>
<![endif]-->
<!--jQuery1.4.4库-->
<script src="resource/js/jquery.js" type="text/javascript"></script>
<script src="lang/cn/script/lang.js" type="text/javascript"></script>
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
<body id="index">
<div class="blue_style" id="wrapper">
<div id="append_parent">
</div>
<div id="ajaxwaitid">
<div>
<img src="tpl/default/theme/blue/img/system/loading.gif" alt="loading"/>
请求处理中...</div>
</div>
<!--无刷新临时替换层-->
<div id="noflushwarper">
<div id="noflushwarper_sub"></div>
</div>
<!--body start-->
<!--顶部广告位 start-->
<div class="t_c site_messages">
</div>
<!--顶部广告位-->
<!--头部 start-->
<header class="header" id="pageTop">
<div class="container_24 clearfix">
<!--logo start-->
<hgroup class="grid_7 logo">
<h1><a href="index.php">
<img src="tpl/default/theme/blue/img/style/logo.png"
title="客客出品专业威客系统" alt="客客出品专业威客系统"></a></h1>
</hgroup>
<!--logo end-->
<div id="search" class="grid_12 m_h">
<!--主搜索 start-->
<div class="search clearfix po_re">
<!--搜索框和选项 start-->
<form action="" method="post" id="frm_search" class="clearfix fl_l">
<div class="search_box">
<div class="fl_l search_selcecter">
<div id="search_select" class="search_options">
<a href="javascript:void(0);" class="selected" rel="task_list"><span>任务</span>▼</a>
<a href="javascript:void(0);" class="hidden"   rel="task_list">任务</a>
<a href="javascript:void(0);" class="hidden"   rel="shop_list">商品</a>
</div>
</div>
<input type="text" name="search_key" onkeydown="search_keydown(event);" id="search_key" class="fl_l search_input txt_input togg c999"
value="输入任务/商品" 
x-webkit-speech x-webkit-grammar="bUIltin:search" lang="zh-CN">
</div>
</form>
<!--搜索框和选项 end-->
<!--搜索提交 start-->
<div class="fl_l header_btn">
<button class="search_btn" id="search_btn" type="button" onclick="topSearch();"><span class="icon magnifier"></span>搜索</button>
</div>
<!--搜索提交 end-->
</div>
<!--主搜索 end-->
</div>
<!--用户登录注册 start-->
<div class="user_box clearfix grid_5">
<!--注册登录按钮 start-->
<ul id="login_sub" class="user_login ">
<li><a href="index.php?do=register" class="m_h">免费注册</a></li>
<li><a href="index.php?do=login">登录</a></li>
</ul>
<!--注册登录按钮 end--> 
<div class="clear"></div>
<!--登录成功 start-->
<div id="logined" class="hidden">
<!--用户登录后内容 start-->
<ul class="user_logined clearfix">
<li id="avatar">
<a href="index.php?do=user" title="" rel="user_menu">
<img src='http://www.dashixun.com/one/weike/data/avatar/default/man_small.jpg' uid='' class='pic_small'>                                    <span class="user_named m_h"></span>
</a>
<!--用户登录后导航菜单 start-->
<div id="user_menu" class="user_nav_pop grid_5 alpha omega hidden m_h">
<ul class="nav_list clearfix">
<li class="clearfix"><a href="index.php?do=user&view=finance&op=detail" title="金钱 | 元宝" id="money"> <div class="icon16 cur-yen reverse"></div>￥0.00元| ￥0.00元</a></li>
<li class="clearfix"><a href="index.php?do=release" title="发布任务" class="selected" ><div class="icon16 doc-new reverse"></div>发布任务</a></li>
<li class="clearfix"><a href="index.php?do=shop_release" title="发布商品" class="selected"><div class="icon16 doc-new reverse"></div>发布商品</a></li>
<li class="clearfix hidden" id="manage_center"><a href="control/admin/index.php" title="管理中心" ><div class="icon16 key reverse"></div>管理中心</a></li>
<li class="clearfix"><a href="index.php?do=user&view=index" title="用户中心"><div class="icon16 cog reverse"></div>用户中心</a></li>
<li class="clearfix"><a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=" title="我的店铺" id="space"><div class="icon16 compass reverse"></div>我的店铺</a></li>
<!--<li class="clearfix"><a href="index.php?do=user&view=message" title="站内信"><div class="icon16 mail reverse"></div>站内信</a></li>-->
<li class="clearfix"><a onclick="showWindow('out','index.php?do=logout');return false;" title="退出" href="index.php?do=logout">退出</a></li>
</ul>
</div>
<!--用户登录后导航菜单 end-->
</li>
<li class="line m_h"></li>
<li class="logout m_h"><a title="站内信" href="index.php?do=user&view=message">站内信</a></li>
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
<li>
<a href="index.php?do=index" class="selected" >
<span>首页</span></a>
</li>
<li class="line"></li>
<li>
<a href="index.php?do=task_list"  >
<span>任务大厅</span></a>
</li>
<li class="line"></li>
<li>
<a href="index.php?do=shop_list"  >
<span>威客商城</span></a>
</li>
<li class="line"></li>
<li>
<a href="index.php?do=seller_list"  >
<span>服务商</span></a>
</li>
<li class="line"></li>
<li>
<a href="index.php?do=case"  >
<span>成功案例</span></a>
</li>
<li class="line"></li>
<li>
<a href="index.php?do=article"  >
<span>资讯中心</span></a>
</li>
<li class="line"></li>
<li>
<a href="index.php?do=square"  >
<span>广场</span></a>
</li>
<li class="line"></li>
<li>
<a href="index.php?do=prom"  >
<span>推广</span></a>
</li>
<li class="line"></li>
</ul>
<!---->
<div class="operate po_ab">
<a href="index.php?do=help" target="_blank" title="帮助中心">
<span class="icon16 help reverse"></span>
帮助中心                        </a>
</div>
<!---->
</div>
<div class="clear"></div>
</div>
</nav>
<div class="clear"></div>
<script type="text/javascript" src="resource/js/jqplugins/slides.min.jquery.js"></script>
<script type="text/javascript" src="resource/js/jqplugins/easySlider1.5.js"></script>
<script type="text/javascript" src="tpl/default/js/index.js"></script>
<!--内容区 satrt-->
<div class="wrapper clearfix">
<div class="container_24 clearfix"> 
<div class="pt_10"></div>
<div class="grid_18 mb_10">
<div class="box default clearfix">
<div class="inner">
<!--切换广告 start-->
<div class="banner po_re">
<div id="slides">
<!--图片内容区域 start-->
<div class="slides_container">
<a href="http://www.kppw.cn" target="_blank" title="震撼上市1"><img src="data/uploads/sys/ad/banner1.jpg" width="710" height="320" alt="震撼上市1"></a><a href="data/uploads/sys/ad/banner2.jpg" target="_blank" title="首页_顶部幻灯广告123"><img src="data/uploads/sys/ad/banner2.jpg" width="710" height="320" alt="首页_顶部幻灯广告123"></a><a href="http://www.kppw.cn" target="_blank" title="震撼上市4"><img src="data/uploads/sys/ad/banner4.jpg" width="710" height="320" alt="震撼上市4"></a><a href="http://ww.baidu.com" target="_blank" title="震撼上市"><img src="data/uploads/sys/ad/banner1.jpg" width="710" height="320" alt="震撼上市"></a><a href="http://www.kppw.cn" target="_blank" title="震撼上市3"><img src="data/uploads/sys/ad/banner3.jpg" width="710" height="320" alt="震撼上市3"></a>              </div>
<!--图片内容区域 end-->
</div>
</div>
<!--切换广告 end-->
</div>
</div>
</div>
<div class="grid_6 mb_10  clearfix">
<div class="box model">
<div class="inner post">
<table>
<tbody>
<tr>
<td>
<h2>海量服务商提交稿件，任您选！</h2>
<p><a href="index.php?do=release" class="submit block mar10">发布任务</a></p>
<p>客客出品专业威客系统</p>
</td>
</tr>
</tbody>
</table>
</div>
<!--公告 start-->
<div class="inner notice">
<!--公告头部 start-->
<header class="box_header clearfix">
<nav class="box_nav">
<ul class="ov_hide block clearfix">
<li id="ul_plac_1" onclick="swaptab('plac','backLava','',3,1)"><a href="javascript:void(0);" title="公告">公告</a></li>
<li id="ul_plac_2" onclick="swaptab('plac','backLava','',3,2,{ajax:1,url:'index.php?ajax=bid_notice'})"><a href="javascript:void(0);" title="中标通告">中标通告</a></li>
<li id="ul_plac_3" onclick="swaptab('plac','backLava','',3,3,{ajax:1,url:'index.php?ajax=withdraw'})"><a href="javascript:void(0);" title="提现">提现</a></li>
<!--<li id="ul_plac_4" onclick="swaptab('plac','backLava','',4,4,{ajax:1,url:'index.php?ajax=safe'})"><a href="javascript:void(0);" title=""></a></li>-->
</ul>
</nav>
</header>
<!--公告头部 end-->
<!--公告detail内容 start-->
<article class="box_detail" id="div_plac_1">
<ul>
<li><a href="index.php?do=single&art_id=308"></a></li>
<li><a href="index.php?do=single&art_id=304">震撼上线4</a></li>
<li><a href="index.php?do=single&art_id=303">震撼上线3</a></li>
<li><a href="index.php?do=single&art_id=302">震撼上线2</a></li>
</ul>
</article>
<article class="box_detail hidden" id="div_plac_2">
</article>
<article class="box_detail hidden" id="div_plac_3">
</article>
</div>
<!--公告 end-->
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<!-- {ad_show(HOME_CENTAL_ONE,首页_中部一栏广告)} -->
<div class="grid_24 mb_10">
<div class="box model blue">
<!--任务列表 start-->
<div class="task clearfix">
<!--头部 start-->
<header class="box_header clearfix">
<div class="grid_4 alpha">
<!--标题 start-->
<h1 class="box_title"><span>任务</span>Task</h1>
<!--标题 end-->
</div>
<!--按钮区域 start-->
<div class="btns">
<a href="index.php?do=release" class="button primary"><span class="plus icon"></span>发布任务</a><a href="index.php?do=task_list" class="button"><span class="rightarrow icon"></span>进入任务大厅</a>
</div>
<!--按钮区域 end-->
</header>
<!--头部 end-->
<!--任务推荐-->
<article class="box_detail clearfix">
<div class="grid_5 alpha">
<div class="category">
<ul class="indus_list">
<li>
<a href="index.php?do=task_list&path=A441" target="_blank">品牌设计</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A441&indus_id=8">标志设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=9">VI设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=10">名片设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=11">海报设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=12">宣传册页</a>
<a href="index.php?do=task_list&path=A441&indus_id=13">卡通设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=14">招牌设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=16">横幅设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=27">网站美工</a>
<a href="index.php?do=task_list&path=A441&indus_id=144">工业设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=145">按钮图标</a>
<a href="index.php?do=task_list&path=A441&indus_id=348">logo设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=349">vi设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=370">游戏封面</a>
<a href="index.php?do=task_list&path=A441&indus_id=376">lee牛仔裤</a>
<a href="index.php?do=task_list&path=A441&indus_id=130">字体设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=131">贺卡设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=132">礼品设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=134">四格漫画</a>
<a href="index.php?do=task_list&path=A441&indus_id=135">动漫设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=136">排版设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=137">服饰设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=140">台历设计</a>
<a href="index.php?do=task_list&path=A441&indus_id=133">QQ表情</a>
<a href="index.php?do=task_list&path=A441&indus_id=263">其他</a>
<a href="index.php?do=task_list&path=A441&indus_id=138">ppt设计</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A2" target="_blank">网站开发</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A2&indus_id=28">网站模板</a>
<a href="index.php?do=task_list&path=A2&indus_id=30">网站广告</a>
<a href="index.php?do=task_list&path=A2&indus_id=31">网页动画</a>
<a href="index.php?do=task_list&path=A2&indus_id=32">商城开发</a>
<a href="index.php?do=task_list&path=A2&indus_id=34">接口操作</a>
<a href="index.php?do=task_list&path=A2&indus_id=408">网站推广</a>
<a href="index.php?do=task_list&path=A2&indus_id=169">FLASH</a>
<a href="index.php?do=task_list&path=A2&indus_id=148">店招设计</a>
<a href="index.php?do=task_list&path=A2&indus_id=154">网店取名</a>
<a href="index.php?do=task_list&path=A2&indus_id=155">网店模板</a>
<a href="index.php?do=task_list&path=A2&indus_id=156">数码摄影</a>
<a href="index.php?do=task_list&path=A2&indus_id=147">店标设计</a>
<a href="index.php?do=task_list&path=A2&indus_id=170">视频制作</a>
<a href="index.php?do=task_list&path=A2&indus_id=172">三维渲染</a>
<a href="index.php?do=task_list&path=A2&indus_id=33">数据库操作</a>
<a href="index.php?do=task_list&path=A2&indus_id=35">服务器系统</a>
<a href="index.php?do=task_list&path=A2&indus_id=29">开源修改</a>
<a href="index.php?do=task_list&path=A2&indus_id=40">其它</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
<li><a href="index.php?do=task&task_id=29"><strong class="money">
￥100 ~ 1000元      						                       </strong> 交友网站制作</a></li>
<li><a href="index.php?do=task&task_id=5"><strong class="money">
￥1000 ~ 2000元      						                       </strong> 某窗饰制品公司征集logo及部分VI应用</a></li>
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A201" target="_blank">创意祝福</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A201&indus_id=203">爱情表白</a>
<a href="index.php?do=task_list&path=A201&indus_id=202">生日祝福</a>
<a href="index.php?do=task_list&path=A201&indus_id=204">圣诞祝福</a>
<a href="index.php?do=task_list&path=A201&indus_id=205">新年祝福</a>
<a href="index.php?do=task_list&path=A201&indus_id=209">祝福喜得贵子</a>
<a href="index.php?do=task_list&path=A201&indus_id=210">祝福乔迁新居</a>
<a href="index.php?do=task_list&path=A201&indus_id=208">感恩回馈</a>
<a href="index.php?do=task_list&path=A201&indus_id=207">纪念日祝福</a>
<a href="index.php?do=task_list&path=A201&indus_id=206">道歉短信</a>
<a href="index.php?do=task_list&path=A201&indus_id=331">彩信</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A249" target="_blank">网游服务</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A249&indus_id=96">网游创意</a>
<a href="index.php?do=task_list&path=A249&indus_id=250">手机游戏</a>
<a href="index.php?do=task_list&path=A249&indus_id=251">游戏试玩</a>
<a href="index.php?do=task_list&path=A249&indus_id=252">评测报告</a>
<a href="index.php?do=task_list&path=A249&indus_id=253">版本设计</a>
<a href="index.php?do=task_list&path=A249&indus_id=254">剧情策划</a>
<a href="index.php?do=task_list&path=A249&indus_id=255">压力测试</a>
<a href="index.php?do=task_list&path=A249&indus_id=256">代写攻略</a>
<a href="index.php?do=task_list&path=A249&indus_id=257">活动策划</a>
<a href="index.php?do=task_list&path=A249&indus_id=258">补丁制作</a>
<a href="index.php?do=task_list&path=A249&indus_id=259">游戏视频</a>
<a href="index.php?do=task_list&path=A249&indus_id=332">问卷调查</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A3" target="_blank">文案写作</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A3&indus_id=41">宣传软文</a>
<a href="index.php?do=task_list&path=A3&indus_id=42">广告语写作</a>
<a href="index.php?do=task_list&path=A3&indus_id=43">策划</a>
<a href="index.php?do=task_list&path=A3&indus_id=44">写文章</a>
<a href="index.php?do=task_list&path=A3&indus_id=45">编辑校对</a>
<a href="index.php?do=task_list&path=A3&indus_id=46">写新闻</a>
<a href="index.php?do=task_list&path=A3&indus_id=47">产品说明</a>
<a href="index.php?do=task_list&path=A3&indus_id=48">剧本脚本</a>
<a href="index.php?do=task_list&path=A3&indus_id=49">写书</a>
<a href="index.php?do=task_list&path=A3&indus_id=50">撰写报告</a>
<a href="index.php?do=task_list&path=A3&indus_id=51">应用文写作</a>
<a href="index.php?do=task_list&path=A3&indus_id=52">演讲稿</a>
<a href="index.php?do=task_list&path=A3&indus_id=57">其它</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
<li><a href="index.php?do=task&task_id=20"><strong class="money">
￥100 ~ 1000元      						                       </strong> 玉石风水摆件厂家广告语征集</a></li>
<li><a href="index.php?do=task&task_id=10"><strong class="money">
￥100 ~ 1000元      						                       </strong> 征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！</a></li>
<li><a href="index.php?do=task&task_id=9"><strong class="money">
￥100 ~ 1000元      						                       </strong> 征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！</a></li>
<li><a href="index.php?do=task&task_id=8"><strong class="money">
￥100 ~ 1000元      						                       </strong> 征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！</a></li>
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A335" target="_blank">建筑/装修</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A335&indus_id=151">展会设计</a>
<a href="index.php?do=task_list&path=A335&indus_id=152">办公装修</a>
<a href="index.php?do=task_list&path=A335&indus_id=153">园林景观</a>
<a href="index.php?do=task_list&path=A335&indus_id=159">店面装修</a>
<a href="index.php?do=task_list&path=A335&indus_id=336">新房装修</a>
<a href="index.php?do=task_list&path=A335&indus_id=337">二手房装修</a>
<a href="index.php?do=task_list&path=A335&indus_id=340">庭院景观设计</a>
<a href="index.php?do=task_list&path=A335&indus_id=338">风水咨询</a>
<a href="index.php?do=task_list&path=A335&indus_id=341">办公商铺装修</a>
<a href="index.php?do=task_list&path=A335&indus_id=339">装修监理</a>
<a href="index.php?do=task_list&path=A335&indus_id=342">自建房设计</a>
<a href="index.php?do=task_list&path=A335&indus_id=343">景观设计</a>
<a href="index.php?do=task_list&path=A335&indus_id=344">3D模型设计</a>
<a href="index.php?do=task_list&path=A335&indus_id=158">形象墙设计</a>
<a href="index.php?do=task_list&path=A335&indus_id=149">房屋建筑设计</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A211" target="_blank">头脑风暴</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A211&indus_id=217">问卷调查</a>
<a href="index.php?do=task_list&path=A211&indus_id=216">意见建议</a>
<a href="index.php?do=task_list&path=A211&indus_id=215">写评论</a>
<a href="index.php?do=task_list&path=A211&indus_id=214">征集创意</a>
<a href="index.php?do=task_list&path=A211&indus_id=213">收集金点子</a>
<a href="index.php?do=task_list&path=A211&indus_id=212">策划</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A350" target="_blank">照片美化/编辑</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A350&indus_id=351">艺术照处理</a>
<a href="index.php?do=task_list&path=A350&indus_id=352">照片变卡通</a>
<a href="index.php?do=task_list&path=A350&indus_id=353">电子相册</a>
<a href="index.php?do=task_list&path=A350&indus_id=354">照片美化</a>
<a href="index.php?do=task_list&path=A350&indus_id=355">婚纱照美化</a>
<a href="index.php?do=task_list&path=A350&indus_id=356">图片编辑</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A234" target="_blank">法律服务</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A234&indus_id=236">法律咨询</a>
<a href="index.php?do=task_list&path=A234&indus_id=235">聘请律师</a>
<a href="index.php?do=task_list&path=A234&indus_id=237">写法律合同</a>
<a href="index.php?do=task_list&path=A234&indus_id=238">写律师函</a>
<a href="index.php?do=task_list&path=A234&indus_id=239">写诉讼状</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A160" target="_blank">起名取名</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A160&indus_id=161">宝宝起名</a>
<a href="index.php?do=task_list&path=A160&indus_id=162">成人起名</a>
<a href="index.php?do=task_list&path=A160&indus_id=163">公司起名</a>
<a href="index.php?do=task_list&path=A160&indus_id=164">店铺起名</a>
<a href="index.php?do=task_list&path=A160&indus_id=165">品牌起名</a>
<a href="index.php?do=task_list&path=A160&indus_id=166">改名</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
<li><a href="index.php?do=task&task_id=26"><strong class="money">
￥100 ~ 1000元      						                       </strong> 化妆工作室取名</a></li>
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A357" target="_blank">影视/配音/歌词</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A357&indus_id=439">1111</a>
<a href="index.php?do=task_list&path=A357&indus_id=358">写剧本</a>
<a href="index.php?do=task_list&path=A357&indus_id=359">影视制作</a>
<a href="index.php?do=task_list&path=A357&indus_id=360">广告配音</a>
<a href="index.php?do=task_list&path=A357&indus_id=361">影视配音</a>
<a href="index.php?do=task_list&path=A357&indus_id=362">动画配音</a>
<a href="index.php?do=task_list&path=A357&indus_id=363">彩铃配音</a>
<a href="index.php?do=task_list&path=A357&indus_id=364">方言配音</a>
<a href="index.php?do=task_list&path=A357&indus_id=365">外语配音</a>
<a href="index.php?do=task_list&path=A357&indus_id=366">创意配音</a>
<a href="index.php?do=task_list&path=A357&indus_id=367">歌词创作</a>
<a href="index.php?do=task_list&path=A357&indus_id=368">歌词谱曲</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A192" target="_blank">生活服务</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=task_list&path=A192&indus_id=193">市场调查</a>



<a href="index.php?do=task_list&path=A192&indus_id=194">心理咨询</a>



<a href="index.php?do=task_list&path=A192&indus_id=195">移民咨询</a>



<a href="index.php?do=task_list&path=A192&indus_id=196">理财咨询</a>



<a href="index.php?do=task_list&path=A192&indus_id=197">帮我投票</a>



<a href="index.php?do=task_list&path=A192&indus_id=198">跑腿排队</a>



<a href="index.php?do=task_list&path=A192&indus_id=199">家政服务</a>



<a href="index.php?do=task_list&path=A192&indus_id=200">数据导入</a>
</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A218" target="_blank">移动应用</a>
<div class="s_nav hidden">
<div class="indus">

<a href="index.php?do=task_list&path=A218&indus_id=222">Android插件</a>


<a href="index.php?do=task_list&path=A218&indus_id=225">Symbian SDK插件</a>




<a href="index.php?do=task_list&path=A218&indus_id=223">iOS插件</a>



<a href="index.php?do=task_list&path=A218&indus_id=219">天翼插件</a>




<a href="index.php?do=task_list&path=A218&indus_id=227">Windows mobile插件</a>


<a href="index.php?do=task_list&path=A218&indus_id=228">黑莓插件</a>


<a href="index.php?do=task_list&path=A218&indus_id=230">Amazon kindle插件</a>



<a href="index.php?do=task_list&path=A218&indus_id=231">手机游戏开发</a>



<a href="index.php?do=task_list&path=A218&indus_id=229">Palm插件</a>


<a href="index.php?do=task_list&path=A218&indus_id=232">手机应用创意</a>


<a href="index.php?do=task_list&path=A218&indus_id=233">手机应用汉化</a>


<a href="index.php?do=task_list&path=A218&indus_id=226">PalmOS插件</a>


</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A240" target="_blank">招聘找人</a>
<div class="s_nav hidden">
<div class="indus">

<a href="index.php?do=task_list&path=A240&indus_id=177">搜索引擎优化</a>



<a href="index.php?do=task_list&path=A240&indus_id=178">论坛推广</a>



<a href="index.php?do=task_list&path=A240&indus_id=179">QQ群推广</a>



<a href="index.php?do=task_list&path=A240&indus_id=180">博客推广</a>



<a href="index.php?do=task_list&path=A240&indus_id=181">推广注册</a>


<a href="index.php?do=task_list&path=A240&indus_id=241">招聘</a>



<a href="index.php?do=task_list&path=A240&indus_id=242">求职</a>



<a href="index.php?do=task_list&path=A240&indus_id=243">寻人</a>




<a href="index.php?do=task_list&path=A240&indus_id=245">找生产商</a>



<a href="index.php?do=task_list&path=A240&indus_id=246">找客户</a>



<a href="index.php?do=task_list&path=A240&indus_id=247">找供应商</a>



<a href="index.php?do=task_list&path=A240&indus_id=248">找人脉</a>

<a href="index.php?do=task_list&path=A240&indus_id=334">简历设计</a>


</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
暂无推荐任务
</ul>
</div>	
</div>
</li>
<li>
<a href="index.php?do=task_list&path=A121" target="_blank">软件开发</a>
<div class="s_nav hidden">
<div class="indus">




<a href="index.php?do=task_list&path=A121&indus_id=36">程序开发</a>



<a href="index.php?do=task_list&path=A121&indus_id=37">编写脚本</a>



<a href="index.php?do=task_list&path=A121&indus_id=38">软件皮肤</a>



<a href="index.php?do=task_list&path=A121&indus_id=39">插件开发</a>



<a href="index.php?do=task_list&path=A121&indus_id=122">软件测试</a>



<a href="index.php?do=task_list&path=A121&indus_id=123">游戏开发</a>

<a href="index.php?do=task_list&path=A121&indus_id=324">软件汉化</a>



<a href="index.php?do=task_list&path=A121&indus_id=326">软件美工</a>



<a href="index.php?do=task_list&path=A121&indus_id=327">开发文档编写</a>



<a href="index.php?do=task_list&path=A121&indus_id=328">功能完善</a>




<a href="index.php?do=task_list&path=A121&indus_id=325">程序功能开发</a>


</div>
<div class="recommend">
<h3>分类任务推荐</h3>
<ul>
<li><a href="index.php?do=task&task_id=19"><strong class="money">
￥100 ~ 1000元      						                       </strong> 寻找淘宝小二通过全球购业务</a></li>
</ul>
</div>	
</div>
</li>
</ul>
<p class="all_list"><a href="index.php?do=task" target="_blank" class="button">更多任务分类&gt;&gt;</a></p>


</div>
</div>

<div class="grid_19 alpha omega ">

<!--顶部推荐3条任务内容 start-->


<!--列表 start-->

<ul class=" tops clearfix">
<li class="col3">
<!--单条内容 start-->
<div class="item">
<!--任务金额 start-->
<strong class="money">
￥100 ~ 1000元            			</strong>
<!--任务金额 end-->
<!--任务标题 start-->
<h2 class="task_title"><a href="index.php?do=task&task_id=29" title="交友网站制作" target="_blank">交友网站制作</a></h2>
<!--任务标题 end-->
<!--任务发布者 start-->
<span class="publisher"><a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=3" title="樱桃小丸子" target="_blank">樱桃小丸子</a></span>
<!--任务发布者 end-->
<!--任务模型 start-->
<span class="task_mode">订金招标</span>
<!--任务模型 end-->

</div>
<!--单条内容 end-->
</li>

<li class="line"></li>
<li class="col3">
<!--单条内容 start-->
<div class="item">
<!--任务金额 start-->
<strong class="money">
￥1 ~ 1000元            			</strong>
<!--任务金额 end-->
<!--任务标题 start-->
<h2 class="task_title"><a href="index.php?do=task&task_id=27" title="棋牌类伪原创，能写的来" target="_blank">棋牌类伪原创，能写的来</a></h2>
<!--任务标题 end-->
<!--任务发布者 start-->
<span class="publisher"><a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=2" title="猪八戒" target="_blank">猪八戒</a></span>
<!--任务发布者 end-->
<!--任务模型 start-->
<span class="task_mode">普通招标</span>
<!--任务模型 end-->

</div>
<!--单条内容 end-->
</li>

<li class="line"></li>
<li class="col3">
<!--单条内容 start-->
<div class="item">
<!--任务金额 start-->
<strong class="money">
￥100 ~ 1000元            			</strong>
<!--任务金额 end-->
<!--任务标题 start-->
<h2 class="task_title"><a href="index.php?do=task&task_id=26" title="化妆工作室取名" target="_blank">化妆工作室取名</a></h2>
<!--任务标题 end-->
<!--任务发布者 start-->
<span class="publisher"><a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=2" title="猪八戒" target="_blank">猪八戒</a></span>
<!--任务发布者 end-->
<!--任务模型 start-->
<span class="task_mode">订金招标</span>
<!--任务模型 end-->

</div>
<!--单条内容 end-->
</li>

<li class="line"></li>
</ul>


<!--列表 end-->


<!--顶部推荐3条任务内容 end-->

<!--detail内容 start-->

<!--列表内容 33条 start-->
<ul class="small_list clearfix">
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=53" title="情人节不能一起过，求各位帮忙发浪漫示爱短信" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥30000 ~ 50000元      						                  </strong>
<!--任务金额 start-->
情人节不能一起过，求各位帮忙发浪漫示爱短信                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=51" title="三维渲染----" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥1000 ~ 2000元      						                  </strong>
<!--任务金额 start-->
三维渲染----                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=47" title="室内107平米三房二厅二卫新房设计" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥50000 ~ 60000元      						                  </strong>
<!--任务金额 start-->
室内107平米三房二厅二卫新房设计                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=45" title="[208079]MBA论文修改（附文稿和修改意见）" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥50000 ~ 60000元      						                  </strong>
<!--任务金额 start-->
[208079]MBA论文修改（附文稿和修改意见）                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=42" title="服务器系统" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
服务器系统                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=41" title="[207242]中国长江三峡集团移民局网站界面设计" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥30000 ~ 50000元      						                  </strong>
<!--任务金额 start-->
[207242]中国长江三峡集团移民局网站界面设计                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=38" title="评测报告评测报告评测报告" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
评测报告评测报告评测报告                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=36" title="征集创新征集创新征集创新" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
征集创新征集创新征集创新                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=29" title="交友网站制作" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
交友网站制作                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=27" title="棋牌类伪原创，能写的来" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥1 ~ 1000元      						                  </strong>
<!--任务金额 start-->
棋牌类伪原创，能写的来                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=26" title="化妆工作室取名" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
化妆工作室取名                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=20" title="玉石风水摆件厂家广告语征集" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
玉石风水摆件厂家广告语征集                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=19" title="寻找淘宝小二通过全球购业务" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
寻找淘宝小二通过全球购业务                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=18" title="在线审核，网店推广 ， 淘宝铺收藏+收藏三个宝贝+分享" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥1 ~ 1000元      						                  </strong>
<!--任务金额 start-->
在线审核，网店推广 ， 淘宝铺收藏+收藏三个宝贝+分享                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=10" title="征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=9" title="征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=8" title="征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥100 ~ 1000元      						                  </strong>
<!--任务金额 start-->
征集茶叶品牌故事/文化/定位/理念等！发挥无限创意！                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
<li class="col3 clearfix">
<!--单条内容 start-->
<div class="item clearfix">
<a href="index.php?do=task&task_id=5" title="某窗饰制品公司征集logo及部分VI应用" target="_blank">&nbsp;

<!--任务标题 start-->
<strong class="money">

￥1000 ~ 2000元      						                  </strong>
<!--任务金额 start-->
某窗饰制品公司征集logo及部分VI应用                  <!--任务金额 end-->

<!--任务标题 end-->
</a>

</div>
<!--单条内容 end-->
</li>
</ul>
<!--列表内容 33条 end-->


</div>
<!--任务推荐 end-->


</div>
</article> 

</div>
</div>
<div class='adv'><img src="data/uploads/sys/ad/adv.jpg" /></div>  	<div class="grid_24 mb_10">
<div class="box model purple">
<!--商城内容 start-->
<div class="shop">
<!--头部 satrt-->
<header class="box_header clearfix">
<div class="grid_4 alpha">
<!--商城标题 start-->
<h1 class="box_title"><span>商城</span>Shop</h1>
<!--商城标题 end-->
</div>

<div>
<!--商城按钮 start-->
<div class="btns">
<a href="index.php?do=shop_release" class="button primary"><span class="plus icon"></span>发布商品</a><a href="index.php?do=shop_list" class="button"><span class="rightarrow icon"></span>进入商城</a>
</div>
<!--商城按钮 end-->
</div>
<div class="clear"></div>
</header>
<!--头部 end-->



<article class="box_detail clearfix" >

<div class="grid_5 alpha omega">
<div class="category">
<ul class="indus_list">
<li>
<a href="index.php?do=shop_list&path=A441" target="_blank">品牌设计</a>
<div class="s_nav hidden">
<div class="indus">
<a href="index.php?do=shop_list&path=A441&indus_id=8">标志设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=9">VI设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=10">名片设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=11">海报设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=12">宣传册页</a>

<a href="index.php?do=shop_list&path=A441&indus_id=13">卡通设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=14">招牌设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=16">横幅设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=27">网站美工</a>






































<a href="index.php?do=shop_list&path=A441&indus_id=144">工业设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=145">按钮图标</a>






















































<a href="index.php?do=shop_list&path=A441&indus_id=348">logo设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=349">vi设计</a>

<a href="index.php?do=shop_list&path=A441&indus_id=370">游戏封面</a>

<a href="index.php?do=shop_list&path=A441&indus_id=376">lee牛仔裤</a>











<a href="index.php?do=shop_list&path=A441&indus_id=130">字体设计</a>






<a href="index.php?do=shop_list&path=A441&indus_id=131">贺卡设计</a>







<a href="index.php?do=shop_list&path=A441&indus_id=132">礼品设计</a>






<a href="index.php?do=shop_list&path=A441&indus_id=134">四格漫画</a>







<a href="index.php?do=shop_list&path=A441&indus_id=135">动漫设计</a>






<a href="index.php?do=shop_list&path=A441&indus_id=136">排版设计</a>







<a href="index.php?do=shop_list&path=A441&indus_id=137">服饰设计</a>





<a href="index.php?do=shop_list&path=A441&indus_id=140">台历设计</a>


















<a href="index.php?do=shop_list&path=A441&indus_id=133">QQ表情</a>






<a href="index.php?do=shop_list&path=A441&indus_id=263">其他</a>


<a href="index.php?do=shop_list&path=A441&indus_id=138">ppt设计</a>


</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A2" target="_blank">网站开发</a>
<div class="s_nav hidden">
<div class="indus">









<a href="index.php?do=shop_list&path=A2&indus_id=28">网站模板</a>

<a href="index.php?do=shop_list&path=A2&indus_id=30">网站广告</a>

<a href="index.php?do=shop_list&path=A2&indus_id=31">网页动画</a>

<a href="index.php?do=shop_list&path=A2&indus_id=32">商城开发</a>

<a href="index.php?do=shop_list&path=A2&indus_id=34">接口操作</a>






























































































<a href="index.php?do=shop_list&path=A2&indus_id=408">网站推广</a>





<a href="index.php?do=shop_list&path=A2&indus_id=169">FLASH</a>























<a href="index.php?do=shop_list&path=A2&indus_id=148">店招设计</a>







<a href="index.php?do=shop_list&path=A2&indus_id=154">网店取名</a>






<a href="index.php?do=shop_list&path=A2&indus_id=155">网店模板</a>







<a href="index.php?do=shop_list&path=A2&indus_id=156">数码摄影</a>





<a href="index.php?do=shop_list&path=A2&indus_id=147">店标设计</a>





<a href="index.php?do=shop_list&path=A2&indus_id=170">视频制作</a>






<a href="index.php?do=shop_list&path=A2&indus_id=172">三维渲染</a>







<a href="index.php?do=shop_list&path=A2&indus_id=33">数据库操作</a>



<a href="index.php?do=shop_list&path=A2&indus_id=35">服务器系统</a>

<a href="index.php?do=shop_list&path=A2&indus_id=29">开源修改</a>


<a href="index.php?do=shop_list&path=A2&indus_id=40">其它</a>



</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A201" target="_blank">创意祝福</a>
<div class="s_nav hidden">
<div class="indus">




















































































































<a href="index.php?do=shop_list&path=A201&indus_id=203">爱情表白</a>






<a href="index.php?do=shop_list&path=A201&indus_id=202">生日祝福</a>







<a href="index.php?do=shop_list&path=A201&indus_id=204">圣诞祝福</a>







<a href="index.php?do=shop_list&path=A201&indus_id=205">新年祝福</a>







<a href="index.php?do=shop_list&path=A201&indus_id=209">祝福喜得贵子</a>






<a href="index.php?do=shop_list&path=A201&indus_id=210">祝福乔迁新居</a>







<a href="index.php?do=shop_list&path=A201&indus_id=208">感恩回馈</a>





<a href="index.php?do=shop_list&path=A201&indus_id=207">纪念日祝福</a>





<a href="index.php?do=shop_list&path=A201&indus_id=206">道歉短信</a>














<a href="index.php?do=shop_list&path=A201&indus_id=331">彩信</a>







</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A249" target="_blank">网游服务</a>
<div class="s_nav hidden">
<div class="indus">







































<a href="index.php?do=shop_list&path=A249&indus_id=96">网游创意</a>













































<a href="index.php?do=shop_list&path=A249&indus_id=250">手机游戏</a>

<a href="index.php?do=shop_list&path=A249&indus_id=251">游戏试玩</a>

<a href="index.php?do=shop_list&path=A249&indus_id=252">评测报告</a>

<a href="index.php?do=shop_list&path=A249&indus_id=253">版本设计</a>

<a href="index.php?do=shop_list&path=A249&indus_id=254">剧情策划</a>

<a href="index.php?do=shop_list&path=A249&indus_id=255">压力测试</a>

<a href="index.php?do=shop_list&path=A249&indus_id=256">代写攻略</a>

<a href="index.php?do=shop_list&path=A249&indus_id=257">活动策划</a>

<a href="index.php?do=shop_list&path=A249&indus_id=258">补丁制作</a>

<a href="index.php?do=shop_list&path=A249&indus_id=259">游戏视频</a>







<a href="index.php?do=shop_list&path=A249&indus_id=332">问卷调查</a>























































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A3" target="_blank">文案写作</a>
<div class="s_nav hidden">
<div class="indus">


















<a href="index.php?do=shop_list&path=A3&indus_id=41">宣传软文</a>

<a href="index.php?do=shop_list&path=A3&indus_id=42">广告语写作</a>

<a href="index.php?do=shop_list&path=A3&indus_id=43">策划</a>

<a href="index.php?do=shop_list&path=A3&indus_id=44">写文章</a>

<a href="index.php?do=shop_list&path=A3&indus_id=45">编辑校对</a>

<a href="index.php?do=shop_list&path=A3&indus_id=46">写新闻</a>

<a href="index.php?do=shop_list&path=A3&indus_id=47">产品说明</a>

<a href="index.php?do=shop_list&path=A3&indus_id=48">剧本脚本</a>

<a href="index.php?do=shop_list&path=A3&indus_id=49">写书</a>

<a href="index.php?do=shop_list&path=A3&indus_id=50">撰写报告</a>

<a href="index.php?do=shop_list&path=A3&indus_id=51">应用文写作</a>

<a href="index.php?do=shop_list&path=A3&indus_id=52">演讲稿</a>

<a href="index.php?do=shop_list&path=A3&indus_id=57">其它</a>





























































































































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
<li><a href="index.php?do=service&sid=9"><strong class="money">￥100.00元/个</strong> 【创意】【澎 R26; 然心动】宣传册页设计</a></li>

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A335" target="_blank">建筑/装修</a>
<div class="s_nav hidden">
<div class="indus">

















































<a href="index.php?do=shop_list&path=A335&indus_id=151">展会设计</a>

<a href="index.php?do=shop_list&path=A335&indus_id=152">办公装修</a>

<a href="index.php?do=shop_list&path=A335&indus_id=153">园林景观</a>

<a href="index.php?do=shop_list&path=A335&indus_id=159">店面装修</a>






























































<a href="index.php?do=shop_list&path=A335&indus_id=336">新房装修</a>










<a href="index.php?do=shop_list&path=A335&indus_id=337">二手房装修</a>






<a href="index.php?do=shop_list&path=A335&indus_id=340">庭院景观设计</a>







<a href="index.php?do=shop_list&path=A335&indus_id=338">风水咨询</a>













<a href="index.php?do=shop_list&path=A335&indus_id=341">办公商铺装修</a>












<a href="index.php?do=shop_list&path=A335&indus_id=339">装修监理</a>






<a href="index.php?do=shop_list&path=A335&indus_id=342">自建房设计</a>





<a href="index.php?do=shop_list&path=A335&indus_id=343">景观设计</a>


<a href="index.php?do=shop_list&path=A335&indus_id=344">3D模型设计</a>

<a href="index.php?do=shop_list&path=A335&indus_id=158">形象墙设计</a>










<a href="index.php?do=shop_list&path=A335&indus_id=149">房屋建筑设计</a>

</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
<li><a href="index.php?do=service&sid=6"><strong class="money">￥5,000.00元/个</strong> 【创意】装修</a></li>

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A211" target="_blank">头脑风暴</a>
<div class="s_nav hidden">
<div class="indus">































<a href="index.php?do=shop_list&path=A211&indus_id=217">问卷调查</a>

<a href="index.php?do=shop_list&path=A211&indus_id=216">意见建议</a>

<a href="index.php?do=shop_list&path=A211&indus_id=215">写评论</a>

<a href="index.php?do=shop_list&path=A211&indus_id=214">征集创意</a>

<a href="index.php?do=shop_list&path=A211&indus_id=213">收集金点子</a>

<a href="index.php?do=shop_list&path=A211&indus_id=212">策划</a>























































































































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A350" target="_blank">照片美化/编辑</a>
<div class="s_nav hidden">
<div class="indus">





















































































































<a href="index.php?do=shop_list&path=A350&indus_id=351">艺术照处理</a>








<a href="index.php?do=shop_list&path=A350&indus_id=352">照片变卡通</a>






<a href="index.php?do=shop_list&path=A350&indus_id=353">电子相册</a>







<a href="index.php?do=shop_list&path=A350&indus_id=354">照片美化</a>






<a href="index.php?do=shop_list&path=A350&indus_id=355">婚纱照美化</a>







<a href="index.php?do=shop_list&path=A350&indus_id=356">图片编辑</a>




































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
<li><a href="index.php?do=service&sid=8"><strong class="money">￥1,000.00元/个</strong> 家庭装修设计作品-1</a></li>
<li><a href="index.php?do=service&sid=4"><strong class="money">￥1,000.00元/个</strong> 【创意】3d生物模型制作（包括材质贴图）</a></li>
<li><a href="index.php?do=service&sid=2"><strong class="money">￥100.00元/个</strong> 【创意】LOGO设计</a></li>
<li><a href="index.php?do=service&sid=1"><strong class="money">￥1,000.00元/个</strong> 【创意】海报设计</a></li>

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A234" target="_blank">法律服务</a>
<div class="s_nav hidden">
<div class="indus">





































<a href="index.php?do=shop_list&path=A234&indus_id=236">法律咨询</a>

<a href="index.php?do=shop_list&path=A234&indus_id=235">聘请律师</a>



































<a href="index.php?do=shop_list&path=A234&indus_id=237">写法律合同</a>

<a href="index.php?do=shop_list&path=A234&indus_id=238">写律师函</a>

<a href="index.php?do=shop_list&path=A234&indus_id=239">写诉讼状</a>
















































































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A160" target="_blank">起名取名</a>
<div class="s_nav hidden">
<div class="indus">





















































<a href="index.php?do=shop_list&path=A160&indus_id=161">宝宝起名</a>

<a href="index.php?do=shop_list&path=A160&indus_id=162">成人起名</a>

<a href="index.php?do=shop_list&path=A160&indus_id=163">公司起名</a>

<a href="index.php?do=shop_list&path=A160&indus_id=164">店铺起名</a>

<a href="index.php?do=shop_list&path=A160&indus_id=165">品牌起名</a>

<a href="index.php?do=shop_list&path=A160&indus_id=166">改名</a>

































































































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A357" target="_blank">影视/配音/歌词</a>
<div class="s_nav hidden">
<div class="indus">















































































































<a href="index.php?do=shop_list&path=A357&indus_id=439">1111</a>







<a href="index.php?do=shop_list&path=A357&indus_id=358">写剧本</a>








<a href="index.php?do=shop_list&path=A357&indus_id=359">影视制作</a>






<a href="index.php?do=shop_list&path=A357&indus_id=360">广告配音</a>







<a href="index.php?do=shop_list&path=A357&indus_id=361">影视配音</a>






<a href="index.php?do=shop_list&path=A357&indus_id=362">动画配音</a>







<a href="index.php?do=shop_list&path=A357&indus_id=363">彩铃配音</a>





<a href="index.php?do=shop_list&path=A357&indus_id=364">方言配音</a>






<a href="index.php?do=shop_list&path=A357&indus_id=365">外语配音</a>




<a href="index.php?do=shop_list&path=A357&indus_id=366">创意配音</a>


<a href="index.php?do=shop_list&path=A357&indus_id=367">歌词创作</a>



<a href="index.php?do=shop_list&path=A357&indus_id=368">歌词谱曲</a>















</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
<li><a href="index.php?do=service&sid=5"><strong class="money">￥100.00元/个</strong> 【创意】网络视频</a></li>

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A192" target="_blank">生活服务</a>
<div class="s_nav hidden">
<div class="indus">

































































<a href="index.php?do=shop_list&path=A192&indus_id=193">市场调查</a>

<a href="index.php?do=shop_list&path=A192&indus_id=194">心理咨询</a>

<a href="index.php?do=shop_list&path=A192&indus_id=195">移民咨询</a>

<a href="index.php?do=shop_list&path=A192&indus_id=196">理财咨询</a>

<a href="index.php?do=shop_list&path=A192&indus_id=197">帮我投票</a>

<a href="index.php?do=shop_list&path=A192&indus_id=198">跑腿排队</a>

<a href="index.php?do=shop_list&path=A192&indus_id=199">家政服务</a>

<a href="index.php?do=shop_list&path=A192&indus_id=200">数据导入</a>



















































































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
<li><a href="index.php?do=service&sid=3"><strong class="money">￥20.00元/个</strong> 【创意】著作权（版权）登记</a></li>

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A218" target="_blank">移动应用</a>
<div class="s_nav hidden">
<div class="indus">

















































































































<a href="index.php?do=shop_list&path=A218&indus_id=222">Android插件</a>






<a href="index.php?do=shop_list&path=A218&indus_id=225">Symbian SDK插件</a>








<a href="index.php?do=shop_list&path=A218&indus_id=223">iOS插件</a>






<a href="index.php?do=shop_list&path=A218&indus_id=219">天翼插件</a>







<a href="index.php?do=shop_list&path=A218&indus_id=227">Windows mobile插件</a>






<a href="index.php?do=shop_list&path=A218&indus_id=228">黑莓插件</a>







<a href="index.php?do=shop_list&path=A218&indus_id=230">Amazon kindle插件</a>





<a href="index.php?do=shop_list&path=A218&indus_id=231">手机游戏开发</a>






<a href="index.php?do=shop_list&path=A218&indus_id=229">Palm插件</a>






<a href="index.php?do=shop_list&path=A218&indus_id=232">手机应用创意</a>




<a href="index.php?do=shop_list&path=A218&indus_id=233">手机应用汉化</a>





<a href="index.php?do=shop_list&path=A218&indus_id=226">PalmOS插件</a>








</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A240" target="_blank">招聘找人</a>
<div class="s_nav hidden">
<div class="indus">



























































<a href="index.php?do=shop_list&path=A240&indus_id=177">搜索引擎优化</a>

<a href="index.php?do=shop_list&path=A240&indus_id=178">论坛推广</a>

<a href="index.php?do=shop_list&path=A240&indus_id=179">QQ群推广</a>

<a href="index.php?do=shop_list&path=A240&indus_id=180">博客推广</a>

<a href="index.php?do=shop_list&path=A240&indus_id=181">推广注册</a>













<a href="index.php?do=shop_list&path=A240&indus_id=241">招聘</a>

<a href="index.php?do=shop_list&path=A240&indus_id=242">求职</a>

<a href="index.php?do=shop_list&path=A240&indus_id=243">寻人</a>


<a href="index.php?do=shop_list&path=A240&indus_id=245">找生产商</a>

<a href="index.php?do=shop_list&path=A240&indus_id=246">找客户</a>

<a href="index.php?do=shop_list&path=A240&indus_id=247">找供应商</a>

<a href="index.php?do=shop_list&path=A240&indus_id=248">找人脉</a>
















<a href="index.php?do=shop_list&path=A240&indus_id=334">简历设计</a>
























































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

<li>
<a href="index.php?do=shop_list&path=A121" target="_blank">软件开发</a>
<div class="s_nav hidden">
<div class="indus">














<a href="index.php?do=shop_list&path=A121&indus_id=36">程序开发</a>

<a href="index.php?do=shop_list&path=A121&indus_id=37">编写脚本</a>

<a href="index.php?do=shop_list&path=A121&indus_id=38">软件皮肤</a>

<a href="index.php?do=shop_list&path=A121&indus_id=39">插件开发</a>























<a href="index.php?do=shop_list&path=A121&indus_id=122">软件测试</a>

<a href="index.php?do=shop_list&path=A121&indus_id=123">游戏开发</a>






















































<a href="index.php?do=shop_list&path=A121&indus_id=324">软件汉化</a>

<a href="index.php?do=shop_list&path=A121&indus_id=326">软件美工</a>

<a href="index.php?do=shop_list&path=A121&indus_id=327">开发文档编写</a>

<a href="index.php?do=shop_list&path=A121&indus_id=328">功能完善</a>

























<a href="index.php?do=shop_list&path=A121&indus_id=325">程序功能开发</a>
































































</div>
<div class="recommend">
<h3>分类商品推荐</h3>
<ul>
暂无推荐商品

</ul>
</div>
</div>
</li>

</ul> 
<p class="all_list">
<a href="index.php?do=shop" target="_blank" class="button">更多商城分类&gt;&gt;</a>
</p>


</div>
</div>   


<!--detail内容 start-->

<!--商城列表 12条 start-->
<ul class="small_list clearfix">
<!--第一条商品 start--><!--第一条商品 end-->
<li class="item clearfix">
<a href="index.php?do=service&sid=13" title="[图兰朵]婚纱摄影重磅推出 黄金路线启动">

<img src="data/uploads/2013/04/09/210_2282751640079d7d50.jpg" alt="[图兰朵]婚纱摄影重磅推出 黄金路线启动" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥2,000.00元/个</strong>
<strong class="title">
[图兰朵]婚纱摄影重磅推出 黄金路线启动                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=12" title="商务|贸易|通用PPT模板">

<img src="data/uploads/2013/04/09/210_69285163fcde4fe35.jpg" alt="商务|贸易|通用PPT模板" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥100.00元/个</strong>
<strong class="title">
商务|贸易|通用PPT模板                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=11" title="【创意】著作权（版权）登记">

<img src="data/uploads/2013/04/09/210_255615163e9f7e366b.png" alt="【创意】著作权（版权）登记" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥100.00元/个</strong>
<strong class="title">
【创意】著作权（版权）登记                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=10" title="【创意】企业（个人）法律咨询">

<img src="data/uploads/2013/04/09/210_215165163e99f7a44c.jpg" alt="【创意】企业（个人）法律咨询" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥1,000.00元/个</strong>
<strong class="title">
【创意】企业（个人）法律咨询                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=9" title="【创意】【澎 R26; 然心动】宣传册页设计">

<img src="data/uploads/2013/04/09/210_34715163f16eaa527.png" alt="【创意】【澎 R26; 然心动】宣传册页设计" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥100.00元/个</strong>
<strong class="title">
【创意】【澎 R26; 然心动】宣传册页设计                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=8" title="家庭装修设计作品-1">

<img src="data/uploads/2013/04/09/210_198065163f0bc185b1.jpg" alt="家庭装修设计作品-1" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥1,000.00元/个</strong>
<strong class="title">
家庭装修设计作品-1                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=7" title="【创意】企业网站定制开发">

<img src="data/uploads/2013/04/09/210_192895163e866c4dc9.jpg" alt="【创意】企业网站定制开发" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥10,000.00元/个</strong>
<strong class="title">
【创意】企业网站定制开发                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=6" title="【创意】装修">

<img src="data/uploads/2013/04/09/210_142785163e7a84cef0.png" alt="【创意】装修" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥5,000.00元/个</strong>
<strong class="title">
【创意】装修                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=5" title="【创意】网络视频">

<img src="data/uploads/2013/04/09/210_201825163e6a867205.png" alt="【创意】网络视频" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥100.00元/个</strong>
<strong class="title">
【创意】网络视频                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=4" title="【创意】3d生物模型制作（包括材质贴图）">

<img src="data/uploads/2013/04/09/210_223825163e63ccb09a.jpg" alt="【创意】3d生物模型制作（包括材质贴图）" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥1,000.00元/个</strong>
<strong class="title">
【创意】3d生物模型制作（包括材质贴图）                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=3" title="【创意】著作权（版权）登记">

<img src="data/uploads/2013/04/09/210_81285163e55b16b4d.jpg" alt="【创意】著作权（版权）登记" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥20.00元/个</strong>
<strong class="title">
【创意】著作权（版权）登记                         </strong>

</span>
</a>
</li>
<li class="item clearfix">
<a href="index.php?do=service&sid=2" title="【创意】LOGO设计">

<img src="data/uploads/2013/04/09/210_16875163e52fe2415.jpg" alt="【创意】LOGO设计" onerror="this.src='tpl/default/img/shop/shop_default.gif'">
<span class="shop_item_info">
<strong class="money">￥100.00元/个</strong>
<strong class="title">
【创意】LOGO设计                         </strong>

</span>
</a>
</li>
</ul>
<!--商城列表 26条 end-->


<ul class="tops clearfix">
<li class="clearfix">
<div class="item">
<div class=" fl_l mr_10">
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=10" title="晓茜"><img src='http://www.dashixun.com/one/weike/data/avatar/system/15_small.jpg' uid='10' class='pic_small'></a>
</div>
<div class="shoper_info">
<ul>
<li>
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=10" class="font14" title="最具个性化的店铺，值得一看哦"><strong>最具个性化的店铺，值得</strong></a>
</li>
<li>
好评率：<span class="cc00">0%</span>
</li>
<li>
行业：<span>网游服务 | 评测报告 </span>
</li>
</ul>
</div>
</div>
</li>
<li class="clearfix">
<div class="item">
<div class=" fl_l mr_10">
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=9" title="墨客"><img src='http://www.dashixun.com/one/weike/data/avatar/system/2_small.jpg' uid='9' class='pic_small'></a>
</div>
<div class="shoper_info">
<ul>
<li>
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=9" class="font14" title="想要漂亮小玩具吗，专业制作手工玩具"><strong>想要漂亮小玩具吗，专业</strong></a>
</li>
<li>
好评率：<span class="cc00">0%</span>
</li>
<li>
行业：<span>网游服务 | 评测报告 </span>
</li>
</ul>
</div>
</div>
</li>
<li class="clearfix">
<div class="item">
<div class=" fl_l mr_10">
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=8" title="红客"><img src='http://www.dashixun.com/one/weike/data/avatar/system/7_small.jpg' uid='8' class='pic_small'></a>
</div>
<div class="shoper_info">
<ul>
<li>
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=8" class="font14" title="我就是我，就在这里"><strong>我就是我，就在这里</strong></a>
</li>
<li>
好评率：<span class="cc00">0%</span>
</li>
<li>
行业：<span>建筑/装修 | 园林景观 </span>
</li>
</ul>
</div>
</div>
</li>
<li class="clearfix">
<div class="item">
<div class=" fl_l mr_10">
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=6" title="丸美弹力"><img src='http://www.dashixun.com/one/weike/data/avatar/system/16_small.jpg' uid='6' class='pic_small'></a>
</div>
<div class="shoper_info">
<ul>
<li>
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=6" class="font14" title="我的完美店铺"><strong>我的完美店铺</strong></a>
</li>
<li>
好评率：<span class="cc00">0%</span>
</li>
<li>
行业：<span>建筑/装修 | 园林景观 </span>
</li>
</ul>
</div>
</div>
</li>
<li class="clearfix">
<div class="item">
<div class=" fl_l mr_10">
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=4" title="shangk"><img src='http://www.dashixun.com/one/weike/data/avatar/000/00/00/04_avatar_small.jpg' uid='4' class='pic_small'></a>
</div>
<div class="shoper_info">
<ul>
<li>
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=4" class="font14" title="SHANGK"><strong>SHANGK</strong></a>
</li>
<li>
好评率：<span class="cc00">100.00%</span>
</li>
<li>
行业：<span>网站开发 | 网站模板 </span>
</li>
</ul>
</div>
</div>
</li>
<li class="clearfix">
<div class="item">
<div class=" fl_l mr_10">
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=2" title="猪八戒"><img src='http://www.dashixun.com/one/weike/data/avatar/system/2_small.jpg' uid='2' class='pic_small'></a>
</div>
<div class="shoper_info">
<ul>
<li>
<a href="http://www.dashixun.com/one/weike/index.php?do=space&member_id=2" class="font14" title="猪八戒的店铺"><strong>猪八戒的店铺</strong></a>
</li>
<li>
好评率：<span class="cc00">100.00%</span>
</li>
<li>
行业：<span>网站开发 | 网站广告 </span>
</li>
</ul>
</div>
</div>
</li>
</ul>


</article>
<!--detail内容 end-->

<!--商城内容 end-->
</div>
</div>
</div>




<!--首页_中部三栏广告 start-->
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>  <!--首页_中部三栏广告 end-->




<div class="grid_16 mb_10 m_h">
<div class="box model yellow">
<div class="inner">
<!--案例  start-->
<div class="case">
<!--头部 start-->
<header class="box_header clearfix">
<div class="grid_5 alpha omega">
<h1 class="box_title"><span>成功案例</span>Case</h1>
</div>
<div class="btns">
<a href="index.php?do=case" class="button" title="更多信息">更多信息&raquo;</a>
</div>
</header>
<!--头部 end-->
<!--detail内容 start-->
<article class="box_detail no_bottom clearfix">
<!--列表内容 start-->
<ul class="small_list  clearfix">
<!--头条 start-->

<li class="first">
<div class="main_img">
<a href="index.php?do=task&task_id=28"  title="彩票站宣传单设计">

<img  src="data/uploads/2013/04/09/30035163facda9a3b.jpg" alt="彩票站宣传单设计"/>

</a>
</div>
<div class="main_title clearfix">
<a href="index.php?do=task&task_id=28" >
<span class="cc00 mr_10">￥80.00元</span>彩票站宣传单设计             </a>
</div>
</li>

<li class="first">
<div class="main_img">
<a href="index.php?do=task&task_id=34"  title="淘宝网店推广 10元1稿 简单快捷">

<img  src="data/uploads/2013/04/09/104565163fad6c36a2.jpg" alt="淘宝网店推广 10元1稿 简单快捷"/>

</a>
</div>
<div class="main_title clearfix">
<a href="index.php?do=task&task_id=34" >
<span class="cc00 mr_10">￥120.00元</span>淘宝网店推广 10元1稿 简单快捷             </a>
</div>
</li>

<li class="first">
<div class="main_img">
<a href="index.php?do=task&task_id=35"  title="淘宝网店推广">

<img  src="data/uploads/2013/04/09/256495163fae065bd5.jpg" alt="淘宝网店推广"/>

</a>
</div>
<div class="main_title clearfix">
<a href="index.php?do=task&task_id=35" >
<span class="cc00 mr_10">￥150.00元</span>淘宝网店推广             </a>
</div>
</li>

<li class="first">
<div class="main_img">
<a href="index.php?do=task&task_id=46"  title="轻松下载每个可得钱">

<img  src="data/uploads/2013/04/09/181985163fae9caa73.jpg" alt="轻松下载每个可得钱"/>

</a>
</div>
<div class="main_title clearfix">
<a href="index.php?do=task&task_id=46" >
<span class="cc00 mr_10">￥90.00元</span>轻松下载每个可得钱             </a>
</div>
</li>

<li class="first">
<div class="main_img">
<a  href="index.php?do=service&sid=3" title="【创意】著作权（版权）登记">

<img  src="data/uploads/2013/04/09/81285163e55b16b4d.jpg" alt="【创意】著作权（版权）登记"/>

</a>
</div>
<div class="main_title clearfix">
<a  href="index.php?do=service&sid=3">
<span class="cc00 mr_10">￥20.00元</span>【创意】著作权（版权）登记             </a>
</div>
</li>

<li class="first">
<div class="main_img">
<a  href="index.php?do=service&sid=1" title="【创意】海报设计">

<img  src="data/uploads/2013/04/09/314595163e47017e15.jpg" alt="【创意】海报设计"/>

</a>
</div>
<div class="main_title clearfix">
<a  href="index.php?do=service&sid=1">
<span class="cc00 mr_10">￥1,000.00元</span>【创意】海报设计             </a>
</div>
</li>

</ul>

<!--列表内容 end-->
<div class="clear"></div>
</article>
<!--detail内容 end-->
</div>
<!--案例 end-->
</div>
</div>
</div>
<div class="grid_8 mb_10 m_h">
<div class="box model rose">
<div class="inner">
<!--新闻资讯 start-->
<div class="news">
<header class="box_header clearfix">
<div class="grid_5 alpha omega">
<!--标题 start-->
<h1 class="box_title"><span>资讯</span>News</h1>
<!--标题 end-->
</div>

<div class="btns">
<a href="index.php?do=article" class="button" title="更多信息">更多信息&raquo;</a>
</div>
</header>

<!--detail内容 start-->
<article class="box_detail no_bottom clearfix" id="div_news_1">
<!--列表内容 start-->
<ul class="small_list clearfix">
<li>
<!--头条图片 start-->
<div class="main_img">
<a href="index.php?do=article&view=article_info&art_id=227" title="警惕交易诈骗，注意帐户安全">
<img name="lazyImg" src="tpl/default/img/style/new_default.gif" alt="警惕交易诈骗，注意帐户安全" title="警惕交易诈骗，注意帐户安全"/>
</a>
</div>
<!--头条图片 end-->
<!--头条标题 start-->
<div class="main_title clearfix">
<a href="index.php?do=article&view=article_info&art_id=227" title="警惕交易诈骗，注意帐户安全">警惕交易诈骗，注意帐户安全</a>
<span class="date">2012-02-17</span>
</div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=225" title="唯冠召开iPad维权发布会：起诉苹果是维权">唯冠召开iPad维权发布会：起诉苹果是维权</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=250" title="中金香港直销Facebook股权：初定100万股门槛">中金香港直销Facebook股权：初定100万股门槛</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=249" title="依法诚信纳税共建和谐社会">依法诚信纳税共建和谐社会</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=248" title="诚信体系之诚信保障">诚信体系之诚信保障</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=246" title="威客营销的成功之路及潜在危机分析">威客营销的成功之路及潜在危机分析</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=247" title="拥有梦想的快乐威客">拥有梦想的快乐威客</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=244" title="什么是威客？">什么是威客？</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>
<li>
<div class="item">
<a href="index.php?do=article&view=article_info&art_id=243" title="威客必看：发帖任务参与须知">威客必看：发帖任务参与须知</a>
<span class="date">2012-02-17</span>
</div>
<div class="clear"></div>
</li>

</ul>

<!--列表内容 end-->

</article>
<!--detail内容 end-->
</div>
<!--新闻资讯 end-->
</div>
</div>
</div>    
<div class="clear"></div>      
<div class="box default m_h">
<div class="inner">
<!--  网站统计 start -->
<div class="site_stats po_re">

<div id="slider" class="box_detail">
<!--   注册用户 start -->
<ul>
<li>
<p>
<span>注册用户数[个]</span><span><strong class="num goup" >10</strong></span>
</p>
<!--  任务统计 start -->
<p>
<span>任务交易额[元]</span><span><strong class="num godown" >161.99</strong></span>
</p>
<p>
<span>任务数量[个]</span><span><strong class="num goup" >70</strong></span>
</p>
<!-- 任务统计 end -->
</li>
<!--    认证统计 start -->
<li>
<p>
<span>认证统计数[个]</span><span><strong class="num gouspan" >0</strong></span>
</p>

<!-- 认证统计 end -->
<!--  商城统计 start -->
<p>
<span>商城交易额[元]  </span><span><strong class="num  godown " >2,057.00</strong></span>
</p>
<span>商品数量[个] </span><span><strong class="num godown " >13</strong></span>
</li>
</ul>
<!--    商城统计 end -->
</div>
<!--  网站统计 end -->
</div>
</div>
</div>

<div class="clear"></div>      

<!--首页_中部四栏广告 start-->
<div class='adv'><a href='http://www.kppw.cn' target='_blank' title='adv'><img src='data/uploads/sys/ad/adv.jpg' width='' height='' alt='adv' title='adv'></a></div>  <!--首页_中部四栏广告end-->
<div class="clear"></div>
</div>
</div>

<div class="comment clearfix ">
<div class="container_24 ">
<span class="icon16 spechbubble-2 mt_5 mr_5"></span>我对 客客出品专业威客系统 有意见或建议，现在就<a href="javascript:void(0);" title="投诉建议" onclick="suggest()">提交</a>！</div>
</div>

<!--网站地址 start-->
<div class="sitemap clearfix m_h">

<div class="container_24 clearfix">

<!--推荐分类-->

<dl>
<dt>推荐分类</dt>
<dd>
<ul>
<li><a href="index.php?do=task_list&path=A441"  target="_blank">品牌设计</a></li>
<li><a href="index.php?do=task_list&path=A249"  target="_blank">网游服务</a></li>
<li><a href="index.php?do=task_list&path=A3"  target="_blank">文案写作</a></li>
<li><a href="index.php?do=task_list&path=A335"  target="_blank">建筑/装修</a></li>
<li><a href="index.php?do=task_list&path=A211"  target="_blank">头脑风暴</a></li>
</ul>
</dd>
</dl>

<!--任务大厅-->

<dl>
<dt>任务大厅</dt>
<dd>
<ul>
<li><a href="index.php?do=release" target="_blank">发布任务</a></li>
<li><a href="index.php?do=task_list" target="_blank">参与任务</a></li>
<li><a href="index.php?do=task_list" target="_blank">任务大厅</a></li>
<li><a href="index.php?do=task_map" target="_blank">任务地图</a></li> 
</ul>
</dd>
</dl>

<!--威客商城-->

<dl>
<dt>威客商城</dt>
<dd>
<ul>
<li><a href="index.php?do=shop_release" target="_blank">发布商品</a></li>
<li><a href="index.php?do=shop_release&model_id=7" target="_blank">发布服务</a></li>
<li><a href="index.php?do=shop_list&path=C6" target="_blank">威客作品</a></li>
<li><a href="index.php?do=shop_list&path=C7" target="_blank">威客服务</a></li>

</ul>
</dd>
</dl>

<!--资讯中心-->

<dl>
<dt>资讯中心</dt>
<dd>
<ul>
<li><a href="index.php?do=article" target="_blank"><span>客客资讯</span></a></li>
</ul>
</dd>
</dl>

<!--关于网站-->

<dl>
<dt>关于网站</dt>
<dd>
<ul>
<li><a href="index.php?do=single&art_id=300" target="_blank" title="联系我们">联系我们</a></li>
<li><a href="index.php?do=single&art_id=299" target="_blank" title="关于我们">关于我们</a></li>
</ul>
</dd>
</dl>

<!--帮助中心-->

<dl>
<dt>帮助中心</dt>
<dd>
<ul>
<li><a href="index.php?do=help&fpid=100" target="_blank"><span>帮助中心</span></a></li>
</ul>
</dd>
</dl>

</div> 

</div>
<!--网站地址 end-->

<section class="site_links clearfix m_h">
<div class="container_24 ">

<div class="links">
<dl>
<dt>友情链接</dt>
<dd>
<ul class="clearfix">

<li><a href="http://www.kppw.cn/kppw" target="_blank"><span>KPPW系统演示站点</span></a></li>
<li><a href="http://www.kppw.cn" target="_blank"><span>客客团队演示站点</span></a></li>
<li><a href="http://www.kekezu.com/bbs" target="_blank"><span>客客团队交流社区</span></a></li>
<li><a href="http://www.kekezu.com" target="_blank"><span>武汉客客信息技术有限公司官网</span></a></li>
</ul>
</dd>
</dl>
</div>

</div>
</section>
<!--网站链接以及语言栏 关注我们 搜索 end-->


<!--内容区 end-->



<!--页脚 satrt-->
<footer class="footer clearfix">
<!--网站链接以及语言栏 关注我们 搜索 start-->






<!--网站版权声明 start-->
<section class="site_copyright clearfix">
<div class="container_24 clearfix ">


<dl>
<dt>
公司名称:武汉客客信息技术有限公司<span class="pad10">地址:湖北省武汉市</span>联系电话:18971533922</dt>
<dd>
KPPW2.2 Copyright &#169; 2010 -2013 kekezu. All rights reserved<a href="http://icp.valu.cn/" target="_blank"></a>
</dd>  
</dl>
<div class="clear"></div>


<!--语言栏 关注我们 搜索 start-->

<div class="site_attach clearfix">

<div class="social">
关注我们：                            	


<a href="index.php?do=wb&focus=1881490142&wb_type=sina"><img src="resource/img/ico/sina_t.gif" title="1881490142"></a> 



<a href="index.php?do=wb&focus=shangjinglong&wb_type=ten"><img src="resource/img/ico/ten_t.gif" title="shangjinglong"></a> 



<a href="index.php?do=wb&focus=2746053225&wb_type=netease"><img src="resource/img/ico/netease_t.gif" title="2746053225"></a> 



<a href="index.php?do=wb&focus=naniso&wb_type=sohu"><img src="resource/img/ico/sohu_t.gif" title="naniso"></a> 


</div>


<div class="lan_box">
<form action="" method="post" id="lan_bottom">
<div class="clearfix">
<label>语言：</label>
<select id="lan" name="lan" style="width:100px" onchange="setLang(this)">
<option value="cn" c="CNY" selected>简体中文</option>
</select>



<label> 币种：</label>
<select  style="width:100px" onchange="setCurr(this.value,1);">
<option value="USD" id="USD" >US Dollar</option>
<option value="CNY" id="CNY" selected>人民币</option>
<option value="EUR" id="EUR" >Euro</option>
<option value="GBP" id="GBP" >GB Pound</option>
<option value="CAD" id="CAD" >Canadian Dollar</option>
<option value="AUD" id="AUD" >Australian Dollar</option>
<option value="HKD" id="HKD" >港币</option>
<option value="KRW" id="KRW" >韩元</option>
<option value="RUB" id="RUB" >卢布</option>
</select>
</div>
</form>
</div>	


</div>


<!--语言栏 关注我们 搜索 end-->


</div>
<div class="clearfix"></div>
</section>
<!--网站版权声明 end-->

<!--返回顶部 start-->

<a class="top animated hidden" href="javascript:void(0);" title="返回顶部"><em>&diams;</em>Top</a>

<!--返回顶部 end-->
</footer>
<!--页脚 end-->
</div>
<script type="text/javascript">
var uid='';
var xyq = "jo9jestkiq4fonpfbh9tq3fo37";
$(function(){
$.get('js.php?op=time&r='+Math.random());	
})
//js异步加载
In('header_top','custom','lavalamp','tipsy','autoIMG','slides');

</script>
<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
</body>
</html>
