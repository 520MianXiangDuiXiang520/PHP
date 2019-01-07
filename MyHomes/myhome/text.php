<?php
header("Content-type:text/html;charset=utf-8");
//这里面用户名，密码，以及端口号必须是PHP study支持的那个phpmyadmin，初始用户名密码均为root,一直栽在着，不是自己创建的那个mysql，3306端口被占用也是这个原因
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
//注意：mysql函数已被弃用，需要使用mysqli；
$link=@mysqli_connect("$host","$user","$pass","t2","3306");
@mysqli_set_charset($link,"utf8");
if(!$link)
{
    echo '数据库连接失败:';
}
else
{
    echo "链接成功";
}

echo "<hr />";
echo "<hr />";
//新建表，table——name为：MyGuests,有三列
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if(mysqli_query($link,$sql))
{
    echo "创建数据表错误！";
}
else{
    echo "创建成功";
}

?>
