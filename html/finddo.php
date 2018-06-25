<?php
	header("Content-type:text/html;charset=utf-8");
	$km = $_GET['subject'];
	include_once 'dbconfig.php';
   echo "<div class='page-content-area'>

						<div class='row'>
							<div class='col-xs-12'>
								<!-- PAGE CONTENT BEGINS -->
								<div class='row'>
									<div class='col-xs-12'>
										<table id='sample-table-1' class='table table-striped table-bordered table-hover'>";
  echo "<thead><tr><th>学号</th>
										<th>学期</th>
										<th>科目</th>
										<th>试卷号</th>
										<th>成绩</th>
								
									
									</tr></thead>";
$sql="select * from score where subject='$km'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    echo "<tr>";  
    echo "<td>" . $row['studentId'] . "</td>";
    echo "<td>" . $row['test_name'] . "</td>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>" . $row['paper_id'] . "</td>";
    echo "<td>" . $row['mark'] . "</td>";
    echo "<tr/>";
}
    echo "</table>";
?>