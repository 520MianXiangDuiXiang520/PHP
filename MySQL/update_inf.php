<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>更新记录</title>
</head>
<body>
<form action="update_inf.php" method="post">

    <label for="table_name">请输入要更新的数据表名称：</label>
    <input type="text" id="table_name" name="tab" value="vvvv"/>

    请输入要修改的记录：
    <input type="text" name="up_inf" value="col_name1={exper}"/>

    <label for="where">请输入更新条件：</label>
    <input type="text" name="where" id="where" value="null"/>

    <input type="submit" value="确定"/>
</form>
<?php
$up_inf=$_POST['up_inf'];
$tal=$_POST['tab'];
$why=$_POST['where'];
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
mysqli_select_db($link,'study');
$sql="UpDATE $tal SET $up_inf WHERE $why";

if(mysqli_query($link,$sql))
{
    echo "success!";
}
else{
    echo "error!!!";
}
?>
<br />
<br/>
<form action="firstpag_mysql.php" method="post">
    <input type="submit" value="返回主页面"/>
</form>
</body>
</html>