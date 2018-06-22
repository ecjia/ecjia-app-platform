<?php

namespace Ecjia\App\Platform\Plugin;

use Ecjia\System\Plugin\AbstractPlugin;

abstract class PlatformAbstract extends AbstractPlugin
{
    
    /**
     * 插件返回数据统一接口
     */
    abstract public function event_reply();
    
}