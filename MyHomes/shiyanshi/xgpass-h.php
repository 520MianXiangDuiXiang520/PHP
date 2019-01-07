<?php
header("Content-type: text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/20
 * Time: 15:31
 */
$newpass=$_POST['new'];
$oldpass=$_POST['old'];
$key = $_COOKIE['key'];
//找到cookle中的用户id ，与数据库中做对比，如果有，判断key是否正确，否则返回登录
$resarr = explode(":", $key);
$useid = end($resarr);
//接入数据库
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port = 3306;
$link = @mysqli_connect("$host", "$user", "$pass", "t2", "3306");
@mysqli_set_charset($link, "utf8");
mysqli_select_db($link, 'file');//选择数据表
$sql = "select * from file WHERE id=$useid";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$password_t = $row['password'];
echo $password_t;
echo $oldpass;
if($oldpass!=$password_t)
{
    exit("<script>
             alert('原密码不正确！');
            location.href='xgpass.php';
                </script>");

}
$sql = "update file set password='$newpass'WHERE id='$useid'";
if($result = mysqli_query($link, $sql))
{
    exit("<script>
             alert('修改成功！');
            location.href='denglu.php';
                </script>");
}