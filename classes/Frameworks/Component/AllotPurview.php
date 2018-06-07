<?php

namespace Ecjia\App\Platform\Frameworks\Component;

use RC_DB;

abstract class AllotPurview
{
    
    protected $meta_key;
    
    protected $object_type;
    
    protected $object_group;
    
    protected $object_id;
    
    
    public function __construct($userid)
    {
        $this->object_id = $userid;
    }
    
    
    public function save($purview)
    {
        //如果存在，则更新
        if ($this->getAll())
        {
            $data = [
                'meta_value'    => $purview,
            ];
            
            return RC_DB::table('term_meta')->where('object_type', $this->object_type)
            ->where('object_group', $this->object_group)
            ->where('object_id', $this->object_id)
            ->where('meta_key', $this->meta_key)
            ->update($data);
        }
        //如果不存在，则插入新值
        else 
        {
            $data = [
                'object_type'   => $this->object_type,
                'object_group'  => $this->object_group,
                'object_id'     => $this->object_id,
                'meta_key'      => $this->meta_key,
                'meta_value'    => $purview,
            ];
            
            return RC_DB::table('term_meta')->insert($data);
        }
    }
    
    
    public function getAll()
    {
        return RC_DB::table('term_meta')->where('object_type', $this->object_type)
        ->where('object_group', $this->object_group)
        ->where('object_id', $this->object_id)
        ->where('meta_key', $this->meta_key)
        ->first();
    }
    
    public function get()
    {
        return RC_DB::table('term_meta')->select('meta_value')->where('object_type', $this->object_type)
        ->where('object_group', $this->object_group)
        ->where('object_id', $this->object_id)
        ->where('meta_key', $this->meta_key)
        ->pluck('meta_value');
    }
    
    
}