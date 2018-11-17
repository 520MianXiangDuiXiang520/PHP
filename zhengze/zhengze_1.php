<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/16
 * Time: 18:53
 * 正则表达式
 */
header("Content-type: text/html; charset=utf-8");

$pattern='/[0-9]/';
$subject="gyg87yuhg765t6rtfygvhfct7";
$replacement="￥";
/****************************************************************************************************************************************************************************************************************************/
//preg_match($pattern,$subject,[array&matches])*****只进行一次匹配，返回值为匹配个数，只有0和1
//,preg_match_all($pattern,$subject,[array&matches])***匹配完全部目标数据，返回匹配个数
$m1=$m2=array();

$t1=preg_match($pattern,$subject,$m1);
$t2=preg_match_all($pattern,$subject,$m2);

show($m1);
echo "<hr />";
show($m2);
echo "<hr />";
show($t1.'||'.$t2);
echo "<hr />";

/*****************************************************************************************************************************************************************************************************************/
//preg_replace($pattern,$replacement,$subject)*****  $replacement替换成的字符，返回值为替换后的数据
//$fil=preg_filter($pattern,$replacement,$subject);
$re=preg_replace($pattern,$replacement,$subject);
$fil=preg_filter($pattern,$replacement,$subject);

show($re);
echo "<br />";
show($fil);

/*******************************************************************************************************************************************************************************************************************************/
//preg_replace和preg_filter的区别:当subject对应数组单元中没有满足正则表达式的值时，preg_replace会保留原来的数组单元，preg_filter会删除不符合表达式的数组单元，仅保留有满足表达式的单元

$pattern_rf=array('/[0123]/','/[456]/','/[789]/');
$replacement_rf=array('啊','西','吧');
$subject_rf=array('yty65','vh1jh','hghg','8uhhj','gggy');
$re_rf=preg_replace($pattern_rf,$replacement_rf,$subject_rf);
$fil_rf=preg_filter($pattern_rf,$replacement_rf,$subject_rf);

echo "<hr />";
show($re_rf);
echo "<br />";
show($fil_rf);

//preg_grep($pattern,$subject_rf)   在目标数组中匹配并且只保留匹配到的数组的单元，相当于preg_filter取消替换功能

$gr=preg_grep($pattern,$subject_rf);
echo "<hr />";
show($gr);
/******************************************************************************************************************************************************************************************************************/
//preg_split($pattern,$subject);    通过pattern 匹配字符串，并以匹配到的字符串作为分割点分割字符串，将分割得到的若干字符串保存到一个数组中，作为函数返回值返回

$spl=preg_split($pattern,$subject);
echo "<hr />";
show($spl);
echo "<hr />";
$str='{hhhhhhhhh[]}';
show($str);
echo "<br />";
$str=preg_quote($str);
show($str);
echo "<hr />";

$pattern_xz_TL='/\d.+zjb/';
$subject_xz="uuuhytftdr677tz7tdrzjbhbhzjbbhjzjb,,,";
$matches_xz_TL=array();
preg_match($pattern_xz_TL,$subject_xz,$matches_xz_TL);
show($matches_xz_TL);
echo "<br />";
$pattern_xz_LD='/\d.+zjb/U';
$matches_xz_LD=array();
preg_match($pattern_xz_LD,$subject_xz,$matches_xz_LD);
show($matches_xz_LD);
echo "<hr />";
/***************************************************************************************************************************************************************************************************************************/

function show($var=null)
{
    if(empty($var))//检测变量是否为空
    {
        echo 'null';
    }
    elseif (is_array($var)||is_object($var))//检测变量是否为数组或对象
    {
        echo '<pre>';
        print_r($var);
        echo '<pre>';
    }
    else
    {
        echo $var;
    }



}