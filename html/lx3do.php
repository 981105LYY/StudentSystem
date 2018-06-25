<?php
header("Content-type:text/html;charset=utf-8");
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');
$gh = new Graph(600,300);
$gh->SetScale("textlin");
require_once 'dbconfig.php';
if (isset($_POST['sub'])){
    $km = $_POST['sel'];
}
$sql = "select * from score where subject='$km'";
$r = mysql_query($sql);
$x = array();
$y = array();
while ($row=mysql_fetch_row($r)){
    $x[]=$row['1'];
    $y[]=$row['5'];
}
$bar = new BarPlot($y);

//设计标题文字及字体
$gh->title->Set(iconv("utf-8", "gb2312", "php成绩"));
$gh->title->SetFont(FF_SIMSUN,FS_BOLD);
//设置x轴名称
$gh->xaxis->SetTickLabels($x);
$gh->xaxis->title->Set(iconv("utf-8", "gb2312", "学号"));
$gh->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
//设置y轴
$gh->yaxis->title->Set(iconv("utf-8", "gb2312", "成绩（百分制）"));
$gh->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);

$gh->SetUserFont1("ygyxziti2.0.ttf");

$gh->Add($bar);   
$bar->value->show();
$gh->Stroke();  
?>