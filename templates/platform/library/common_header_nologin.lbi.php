<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-hide-on-scroll navbar-border navbar-shadow navbar-brand-center">
	<div class="navbar-wrapper">
		<div class="navbar-header">
      		<ul class="nav navbar-nav flex-row">
        		<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        		<li class="nav-item">
        			<a class="navbar-brand" href="{url path='platform/dashboard/init'}">
        			<img class="brand-logo" alt="robust admin logo" src="{$ecjia_main_static_url}platform/images/logo/logo-dark-sm.png">
            		<h3 class="brand-text">公众平台</h3>
            		</a>
        		</li>
        		<li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
      		</ul>
		</div>
    	<div class="navbar-container content">
      		<div class="collapse navbar-collapse" id="navbar-mobile">
        		<ul class="nav navbar-nav mr-auto float-left">
          			<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs hidden" href="#"><i class="ft-menu">         </i></a></li>
        		</ul>
      		</div>
    	</div>
	</div>
</nav>