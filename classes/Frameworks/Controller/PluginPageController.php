<?php
/**
 * Created by PhpStorm.
 * User: royalwang
 * Date: 2018/8/6
 * Time: 9:47 AM
 */

namespace Ecjia\App\Platform\Frameworks\Controller;


class PluginPageController
{

    protected $__FILE__;

    public function __construct()
    {

    }


    public function setPluginPath($path)
    {
        $this->__FILE__ = $path;

        return $this;
    }

    public function assginPluginStyleUrl($name, $path)
    {
        ecjia_front::$controller->assign($name, RC_Plugin::plugins_url($path, $this->__FILE__));

        return $this;
    }

    /**
     * 获取插件内的文件路径
     * @param $page
     * @return string
     */
    public function getPluginFilePath($path)
    {
        return RC_Plugin::plugin_dir_path($this->__FILE__) . $path;
    }



}