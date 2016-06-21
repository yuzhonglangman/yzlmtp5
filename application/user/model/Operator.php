<?php
namespace app\user\model;
use think\Model;

class Operator extends Model
{
    public function getOperInfo()
    {
        $user = $this->where("oper_name='18620181075'")->find();
        return $user;
    }
    
    public function getPsmInfo(){
    	$psminfo = db('psmanagins')->where("psm_id='14'")->find();
        return $psminfo;
    }
}
