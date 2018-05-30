<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-platform.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
// 	ecjia.admin.platform.init();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->

<!-- 
<div class="row-fluid batch" >
	<form method="post" action="{$search_action}" name="searchForm">
		<div class="btn-group f_l m_r5">
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fontello-icon-cog"></i>{lang key='platform::platform.bulk_operation'}
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a class="button_remove" data-toggle="ecjiabatch" data-idClass=".checkbox:checked" data-url='{url path="platform/admin/batch_remove"}'  data-msg="{lang key='platform::platform.sure_want_do'}" data-noSelectMsg="{lang key='platform::platform.delete_selected_plat'}" data-name="id" href="javascript:;"><i class="fontello-icon-trash"></i>{lang key='platform::platform.platform_del'}</a></li>
			</ul>
		</div>
		
		<select class="w150" name="platform" id="select_type">
			<option value=''  		{if $smarty.get.platform eq ''}			selected="true"{/if}>{lang key='platform::platform.all_platform'}</option>
			<option value='wechat' 	{if $smarty.get.platform eq 'wechat'}	selected="true"{/if}>{lang key='platform::platform.weixin'}</option>
		</select>
		<a class="btn m_l5 screen-btn">{lang key='platform::platform.filtrate'}</a>
		<div class="choose_list f_r" >
			<input type="text" name="keywords" value="{$smarty.get.keywords}" placeholder="{lang key='platform::platform.input_plat_name_key'}"/>
			<button class="btn search_wechat" type="submit">{lang key='platform::platform.search'}</button>
		</div>
	</form>
</div>
 -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                	{$ur_here}
                	{if $action_link}
					<a class="float-right  plus_or_reply data-pjax" href="{$action_link.href}" id="sticky_a"><i class="fontello-icon-plus"></i>{$action_link.text}</a>
					{/if}
                </h4>
            </div>
			<div class="card-body">
				<div class="f_l">
					<div class="btn-group mr-1 f_l">
						<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						批量操作
						</button>
						<div class="dropdown-menu arrow" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
							<button class="dropdown-item" type="button">删除公众号</button>
						</div>
					</div>
					<div class="f_l mr-1">
						<select class="selectBox form-control">
							<option value='' {if $smarty.get.platform eq ''} selected="true"{/if}>{lang key='platform::platform.all_platform'}</option>
							<option value='wechat' {if $smarty.get.platform eq 'wechat'} selected="true"{/if}>{lang key='platform::platform.weixin'}</option>
						</select>
					</div>
					<button type="button" class="btn btn-info duallistbox-add f_l">筛选</button>
				</div>
				<div class="form-inline float-right" >
					<div class="input-group">
		          		<input type="text" name="keywords" class="form-control" placeholder="{lang key='platform::platform.input_plat_name_key'}">
		            	<div class="input-group-append">
		            		<button type="submit" class="btn btn-info search_wechat">{lang key='platform::platform.search'}</button>
		             	</div>
		        	</div>
				</div>
			</div>
			
            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
				                  	<th class="w50 table_checkbox">
				                  		<input type="checkbox" id="input-all" data-toggle="selectall" data-children=".checkbox">
                  						<label for="input-all"></label>
				                  	</th>
									<th class="w150">{lang key='platform::platform.logo'}</th>
									<th class="w250">{lang key='platform::platform.platform_name'}</th>
									<th class="w150">{lang key='platform::platform.terrace'}</th>
									<th class="w150">{lang key='platform::platform.platform_num_type'}</th>
									<th class="w100">{lang key='platform::platform.status'}</th>
									<th class="w100">{lang key='platform::platform.sort'}</th>
									<th class="w200">{lang key='platform::platform.add_time'}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- {foreach from=$wechat_list.item item=val} -->
                                <tr>
                           			<td>
										<input type="checkbox" id="input-{$val.id}" name="checkboxes[]" class="checkbox" value="{$val.id}">
                  						<label for="input-{$val.id}"></label>	
									</td>
									<td><img class="img-border height-100" src="{$val.logo}"></td>
									<td class="hide-edit-area">
										{$val.name}<br>
										{$val.uuid}
										<div class="edit-list">
											<a class="data-pjax" href='{RC_Uri::url("platform/admin/wechat_extend","id={$val.id}")}' title="{lang key='platform::platform.function_extend'}">{lang key='platform::platform.function_extend'}</a>&nbsp;|&nbsp;
									      	<a class="data-pjax" href='{RC_Uri::url("platform/admin/edit", "id={$val.id}")}' title="{lang key='system::system.edit'}">{lang key='platform::platform.edit'}</a>	&nbsp;|&nbsp;
									     	<a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="{t}您确定要删除公众号[{$val.name}]吗？{/t}" href='{RC_Uri::url("platform/admin/remove","id={$val.id}")}' title="{lang key='platform::platform.delete'}">{lang key='platform::platform.delete'}</a>
								     	</div>
									</td>
									<td>
										{if $val.platform eq 'wechat'}
											{lang key='platform::platform.weixin'}
										{/if}
									</td>
									<td>
										{if $val.type eq 0}
											{lang key='platform::platform.un_platform_num'}
										{elseif $val.type eq 1}
											{lang key='platform::platform.subscription_num'}
										{elseif $val.type eq 2}
											{lang key='platform::platform.server_num'}
										{elseif $val.type eq 3}
											{lang key='platform::platform.test_account'}
										{/if}
									</td>
									<td>
								        <i class="{if $val.status eq 1}fontello-icon-ok{else}fontello-icon-cancel{/if} cursor_pointer" data-trigger="toggleState" data-url="{RC_Uri::url('platform/admin/toggle_show')}" data-id="{$val.id}" ></i>
									</td>
									<td><span class="cursor_pointer" data-trigger="editable" data-url="{RC_Uri::url('platform/admin/edit_sort')}" data-name="sort" data-pk="{$val.id}"  data-title="{lang key='platform::platform.edit_plat_sort'}">{$val.sort}</span></td>
									<td>{$val.add_time}</td>
                                </tr>
                                <!--  {foreachelse} -->
								<tr><td class="no-records" colspan="8">{lang key='system::system.no_records'}</td></tr>
								<!-- {/foreach} -->
                            </tbody>
                        </table>
                        <!-- {$wechat_list.page} -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- {/block} -->