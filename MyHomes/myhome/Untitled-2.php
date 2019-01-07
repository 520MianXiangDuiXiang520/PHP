<!--注册前端-->
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
		color:oldlace;

    <?php
     $r=mt_rand(0,120);
        $g=mt_rand(0,120);
        $b=mt_rand(0,120);
    ?>

	YZ{
        color: rgb(10,120,30);
    }
    }
	</style>
</head>

<body background="http://img04.sogoucdn.com/app/a/100520146/e0c1e3a36e8de836de75caa55118e284
" style="background-repeat: no-repeat; background-size: 100% 100%; background-attachment: fixed">
<h1>用户注册</h1>
<div class="div">
<form method="post" action="new 2.php">
    <label for="usename" ><c>用户名：</c>&nbsp; &nbsp;</label>
    <input type="text" name="usename" id="use" style="background-color: transparent;border: ;width: 250px;height: 30px "/>
   <br /> <br />
    <label for="pass"><c>密码：</c> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp</label>
    <input type="password" name="pass" style="background-color: transparent; border:  ;width: 250px;height: 30px" />
    <br /> <br />
    <label for="aa" ><c>确认密码:</c>&nbsp;&nbsp;</label>
     <input type="password" name="pass2" style="background-color: transparent; border:  ;width: 250px;height: 30px"/>
     <br /> <br />
    <label for="yanzheng" ><c>验证码：</c>&nbsp; &nbsp;</label>
    <input type="text" name="y1" style="background-color: transparent; border: ;width: 250px;height: 30px"/>
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
    <input type="submit" value="确定" style="background-color: transparent; width: 100px ;height: 30px;color: azure"  />
    <input type="reset" value="清除"style="background-color: transparent; width: 100px ;height: 30px;color: azure" />

    <br />   <br />   <br />
    </form>
<form action="dengluhouduan.php" method="post">
    <input type="submit" value="返回登录"style="background-color: transparent; width: 100px ;height: 30px;color: azure"/>
</div>
</form>
    <br />
    <br />
    <br />

<form>
   <a href="mailto:1771795643@qq.com">邮件反馈意见</a>
</body>
</html>
<?php
