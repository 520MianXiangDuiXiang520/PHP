<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首 页</title>
</head>
<body>
<h1>php_mysql</h1>
<form method="post" action="serve_mysql.php" name="chose" >
    <label>
        请选择要进行的操作：
        <select name="choose">
            <option value="1">创建数据表</option>
            <option type="submit" value="2">插入记录</option>
            <option value="3">查找记录</option>
            <option value="4">删除数据表</option>
            <option value="5">修改记录</option>
            <option value="6">删除记录</option>
        </select>
    </label>
    <input type="submit" value="确定" >
</form>
</body>
</html>
