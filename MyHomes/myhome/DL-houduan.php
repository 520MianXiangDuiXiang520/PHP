<?php
/**
 * 登陆后端
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/3
 * Time: 19:05
 */
header("Content-type: text/html; charset=utf-8");
$usename=$_POST['usename']; //接受用户名
$passname=$_POST['pass'];//接受密码
$autologin=$_POST['check'];//接受是否自动登录
echo $autologin;
//接入数据库
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
$link=@mysqli_connect("$host","$user","$pass","t2","3306");
@mysqli_set_charset($link,"utf8");
mysqli_select_db($link,'yonghu');//选择数据表
$sql="select id,username,password from yonghu WHERE username='{$usename}'&&password='{$passname}'";
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)==1)
{
    //如果用户选择自动登录，则cookle类型设置为硬盘cookle
    if($autologin==1)
    {
        $row=mysqli_fetch_assoc($result);
        setcookie('usename',$usename,strtotime("+1 hours"));
        //加密操作
        $son="zeianquan";
        $key=md5($usename.$passname.$son).":".$row['id'];
        setcookie('key',$key,strtotime("+1 hours"));
    }
    //否则，将cookle设置为会话cookle
    else
    {
        setcookie('$usename',$usename);
    }
    exit("<script>
    alert('登录成功！');
    location.href='gerenjianjie.php';
    </script>");
}
else
{
    exit('用户名或密码错误.<a href="Untitled-2.php">重新注册</a>');
}
?>