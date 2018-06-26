<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-platform.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.platform.platform.init();
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->
<div class="row">
    <div class="col-12">
        <div class="card">
			<div class="card-header">
                <h4 class="card-title">
                	{$ur_here}
	               	{if $action_link}
					<a class="btn btn-outline-primary plus_or_reply data-pjax float-right" href="{$action_link.href}" id="sticky_a"><i class="fa fa-reply"></i> {$action_link.text}</a>
					{/if}
                </h4>
            </div>
            <div class="card-body">
            
				<div class="highlight_box global icon_wrap group" id="js_apply_btn">
					{if !$bd.ext_config}
						<a class="btn btn-success btn-min-width f_r extend_handle" href="{RC_Uri::url('platform/platform_extend/wechat_extend_insert')}" data-code="{$info.ext_code}" data-config="{$info.ext_config}">开通</a>
					{else}
						<a class="btn btn-danger btn-min-width f_r extend_handle" href="{RC_Uri::url('platform/platform_extend/wechat_extend_remove')}" data-code="{$info.ext_code}">关闭</a>
					{/if}
					<div class="fonticon-container">
						<div class="fonticon-wrap">
							<img class="icon-extend" src="{$images_url}extend.png" />
						</div>
					</div>
					<h4 class="title">{$info.ext_name}</h4>
					<p class="desc" id="js_status">
					{if !$bd.ext_config}<span>未开通</span>{else}该功能已通过申请，可正常使用{/if}
					</p>
				</div>
				
				<div class="carkticket_index">
					<div class="intro">
						<dl class="">
							<dt><span class="ico_intro ico ico_1 l"></span>
								<h4 class="card-title">功能介绍</h4>
							</dt>
							<dd>功能介绍内容显示区域</dd>
						</dl>
					</div>
				</div>
				
				{if $bd}
				<div class="carkticket_index m_t50">
					<div class="intro">
						<dl class="">
							<dt><span class="ico_intro ico ico_1 l"></span>
								<h4 class="card-title">插件配置</h4>
							</dt>
						</dl>
					</div>
					<form class="form" method="post" name="theForm" action="{$form_action}">
						<div class="card-body">
							<div class="form-body">
								<div class="form-group row">
									<label class="col-lg-2 label-control text-right">扩展名称：</label>
									<div class="col-lg-8 controls">
										{$info.ext_name}
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer justify-content-center">
							<input type="hidden" name="ext_code" value="{$bd.ext_code}" />
							<input type="submit" class="btn btn-outline-primary" value="更新"/>
						</div>
					</form>
				</div>
				{/if}
            </div>
        </div>
    </div>
</div>
<!-- {/block} -->