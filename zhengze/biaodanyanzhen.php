<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>php表单验证</title>
</head>
<body>
<h1>正则表达式 表单验证</h1>
<form action="yanzhen-HD.php" method="post">
    <label for="name" >用户名</label>
    <input id="name" name="name" type="text"/>
    <br />
    <label for="email" >邮箱</label>
    <input type="text" id="email" name="email"/>
    <br/>
    <label for="tel">电话</label>
    <input type="text" name="tel" id="tel"/>
    <br/>
    <input type="submit" value="确定"/>
    <input type="reset" value="清除"/>
</form>
</body>
</html>