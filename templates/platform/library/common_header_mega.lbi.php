<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<li class="dropdown nav-item mega-dropdown">
<a class="dropdown-toggle nav-link" href="icons-simple-line-icons.html#" data-toggle="dropdown">公众平台</a>
    <ul class="mega-dropdown-menu dropdown-menu row">
		<li class="col-md-12">
        	<h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i> 公众平台</h6>
        	<div id="mega-menu-carousel-example">
              	<div>
              		<img class="rounded img-fluid mb-1" src="{$platformAccount->getLogo()}" alt="{$platformAccount->getAccountName()}">
              		<a class="news-title mb-0" href="#">{$platformAccount->getAccountName()}</a>
              	</div>
            </div>
      	</li>
      	

	</ul>
</li>
