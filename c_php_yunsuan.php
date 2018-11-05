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
chengfabiao();
?>