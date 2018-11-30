<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/30
 * Time: 19:34
 */
$high=255;
$width=255;
$image=imagecreatetruecolor($width,$high);//创建画布
$red=imagecolorallocate($image,255,0,0);
$bule=imagecolorallocate($image,0,0,255);
$green=imagecolorallocate($image,0,255,0);
//画一个渐变色玩玩
for($r=0;$r<100;$r++)
{
    for($j=0;$j<100;$j++)
    {
       // for($b=100;$b>0;$b--)
      //  {
            $color=imagecolorallocate($image,$r,$j,0);
            imageline($image,$r,0,$r,$width,$color);
       // }
    }
}
//三重循环电脑跑不出来了，哈哈哈，估计是显卡太垃圾

header('content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);