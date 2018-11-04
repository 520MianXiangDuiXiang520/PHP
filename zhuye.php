<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>面向对象</title>
    <style type="text/css">
        st
        {
            text-align:center
        }
        body
        {
            background-color:#000;
        }
        img1
        {
            float:right;
        }
        word1
        {
            color:#FC0;
            font-family:"方正姚体";
            font-size:70px;
        }
        word2
        {
            color:#FC0;
            font-family:"方正姚体";
            font-size:85px;
        }
    </style>
    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body background="01fbf555440e780000019ae9e76690.jpg@1280w_1l_2o_100sh.jpg">
<h1>面向对象的窝</h1>

<br />
<st>
    <ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a class="MenuBarItemSubmenu" href="gerenjianjie.php">个人简介</a>
            <ul>
                <li><a href="#">兴趣爱好</a></li>
                <li><a href="#">学习经历</a></li>
                <li><a href="#">个人简介</a></li>
            </ul>
        </li>
        <li><a href="https://blog.csdn.net/zjbyough">我的博客</a></li>
        <li><a class="MenuBarItemSubmenu" href="#">学习知识</a>
            <ul>
                <li><a class="MenuBarItemSubmenu" href="#">C语言</a>
                    <ul>
                        <li><a href="#">c语言</a></li>
                        <li><a href="#">数据结构</a></li>
                        <li><a href="https://blog.csdn.net/zjbyough/article/details/83662252">easy-x</a></li>
                    </ul>
                </li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">HTML</a></li>
            </ul>
        </li>
        <li><a href="#">发个红包呗</a></li>
    </ul>
</st>
<br />
<br />

<form method="post" action="welcome.php">

    <input type="submit" value="返回欢迎界面" />
</form>
<form method="post" action="dengluhouduan.php">

    <input type="submit" value="重新登陆" />
</form>
</img1>
<hr />
<br />
<br />
<br />

<word1>欢&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;迎&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;来&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;到</word1>
<br />
<br />
<br />
<br />
<word2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;的&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;窝<word2>
        <script type="text/javascript">
            var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
        </script>
</body>
</html>
