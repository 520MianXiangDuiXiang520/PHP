<?php
/**
 * 登陆后端
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/3
 * Time: 19:05
 */
header("Content-type: text/html; charset=utf-8");
$myfile = fopen("username.txt", "r") or die("Unable to open file!");//打开username文件
$usename=$_POST['usename']; //接受用户名
$passname=$_POST['pass'];//接受密码
$userpass=$usename."#".$passname."#";
$userpassfile=file_get_contents('username.txt');//把文件中的内容读取为字符串

echo "<br/>";
//fread($myfile,filesize("webdictionary.txt"));
$DL=strpos($userpassfile,$userpass);
if($DL===false)
{
    exit('用户不存在.<a href="Untitled-2.php">重新注册</a>');
}
else{
    exit('登陆成功.<a href="zhuye.php">开始旅行</a>');
}
?>