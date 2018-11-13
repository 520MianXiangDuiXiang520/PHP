<?php
header("Content-type:text/html;charset=utf-8");
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
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