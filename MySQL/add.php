<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>插入记录</title>
</head>
<body>
<form action="add.php" method="post">
    请输入要插入的数据表：<br/>
    <input type="text" name="db"/>
    <input type="submit" value="确定"/>
    <label for="name">请输入姓名：</label>
    <input type="text" name="nam" id="name"/>
    <label for="ip">请输入id:</label>
    <input type="text" id="ip" name="id"/>
    <label for="sex">输入性别：</label>
    <input name="sex" id="sex"/>
</form>
<?php
$dbname=$_POST['db'];
$get_name=$_POST['nam'];
$get_id=$_POST['id'];
$get_sex=$_POST['sex'];
$host='127.0.0.1';
$user='root';
$pass='root';
$link=@mysqli_connect($host,$user,$pass,"t2");
@mysqli_set_charset($link,"utf8");
/* 
if(!$link)
{
    echo '数据库连接失败!:';
}
else
{
    echo "链接成功";
}
*/
mysqli_select_db($link,$dbname);
$name=$get_name;
$id=$get_id;
$sex=$get_sex;
$sq = "insert into $dbname(id,name,sex) VALUE ('$id','$name','$sex')";
if (mysqli_query($link,$sq))
{
    echo"success!";
}

?>
<br />
<br/>
<form action="firstpag_mysql.php" method="post">
    <input type="submit" value="返回主页面"/>
</form>
</body>
</html>
