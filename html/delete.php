<style type="text/css">
        body {font-size: 15px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        </style>
<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "delete from student where id=$id";
//exit($sql);
if (mysql_query ( $sql )) {
    header("location:jump.php?code=1&url=index.php&msg=删除成功");
	//echo "<script>alert('删除成功！');parent.location.href='index.php';</script>";
// 	echo "删除成功！！！<br/>";
// 	echo "<a href='index.php'>回到主页</a>";
} else {
	//echo "<script>alert('删除失败！');parent.location.href='index.php';</script>";
	header("location:jump.php?code=0&url=index.php&msg=删除失败");
// 	echo "删除失败！！！<br/>";
// 	echo "<a href='index.php'>回到主页</a>";
}