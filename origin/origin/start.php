<?php

define('BASE', __DIR__.'/..');//地址
define('ORIGIN', __DIR__);//核心文件
define("APP", BASE.'/app');//项目目录
define("app_debug", true);//DEBUG

if(app_debug){
	ini_set('display_error', 'on');
}

require ORIGIN.'/common/fun.php';
require ORIGIN.'/Base.php';

//类自动加载
spl_autoload_register('\origin\Base::auto_load');

\origin\Base::run_load();