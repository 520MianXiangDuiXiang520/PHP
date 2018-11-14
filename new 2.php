
 <?php
 /***********************
 //注册后端**************
  **********************/
 header("Content-type: text/html; charset=utf-8");
 //接收数据
  $usename=$_POST['usename']; //接受用户名
  $passname=$_POST['pass'];//接受密码
 $passname2=$_POST['pass2'];//接受密码
$y1=$_POST['y1'];//接收用户输入的验证码
 $y11=strip_tags($y1);
 $y2=$_POST['y2'];
 $y22=strip_tags($y2);
  //判断用户名是否合法
  $first_usename=substr($usename,0,1);//取出用户名第一个字母
  $ascii_usename=ord($first_usename);//第一个字母转换为ASCII值
  if(!(($ascii_usename>=65&&$ascii_usename<=90)||($ascii_usename>=97&&$ascii_usename<=122)))
  {
	 exit('用户名首字母不合法.<a href="Untitled-2.php">重新注册</a>');
  }
  if(!(strlen($usename)>=5&&strlen($usename)<=12))
	 {
         exit('用户名长度不合法.<a href="Untitled-2.php">重新注册</a>');
	 }
 if(!(strlen($passname)>=5&&strlen($passname)<=12))
 {
     exit('密码长度不合法.<a href="Untitled-2.php">重新注册</a>');
 }
 if(!($passname==$passname2))
 {
     exit('两次密码不一致.<a href="Untitled-2.php">重新注册</a>');
 }
 if($y11!==$y22){
     exit('验证码有误请.<a href="Untitled-2.php">重新注册</a>');
 }

  $myfile = fopen("username.txt", "a") or die("Unable to open file!");//新建文件夹用来储存username
  fwrite($myfile, $usename."#".$passname."#");//把注册的用户名和密码写入文件

$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
$link=@mysqli_connect("$host","$user","$pass","t2","3306");
@mysqli_set_charset($link,"utf8");
 /*if(!$link)
 {
     echo '数据库连接失败:';
 }
 else
 {
     echo "链接成功";
 }
/*********************************************************************************************/
/*                                                                                           */
/*********************************创建数据表***************************************************/
/*                                                                                            */
/**********************************************************************************************
$sql = "CREATE TABLE yonghu (
username VARCHAR (25), 
password VARCHAR(30) NOT NULL
)";
 if(mysqli_query($link,$sql))
 {
     echo "创建成功！";
 }
 else{
     echo "创建数据表错误";
 }
****************************************************************************************************/

/********************************************插入记录************************************************/

/****************************************************************************************************/

mysqli_select_db($link,'yonghu');
$name=$usename;
$passwo=$passname;
$sq = "insert into yonghu(username,password) VALUE ('$name','$passwo')";
 mysqli_query($link,$sq);

 //fopen("$YZfile","w+");//清空文件内容
 fclose($myfile);
 exit('注册成功.<a href="dengluhouduan.php">返回登陆</a>');
 ?>
