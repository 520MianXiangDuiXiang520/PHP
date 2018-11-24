<!DOCTYPE HTML>
<html>
<head>
    <!--只用来学习，基本不能运行！！！-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>函数调用</title>
    <script type="text/javascript">
        function contxt() //定义函数
        {
            alert("哈哈，调用函数了!");
        }
        var n1="i";
        var n2="you father";
        document.write(n1+"am"+n2);
        document.write("<span style='white-space:pre;'>"+"  1        2    3    "+"</span>");
        //JSP确定
        var queding=confirm("你确定要修改密码吗？");
        if(queding==true)
        {
            document.write("确定");
        }
        else
        {
            document.write("取消");
        }
        //JSP提问
        var score=prompt("请输入成绩：");
        if(score>=60)
        {
            document.write("及格");
        }
        else {
            document.write("不及格");
        }
        //打开新窗口
        function opennew{
           op=window.open('https://github.com/520MianXiangDuiXiang520');
           op.close();
        }
        function openwindow
        {
            var pp=confirm('是否打开？');
            if(pp==ture)
            {
                window.open('http://www.imooc.com',400px,400px);
            }
        }
    </script>
</head>
<body>
<form>
    <input type="submit"  value="点击我" onclick="contxt()" />
    <input type="submit" value="打开Github" onclick="opennew()" />
    <input type="submit" value="kkk" onclick="openwindow()">
</form>
</body>
</html>
