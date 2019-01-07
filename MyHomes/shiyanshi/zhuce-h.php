
<?php
/***********************
//注册后端**************
 **********************/
header("Content-type: text/html; charset=utf-8");
//接收数据
$usename=$_POST['usename']; //接受用户名
$passname=$_POST['pass'];//接受密码
//$passname2=$_POST['pass2'];//接受密码
//$y1=$_POST['y1'];//接收用户输入的验证码
//$y11=strip_tags($y1);
$y2=$_POST['y2'];
$y22=strip_tags($y2);
/*
//判断用户名是否合法
$first_usename=substr($usename,0,1);//取出用户名第一个字母
$ascii_usename=ord($first_usename);//第一个字母转换为ASCII值
/*
if(!(($ascii_usename>=65&&$ascii_usename<=90)||($ascii_usename>=97&&$ascii_usename<=122)))
{
    exit('用户名首字母不合法.<a href="zhuce.php">重新注册</a>');
}
if(!(strlen($usename)>=5&&strlen($usename)<=12))
{
    exit('用户名长度不合法.<a href="zhuce.php">重新注册</a>');
}
if(!(strlen($passname)>=4&&strlen($passname)<=12))
{
    exit('密码长度不合法.<a href="zhuce.php">重新注册</a>');
}
/*
if(!($passname==$passname2))
{
    exit('两次密码不一致.<a href="zhuce.php">重新注册</a>');
}
if($y11!==$y22){
    exit('验证码有误请.<a href="zhuce.php">重新注册</a>');
}*/
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
$link=@mysqli_connect("$host","$user","$pass","t2","3306");
@mysqli_set_charset($link,"utf8");
mysqli_select_db($link,'file');
$name=$usename;
$passwo=$passname;
//
$path="tmp/timg (2).jpg";
//
$sq = "insert into file(username,password,sec) VALUE ('$name','$passwo','$path')";
mysqli_query($link,$sq);

exit("<script>
                 alert('注册成功！');
                 location.href='login.php';
             </script>");
?>
