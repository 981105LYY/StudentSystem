<?php
header("content-type:text/html;charset=utf-8");
if (! isset($_SESSION)) {
    session_start();
}
if (! isset($_SESSION['userName'])) {
    header("location:login.php");
} else {
    $id = $_REQUEST['id'];
    require_once 'dbconfig.php';
    // 删除语句
    $sql = "delete from score where id='$id'";
    // exit($sql);
    $result = mysql_query($sql, $conn);
    if ($result) {
        // header("location:jump.php?code=1&url=score.php&msg=删除成功");
        echo "<script>alert('删除成功！');parent.location.href='score.php';</script>";
    } else {
        echo "<script>alert('删除失败！');parent.location.href='score.php';</script>";
    }
}
?>