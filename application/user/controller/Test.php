<?php
namespace app\user\controller;
use think\Controller;
use think\View;
use think\Log;

class Test extends Controller
{
    public function index()
    {
        //Log::record('测试日志信息');//debug

        //$view = new View();
        $this->assign('title','好财气');
        return $this->fetch();
    }

    public function sqltest()
    {
    	$tt=new \app\user\model\Psmanagins();//model('psmanagins');
    	$uu=$tt->getPsmInfo();
        $join=$tt->joinQuery();
        $data=array('psminfo'=>$uu,'count'=>count($uu),'join'=>$join);
    	$this->assign('retinfo', $uu);//json($data));
        return $this->fetch();
    }

    public function qrcode(){
    	$pngpath=getcwd().'/uploads/qrimage/111.png';
		if(!file_exists($pngpath)){
			import("phpqrcode.phpqrcode",EXTEND_PATH,'.class.php');	
			$QRcode = new \QRcode();
			$QRcode::png('111111', $pngpath);
		}

		return $pngpath;
    }

    public function aa(){
        return $this->fetch();
    }

    public function a1(){
        return $this->fetch();
    }
    
}
