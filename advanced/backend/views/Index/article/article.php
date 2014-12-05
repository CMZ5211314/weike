<!--{template header}--><!--页面样式初始化-->
<div class="wrapper">
<header class="clearfix page_header">
<div class="container_24">
	<!--{ad_show(NEWSLIST_HEAD,资讯中心_头部广告)}-->
    <!--页面导航-->
    <div class="breadcrumbs clearfix">
        <a href="{$pre_url}index.php">{$_lang['home']}</a> &gt; 
		<a href="index.php?do=article">{$_lang['news_center']}</a>&gt;
		<span>{$cat_info['cat_name']}</span>
    </div>
    <!--end 页面导航-->
</div>
</header>
<!--end 页面标题--><!--主内容-->
<section class="clearfix content">
    <div class="container_24">
        <section class="clearfix section">
            <div class="second_menu container_24 po_ab">
                <div class="suffix_23 pull_1">
                    <nav class="minor_nav box">
                        <ul class="nav_group">
                            <li>
                                <a href="{$pre_url}index.php?do=help" title="{$_lang['help_center']}"><span class="icon16 help">{$_lang['help_center']}</span><b class="font14 ml_5 po_re" style="top:4px;">？</b></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="show_panel container_24 po_re">
                <div class="po_re clearfix">
                    <!--左边内容-->
                    <div class="grid_19">
                        <div class="box  normal1 clearfix bord_c">
                            <!--资讯缩略-->
                            <div class="news_list">
                                <!--新闻-->{if !empty($article_arr)}
                                {loop $article_arr $v}
                                <div class="item clearfix">
                                    <div class="news_article">
                                        <h3 class="news_title ws_break">
                                        	{if $static}
												<a title="{$v['art_title']}" href="{$pre_url}html/article/info/{$v['art_cat_id']}_{$v['art_id']}.htm"></a>
                                        	{else}
                                        		<a title="{$v['art_title']}" href="{$pre_url}index.php?do=$do&view=article_info&art_cat_id=$v['art_cat_id']&art_id=$v['art_id']">
                                        	{/if}
                                        	<!--{eval echo kekezu::cutstr($v['art_title'],30)}-->
											{if $v[is_recommend]==1}<font color="red">{$_lang['recommend']}</font>{/if}
											{if $v['art_pic']}<font color="red">{$_lang['picture']}</font>{/if}
											</a>
										</h3>
                                        <p class="clearfix">
                                        	<span class="c999"><!--{eval echo date("Y-m-d",$v[pub_time])}--> </span>
                                        	
                                        	{if $static}
												<a href="{$pre_url}html/article/list/{$v[art_cat_id]}_1.htm"></a>
                                        	{else}
                                        		<a href="{$pre_url}index.php?do=$do&view=article_list&art_cat_id=$v['art_cat_id']">
                                        	{/if}[ {$v['cat_name']} ]</a>
                                            
                                            
                                        </p>
										<div class="news_img">
                                        	{if $static}
												<a href="{$pre_url}html/article/info/{$v['art_cat_id']}_{$v['art_id']}.htm" class="ov_hide mt_10"></a>
                                        	{else}
                                        		<a href="{$pre_url}index.php?do={$do}&view=article_info&art_cat_id={$v['art_cat_id']}&art_id={$v['art_id']}" class="ov_hide mt_10"></a>
                                        	{/if}
											<!--{eval $filepath = explode('?',$v['art_pic']);}-->											
                                        	{if file_exists($filepath[0])}
												<img src="{$pre_url}{$filepath[0]}" onerror="this.src='{$style_path}/img/style/new_default.gif'" alt="{$filepath[0]}">
											{/if}
										
                                    	</div>
                                        <div class="news_content">
                                            <p>
                                            	<!--{eval echo kekezu::cutstr($v['seo_desc'],500)}-->
                                            </p>
                                        </div>
									<div class="clear"></div>
									<div class="m_h">

											{$v['views']}{$_lang['focus_num']}
                                        	{if $static}
												<a href="{$pre_url}html/article/info/{$v['art_cat_id']}_{$v['art_id']}.htm"></a>
                                        	{else}
                                        		<a href="{$pre_url}index.php?do={$do}&view=article_info&art_cat_id={$v['art_cat_id']}&art_id={$v['art_id']}">{$_lang['view_artilce']}</a>
                                        	{/if}
										
									</div>
									</div>
                                </div>
								{/loop}
                                {else}
                                <div class="clearfix mb_20">
                                   
                                        <h3>{$_lang['no_data']}</h3>
                                    
                                </div>
                                {/if}<!--end 新闻-->
                            </div>
                            <!--end 资讯缩略--><!--右下角的返回顶部-->
                            <div class="operate mt_20 t_r">
                                <a href="{$pre_url}index.php?do=$do" class="" title="{$_lang['return_art_home']}"><span class="icon16 home">{$_lang['return_home']}</span></a>
                                <a href="#" class="" title="{$_lang['return_top']}"><span class="icon16 arrow-top">{$_lang['return_top']}</span></a>
                            </div>
                            <!--end右下角的返回顶部-->
                        </div>
                        <!--page 翻页 start-->
                        <div class="page">
                            <p class="clearfix">
                                {$pages['page']}
                            </p>
                            <div class="clear">
                            </div>
                        </div>
                        <!--page 翻页 end-->
                        <div class="clear">
                        </div>
                    </div>
                    <!--end 左边部分-->
                    <!--右边部分-->
                    <!--{template tpl/default/article/article_right}-->
                    <!--end 右边部分-->
                </div>
            </div>
        </section>
		<!--资讯中心_底部广告-->
		<!--{ad_show(NEWSLIST_BOTTOM)}-->
    </div>
</section>
</div>
<!--end 主内容-->
<!--{template footer}-->
