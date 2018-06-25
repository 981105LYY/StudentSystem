<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );



$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['name'];
$className = $_REQUEST ['className'];
$birthday = $_REQUEST ['birthday'];
$sex = $_REQUEST ['sex'];
$nation = $_REQUEST ['nation'];


$sql="insert into student(studentId, name, className, birthday, sex, nation) VALUES($studentId,'$name','$className','$birthday','$sex','$nation')";
//echo $sql;
// mysql_query($sql) or die("添加新数据时出错".mysql_error());//发送SQL请求
$result = mysql_query ( $sql );

if(! $result )
{
   header("location:jump.php?code=0&url=insert.php&msg=增加信息失败");
	
}
echo "<script>alert('增加信息成功！');parent.location.href='index.php';</script>";

// echo "数据插入成功\n";
// echo "<a href='index.php'>回到主页</a>";


?>