<?php

namespace Ecjia\App\Platform\Plugin;

use Ecjia\System\Plugin\AbstractPlugin;

abstract class PlatformAbstract extends AbstractPlugin
{
    
    /**
     * 获取iconUrl
     */
    abstract public function getPluginIconUrl();
    
    /**
     * 插件返回数据统一接口
     */
    abstract public function event_reply();
    
}