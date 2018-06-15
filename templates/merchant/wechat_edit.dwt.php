<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-merchant.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.merchant.platform.init();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->

<div class="page-header">
	<div class="pull-left">
		<h2><!-- {if $ur_here}{$ur_here}{/if} --></h2>
  	</div>
  	<div class="pull-right">
  		{if $action_link}
		<a href="{$action_link.href}" class="btn btn-primary data-pjax">
			<i class="fa fa-reply"></i> {$action_link.text}
		</a>
		{/if}
  	</div>
  	<div class="clearfix"></div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-body">
				<form class="form-horizontal" action="{$form_action}" method="post" name="theForm" enctype="multipart/form-data">
					<div class="tab-content">
						<fieldset>
							<div class="row-fluid edit-page">
								{if $wechat.id neq ''}
								<div class="form-group" >
									<label class="control-label col-lg-2">UUID：</label>
									<div class="controls col-lg-6 l_h30">
										{$wechat.uuid}<br>
										<input type="hidden" name="uuid" value="{$wechat.uuid}" />
									</div>
								</div>
								
								<div class="form-group" >
									<label class="control-label col-lg-2">{lang key='platform::platform.lable_external_address'}</label>
									<div class="controls col-lg-10 l_h30">
										{$url}
									</div>
								</div>
								{/if}
								
								<div class="form-group" >
									<label class="control-label col-lg-2">{lang key='platform::platform.lable_terrace'}</label>
									<div class="controls col-lg-6">
										<select name="platform" class="form-control">
											<option value="" {if $wechat.platform eq ''}selected="selected"{/if}>{lang key='platform::platform.select_terrace'}</option>
											<option value="wechat" {if $wechat.platform eq 'wechat'}selected="selected"{/if}>{lang key='platform::platform.weixin'}</option>
										</select>
									</div>
									<span class="input-must">{lang key='system::system.require_field'}</span>
								</div>
							
								<div class="form-group" >
									<label class="control-label col-lg-2">{lang key='platform::platform.lable_platform_num_type'}</label>
									<div class="controls col-lg-6">
										<select name="type" class="form-control">
											<option value="0" {if $wechat.type eq 0}selected="selected"{/if}>{lang key='platform::platform.un_platform_num'}</option>
											<option value="1" {if $wechat.type eq 1}selected="selected"{/if}>{lang key='platform::platform.subscription_num'}</option>
											<option value="2" {if $wechat.type eq 2}selected="selected"{/if}>{lang key='platform::platform.server_num'}</option>
											<option value="3" {if $wechat.type eq 3}selected="selected"{/if}>{lang key='platform::platform.test_account'}</option>
										</select>
										<span class="help-block">{lang key='platform::platform.weixin_three_hundred'}</span>
									</div>
								</div>
								
								<div class="form-group" >
									<label class="control-label col-lg-2">{lang key='platform::platform.lable_platform_name'}</label>
									<div class="controls col-lg-6">
										<input class="form-control" type="text" name="name" id="name" value="{$wechat.name}" />
									</div>
									<span class="input-must">{lang key='system::system.require_field'}</span>
								</div>
								
								<div class="form-group">
		                            <label class="control-label col-lg-2">{lang key='platform::platform.lable_logo'}</label>
		                            <div class="col-lg-6">
		                                <div class="fileupload fileupload-{if $wechat.logo}exists{else}new{/if}" data-provides="fileupload">
		                                    {if $wechat.logo}
		                                    <div class="fileupload-{if $wechat.logo}exists{else}new{/if} thumbnail" style="max-width: 60px;">
		                                        <img src="{$wechat.logo}" alt="{lang key='platform::platform.look_picture'}" style="width:50px; height:50px;"/>
		                                    </div>
		                                    {/if}
		                                    <div class="fileupload-preview fileupload-{if $wechat.logo}new{else}exists{/if} thumbnail" style="max-width: 60px;max-height: 60px;line-height: 10px;"></div>
		                                    <span class="btn btn-primary btn-file btn-sm">
		                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 浏览</span>
		                                        <span class="fileupload-exists"> 修改</span>
		                                        <input type="file" class="default" name="platform_logo" />
		                                    </span>
		                                    <a class="btn btn-danger btn-sm fileupload-exists" {if $wechat.logo}data-toggle="ajax_remove"{else}data-dismiss="fileupload"{/if} href='{url path="platform/merchant/remove_logo" args="id={$wechat.id}"}' >删除</a>
		                                </div>
		                            </div>
		                        </div>
                        	
								<div class="form-group" >
									<label class="control-label col-lg-2">{t}Token：{/t}</label>
									<div class="controls col-lg-6">
										<input class="generate_token form-control" type="text" name="token" id="token" value="{$wechat.token}" />
										<span class="help-block">自定义的Token值，或者点击生成Token创建一个，复制到微信公众平台配置中</span>
									</div>
									<a class="toggle_view btn btn-primary filter-btn" href='{url path="platform/merchant/generate_token"}'  data-val="allow" >生成Token</a>
									<span class="input-must">{lang key='system::system.require_field'}</span>
								</div>
								
								<div class="form-group" >
									<label class="control-label col-lg-2">{lang key='platform::platform.lable_appid'}</label>
									<div class="controls col-lg-6">
										<input class="form-control" type="text" name="appid" id="appid" value="{$wechat.appid}" />
									</div>
									<span class="input-must">{lang key='system::system.require_field'}</span>
								</div>
								
								<div class="form-group" >
									<label class="control-label col-lg-2">{t}AppSecret：{/t}</label>
									<div class="controls col-lg-6">
										<input class="form-control" type="text" name="appsecret" id="appsecret" value="{$wechat.appsecret}" />
									</div>
									<span class="input-must">{lang key='system::system.require_field'}</span>
								</div>
								
								<div class="form-group" >
									<label class="control-label col-lg-2">{t}EncodingAESKey：{/t}</label>
									<div class="controls col-lg-6">
										<input class="form-control" type="text" name="aeskey" id="aeskey" value="{$wechat.aeskey}" />
									</div>
								</div>
								
								<div class="form-group" >
									<label class="control-label col-lg-2">{lang key='platform::platform.lable_status'}</label>
									<div class="col-lg-6 chk_radio">
										<input type="radio" name="status" value="1" {if $wechat.status eq 1}checked{/if} id="radio_1"><label for="radio_1">{lang key='platform::platform.open'}</label>
	                                    <input type="radio" name="status" value="0" {if $wechat.status eq 0}checked{/if} id="radio_0"><label for="radio_0">{lang key='platform::platform.close'}</label>
									</div>
								</div>
									
								<div class="form-group" >
									<label class="control-label col-lg-2">{lang key='platform::platform.lable_sort'}</label>
									<div class="controls col-lg-6">
										<input class="form-control" type="text" name="sort" id="sort" value="{$wechat.sort|default:0}" />
									</div>
								</div>
								
								<div class="form-group">
		        					<div class="col-lg-offset-2 col-lg-6">
		        						{if $wechat.id eq ''}
		        						<input type="submit" name="submit" value="{lang key='platform::platform.confirm'}" class="btn btn-info" />	
		        						{else}
		        						<input type="submit" name="submit" value="{lang key='platform::platform.update'}" class="btn btn-info" />	
		        						{/if}
										<input name="id" type="hidden"value="{$wechat.id}">
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- {/block} -->