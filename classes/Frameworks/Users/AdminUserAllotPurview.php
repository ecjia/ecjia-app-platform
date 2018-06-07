<?php

namespace Ecjia\App\Platform\Frameworks\Users;

use Ecjia\App\Platform\Frameworks\Component\AllotPurview;

class AdminUserAllotPurview extends AllotPurview
{
    
    protected $meta_key = 'platform_allot_purview';
    
    protected $object_type = 'ecjia.system';
    
    protected $object_group = 'admin_user';
    
    protected $object_id;
    
    
}