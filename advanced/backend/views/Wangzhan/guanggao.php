
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>KPPW 2.2--后台管理 - 客客专业威客系统</title>
<link rel="shortcut icon" href="./resource/img/system/logo.ico" />
<link rel="apple-touch-icon" href="./resource/img/system/logo.ico"/>
<link href="tpl/css/admin_management.css" rel="stylesheet" type="text/css" />
<link href="./resource/css/button/stylesheets/css3buttons.css" rel="stylesheet" type="text/css" />
<link title="style1" href="tpl/skin/default/style.css" rel="stylesheet" type="text/css" />
<!--<link title="style2" href="tpl/skin/light/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="./resource/js/jquery.js"></script>
<script type="text/javascript" src="../../lang/cn/script/lang.js" ></script>
</head>

<body class="skin" scroll="no">
<!--[if IE 6]><div id="ie6"><![endif]-->
<!--[if IE 7]><div id="ie7"><![endif]-->
<!--[if IE 8]><div id="ie8"><![endif]-->
<div class="login_box">
<div class="header">
<div class="logo">
<h1><img src="tpl/img/logo.png" alt="后台管理 - 客客专业威客系统" title="后台管理 - 客客专业威客系统"/></h1>
    </div>

   <script type="text/javascript">
    	$(function (){
show_a();
$("body,iframe").click(function(){
$(".hide_nav").hide();
});

  $(window).resize(function() { 
  				show_a();
});

$('#show_much').click(function(e){
   			$('.hide_nav').toggle();
e.stopPropagation();
return false;
         });


})
 
  function show_a(){
  	
var nav_width = $("#nav_div").width();

if(nav_width<558){ 
$("#a_show_more").show();
$("#show_much").show();

}else{

$("#a_show_more").hide();
$("#show_much").hide(); 
}		 
  }
 
    </script>
</div>

<script>
function del_cache(){
var src = $("#display_frame").attr("src");
$.post('index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1&ajax=1',function (json){
if(json.status==1){

artDialog.tips(L.clear_success,'1.5');
}


},'json');

 
//$("#display_frame").attr("src","src""&index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1");

}
function fresh(){
document.getElementById("display_frame").contentDocument.location.reload(true); 
 
}
window.onload = function(){ 
   
 $("body").ajaxStart(function(){
   $("#ajaxwaitid").fadeIn();
   }).ajaxComplete(function(){
   
   $("#ajaxwaitid").fadeOut();
   })	
 
}
</script>
<div  class="side_bar"> 		
        <div class="side_con">
        <div id="shortcuts" class="menu_bar">
   		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>快捷操作</dt>
                  <dd>
                        <ul id="ul_kjcz">
                        	
                        	                        		<li><a href="index.php?do=auth&view=item_list" target="display_frame" class="select" r_id="38">认证项目</a></li>
                        		<li><a href="index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1" target="display_frame"  r_id="20">更新缓存</a></li>
</ul>
                  </dd>
                </dl>
       </div>
   
           <div id="config" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>系统配置</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=config&view=basic&op=info" target="display_frame" r_id="34">全局配置</a></li>
<li><a href="index.php?do=config&view=model" target="display_frame" r_id="37">模型管理</a></li>
<li><a href="index.php?do=config&view=integration" target="display_frame" r_id="35">会员整合</a></li>
<li><a href="index.php?do=config&view=nav" target="display_frame" r_id="41">自定义导航</a></li>
<li><a href="index.php?do=config&view=currencies" target="display_frame" r_id="148">汇率配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>行业技能</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=task&view=industry" target="display_frame" r_id="7">行业管理</a></li>
<li><a href="index.php?do=task&view=skill&op=list" target="display_frame" r_id="8">技能管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>接口管理</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=msg&view=weibo" target="display_frame" r_id="63">OAuth登录</a></li>
<li><a href="index.php?do=msg&view=map" target="display_frame" r_id="141">地图接口</a></li>
<li><a href="index.php?do=msg&view=config" target="display_frame" r_id="66">短信配置</a></li>
<li><a href="index.php?do=msg&view=internal" target="display_frame" r_id="73">短信模板</a></li>
<li><a href="index.php?do=config&view=pay" target="display_frame" r_id="2">支付接口</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>增值服务</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=payitem" target="display_frame" r_id="138">服务项管理</a></li>
<li><a href="index.php?do=payitem&view=buy" target="display_frame" r_id="139">购买记录</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="article" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>关于网站</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=article&view=list&type=bulletin" target="display_frame" r_id="156">网站公告</a></li>
<li><a href="index.php?do=article&view=list&type=about" target="display_frame" r_id="157">网站介绍</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>文章模块</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=article&view=list" target="display_frame" r_id="16">文章管理</a></li>
<li><a href="index.php?do=article&view=cat_list&type=art" target="display_frame" r_id="14">文章分类</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>帮助模块</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=article&view=cat_list&type=help" target="display_frame" r_id="44">帮助分类</a></li>
<li><a href="index.php?do=article&view=list&type=help" target="display_frame" r_id="42">帮助管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>成功案例</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=case&view=list" target="display_frame" r_id="154">案例管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="task" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>单人悬赏</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=model&model_id=1&view=list&status=0" target="display_frame" r_id="m10">任务管理</a></li>
<li><a href="index.php?do=model&model_id=1&view=config" target="display_frame" r_id="m11">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>多人悬赏</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=model&model_id=2&view=list&status=0" target="display_frame" r_id="m22">任务管理</a></li>
<li><a href="index.php?do=model&model_id=2&view=config" target="display_frame" r_id="m23">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>计件悬赏</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=model&model_id=3&view=list&status=0" target="display_frame" r_id="m34">任务管理</a></li>
<li><a href="index.php?do=model&model_id=3&view=config" target="display_frame" r_id="m35">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>普通招标</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=model&model_id=4&view=list&status=0" target="display_frame" r_id="m46">任务管理</a></li>
<li><a href="index.php?do=model&model_id=4&view=config" target="display_frame" r_id="m47">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>订金招标</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=model&model_id=5&view=list&status=0" target="display_frame" r_id="m58">任务管理</a></li>
<li><a href="index.php?do=model&model_id=5&view=config" target="display_frame" r_id="m59">任务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="shop" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>店铺管理</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=store&view=list" target="display_frame" r_id="170">店铺管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>威客作品</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=model&model_id=6&view=order" target="display_frame" r_id="m610">订单管理</a></li>
<li><a href="index.php?do=model&model_id=6&view=list&status=0" target="display_frame" r_id="m611">作品管理</a></li>
<li><a href="index.php?do=model&model_id=6&view=config" target="display_frame" r_id="m612">作品配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>威客服务</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=model&model_id=7&view=order" target="display_frame" r_id="m713">订单管理</a></li>
<li><a href="index.php?do=model&model_id=7&view=list&status=0" target="display_frame" r_id="m714">服务管理</a></li>
<li><a href="index.php?do=model&model_id=7&view=config" target="display_frame" r_id="m715">服务配置</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="finance" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>财务模块</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=finance&view=revenue" target="display_frame" r_id="152">财务概况</a></li>
<li><a href="index.php?do=finance&view=all" target="display_frame" r_id="4">财务明细</a></li>
<li><a href="index.php?do=finance&view=report" target="display_frame" r_id="3">财务分析</a></li>
<li><a href="index.php?do=finance&view=recharge" target="display_frame" r_id="76">充值审核</a></li>
<li><a href="index.php?do=finance&view=withdraw" target="display_frame" r_id="5">提现审核</a></li>
<li><a href="index.php?do=user&view=charge" target="display_frame" r_id="155">手动充值</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="user" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>用户管理</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=user&view=add" target="display_frame" r_id="10">添加用户</a></li>
<li><a href="index.php?do=user&view=list" target="display_frame" r_id="11">用户管理</a></li>
<li><a href="index.php?do=user&view=custom_list" target="display_frame" r_id="33">用户组</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>系统组管理</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=user&view=group_list" target="display_frame" r_id="13">系统组管理</a></li>
<li><a href="index.php?do=user&view=group_add&op=add" target="display_frame" r_id="12">添加系统组</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>用户体系</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=config&view=mark" target="display_frame" r_id="36">信誉规则</a></li>
<li><a href="index.php?do=config&view=mark&op=config" target="display_frame" r_id="78">互评配置</a></li>
<li><a href="index.php?do=config&view=mark&op=log" target="display_frame" r_id="79">互评记录</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>用户反馈</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=trans&view=rights" target="display_frame" r_id="80">交易维权</a></li>
<li><a href="index.php?do=trans&view=report" target="display_frame" r_id="81">交易举报</a></li>
<li><a href="index.php?do=user&view=suggest" target="display_frame" r_id="82">投诉建议</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>认证管理</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=auth&view=list&auth_code=enterprise" target="display_frame" r_id="147">企业认证</a></li>
<li><a href="index.php?do=auth&view=list&auth_code=bank" target="display_frame" r_id="68">银行认证</a></li>
<li><a href="index.php?do=auth&view=list&auth_code=realname" target="display_frame" r_id="70">实名认证</a></li>
<li><a href="index.php?do=auth&view=list&auth_code=email" target="display_frame" r_id="71">邮箱认证</a></li>
<li><a href="index.php?do=auth&view=list&auth_code=mobile" target="display_frame" r_id="77">手机认证</a></li>
<li><a href="index.php?do=auth&view=item_list" target="display_frame" r_id="38">认证项目</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="tool" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>站长工具</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=tool&view=dbbackup" target="display_frame" r_id="142">数据库管理</a></li>
<li><a href="index.php?do=tool&view=log" target="display_frame" r_id="19">系统日志</a></li>
<li><a href="index.php?do=tool&view=file" target="display_frame" r_id="21">附件管理</a></li>
<li><a href="index.php?do=tool&view=cache&sbt_edit=1&ckb_obj_cache=1&ckb_tpl_cache=1" target="display_frame" r_id="20">更新缓存</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>模板标签</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=tpl&view=taglist" target="display_frame" r_id="153">标签管理</a></li>
<li><a href="index.php?do=config&view=tpl" target="display_frame" r_id="28">模板管理</a></li>
<li><a href="index.php?do=tpl&view=ink" target="display_frame" r_id="30">友情链接</a></li>
<li><a href="index.php?do=tpl&view=feed" target="display_frame" r_id="57">动态管理</a></li>
<li><a href="index.php?do=tpl&view=ad" target="display_frame" r_id="32">广告管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
           <div id="app" class="menu_bar">
       	      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>应用中心</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=app&view=app_center" target="display_frame" r_id="159">应用中心</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>广场管理</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=app&view=task_list" target="display_frame" r_id="163">免费需求</a></li>
<li><a href="index.php?do=app&view=service_list" target="display_frame" r_id="164">免费服务</a></li>
<li><a href="index.php?do=app&view=message_list" target="display_frame" r_id="165">留言管理</a></li>
<li><a href="index.php?do=app&view=weibo_list" target="display_frame" r_id="166">动态管理</a></li>
<li><a href="index.php?do=app&view=denounce_list" target="display_frame" r_id="167">举报管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
      		<dl>
                  	<dt><i class="arrow_r">&nbsp;</i>推广营销</dt>
                  <dd>
                        <ul >
                        	<li><a href="index.php?do=prom&view=config" target="display_frame" r_id="59">推广配置管理</a></li>
<li><a href="index.php?do=prom&view=relation" target="display_frame" r_id="58">推广关系管理</a></li>
<li><a href="index.php?do=prom&view=event" target="display_frame" r_id="61">推广财务管理</a></li>
 		                        </ul>
                  </dd>
                </dl>
          </div>
                
        </div>

</div>



<div class="tool_box">
<div class="bread">
    <a href="index.php?do=main" target="display_frame">管理首页</a>
    <span class="font_st">&gt;</span>
    <a href="javascript:void(0)" id="href_title">快捷操作</a>
    <a href="#" onclick="shortcuts(this);" id="add_shortcuts" ac='add_shortcuts' title="添加快捷操作"><span class="font_st">[+]</span></a>
    </div>
    <div class="other">
    		<input type="text" class="txt" name="fds[resource_name]" id="recource"/>
        	<button type="button" class="button ml_mr_5"  onclick="find_nav()"><span class="magnifier icon"></span>搜索</button>
<button id="map" type="button" class="button" onclick="nav();">导航地图</button>
    </div>
</div>

<div class="frame_box po_re">	
<iframe id="display_frame" name="display_frame"  scrolling="auto"  src="index.php?do=main" frameborder="0" ></iframe>
</div>
</div>
<!--[if IE 6]></div><![endif]-->
<!--[if IE 7]></div><![endif]-->
<!--[if IE 8]></div><![endif]-->
<script type="text/javascript" src="./resource/js/artdialog/artDialog.js"></script>
<script type="text/javascript" src="./resource/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="./resource/js/artdialog/artDialog.iframeTools.source.js"></script>
<script type="text/javascript" src="tpl/js/jquery.mousewheel.min.js"></script>
 
</body>
</html>

