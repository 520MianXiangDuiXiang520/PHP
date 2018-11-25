<!DOCTYPE HTML>
<html>
<head>
    <!--只用来学习，基本不能运行！！！-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>函数调用</title>
    <style type="text/css">
        .one{
            font-family: 华文行楷;
            color:rosybrown;
        }
        .two{
            font-family: 方正姚体;
            color: oldlace;
        }
    </style>
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
        function opennew(){
           op=window.open('https://github.com/520MianXiangDuiXiang520');
           op.close();
        }
        function openwindow()
        {
            var pp=confirm('是否打开？');
            if(pp==ture)
            {
                window.open('http://www.imooc.com',400px,400px);
            }
        }
        var Obj=document.getElementById("sp");
        document.write(Obj.innerHTML);
        Obj.innerHTML="jjjjjjj";
        document.write(Obj.innerHTML);
        Obj.style.color="red";
        Obj.style.fontFamily="宋体";
        Obj.style.fontsize="20px";
        function non(){
            document.getElementById("display").style.diaplay="none";
        }
        function find(){
            document.getElementById("display").style.display="block";
        }
        function change(){
            var change=document.getElementById("coo");
            change.className="two";
        }
    </script>
</head>
<body>
<form>
    <input type="submit"  value="点击我" onclick="contxt()" />
    <input type="submit" value="打开Github" onclick="opennew()" />
    <input type="submit" value="kkk" onclick="openwindow()"/>
    <p id="sp">通过id获取元素</p>
    <p id="display">一大段文字》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》》</p>
    <input type="submit" value="隐藏"onclick="non()" />
    <input type="submit" value="显示" onclick="find()"/>
    <div class="one" id="coo">hhhhhhhhhhhhhhhh吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼</div>
    <input type="submit" value="change" onclick="change()"/>
</form>
</body>
</html>
