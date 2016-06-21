<?php
namespace app\user\model;
use think\Model;

class Psmanagins extends Model
{    
    public function getPsmInfo(){
    	$psminfo = $this->where("psm_id='4'")->find();
    	//$psminfo = $this->select();
        return $psminfo;
    }

    public function joinQuery(){
    	$info=db('psmanagins a,operator b')->where('a.psm_id=b.psm_id and a.psm_id=4')->field('psm_name,oper_name')->find();
    	return $info;
    }
}
