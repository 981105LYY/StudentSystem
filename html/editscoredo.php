<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['test_name'];
$subject = $_REQUEST ['subject'];
$paper = $_REQUEST ['paper_id'];
$mark = $_REQUEST ['mark'];


// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "update score set studentId ='$studentId',test_name = '$name',subject = '$subject',paper_id = '$paper',mark ='$mark' where id = $id";
if (mysql_query ( $sql )) {
// 	echo "修改成功！！！<br/>";
// 	echo "<a href='index.php'>回到主页</a>";
	echo "<script>alert('修改成功！');parent.location.href='score.php';</script>";
	
} else {
    echo "<script>alert('修改失败！请重新修改!');parent.location.href='editscore.php';</script>";
    
// 	echo "修改失败！！！<br/>";
// 	echo "<a href='index.php'>系统错误</a>";
}