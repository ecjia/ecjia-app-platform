<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-platform.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.platform.platform.init();
</script>
<!-- {/block} -->
<!-- {block name="home-content"} -->

<div class="alert alert-info">
	<a class="close" data-dismiss="alert">×</a>
	<strong>{lang key='platform::platform.lable_warm_prompt'}</strong> {lang key='platform::platform.click_plug_add'}
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
                <h4 class="card-title">
                	{$ur_here}
                </h4>
            </div>
	        <div class="col-md-12">
				<div class="tab-content">
					<div class="active">
						<div class="row-fluid">
							<!-- {foreach from=$arr.item item=module} -->
								<div class="outline">
									<a class="data-pjax"  href='{RC_Uri::url("platform/platform_extend/wechat_extend_view", "code={$module.ext_code}")}' >
										<div class="outline-left"><img src="{$img_url}setting_shop.png" /></div>
										<div class="outline-right">
											<p>{$module.ext_name}</p>
											<span>{$module.ext_code}</span>
										</div>
									</a>
									{if $module.added eq 1}
									<span class="added">已添加</span>
									{/if}
								</div>
							<!-- {foreachelse} -->
							<div class="no-records">{lang key='system::system.no_records'}</div>
							<!-- {/foreach} -->
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--
<form class="form-horizontal" method="post" action="{$form_action}" name="platform">    
	<div class="row">
	    <div class="col-12">
	        <div class="card">
				<div class="card-header">
	                <h4 class="card-title">
	                	{$ur_here}
	                </h4>
	            </div>
	            <div class="col-md-12">
		            <div class="content-left col-md-9">
						<table class="table table-hide-edit">
							<thead>
								<tr>
									<th class="w80">{lang key='platform::platform.plug_name'}</th>
									<th class="w150">{lang key='platform::platform.plug_num'}</th>
									<th class="w180">{lang key='platform::platform.keyword'}</th>
								</tr>
							</thead>
							<tbody>
								{foreach from=$arr.item item=module}
								<tr>
									<td>{$module.ext_name}</td>
									<td class="hide-edit-area">
										{$module.ext_code}
										<div class="edit-list">
											<a class="data-pjax" href='{RC_Uri::url("platform/platform_command/init", "code={$module.ext_code}")}' title="{lang key='platform::platform.help_command'}">{lang key='platform::platform.help_command'}</a>&nbsp;|&nbsp;
											<a class="data-pjax" href='{RC_Uri::url("platform/platform_extend/wechat_extend_edit", "code={$module.ext_code}")}' title="{lang key='platform::platform.edit_deploy'}">{lang key='platform::platform.edit_deploy'}</a>&nbsp;|&nbsp;
											<a class="ajaxremove ecjiafc-red" data-toggle="ajaxremove" data-msg="{t}您确定要删除该公众号下的扩展[{$module.ext_name}]吗？{/t}" href='{RC_Uri::url("platform/platform_extend/wechat_extend_remove", "code={$module.ext_code}&id={$module.account_id}")}' title="{lang key='platform::platform.delete'}">{lang key='platform::platform.delete'}</a>
										</div>
									</td>
									<td>{$module.command_list}</td>
								</tr>
								{foreachelse}
								   <tr><td class="no-records" colspan="3">{lang key='system::system.no_records'}</td></tr>
								{/foreach}
							</tbody>
						</table>
						{$arr.page}					
		            </div>
		            
		            <div class="sidebar-right col-md-3">
			            <div class="card">
							<div class="card-header bg-info">
								<h4 class="card-title">扩展信息</h4>
								<a class="heading-elements-toggle"><i class="fa fa-ellipsis font-medium-3"></i></a>
			        			<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="card-content collapse show" style="">
								<div class="card-body border-info" style="height: 400px;">
									<div class="control-group control-group-small choose_list" data-url="{url path='platform/platform_extend/get_extend_list'}" data-id="{$id}">
										<input class="w243 form-control" type="text" name='keywords' value="{$smarty.get.keywords}" placeholder="{lang key='platform::platform.input_plugname_keywords'}" size="16"/>
										<a class="btn btn-outline-primary search_platform">{lang key='platform::platform.search'}</a>
									</div>
									
									<div class="control-group control-group-small draggable">
										<div class="ms-container" id="ms-custom-navigation" style="background:none;">
											<div class="ms-selectable">
												<div class="search-header m_t10">
													<input class="span12 form-control" id="ms-search" type="text" placeholder="{lang key='platform::platform.search_plug_message'}" autocomplete="off">
												</div>
												<ul class="ms-list nav-list-ready m_b0">
													<li class="ms-elem-selectable disabled"><span>{lang key='platform::platform.null_content'}</span></li>
												</ul>
											</div>
										</div>
									</div>
									
									<div class="control-group control-group-small m_b0 m_t10">
										<input type="submit" value="{lang key='platform::platform.addition'}" class="btn btn-outline-primary" />
										<input type="hidden" value="{$id}" name="id" />
									</div>
									
								</div>
							</div>
						</div>
		            </div>
	            </div>
	        </div>
	    </div>
	</div>
</form>
-->
<!-- {/block} -->