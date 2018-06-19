<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<!-- {extends file="ecjia-platform.dwt.php"} -->

<!-- {block name="footer"} -->
<script type="text/javascript">
	ecjia.platform.platform.init();
	var rowtypedata = [
		[
			[1,'<input type="text" class="txt w180 form-control" name="newcmd_word[]">'],
			[1,'<input type="text" class="txt w180 form-control" name="newsub_code[]">'],
			[1,'<a class="ecjiafc-red cursor_pointer l_h30" title="取消" data-toggle="remove-node"><i class="command_icon fa fa-times"></i></a>']
		]
	]
	{literal}
	var addrowdirect = 0;
	function addrow(obj, type) {
		var table = document.getElementById("edit_tbody");
		var tr = table.getElementsByTagName("tr");
	
		if(!addrowdirect) {
			var row = table.insertRow(tr.length);
		} else {
			var row = table.insertRow(tr.length + 1);
		}
		var typedata = rowtypedata[type];
		for(var i = 0; i <= typedata.length - 1; i++) {
			var cell = row.insertCell(i);
			var tmp = typedata[i][1];
			if (typedata[i][2]) {
				cell.className = typedata[i][2];
			}
			tmp = tmp.replace(/\{(\d+)\}/g, function($1, $2) {return addrow.arguments[parseInt($2) + 1];});
			cell.innerHTML = tmp;
		}
		addrowdirect = 0;
	}
	
	$(document).on('click', '[data-toggle="remove-node"]', function(e){
		e.preventDefault();
		var $this	= $(this),
		$parentobj	= $this.parent().parent();
		$parentobj.remove();
	});
	{/literal}
</script>
<!-- {/block} -->

<!-- {block name="home-content"} -->

<div class="row">
    <div class="col-12">
        <div class="card">
			<div class="card-header">
                <h4 class="card-title">
                	{$ext_name}<small>（{$code}）</small>
	               	{if $back_link}
					<a class="btn btn-light plus_or_reply data-pjax float-right" href="{$back_link.href}" id="sticky_a"><i class="fa fa-reply"></i> {$back_link.text}</a>
					{/if}
                </h4>
            </div>
            <div class="card-body">
				<div class="form-inline float-right">
					<form method="post" action="{$search_action}" name="searchForm">
						<div class="choose_list f_r" >
							<input class="form-control" type="text" name="keywords" value="{$smarty.get.keywords}" placeholder="{lang key='platform::platform.command_key'}"/> 
							<button class="btn btn-light" type="submit">{lang key='platform::platform.search'}</button>
						</div>
					</form>
				</div>
			</div>
			
            <div class="col-md-12">
	            <form name="editForm" action="{$form_action}" method="post">
					<table class="table table-hide-edit">
						<thead>
							<tr>
								<th class="w200">{lang key='platform::platform.keyword'}</th>
								<th class="w200">{lang key='platform::platform.subcommand'}</th>
								<th class="w50">{lang key='platform::platform.operation'}</th>
							</tr>
						</thead>
						<tbody id="edit_tbody">
							<!-- {foreach from=$modules.module item=module} -->
							<tr>
								<!-- {if $cmd_id eq $module.cmd_id} -->
								<td><input class="w180 form-control" type="text" name="cmd_word" value="{$module.cmd_word}"></td>
								<td><input class="w180 form-control" type="text" name="sub_code" value="{$module.sub_code}"></td>
								<td>
									<a class="cursor_pointer" data-toggle="edit_toggle" data-href='{RC_Uri::url("platform/platform_command/update", "code={$code}&cmd_id={$module.cmd_id}")}' title="{lang key='system::system.edit'}"><i class="command_icon fa fa-check l_h30"></i></a>
									<a class="data-pjax" href='{RC_Uri::url("platform/platform_command/init", "code={$code}")}' title="{lang key='platform::platform.close'}"><i class="command_icon fa fa-times l_h30"></i></a>
								</td>
								<!-- {else} -->
								<td>{$module.cmd_word}</td>
								<td>{$module.sub_code}</td>
								<td>
									<a class="cursor_pointer" data-toggle="edit_toggle" data-href='{RC_Uri::url("platform/platform_command/init", "code={$code}&cmd_id={$module.cmd_id}")}' title="{lang key='system::system.edit'}"><i class="command_icon ft-edit"></i></a>
									<a class="ajaxremove" data-toggle="ajaxremove" data-msg="{lang key='platform::platform.sure_del_command'}" href='{RC_Uri::url("platform/platform_command/remove", "cmd_id={$module.cmd_id}")}' title="{lang key='platform::platform.remove'}"><i class="command_icon ft-trash-2"></i></a>
								</td>
								<!-- {/if} -->
							</tr>
							<!-- {foreachelse} -->
						   	<tr>
						   		<td><input type="text" class="txt w180 form-control" name="newcmd_word[]"></td>
								<td><input type="text" class="txt w180 form-control" name="newsub_code[]"></td>
								<td></td>
						   	</tr>
							<!-- {/foreach} -->
						</tbody>
					</table>
					<!-- {$modules.page} -->	
					<div class="m_b20"><a href="javascript:;" onclick="addrow(this,0)" class="addtr">{lang key='platform::platform.add_again'}</a></div>
					<button class="btn btn-light m_b20 add-command-btn" type="submit">{lang key='platform::platform.addition'}</button>
				</form>
            </div>
        </div>
    </div>
</div>
<!-- {/block} -->