<?php
header("Content-type: text/html; charset=utf-8");
if(!isset($_COOKIE['usename']))
{
    exit("<script>
    alert('请首先登录1！');
   location.href='dengluhouduan.php';
    </script>");
}
if(isset($_COOKIE['key'])) {
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
    mysqli_select_db($link, 'yonghu');//选择数据表
    $sql = "select * from yonghu WHERE id=$useid";
    $result = mysqli_query($link, $sql);
//用户id存在，做进一步校验
    if (mysqli_num_rows($result) == 1) {
//校验思路：首先从数据库获取用户名，密码，用相同的办法加密，看密文与cookle中的是否相同
        $row = mysqli_fetch_assoc($result);
        $usename_t = $row['username'];
        $password_t = $row['password'];
        $file=$row['file'];
        $key = "zeianquan";
        $key_t = md5($usename_t.$password_t.$key);

        if ($key_t!= $resarr[0])
        {
            exit("<script>
             alert('请首先登录2！');
            location.href='dengluhouduan.php';
                </script>");
        }
    }
    else {
        exit("<script>
    alert('请首先登录3！');
    location.href='dengluhouduan.php';
    </script>");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $usename_t?>的主页</title>
</head>
<body background="实施.jpg">
<a href="up.php"><img src='<?php echo $file ?>' width='100px'/></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有任何问题<a href="mailto:1771795643@qq.com? bcc=zhangjunbao23@outlook.com">点击此处</a>发送邮件向我反映
<br />
<span class="d">人们总是仰慕伟大，但当他们看到伟大的本质时，却又却步了</span>
    <form method="post" action="zhuye.php" >
        <input type="submit" value="返回主页"  name="zhuye.php" />
    </form>

<hr />
</body>
</html>


