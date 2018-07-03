<?php

namespace Ecjia\App\Platform\Plugin;

use Ecjia\System\Plugin\AbstractPlugin;

abstract class PlatformAbstract extends AbstractPlugin
{
    
    protected $message;
    
    /**
     * 获取iconUrl
     */
    abstract public function getPluginIconUrl();
    
    /**
     * 插件返回数据统一接口
     */
    abstract public function eventReply();
    
    
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
    
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * 获取子命令数组
     */
    public function getSubCode()
    {
        return $this->loadConfig('sub_code', false);
    }
}