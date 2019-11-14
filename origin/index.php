<?php
/*
**入口文件
*/

define('BASE', __DIR__);//地址IMOOC
define('ORIGIN', BASE.'/origin');//核心文件CORE
define("app", BASE.'/app');//项目目录APP
define("app_debug", true);//DEBUG

if(app_debug){
	ini_set('display_error', 'on');
}

require ORIGIN.'/common/fun.php';
require ORIGIN.'/Base.php';

spl_autoload_register('\origin\Base::auto_load');

\origin\Base::run();