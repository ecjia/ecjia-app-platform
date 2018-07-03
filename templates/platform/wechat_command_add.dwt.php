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
            <div class="col-lg-12">
				<form class="form" method="post" name="theForm" action="{$form_action}">
					<div class="card-body">
						<div class="form-body">
							<div class="form-group row">
								<label class="col-lg-2 label-control text-right">关键词：</label>
								<div class="col-lg-8 controls">
									<!-- {foreach from=$data item=val key=key name=n} -->
									<div class="clone-input row m_b10">
										<div class="col-md-11"><input type="text" name="cmd_word[]" class="form-control" value="{$val.cmd_word}" /></div>
										{if $smarty.foreach.n.last}
										<label class="col-md-1">
											<a class="no-underline l_h35" data-toggle="clone-obj" data-parent=".clone-input" href="javascript:;"><i class="fa fa-plus"></i></a>
										</label>
										{else}
										<label class="col-md-1">
											<a class="no-underline l_h35" data-toggle="ajaxremove" data-msg="您确定要删除该关键词吗？" href='{RC_Uri::url("platform/platform_command/remove", "cmd_id={$val.cmd_id}")}'><i class="fa fa-minus"></i></a>
										</label>
										{/if}
									</div>
									<!-- {foreachelse} -->
									<div class="clone-input row m_b10">
										<div class="col-md-11"><input type="text" name="cmd_word[]" class="form-control"/></div>
										<label class="col-md-1">
											<a class="no-underline l_h35" data-toggle="clone-obj" data-parent=".clone-input" href="javascript:;"><i class="fa fa-plus"></i></a>
										</label>
									</div>
									<!-- {/foreach} -->
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-lg-2 label-control text-right">请选择插件：</label>
								<div class="col-lg-8 controls">
									<select name="ext_code" class="select2 form-control">
										<option value="">请选择...</option>
										<!-- {foreach from=$extend_list item=list} -->
										<option value="{$list.ext_code}" {if $ext_code eq $list.ext_code}selected{/if}>{$list.ext_name}</option>
										<!-- {/foreach} -->
									</select>
								</div>
							</div>
						</div>
					</div>
	
					<div class="modal-footer justify-content-center">
						<input type="hidden" name="old_code" value="{$ext_code}">
						<input type="submit" value="{lang key='wechat::wechat.ok'}" class="btn btn-outline-primary" />	
					</div>
				</form>	
            </div>
        </div>
    </div>
</div>
<!-- {/block} -->