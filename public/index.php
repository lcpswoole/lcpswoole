<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// [ 应用入口文件 ]
if(PHP_SAPI != 'cli'){
    die("Please use php cli mode.\n");
}
$file = __DIR__.'/../vendor/autoload.php';
if (file_exists($file)) {
    require_once $file;
}else{
    die("include composer autoload.php fail\n");
}
$commandList = $argv;
array_shift($commandList);

$mainCommand = array_shift($commandList);
switch ($mainCommand) {
    case 'start':
        {
//            \lcpswoole\Loader::getInstance()->_init();
            \lcpswoole\Error::register();
            // 执行应用并响应
			var_dump(22222);die();
            \lcpswoole\Container::get('app')->run()->send();
        }
    case 'stop':
        {
           echo 'dsadsa';
        }
    case 'reload':
        {

        }
    case 'help':
    default:{

        }
}

// 支持事先使用静态方法设置Request对象和Config对象

