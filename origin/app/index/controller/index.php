<?php
namespace app\index\controller;
use origin\Base;
use origin\libs\Db;
class index extends Base{
	public function index(){
		$data = "hello";
//		$this -> assign('data', $data);
		$this -> display('index', 'index', 'shane');
	}
	
	public function crud(){
		$model = new Db();
		$str = "SELECT * FROM `article`";
		$info = $model -> query($str);
		print_r($info -> fetchAll());
	}
}