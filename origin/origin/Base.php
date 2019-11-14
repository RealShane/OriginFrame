<?php
namespace origin;
class Base {
	
	//类映射
	public static $classMap = array();
	
	//自动加载控制器
	public static function run_load(){
		
		$route = new \origin\libs\Route();
		$module = $route -> module;
		$controller = $route -> controller;
		$method = $route -> method;
		
		//字符串拼接
		$controller_file_PATH = APP.'/'.$module.'/controller/'.$controller.'.php';
		$ClassIn = '\\'.MODULE.'\\'.$module.'\controller\\'.$controller;
		
		//判断类是否存在
		if(!is_file($controller_file_PATH)){
			throw new \Exception('致命错误：控制器'.$controller.'不存在！');
		}
		
		require $controller_file_PATH;
		$run_new_Class = new $ClassIn();
		$run_new_Class -> $method();
		
	}
	
	//自动加载类
	public static function auto_load($class){
		
		//判断类映射中是否已存在
		if(isset($classMap[$class])){
			return true;
		}
		
		$class = str_replace('\\', '/', $class);
		$file_str = BASE.'/'.$class.'.php';
		if(!is_file($file_str)){
			throw new \Exception("致命错误：".$class."类文件不存在！");
			return false;
		}
		//类映射加入
		self::$classMap[$class] = $class;
		//自动加载类
		require $file_str;
	}
	
	//视图层数据传递
	public function assign($module, $controller, $method){
		
		$view = new \origin\libs\View();
		$ViewIn = $view -> assign($module, $controller, $method);
	}
	
	//视图层加载
	public function display($module, $controller, $method){
		
		$view = new \origin\libs\View();
		$ViewIn = $view -> display($module, $controller, $method);
	}
}








