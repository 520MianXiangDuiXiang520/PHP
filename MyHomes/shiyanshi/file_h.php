<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/11/19
 * Time: 19:22
 */
header("Content-type: text/html; charset=utf-8");
$MyFile=$_FILES['File'];
$name=$MyFile['name'];
$type=$MyFile['type'];
$tmp_name=$MyFile['tmp_name'];
$size=$MyFile['size'];
$error=$MyFile['error'];
$MAX_SIZE=1024*1024*3;//限制上传文件大小
$LX_FILE=array('BMP','JPG','JPEG','PNG','GIF','jpg','bmp','jpeg','png','gif');//规定文件类型
//判断是否上传成功
if($error==0)
{
    $nl='tmp';
    if(!file_exists($nl))
    {
        //bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )
        //尝试新建一个由 pathname 指定的目录。
        mkdir('tmp',0777,true);
        chmod('tmp',0777);
    }
    move_uploaded_file($tmp_name,$nl."\\".$name);
    $tzname=pathinfo($name,PATHINFO_EXTENSION);
    //判断文件大小是否超出表单规定
    if($size>$MAX_SIZE)
    {
        exit("<script>
                 alert('文件大小超出规定！');
                 location.href='file.php';
             </script>");
    }
    //判断文件类型是否合法
    //in_array() 函数搜索数组中是否存在指定的值。
    if(!in_array($tzname,$LX_FILE))
    {
        exit("<script>
                    alert('只允许上传BMP,JPG,JPEG,PNG,GIF的文件！');
                    location.href='file.php';
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
    $sql = "update file set sec='tmp/$name'WHERE id='$useid'";
    $result = mysqli_query($link, $sql);
    exit("<script>
                    alert('上传成功');
                    location.href='zhuye.php';
            </script>");
}else
    {
    switch ($error)
    {

        case 1:
            {
            exit("<script>
    alert('文件大小超出规定！');
     location.href='file.php';
    </script>");
        }
            break;
        case 2:
            {
            exit("<script>
    alert('文件大小超出规定！');
     location.href='file.php';
    </script>");
        }
            break;
        case 3:
            {
            exit("<script>
                         alert('只有部分文件被选择！');
                         location.href='file.php';
                 </script>");
        }
            break;
        case 4:
            {
            exit("<script>
                         alert('未选择文件！');
                         location.href='file.php';
                 </script>");
        }
            break;
        case 6:
            {
            exit("<script>
                        alert('未找到临时文件目录！');
                          location.href='file.php';
                   </script>");
        }
            break;
        case 7:
            {
            exit("<script>
                        alert('文件写入失败！');
                         location.href='file.php';
                  </script>");
        }
            break;
        case 8:
            {
            exit("<script>
                         alert('文件被PHP扩展程序截断！');
                         location.href='file.php';
                 </script>");
        }
            break;
    }
}
