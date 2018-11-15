<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>查找记录</title>
</head>
<body>
<form action="find_inf.php" method="post">
    请输入数据表名称：<br/>
    <input type="text" name="db_nam"/>
    <input type="submit" value="确定"/>
</form>
<?php
$db_name=$_POST['db_nam'];
$host='127.0.0.1';
$user='root';
$pass='root';
$link=@mysqli_connect($host,$user,$pass,"t2");
@mysqli_set_charset($link,"utf8");
/*
if(!$link)
{
    echo '数据库连接失败:';
}
else
{
    echo "链接成功";
}
*/
$find="select * from $db_name;";
$data=array();
$result=mysqli_query($link,$find);
while($row=mysqli_fetch_array($result))
{
    $data=$row;
    foreach ($data as $p)
    {
        echo $p."     ";
    }
    echo "<br />";
}
?>
<br />
<br/>
<form action="firstpag_mysql.php" method="post">
    <input type="submit" value="返回主页面"/>
</form>
</body>
</html>