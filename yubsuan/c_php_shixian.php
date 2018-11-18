<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>php运算</title>
    <style type="text/css">
        h1{
            color:BLUE;
        }
        c{
            color: #ffdd10;
        }
    </style>
</head>

<body background="01fbf555440e780000019ae9e76690.jpg@1280w_1l_2o_100sh.jpg">
<h1>php运算</h1>
<form method="post" action="c_php_yunsuan.php">
    <br />
    <br />
    <br />
    <br />
    <c>选择要进行的操作</c>
    <label>
        <select name="chose">
            <option value="1">输出九九乘法表</option>
            <option value="2">数组的旋转</option>
            <option value="3">杨辉三角</option>
            <option value="4">PI的值</option>
            <option value="5">斐波那契数列</option>
            <option value="6">埃拉托色尼选筛法求100以内素数</option>
            <option value="7">1000以内的完数</option>
        </select>
    </label>
    <input type="submit" value="确定"/>
    <br />
    <br />
    <br />
    <br />
   <br/>
    <c>输入要进行运算的字符串：</c>
    <br/>
    <input type="text" name="fanxu"/>
    <input type="submit" value="反向输出"/>
    <input type="reset" value="reset"/>

    <br />
    <br/>
    <br />

<h2><c>简单计算机</c></h2>
    <input type="text" name="n1" />
    <label>
        <select name="fuhao">
            <option value="+" selected="selected">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </label>
    <input type="text" name="n2" />

    <input type="submit" value="=" />
   <br />
    <br />
    <br />
    <input type="text" name="huiwen" />
    <input type="submit" value="求是否是回文"/>
</form>

</body>
</html>

