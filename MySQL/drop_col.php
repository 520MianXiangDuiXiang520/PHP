<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>删除列</title>
</head>
<body>
<form action="drop_col.php" method="post">
    请输入要删除的列名称：<br/>
    <input type="text" name="col_nam" value="new"/>
    <input type="submit" value="确定"/>
</form>
<?php
$col_name=$_POST['col_nam'];
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
mysqli_select_db($link,'myuests');
$sql="ALTER TABLE myuests DROP $col_name";
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