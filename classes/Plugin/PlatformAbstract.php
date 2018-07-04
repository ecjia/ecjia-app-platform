<?php

namespace Ecjia\App\Platform\Plugin;

use Ecjia\System\Plugin\AbstractPlugin;

abstract class PlatformAbstract extends AbstractPlugin
{
    
    protected $message;
    
    protected $sub_code;
    
    protected $store_id;
    
    /**
     * 商家类型
     * @var self::TypeAdmin | self::TypeMerchant 
     */
    protected $store_type;
    
    const TypeAdmin = 0b01;
    
    const TypeMerchant = 0b11;
    
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
    
    
    public function setSubCodeCommand($sub_code)
    {
        $this->sub_code = $sub_code;
        return $this;
    }
    
    public function getSubCodeCommand()
    {
        return $this->sub_code;
    }
    
    /**
     * 获取子命令数组
     */
    public function getSubCode()
    {
        return $this->loadConfig('sub_code', false);
    }
    
    public function setStoreId($store_id)
    {
        $this->store_id = $store_id;
        return $this;
    }
    
    public function getStoreId()
    {
        return $this->store_id;
    }
    
    public function setStoreType($store_type)
    {
        $this->store_type = $store_type;
        return $this;
    }
    
    public function getStoreType()
    {
        return $this->store_type;
    }
    
    
    /**
     * 获取公众平台插件支持平台公众号
     * @return bool
     */
    public function hasSupportTypeAdmin()
    {
        $type = $this->loadConfig('support_type', self::TypeAdmin);
        
        return ($type & self::TypeAdmin) == self::TypeAdmin;
    }
    
    /**
     * 获取公众平台插件支持商家公众号
     * @return bool
     */
    public function hasSupportTypeMerchant()
    {
        $type = $this->loadConfig('support_type', self::TypeAdmin);
        
        return ($type & self::TypeMerchant) == self::TypeMerchant;
    }
    
}