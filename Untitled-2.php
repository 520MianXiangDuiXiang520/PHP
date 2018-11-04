<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php入门</title>
	<style type="text/css">
	h1{
	color:BLUE;
    }
	c{
		color:#FC3;

    <?php
     $r=mt_rand(0,120);
        $g=mt_rand(0,120);
        $b=mt_rand(0,120);
    ?>

	YZ{
        color: rgb(10,120,30);
    }

		
	</style>
</head>

<body background="01fbf555440e780000019ae9e76690.jpg@1280w_1l_2o_100sh.jpg">
<h1>用户注册</h1>
<form method="post" action="new 2.php">
    <label for="usename" ><c>用户名：</c>&nbsp; &nbsp;</label>
    <input type="text" name="usename" />
    <br />
    <br />
    <label for="pass"><c>密码：</c> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="password" name="pass" />
    <br />
    <br />
    <label for="aa" ><c>确认密码:</c></label>
     <input type="password" name="pass2"/>
     <br />
    <label for="yanzheng" ><c>验证码：</c>&nbsp; &nbsp;</label>
    <input type="text" name="y1" />
    <!--产生随机验证码-->
    <?php
    $yanzheng="zbcdefghijklmnopqrstuvwxyz0123456789";
    $put='';
    for ($i=0;$i<4;$i++)
    {
        $YZ = $yanzheng{mt_rand(0, strlen($yanzheng) - 1)};


       $put.= '<span style="color:rgb(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ')">' . $yanzheng{mt_rand(0, strlen($yanzheng) - 1)} . '</span>';


    }
    ?>
    <?php echo $put?>
    <input type="hidden" name="y2" value='<?php echo strip_tags($put);?>'><!--隐藏域-->
     <hr />
    <input type="submit" value="确定" />
    <input type="reset" value="清除" />
    </form>
<form action="dengluhouduan.php" method="post">
    <input type="submit",value="返回登录"/>
</form>
    <br />
    <br />
    <br />
     <img src="http://i1.bvimg.com/666989/6d164213b04944a6.jpg" alt="加载失败" title="图片"  width="473" height="258"/>

<form>
   <a href="mailto:1771795643@qq.com">电子邮件</a>
</body>
</html>
<?php
