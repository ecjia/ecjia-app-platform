<?php

/**
 * ECJIA切换公众号
 */

defined('IN_ECJIA') or exit('No permission resources.');

class admin_switch extends ecjia_admin {

	public function __construct() {
		parent::__construct();
	}
	
	public function init() {
	    $request = Component_HttpFoundation_Request::createFromGlobals();
	    $uuid = $request->get('uuid');
	    $platform = $request->get('platform');
	    
	    RC_Loader::load_app_class('platform_account', 'platform', false);
	    $platform_account = platform_account::make($uuid);
	    $account = $platform_account->getAccount();
	    
	    if (platform_account::getCurrentUUID($platform) == $uuid) {
	        $url = $_SERVER['HTTP_REFERER'];
	        return $this->showmessage("当前已在【{$account['name']}】公众号中！", ecjia::MSGTYPE_JSON | ecjia::MSGSTAT_SUCCESS, array('pjaxurl' => $url));
	    }

	    platform_account::setCurrentUUID($platform, $uuid);
	    
		$url = $_SERVER['HTTP_REFERER'];
		return $this->showmessage("正在切换【{$account['name']}】公众号中，请稍等……", ecjia::MSGTYPE_JSON | ecjia::MSGSTAT_SUCCESS, array('pjaxurl' => $url));
	}
}

//end