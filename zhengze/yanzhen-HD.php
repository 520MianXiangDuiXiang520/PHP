<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/17
 * Time: 16:03
 */
$pattern_name='/^[a-zA-Z](\w){5,11}$/';
$pattern_email='/^\w+(\.\w+)*@(\w+\.)+\w+$/';
$pattern_tel='/^1(3|5|6|8)[0-9]{9}$/';

$subject_tel=$_POST['tel'];
$subject_email=$_POST['email'];
$subject_name=$_POST['name'];

$nam=preg_match($pattern_name,$subject_name);
if($nam==0)
{
    exit( '用户名格式有误，.<a href="biaodanyanzhen.php">请重新输入</a>');
}

$e=preg_match($pattern_email,$subject_email);
if($e==0)
{
    exit( '邮箱格式有误，.<a href="biaodanyanzhen.php">请重新输入</a>');
}

$p=preg_match($pattern_tel,$subject_tel);
if($p==0)
{
    exit( '电话号码格式有误，.<a href="biaodanyanzhen.php">请重新输入</a>');
}
echo "登陆成功！！！";
?>