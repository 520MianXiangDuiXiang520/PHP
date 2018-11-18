
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/5
 * Time: 19:56
 */
error_reporting( E_ALL&~E_NOTICE );
header("Content-type: text/html; charset=utf-8");
$getnum1=$_POST['getnum'];
//echo "九九乘法表";
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
function sushupanduan1($x)//求素数暴力算法
{
   //global $getnum1;//使用全局变量必须用global声明
    if($x==1)
    {
        return -1;
    }
    if($x==2)
    {
        return 1;
    }
    for($i=3;$i<=$x;$i++)
    {
        if($x%$i==0) {
            return -1;//返回-1为合数
            break;
        }
        if($i==$x-1){
           return 1;//返回1为素数
        }
    }
}
/*大于一半后不可能整除，就不再循环，*/
function sushupanduan2($x)//求素数暴力算法1.1
{
    //global $getnum1;//使用全局变量必须用global声明
    if($x==1)
    {
        return -1;
    }
    if($x==2)
    {
        return 1;
    }
    for($i=3;$i<=($x/2);$i++)
    {
        if($x%$i==0) {
            return -1;//返回-1为合
        }
    }
    return 1;//返回1为素数
}
/*求素数暴力算法1.2     排除所有偶数*/
function sushupanduan3($x)//求素数暴力算法1.1
{
    //global $getnum1;//使用全局变量必须用global声明
    if($x==1||($x>2&&$x%2==0))
    {
        return -1;
    }
    if($x==2)
    {
        return 1;
    }
    for($i=3;$i<=($x/2);$i+=2)
    {
        if($x%$i==0) {
            return -1;//返回-1为合
        }
    }
    return 1;//返回1为素数
}
/*求素数暴力算法1.3    排除所有偶数*/
function sushupanduan4($x)//求素数暴力算法1.1
{
    //global $getnum1;//使用全局变量必须用global声明
    if($x==1||($x>2&&$x%2==0))
    {
        return -1;
    }
    if($x==2)
    {
        return 1;
    }
    for($i=3;$i<=sqrt($x);$i+=2)
    {
        if($x%$i==0) {
            return -1;//返回-1为合
        }
    }
    return 1;//返回1为素数
}
//斐波那契数列
function feibonaqie()
{
    echo "斐波那契数列<br />";
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
    for($i=1;$i<=$n;$i++)
    {
        if(sushupanduan4($i)==1)
        {
            echo $i."　　";
            $num++;
        }

    }
    echo "<br />";
    echo "<br />";
    echo "暴力输出".$n."以内有".$num."个素数";
    echo "<br />";
    echo "<br />";
}
/*埃拉托色尼选筛法求100以内素数个数，每次筛选去n的倍数*/
function AL_sushu()
{
    $N = 100;
$a=array();
    for($i=0;$i<100;$i++)
    {
        $a[$i]=$i;
    }
    for($i=2;$i<100;++$i)
    {
        if($i<100)
        {
            for($j=$i;$j<100;++$j)
            {
                for($k=2;$k<100/$j;$k++)
                {
                    $a[$j*$k]=0;
                }
            }
        }
        if($a[$i]!=0)
        {
           echo $a[$i]."　　　　　";
        }
    }
}
function wanshu($u)
{
    $i=0;
    for($x=1;$x<=$u;$x++)
	{
        $sum = 0;
        for($b=1;$b<$x;$b++)
		{
            if($x%$b==0)
                $sum=$sum+$b;
        }
        if($sum==$x)
        {
            echo "完数:".$sum."　　　";
            $i++;
        }
    }
    echo "<br />have ".$i."<br />";
}
function juzhen()
{

    $a0=array(0,1,2,3);
    $a1=array(4,5,6,7);
    $a2=array(8,9,10,11);
    $a3=array(12,13,14,15);
    $a=array($a0,$a1,$a2,$a3);
    $b0=array();
    $b1=array();
    $b2=array();
    $b3=array();
    $b=array($b0,$b1,$b2,$b3);
    echo "转换前的矩阵为：<br />";
    for($i=0;$i<4;$i++)
    {
        for($j=0;$j<4;$j++)
        {
            echo $a[$i][$j]."　　　";
        }
        echo "<br />";
    }
    for($i=0;$i<4;$i++)
    {
        for($j=0;$j<4;$j++)
        {
            $b[3-$j][$i]=$a[$i][$j];
        }
    }
    echo "逆时针旋转90'后的矩阵为：<br />";
    for($i=0;$i<4;$i++)
    {
        for($j=0;$j<4;$j++)
        {
            echo $b[$i][$j]."　　　";
        }
        echo "<br />";
    }
    for($i=0;$i<4;$i++)
    {
        for($j=0;$j<4;$j++)
        {
            $b[$j][3-$i]=$a[$i][$j];
        }
    }
    echo "顺时针旋转90'后的矩阵为：<br />";
    for($i=0;$i<4;$i++)
    {
        for($j=0;$j<4;$j++)
        {
            echo $b[$i][$j]."　　　";
        }
        echo "<br />";
    }

}

    function sanjiao()
    {

        $a1 = array();
        $a2 = array();
        $a3 = array();
        $a4 = array();
        $a5 = array();
        $a6 = array();
        $a7 = array();
        $a8 = array();
        $a = array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8);
        for($i=0;$i<8;$i++)
        {
            for($j=0;$j<8;$j++)
            {
                if($i==$j||$j==0)
                {
                    $a[$i][$j]=1;
                }
                elseif ($j>$i)
                {
                    $a[$i][$j]=NULL;
                }
                else
                {
                    $a[$i][$j]=$a[$i-1][$j-1]+$a[$i-1][$j];
                }
            }
        }
        for($i=0;$i<8;$i++)
        {
            for($j=0;$j<8;$j++)
            {
                echo $a[$i][$j]."　　　";
            }
            echo "<br />";
        }
    }
function fanxu()
{
    $str=$_POST['fanxu'];
    $strLen=strlen($str);
    echo "转换前字符串为：".$str."<br />";
    for($i=0;$i<$strLen-1;$i++)
    {
        if($strLen-$i-$i-1>=1)
        {
            $p=$str{$i};
            $str{$i}=$str{$strLen-$i-1};
            $str{$strLen-$i-1}=$p;
        }

    }
    echo "转换后字符串为：".$str."<br />";
}
//求PI的值
function qiuPI()
{
    $ppi = 2;
    $temp = 2;            //初始化pi值和临时值
	$numerator = 1;
	$denominator = 3; //初始化分子和分母

	while($temp > 1e-16)                //数列大于指定精度
    {
        $temp = $temp*$numerator/$denominator;//计算一个数列的值
        $ppi += $temp;
        $numerator++;
        $denominator += 2;
    }
    echo $ppi;
}
//计算机
function jisuanqi()
{
   $n1= $_POST["n1"];
   $n2=$_POST["n2"];
   $fuhao=$_POST["fuhao"];
   if($fuhao=="+")
   {
       $s=$n1+$n2;
   }
   elseif ($fuhao=="-")
   {
       $s=$n1-$n2;
   }
   elseif ($fuhao=="*")
   {
       $s=$n1*$n2;
   }
   elseif ($fuhao=="/")
   {
       $s=$n1/$n2;
   }
   echo $s;
}
//回文
function huiwen()
{
    $h=$_POST['huiwen'];
    echo $h;
    $h_len=strlen($h);
    for($i=0;$i<$h_len/2;$i++)
    {
        if($h{$i}!=$h{$h_len-$i-1})
        {
            break;
        }
    }
    if($h_len/2-$i<1)
    {
        echo "是回文！<br />";
    }
    else
    {
        echo "不是回文！<br />";
    }
}
function chose()
{
    $post_chose=$_POST['chose'];
   switch ($post_chose)
   {
       case 1:chengfabiao();break;
       case 2:juzhen();break;
       case 3: sanjiao();break;
       case 4:qiuPI();break;
       case 5:feibonaqie();break;
       case 6:AL_sushu();break;
       case 7:wanshu(1000);break;
   }
}


fanxu();
jisuanqi();
huiwen();
echo "<hr />";
chose();
?>
