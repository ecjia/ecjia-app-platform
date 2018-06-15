<?php

namespace Ecjia\App\Platform\Plugin;

use Ecjia\System\Plugin\PluginModel;
use ecjia_error;

class PlatformPlugin extends PluginModel
{
    
    protected $table = 'platform_extend';
    
    /**
     * 当前插件种类的唯一标识字段名
     */
    public function codeFieldName()
    {
        return 'ext_code';
    }
    
    /**
     * 激活的支付插件列表
     */
    public function getInstalledPlugins()
    {
        return ecjia_config::getAddonConfig('platform_plugins', true);
    }
    
    
    /**
     * 获取数据库中启用的插件列表
     */
    public function getEnableList()
    {
        $data = $this->enabled()->orderBy('ext_code', 'asc')->get()->toArray();
        return $data;
    }
    
    /**
     * 获取数据库中插件数据
     */
    public function getPluginDataById($id)
    {
        return $this->where('ext_id', $id)->where('enabled', 1)->first();
    }
    
    public function getPluginDataByCode($code)
    {
        return $this->where('ext_code', $code)->where('enabled', 1)->first();
    }
    
    public function getPluginDataByName($name)
    {
        return $this->where('ext_name', $name)->where('enabled', 1)->first();
    }
    
    /**
     * 获取数据中的Config配置数据，并处理
     */
    public function configData($code)
    {
        $pluginData = $this->getPluginDataByCode($code);
        
        $config = $this->unserializeConfig($pluginData['ext_config']);
        
        $config['ext_code'] = $code;
        $config['ext_name'] = $pluginData['ext_name'];
        
        return $config;
    }
    
    
    /**
     * 限制查询只包括启动的支付渠道。
     *
     * @return \Royalcms\Component\Database\Eloquent\Builder
     */
    public function scopeEnabled($query)
    {
        return $query->where('enabled', 1);
    }
    
    /**
     * 获取默认插件实例
     */
    public function defaultChannel()
    {
        $data = $this->enabled()->orderBy('ext_code', 'asc')->first();
        
        $config = $this->unserializeConfig($data->ext_config);
        
        $handler = $this->pluginInstance($data->ext_code, $config);
        
        if (!$handler) {
            return new ecjia_error('code_not_found', $data->ext_code . ' plugin not found!');
        }
        
        return $handler;
    }
    
    
    /**
     * 获取某个插件的实例对象
     * @param string|integer $code 类型为string时是pay_code，类型是integer时是pay_id
     * @return Ambigous <\ecjia_error, \Ecjia\System\Plugin\AbstractPlugin>|\ecjia_error|\Ecjia\System\Plugin\AbstractPlugin
     */
    public function channel($code = null)
    {
        if (is_null($code)) {
            return $this->defaultChannel();
        }
        
        if (is_int($code)) {
            $data = $this->getPluginDataById($code);
        } else {
            $data = $this->getPluginDataByCode($code);
        }
        
        if (empty($data)) {
            return new ecjia_error('extend_not_found', $code . ' extend not found!');
        }
        
        $config = $this->unserializeConfig($data->ext_config);
        
        $handler = $this->pluginInstance($data->ext_code, $config);
        if (!$handler) {
            return new ecjia_error('extend_not_found', $data->ext_code . ' plugin not found!');
        }
        
        $handler->setPayment($data);
        
        return $handler;
    }
    
    
}

