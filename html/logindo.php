<?php
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
//isset()检测变量是否设置
if(isset($_REQUEST['authcode'])){
//     session_start();
    //strtolower()小写函数
    if(strtolower($_REQUEST['authcode'])== $_SESSION['authcode']){
        //跳转页面
//         echo "<script language=\"javascript\">";
//         echo "document.location=\"./form.php\"";
//         echo "</script>"
if (isset ( $_SESSION ['userName'] )) {
	header ( "location:index.php" );
} elseif (! isset ( $_REQUEST ['username'] )) {
	header ( "location:login.php" );
} else {
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	//计算摘要
	$password2 = sha1 ( $password );
	
	require_once 'dbconfig.php';
	// 根据用户名和密码去查询帐号表
	$sql = "select * from user where username= '$username' and password='$password2'";
	$result = mysql_query ( $sql, $conn );
	if ($row = mysql_fetch_array ( $result )) {
		$_SESSION ['userName'] = $username;
		header("location:jump.php?code=1&url=index.php&msg=登录成功为您跳转到主页.");
	//	header ( "location:index.php" );
	} else {
		echo "<script>alert('用户名或密码错误!请重新登录！');parent.location.href='login.php';</script>";
// 		echo "用户名或密码错误！<br/>";
// 		echo "<a href='login.php'>重新登陆</a>";
	}
}

    }else{
        echo "<script>alert('验证码错误!请重新输入！');parent.location.href='login.php';</script>";
    }
}

?>