<div class="grid_5 omega news_class">

        <!--分类-->
        <div class="box normal pad10">
            <h3 class="title">{$_lang['classify']}</h3>
            <div class="mt_5 news_sort">
                <ul>
                    {loop $tmp_arr $v}
                    
                    <li class="second_sort {if $v['art_cat_id']==$art_cat_id}selected{/if}">                    	
                		<!--{eval $has = 0;}-->
                        {loop $tmp_arr $v2}
                        {if $v2['level']>1&&$v2['art_cat_pid']==$v['art_cat_id']}				
						<!--{eval $has = 1;$new_arr[$v[art_cat_id]][]=$v2}-->
                        {/if}
                        {/loop}                        
						{if $has==1}
                       		 <a href="javascript:show_hide($v['art_cat_id']);" id="art_cat_$v['art_cat_id']"><span class="icon16 sq-plus" id="art_span_$v['art_cat_id']"></span></a>
						{else}
							<span class="ico"></span>
						{/if}				
                           <a href="{$pre_url}index.php?do=$do&view=article_list&art_cat_id=$v['art_cat_id']" class="minus">
                        		$v[cat_name]
							</a>
						<p class="news_secondMenu" id="art_p_$v['art_cat_id']" style="display:none">                    		
                            {loop $new_arr[$v['art_cat_id']] $v3}           
	                           <a href="{$pre_url}index.php?do=$do&view=article_list&art_cat_id=$v3['art_cat_id']">
	                         	   $v3['cat_name']
							   </a>							
                            {/loop}
                        </p>                        
                    </li>
              
                    {/loop}
                </ul>
            </div>
        </div>
        <!--end 分类--><!--归档-->
        <div class="box normal pad10 mt_10">
            <h3 class="title">{$_lang['part']}</h3>
            <div class="mt_5 pl_20">
                <ul>
                    {loop $year_arr $v}
                    <li>
                    	{if $static}
								<a href="{$pre_url}html/article/archive/{$v['y']}_1.htm"></a>
	                     {else}
	                           <a href="{$pre_url}index.php?do=$do&view=article_list&year=$v['y']">
                        {/if}{$v['y']}{$_lang['year_part']}[{$v['c']}]</a>
                    </li>
                    {/loop}
                </ul>
            </div>
        </div>
        <!--end 归档-->
 
</div>
<script type="text/javascript">
    function show_hide(obj_id){
        var obj_id = obj_id;
        $("#art_p_" + obj_id).toggle(function(){
            var art_class = $("#art_span_" + obj_id).attr("class");
            if (art_class == 'icon16 sq-plus') {
                $("#art_span_" + obj_id).attr("class", "icon16 sq-minus");
            }
            else {
                $("#art_span_" + obj_id).attr("class", "icon16 sq-plus");
            }
        });
    }
</script>
