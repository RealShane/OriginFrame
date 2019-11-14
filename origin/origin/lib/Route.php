<?php
namespace origin\lib;
class Route{
	public $controller;
	public $method;
	public function __construct(){
		
		//判断URL是否填写
		if(!(isset($_SERVER["REQUEST_URI"]) && $_SERVER["REQUEST_URI"] != '/')){
			$this -> controller = 'index';
			$this -> method = 'index';
		}
		
		$path = $_SERVER["REQUEST_URI"];
		//截取public(包含public)之后的字符串
		$path = substr($path, strpos($path, "public"));
		$path_str = explode('/', trim($path, '/'));
		
		//控制器赋值
		if(isset($path_str[1])){
			$this -> controller = $path_str[1];
		}
		//方法赋值
		if(isset($path_str[2])){
			$this -> method = $path_str[2];
		}
		
	}
}