<?php
session_start();
$se=$_SESSION['captcha'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<img  id="img" src="./captcha.php?r=<?php echo rand()?>" alt=""/>
    <form action="Demo.php" method="post">
        <input type="text" name="captcha">
        <input type="submit" value="确定">
    </form>
<a onclick="document.getElementById('img').src='./captcha.php?r='+Math.random()">看不清，换一个</a>
</body>
</html>
<?php

$cap=$_POST['captcha'];
if($cap==$se){
    exit("<script>alert('验证成功！')</script>");
}
else{
    exit("<script>alert('验证失败！')</script>");
}
?>