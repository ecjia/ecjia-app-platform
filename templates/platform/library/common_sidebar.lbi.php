<?php defined('IN_ECJIA') or exit('No permission resources.');?>
        <div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
          <div class="main-menu-content">
          
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
              <li class=" navigation-header"><span data-i18n="nav.category.layouts">公众平台</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
              </li>
           	  <li class=" nav-item"><a href="index.html#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">公众平台</span></a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{RC_Uri::url('platform/platform/init')}" data-i18n="nav.page_layouts.1_column">公众号管理</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('platform/platform_plugin/init')}" data-i18n="nav.page_layouts.2_columns">功能扩展</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('platform/platform_command/init')}" data-i18n="nav.page_layouts.3_columns.main">命令速查</a>
                  </li>
                </ul>
              </li>
              
   			  <li class=" navigation-header"><span data-i18n="nav.category.layouts">微信公众平台</span><i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
              </li>
           	  <li class=" nav-item"><a href="index.html#"><i class="icon-layers"></i><span class="menu-title" data-i18n="nav.page_layouts.main">微信公众平台</span></a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_subscribe/init')}" data-i18n="nav.page_layouts.1_column">用户管理</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_message/init')}" data-i18n="nav.page_layouts.2_columns">消息管理</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_mass_message/init')}" data-i18n="nav.page_layouts.3_columns.main">群发消息</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_menu/init')}" data-i18n="nav.page_layouts.1_column">自定义菜单</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_material/init')}&type=news&material=1" data-i18n="nav.page_layouts.2_columns">素材管理</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_response/reply_subscribe')}" data-i18n="nav.page_layouts.3_columns.main">自动回复</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_response/reply_keywords')}" data-i18n="nav.page_layouts.1_column">关键词回复</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_customer/init')}" data-i18n="nav.page_layouts.2_columns">多客服账号</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_record/init')}" data-i18n="nav.page_layouts.3_columns.main">客服会话记录</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_qrcode/init')}" data-i18n="nav.page_layouts.3_columns.main">渠道二维码</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_share/init')}" data-i18n="nav.page_layouts.1_column">扫码引荐</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_prize/init')}" data-i18n="nav.page_layouts.2_columns">抽奖记录</a>
                  </li>
                  <li><a class="menu-item" href="{RC_Uri::url('wechat/platform_request/init')}" data-i18n="nav.page_layouts.3_columns.main">Api请求统计</a>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
