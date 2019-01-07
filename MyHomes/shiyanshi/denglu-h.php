<?php
/**
 * 登陆后端
*/
header("Content-type: text/html; charset=utf-8");
$usename=$_POST['username']; //接受用户名
$passname=$_POST['password'];//接受密码
//$autologin=$_POST['check'];//接受是否自动登录
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
$link=@mysqli_connect("$host","$user","$pass","t2","3306");
@mysqli_set_charset($link,"utf8");
mysqli_select_db($link,'file');//选择数据表
$sql="select id,username,password from file WHERE username='{$usename}'&&password='{$passname}'";//找到用户信息
$result=mysqli_query($link,$sql);
if(mysqli_num_rows($result)==1)
{
    $row=mysqli_fetch_assoc($result);
    setcookie('usename',$usename,strtotime("+1 hours"));
    //加密操作
    $key=md5($usename.$passname).":".$row['id'];
    setcookie('key',$key,strtotime("+1 hours"));
}
else
{
    exit("<script>
    alert('用户名或密码错误！');
    location.href='index.php';
    </script>");
}
?>