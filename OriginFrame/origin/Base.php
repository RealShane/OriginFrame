<?php
namespace origin;
class Base{
	public static $classMap=[];
	
	public static function fire($class){
		require __DIR__.'Route.php';
		$route=new $class();
	}
	
	public static function auto_load($class){
		
		if(isset($classMap[$class])){
			//若类文件已存在直接返回
			return true;
		}else{
			//自动加载类库
			
			$class=str_replace('\\','/',$class);
			//文件路径
			$file_name=ORIGIN.'/'.$class.'.php';
			//判断文件路径是否存在
			if(is_file($file_name)){
				echo($file_name);
				require $file_name;
				self::$classMap[$class]=$class;
			}else{
				return false;
			}
		}
		
	}
	
	
	
	
}