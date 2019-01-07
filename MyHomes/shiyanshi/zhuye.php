<?php
header("Content-type: text/html; charset=utf-8");
if(!isset($_COOKIE['usename']))
{
    exit("<script>
    alert('请首先登录！');
   location.href='denglu.php';
    </script>");
}
    $key = $_COOKIE['key'];
//找到cookle中的用户id ，与数据库中做对比，如果有，判断key是否正确，否则返回登录
    $resarr = explode(":", $key);
    $useid = end($resarr);
//接入数据库
    $host = '127.0.0.1';
    $user = 'root';
    $pass = 'root';
    $port = 3306;
    $link = @mysqli_connect("$host", "$user", "$pass", "t2", "3306");
    @mysqli_set_charset($link, "utf8");
    mysqli_select_db($link, 'file');//选择数据表
    $sql = "select * from file WHERE id=$useid";
    $result = mysqli_query($link, $sql);
//用户id存在，做进一步校验
    if (mysqli_num_rows($result) == 1) {
//校验思路：首先从数据库获取用户名，密码，用相同的办法加密，看密文与cookle中的是否相同
        $row = mysqli_fetch_assoc($result);
        $usename_t = $row['username'];
        $password_t = $row['password'];
        $key_t = md5($usename_t.$password_t);
        if ($key_t!= $resarr[0])
        {
            exit("<script>
             alert('请首先登录！');
            location.href='denglu.php';
                </script>");

        }
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body >
<?php
$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$port=3306;
$link=@mysqli_connect("$host","$user","$pass","t2","3306");
@mysqli_set_charset($link,"utf8");
mysqli_select_db($link,'file');
$sql="select * from file WHERE id=$useid";//找到用户信息
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$path = $row['sec'];
$name=$row['username'];
?>

<ul>
    <img src='<?php echo $path ?>' width='200px'/>
    <li><a href="avatar.php">上传头像</a></li>
    <li><a href="change.php">修改密码</a></li>
    <li><a href="list.php">安全利器商店</a></li>
    <li><a href="logout.php">退出</a></li>


</ul>
<h1>欢迎来到secshop</h1>
</body>
</html>


