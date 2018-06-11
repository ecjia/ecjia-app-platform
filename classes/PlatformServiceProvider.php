<?php

namespace Ecjia\App\Platform;

use Royalcms\Component\App\AppServiceProvider;

class PlatformServiceProvider extends  AppServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-platform');
    }
    
    public function register()
    {
        
    }
    
    
    
}