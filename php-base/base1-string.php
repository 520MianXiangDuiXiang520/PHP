<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/2
 * Time: 12:14
 */
header("content-type:text/html;charset=utf-8");
$str="\r\r'sel/ect * fr[om' us\\er where 1=1;-- '";
$str1=trim($str,"\r'");
$str2=rtrim($str,"\r'");
$str3=ltrim($str,"\r'");
$str4=addslashes($str);
$str5=stripcslashes($str4);
$str6=addcslashes($str,'a..g');
$str7=stripcslashes($str6);
echo "源字符串"."<br />".$str."<br />";
echo "去除首尾特点字符后的字符串"."<br />".$str1."<br />";
echo "去除开头特点字符后的源字符串"."<br />".$str2."<br />";
echo "去除结尾特点字符后的源字符串"."<br />".$str3."<br />";
echo "转义后字符串"."<br />".$str4."<br />";
echo "源转义后复原的字符串"."<br />".$str5."<br />";
echo "对特定字符转义后字符串"."<br />".$str6."<br />";
echo "源转义后复原的字符串"."<br />".$str7."<br />";