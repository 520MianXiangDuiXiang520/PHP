<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/20
 * Time: 16:51
 */
$buy1=$_GET['id'];
$buy2=$_GET['id'];
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
$link=@mysqli_connect("$host","$user","$pass","t2","3306");
@mysqli_set_charset($link,"utf8");
mysqli_select_db($link,'shop');
if($buy1==1) {
    $buyid = $buy1;
}
if($buy2==2)
{
    $buyid=$buy2;
}
    $sql="select * from shop WHERE id='$buyid'";
    $err=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($err);
    $num=$row['numbe'];
    $name=$row['name'];

    $num--;
echo $num;
    $sql1="update shop set numbe='$num'WHERE id='$buyid'";
    mysqli_query($link,$sql1);
header("location: shop.php")
?>
