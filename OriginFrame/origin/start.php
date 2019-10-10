<?php
define('ORIGIN',__DIR__);//根目录
define('BODY',ORIGIN.'/../body');//项目目录
define('DEBUG',true);//调试模式

//判断调试是否打开
if(DEBUG){
	ini_set('display_error','on');
}else{
	ini_set('display_error','off');
}

require __DIR__.'/Base.php';

spl_autoload_register('\origin\Base::auto_load');

\origin\base::fire(Route);