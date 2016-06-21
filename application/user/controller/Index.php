<?php
namespace app\user\controller;
use think\Controller;
use think\View;
use app\user\model\Operator;
use think\Log;

class Index extends Controller
{
    public function index()
    {
        //Log::record('测试日志信息');//debug

        //$view = new View();
        $this->assign('title','好财气');
        return $this->fetch();
    }

    public function test()
    {
    	$tt=new Operator;
    	$uu=$tt->getPsmInfo();
    	return json($uu);
        //return json(['a'=>'1','b'=>'2']);
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
    
}
