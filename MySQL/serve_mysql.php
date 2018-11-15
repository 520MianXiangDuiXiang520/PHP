
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首页</title>
</head>
<body>
<h1>php_mysql</h1>
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/15
 * Time: 13:42
 */
$getnum=$_POST['choose'];
//echo $getnum;
switch ($getnum)
{
    case 1:{
        header("Location: create_table.php");
    }break;
    case 2:header("Location: add.php");break;
}
?>
</body>
</html>
