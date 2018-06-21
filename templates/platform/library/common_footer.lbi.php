<?php defined('IN_ECJIA') or exit('No permission resources.');?> 
<footer class="footer footer-static footer-transparent">
	<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
		<span class="float-md-left d-block d-md-inline-block">
		Copyright &copy; 2018 {ecjia::config('shop_name')} {if ecjia::config('icp_number', 2)}<a href="http://www.miibeian.gov.cn" target="_blank">{ecjia::config('icp_number')}</a>{/if}
		</span>
		<span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">当前正在访问【{$currentStore->getStoreName()}】的{$platformAccount->getAccountName()} <i class="ft-eye pink"></i></span>
	</p>
</footer>

{if ecjia::config('stats_code')}
{stripslashes(ecjia::config('stats_code'))}
{/if}

<!-- end:footer -->
<div class="container">
<!-- {ecjia:hook id=platform_print_main_bottom} -->
</div>