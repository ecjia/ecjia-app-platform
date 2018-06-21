<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<li class="dropdown nav-item mega-dropdown">
<a class="dropdown-toggle nav-link" href="icons-simple-line-icons.html#" data-toggle="dropdown">公众平台</a>
    <ul class="mega-dropdown-menu dropdown-menu row">
		<li class="col-md-12">
        	<h3 class="dropdown-menu-header text-uppercase mb-1">
        		<img src="{$platformAccount->getLogo()}" alt="{$platformAccount->getAccountName()}" width="120" height="60"> 
        		{$platformAccount->getAccountName()}
        	</h3>
        	<div id="mega-menu-carousel-example" class="mega-menu-carousel-example-content">
              	<div class="mega-menu-carousel-content left">
              		<div class="mega-menu-carousel-row left">
              			<p>平台</p>
              			<img src="{$ecjia_main_static_url}image/{$platformAccount->getPlatform()}.png">
              			<p>{$platformAccount->getPlatformName()}</p>
	              	</div>
	              	<div class="mega-menu-carousel-row right">
	              		<p>公众号类型</p>
              			<img src="{$ecjia_main_static_url}image/{$platformAccount->getTypeCode()}.png">
              			<p>{$platformAccount->getTypeName()}</p>
	              	</div>
              	</div>
              	<div class="mega-menu-carousel-content right">
              		<div class="item">
              			<label>UUID：</label>
              			<label class="item-controls">{$platformAccount->getUUID()}</label>
              		</div>
              		<div class="item">
              			<label>外部访问地址：</label>
              			<label class="item-controls">{$platformAccount->getApiUrl()}</label>
              		</div>
              		<div class="item">
              			<a class="btn btn-success" target="__blank" href="{$platformAccount->getPlatformSettingUrl()}">编辑配置</a>
              			<a class="btn btn-info m_l20" href="{$platformAccount->getPlatformListUrl()}">返回公众平台</a>
              		</div>
              	</div>
            </div>
      	</li>
	</ul>
</li>
