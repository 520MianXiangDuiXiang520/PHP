
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
function sushupanduan($x)
{
   global $getnum1;//使用全局变量必须用global声明
    for($i=2;$i<$x;$i++)
    {
        if($x%$i==0) {
            echo '<br />';
            return -1;//返回-1为合数
            echo '<br />';
            break;
        }
        if($i==$x-1){
           return 1;//返回1为素数
        }
    }
}
//斐波那契数列
function feibonaqie()
{
    $a=1;
    $b=1;
    for($i=1;$i<=20;$i++)
    {
        echo $a."　　　　　　　　";
        echo $b."　　　　　　　　";
        if($i%2==0)
        {
            echo "<br />";
        }
        $a=$a+$b;
        $b=$a+$b;
    }

}

function sushugeshu()
{
    global $getnum1;
    $n=$getnum1;
    $num=0;
    for($i=1;$i<$n;$i++)
    {
        if(sushupanduan($i)==1)
        {
            echo $i."　　　　　";
            $num++;
        }

    }
    echo "<br />";
    echo "<br />";
    echo $n."以内有".$num."个素数";
    echo "<br />";echo "<br />";
}

chengfabiao();
"<br />";
"<br />";
sushupanduan($getnum1);

"<br />";
"<br />";
echo "斐波那契数列<br />";
"<br />";
feibonaqie();
"<br />";
"<br />";
sushugeshu();
?>

