<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );



$studentId = $_REQUEST ['studentId'];
$name = $_REQUEST ['test_name'];
$subject = $_REQUEST ['subject'];
$paper = $_REQUEST ['paper_id'];
$mark = $_REQUEST ['mark'];



$sql="insert into score(studentId, test_name, subject, paper_id, mark) VALUES('$studentId','$name','$subject','$paper','$mark')";
//echo $sql;
// mysql_query($sql) or die("添加新数据时出错".mysql_error());//发送SQL请求
$result = mysql_query ( $sql );

if(! $result )
{
   header("location:jump.php?code=0&url=insertscore.php&msg=增加信息失败");
	
}
echo "<script>alert('增加信息成功！');parent.location.href='score.php';</script>";

// echo "数据插入成功\n";
// echo "<a href='index.php'>回到主页</a>";


?>