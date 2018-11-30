<?php
// draw 绘图
// 六脉神剑
// 1. 创建画布, 并返回资源
// image  create  true  color() 创建真彩图
$img = imagecreatetruecolor(500,500);

// 2. 颜色分配    allocate  分配,配置
$white = imagecolorallocate($img, 255,255,255);
$red = imagecolorallocate($img, 255,0,0);
$green = imagecolorallocate($img, 0,255,0);
$blue = imagecolorallocate($img, 0,0,255);
$yellow = imagecolorallocate($img, 255, 255, 0);

// 3. 打底色( 填充颜色 )
// imagefill(图像资源, int x, int y, 颜色)
imagefill($img, 10, 20, $yellow);

// 4. 具体画图操作
// 画点
// imagesetpixel( 资源, x,y, color);
// for($i=0; $i<50; $i++){
//  imagesetpixel($img, $i,$i, $red);
// }

// 画线
// imageline(资源, x1,y1, x2,y2, color)
//
// 画矩形
// imagefilledrectangle(资源, x1,y1, x2,y2, color)
//
// 画多边形
// imagefilledpolygon(资源, array, num_points, color)
// 例: array(10,20,  30,50, 60,90 ) 三点
//     num_points: 点的个数
//
// 画椭圆
// imagefilledellipse(资源, x,y, width, height, color)
// 提示:  x,y => 圆心坐标
//      width: 椭圆的宽度.
//      height:椭圆的高度.
//
// 画弧线
// imagearc(资源, x,y, width,height, start,end, color)
// 提示:
//      x,y =>  弧线的圆心坐标
//      start =>  弧线起点
//      end   =>  弧线终点
//      start,end : 以角度指定start,end  0: 三点钟方向. 顺时针方向
//      width,height  =>  弧线宽高
//
// 画扇形
// imagefilledarc(资源, x,y, w,h, s,e, color, style);
// 提示: style:
//          1. IMG_ARC_PIE      产生圆形边界
//          2. IMG_ARC_CHORD    用直线连接了起始点
//          3. IMG_ARC_NOFILL   弧或弦 只有轮廓, 不填充
//          4. IMG_ARC_EDGED    用直线将起始点与中心点相连
//  例: imagefilledarc($img, 400,150, 150,200, 0,100, $white, IMG_ARC_PIE)
//
//
//  水平画一个字符
//  imagechar(资源, font-size, x,y, 字符, color)
//  提示: font-size: 字体大小 范围 1~5
//
//  垂直画一个字符
//  imagecharup(同上)
//
//  水平画字符串
//  imagestring(同上)
//
//  垂直画字符串
//  imagestringup(同上)
//
//  写汉字
//  imagettftext(资源, 大小, 角度, x,y, color, 字体文件, 汉字)
//  例: imagettftext($img, 15, 0, 20,20, $white, './font.ttf', '呵呵');
//  提示: 大小默认单位px
//        角度: 0~360
//        字体文件: 需自己加载 字体格式文件(ttf,svg, eog等)
//


// 5. 保存或者输出图片
header('content-type:image/jpeg; charset=utf-8');
imagejpeg($img);

// 6. 关闭图像资源  销毁资源    destroy  销毁
imagedestroy($img);

?>

作者：孤岛渔夫
链接：https://www.jianshu.com/p/b7763c25ff20
來源：简书
简书著作权归作者所有，任何形式的转载都请联系作者获得授权并注明出处。