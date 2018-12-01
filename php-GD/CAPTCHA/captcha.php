<?php
session_start();
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/1
 * Time: 14:57
 * 实现思路：使用GD库绘制图片和干扰元素，使用session实现验证
 */

 /*使用GD库绘制一个底图*/
$high=60;
$width=200;
$image=imagecreatetruecolor($width,$high);
$color=imagecolorallocate($image,255,255,255);
//填充背景为白色
imagefill($image,0,0,$color);
//产生4个随机数字
$var='';
$randvar="尿尾迟局改张忌际陆阿陈阻附妙妖妨努忍劲鸡驱纯纱纳纲驳纵纷纸纹纺驴纽奉玩环武青责现表规抹拢拔拣担坦押抽拐拖拍者顶拆拥抵拘势抱垃拉拦拌幸招坡披拨择抬其取苦若茂苹苗英范直茄茎茅林枝杯柜析板松枪构杰述枕丧或画卧事刺枣雨卖矿码厕奔奇奋态欧垄妻轰顷转斩轮软到非叔肯齿些虎虏肾贤尚旺具果味昆国昌畅明易昂典固忠咐呼鸣咏呢岸岩帖罗帜岭凯败贩购图钓制知垂牧物乖刮秆和季委佳侍供使例版侄侦侧凭侨佩货依的迫质欣征往爬彼径所舍金命斧爸采受乳贪念贫肤肺肢肿胀朋股肥服胁周昏鱼兔狐忽狗备饰饱饲变京享店夜庙府底剂郊废净盲放刻育闸闹郑券卷单炒炊炕炎炉沫浅法泄河沾泪油泊沿泡注泻泳泥沸波泼泽治怖性怕怜怪学宝宗定宜审宙官空帘实试郎诗肩房诚衬衫视话诞询该详建肃录隶居届刷屈弦承孟孤陕降限妹姑姐姓始驾参艰线练组细驶织终驻驼绍经贯奏春帮珍玻毒型挂封持项垮挎城挠政赴赵挡挺括拴拾挑指垫挣挤拼挖按挥挪某甚革荐巷带草茧茶荒茫荡荣故胡南药标枯柄栋相查柏柳柱柿栏树要咸威歪研砖厘厚砌砍面耐耍牵残殃轻鸦皆背战点临览竖省削尝是盼眨哄显哑冒映星昨畏趴胃贵界虹虾蚁思蚂虽品咽骂哗咱响哈咬咳哪炭峡罚贱贴骨钞钟钢钥钩卸缸拜看矩怎牲选适秒香种秋科重复竿段便俩贷顺修保促侮俭俗俘信皇泉鬼侵追俊盾待律很须叙剑逃食盆胆胜胞胖脉勉狭狮独狡狱狠贸怨急饶蚀饺饼弯将奖哀亭亮度迹庭疮疯疫疤姿亲音帝施闻阀阁差养美姜叛送类迷前首逆总炼炸炮烂剃洁洪洒浇浊洞测洗活派洽染济洋洲浑浓津恒恢恰恼恨举觉宣室宫宪突穿窃客冠语扁袄祖神祝误诱说诵垦退既屋昼费陡眉孩除险院娃姥姨姻娇怒架贺盈勇怠柔垒绑绒结绕骄绘给络骆绝绞统耕耗艳泰珠班素蚕顽盏匪捞栽捕振载赶起盐捎捏埋捉捆捐损都哲逝捡换挽热恐壶挨耻耽恭莲莫荷获晋恶真框桂档桐株桥桃格校核样根索哥速逗栗配翅辱唇夏础破原套逐烈殊顾轿较顿毙致柴桌虑监紧党晒眠晓鸭晃晌晕蚊哨哭恩唤啊唉罢峰圆贼贿钱钳钻铁铃铅缺氧特牺造乘敌秤租积秧秩称秘透笔笑笋债借值倚倾倒倘俱倡候俯倍倦健臭射躬息徒徐舰舱般航途拿爹爱颂翁脆脂胸胳脏胶脑狸狼逢留皱饿恋桨浆衰高席准座脊症病疾疼疲效离唐资凉站剖竞部旁旅畜阅羞瓶拳粉料益兼烤烘烦烧烛烟递涛浙涝酒涉消浩海涂浴浮流润浪浸涨烫涌悟悄悔悦害宽家宵宴宾窄容宰案请朗诸读扇袜袖袍被祥课谁调";
$arr_chinese=str_split($randvar,3);

for($i=0;$i<4;$i++){
    $tft='FZYTK.TTF';
    $chin=rand(0,917);
    $cap=$arr_chinese[$chin];
    $var.=$cap;
    $x=rand(($i*$width/4)+12,(($i+1)*$width/4)-15);
    $y=rand(40,45);
    $capcol=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
    $capsize=21;
    //array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
    imagettftext($image,$capsize,rand(0,90),$x,$y,$capcol,$tft,$cap);
}
//设置session
$_SESSION['captcha']=$var;
//产生干扰点
for($i=0;$i<200;$i++){
$pixelcol=imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
$x=rand(0,$width);
$y=rand(0,$high);
imagesetpixel($image,$x,$y,$pixelcol);
}
//产生干扰线段
for($i=0;$i<3;$i++){
    $linecol=imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
    $x=rand(0,$width);
    $y=rand(0,$high);
    $x1=rand(0,$width);
    $y1=rand(0,$high);
    imageline($image,$x,$y,$x1,$y1,$linecol);
}
header('content-type:image/jpeg');
imagejpeg($image);
imagedestroy($image);