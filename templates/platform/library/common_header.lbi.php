<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-hide-on-scroll navbar-border navbar-shadow navbar-brand-center">
	<div class="navbar-wrapper">
		<div class="navbar-header">
      		<ul class="nav navbar-nav flex-row">
        		<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        		<li class="nav-item">
        			<a class="navbar-brand" href="index.html">
        			<img class="brand-logo" alt="robust admin logo" src="../../../content/apps/platform/statics/platform/images/logo/logo-dark-sm.png">
            		<h3 class="brand-text">ECJia公众平台</h3>
            		</a>
        		</li>
        		<li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
      		</ul>
		</div>
    	<div class="navbar-container content">
      		<div class="collapse navbar-collapse" id="navbar-mobile">
        		<ul class="nav navbar-nav mr-auto float-left">
          			<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu">         </i></a></li>
                    <!-- {include file="library/common_header_mega.lbi.php"} -->
          			<li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          			<li class="nav-item nav-search">
          				<a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                          	<input class="input" type="text" placeholder="Explore Robust...">
                        </div>
          			</li>
        		</ul>
        		<ul class="nav navbar-nav float-right">         
          			<li class="dropdown dropdown-language nav-item">
          				<a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-cn"></i><span>简体中文</span><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                        	<a class="dropdown-item" href="icons-simple-line-icons.html#"><i class="flag-icon flag-icon-cn"></i> 简体中文</a>
                        </div>
          			</li>
                    <!-- {include file="library/common_header_notifications.lbi.php"} -->
                    <!-- {include file="library/common_header_messages.lbi.php"} -->
          			<li class="dropdown dropdown-user nav-item">
          				<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
          					<span class="avatar avatar-online"><img src="{$current_user->getAvatarUrl()}" alt="{{$current_user->getUserName()}}"><i></i></span>
          					<span class="user-name">{$current_user->getUserName()}</span>
          				</a>
                        <div class="dropdown-menu dropdown-menu-right">
                        	<a class="dropdown-item" href="{$current_user->getProfileSettingUrl()}"><i class="ft-user"></i> 个人设置</a>
                          	<div class="dropdown-divider"></div>
                          	<a class="dropdown-item" href="{url path='platform/privilege/logout'}"><i class="ft-power"></i> 退出</a>
                    	</div>
          			</li>
        		</ul>
      		</div>
    	</div>
	</div>
</nav>