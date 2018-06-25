<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password1 = $_REQUEST['pd'];
$password2 = sha1($password);
$password3 = sha1($password1);
if ($password2 != $password3){
    echo "<script>alert('两次密码不一致！');parent.location.href='register.php';</script>";
//     echo "<script>alert('两次密码不一致！');</script>";
//     echo "两次密码不一致<br/>";
//     echo "<a href='register.php'>返回</a>";
}else{
//sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO user(id, username, password, status) VALUES (null,'$username','$password2',1)";
//exit($sql);

if(mysql_query($sql)){
    header("location:jump.php?code=1&url=login.php&msg=注册成功，跳转登录页.");
//     echo "<script>alert('注册成功！');</script>";
// 	echo "注册成功！！！<br/>";
// 	echo "<a href='login.php'>去登录</a>";
}else{
    echo "<script>alert('注册失败');parent.location.href='register.php';</script>";
//     echo "<script>alert('注册失败！');</script>";
// 	echo "注册失败！！！<br/>";
// 	echo "<a href='register.php'>重注册</a>";
}
}

