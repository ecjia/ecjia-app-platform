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
					{if !$bd.ext_config}<a class="btn btn-success btn-min-width f_r js_apply" href="javascript:;">开通</a>{/if}
					<div class="fonticon-container">
						<div class="fonticon-wrap">
							<img class="icon-extend" src="{$images_url}extend.png" />
						</div>
					</div>
					<h4 class="title">{$bd.ext_name}</h4>
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
            </div>
        </div>
    </div>
</div>
<!-- {/block} -->