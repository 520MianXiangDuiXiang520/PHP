<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/17
 * Time: 18:55
 */
//如果不设置访问时间，则cookle为内存cookle，浏览器关闭即销毁
setcookie("name","zhangshao");
//设置访问时间后,单位秒，cookle变为硬盘cookle,访问时间截至，cookle销毁
setcookie("name1","zhangjunbao",time()+200,'/');