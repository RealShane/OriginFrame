<?php
namespace origin;
class Base {
	
	//类映射
	public static $classMap = array();
	public static function run(){
		$route = new \origin\Route();
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
			echo "致命错误：$class类文件不存在！";
			return false;
		}
		//类映射加入
		self::$classMap[$class] = $class;
		//自动加载类
		require $file_str;
	}
}