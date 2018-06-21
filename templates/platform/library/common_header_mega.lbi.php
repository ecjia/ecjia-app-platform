<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<li class="dropdown nav-item mega-dropdown">
<a class="dropdown-toggle nav-link" href="icons-simple-line-icons.html#" data-toggle="dropdown">公众平台</a>
    <ul class="mega-dropdown-menu dropdown-menu row">
		<li class="col-md-12">
        	<h3 class="dropdown-menu-header text-uppercase mb-1">
        		<img src="{$platformAccount->getLogo()}" alt="{$platformAccount->getAccountName()}" width="60" height="60"> 
        		{$platformAccount->getAccountName()}
        	</h3>
        	<div id="mega-menu-carousel-example" class="mega-menu-carousel-example-content">
              	<div class="mega-menu-carousel-content left">
              		<div class="mega-menu-carousel-row left">
              			<p>平台</p>
              			{if $platformAccount->getPlatform() eq 'wechat'}
              			<img src="{$ecjia_main_static_url}image/wechat.png">
              			<p>微信</p>
              			{else if $platformAccount->getPlatform() eq 'alipay'}
              			<img src="{$ecjia_main_static_url}image/alipay.png">
              			<p>微信</p>
              			{/if}
	              	</div>
	              	<div class="mega-menu-carousel-row right">
	              		<p>公众号类型</p>
	              		{if $platformAccount->getType() eq 0 || $platformAccount->getType() eq 3}
              			<img src="{$ecjia_main_static_url}image/unauthorized.png">
              			<p>未认证的公众号</p>
              			{else if $platformAccount->getType() eq 1}
              			<img src="{$ecjia_main_static_url}image/subscribe.png">
              			<p>订阅号</p>
              			{else if $platformAccount->getType() eq 2}
              			<img src="{$ecjia_main_static_url}image/service.png">
              			<p>服务号</p>
              			{/if}
	              	</div>
              	</div>
              	<div class="mega-menu-carousel-content right">
              		<div class="item">
              			<label>UUID：</label>
              			<label class="item-controls">{$platformAccount->getUUID()}</label>
              		</div>
              		<div class="item">
              			<label>外部访问地址：</label>
              			<label class="item-controls">{$external_access_url}</label>
              		</div>
              		<div class="item">
              			<a class="btn btn-success" target="__blank" href="{RC_Uri::url('platform/merchant/edit')}&id={$platformAccount->getAccountID()}">编辑配置</a>
              			<a class="btn btn-info m_l20" href="{RC_Uri::url('platform/merchant/init')}">返回公众平台</a>
              		</div>
              	</div>
            </div>
      	</li>
	</ul>
</li>
