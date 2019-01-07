<!--用户登录界面-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>面向对象</title>
    <style type="text/css">
        h1{
            color:BLUE;
        }
        c{
            color:#FC3;
        }
.zc input{
    position: absolute;
    top: 44%;
    bottom: 51%;
    left: 0;
    right: 0;
    margin: auto;
    cursor: pointer;
}
        .welcome input{
            position: absolute;
            top: 35%;
            bottom: 60%;
            left: 0;
            right: 0;
            margin: auto;
            cursor: pointer;
        }
        .yh{
            position: absolute;
            left: 0;
            right: 0;
            cursor: pointer;
        }
        .yh

    </style>
</head>

<body background="http://img03.sogoucdn.com/app/a/100520146/413e8bceb11726d1911055cf3231ba65
">
<h1>用户登陆</h1>
<form method="post" action="DL-houduan.php">
    <div class="yh">
        <label for="usename" ><c>用户名：</c>&nbsp; &nbsp;</label>
        <input  type="text" name="usename" style="background-color: transparent; border:  ;width: 250px;height: 30px" />
        <br />
        <br />
        <label for="pass"><c>密码：</c> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="password" name="pass" style="background-color: transparent; border:  ;width: 250px;height: 30px" />
        <br />
        <br />
        <!--使用cookle实现自动登录-->
        <input type="checkbox" value="1" name="check"/>  自动登录
        <br />
       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
        <input type="submit" value="确定"style="background-color: transparent; width: 100px ;height: 30px;color: azure" />
        <input type="reset" value="清除" style="background-color: transparent; width: 100px ;height: 30px;color: azure"/>
    </div>

</form>
<form method="post" action="welcome.php">
    <br />
    <br />
    <br />

    <div class="welcome">
        <input type="submit" value="返回欢迎界面"style="background-color: transparent; width: 100px ;height: 30px;color: azure" />
    </div>


</form>
<form method="post" action="Untitled-2.php">
    <br />
    <br />

    <div class="zc">
        <input type="submit" value="注册" style="background-color: transparent; width: 100px ;height: 30px;color: azure"/>
    </div>

</form>

</body>
</html>