<?php
namespace origin\libs;
class View{
	public $assign;
	public function assign($name, $value){
		$this -> assign[$name] = $value;
	}
	
	public function display($module, $controller, $method){
		$file_path = APP.'/'.$module.'/view/'.$controller.'/'.$method.'.html';
		if(!is_file($file_path)){
			throw new \Exception('致命错误：视图'.$method.'不存在！');
		}
		
		require $file_path;
	}
}