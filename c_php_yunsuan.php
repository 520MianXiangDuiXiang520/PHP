<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/5
 * Time: 19:56
 */
header("Content-type: text/html; charset=utf-8");
$getnum1=$_POST['getnum'];
echo "九九乘法表";
echo '<br />';
//九九乘法表运算，空格可以使用中文全角
function chengfabiao()
{
    $i1=1;
    $j1=1;
    for ($i = $i1; $i <= 9; $i++)
    {
        for ($j = $j1; $j <= 9; $j++)
        {
            $p = $i * $j;
            echo " "."\t\t".$i."*".$j."=".$p." 　　　　";
            $i1++;

        }
        echo '<br />';
        $j1++;
    }
}
//奇数偶数判断
function jioupanduan()
{
    $getnum1=$_POST['getnum'];
    for($i=2;$i<$getnum1;$i++)
    {
        if($getnum1%$i==0)
        {
            echo '<br />';
            echo $getnum1."是偶数！<br />";
            echo '<br />';
            exit();
        }
        else
        {
            echo '<br />';
            echo $getnum1."是奇数！<br />";
            echo '<br />';
            exit();
        }
    }
}
chengfabiao();//乘法表
jioupanduan();//奇数偶数
?>
