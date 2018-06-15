<?php

namespace Ecjia\App\Platform\Frameworks\Platform;

use Royalcms\Component\Repository\Repositories\AbstractRepository;

class Account extends AbstractRepository
{
    
    protected $uuid;
    
    protected $model = 'Ecjia\App\Platform\Models\PlatformAccountModel';
    
    protected $account;
    
    public function __construct($uuid)
    {
        parent::__construct();
        
        $this->uuid = $uuid;
        
        $this->account = $this->findBy('uuid', $uuid);
    }
    
    
    public function getAccountID()
    {
        return $this->account->id;
    }
    
    public function getUUID()
    {
        return $this->account->uuid;
    }
    
    public function getPlatform()
    {
        return $this->account->platform;
    }
    
    public function getType()
    {
        return $this->account->type;
    }
    
    public function getStoreId()
    {
        return $this->account->shop_id;
    }
    
    public function getAccountName()
    {
        return $this->account->name;
    }
    
    public function getLogo()
    {
        return $this->account->logo;
    }
    
    public function getToken()
    {
        return $this->account->token;
    }
    
    public function getAESKey()
    {
        return $this->account->aeskey;
    }
    
    public function getAppId()
    {
        return $this->account->appid;
    }
    
    public function getAppSecret()
    {
        return $this->account->appsecret;
    }
    
    public function getAddTime()
    {
        return $this->account->add_time;
    }
    
    public function getSort()
    {
        return $this->account->sort;
    }
    
    public function getStatus()
    {
        return $this->account->status;
    }
    
    
}

// end