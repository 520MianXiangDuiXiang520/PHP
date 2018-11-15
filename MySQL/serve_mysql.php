
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
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
        header("Location: create_table.php");//创建数据表
    }break;
    case 2:header("Location: add.php");break;//插入记录
    case 3:header("Location: find_inf.php");break;//查找记录
    case 4:header("Location: add_col.php");break;//添加列
    case 5:header("Location: drop_col.php");break;//删除列
    case 6:header("Location: update_inf.php");break;//修改记录
    case 7:header("Location: drop_inf.php");break;//删除记录
}
?>
</body>
</html>
