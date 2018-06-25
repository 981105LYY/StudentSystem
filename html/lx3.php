<?php require_once 'base.php';?>

<?php
require_once 'dbconfig.php';
// ����student
	$sql = 'select distinct(subject) from score';
$r = mysql_query($sql);
?>
  <!-- /. NAV SIDE  -->
  <!--main content start-->
 
      <!--main content start-->
      <div id="main-content">
          <div class="wrapper">            
              <!--overview start-->
		
		
					<h3 class="page-header"><i class="fa fa-laptop"></i> 学生成绩图表信息</h3>
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>学生成绩信息</li>						  	
				
					<!-- #section:basics/content.searchbox -->
							
						</ul>
	
<div class="page-content-area">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
<form action="lx3do.php" method="post">
    请选择要查询成绩的科目：
	<select name="sel">
      <?php
	  		while($row = mysql_fetch_array($r)){
				echo '<option value="'.$row['subject'].'">';
				echo $row['subject'];
				echo '</option>';
			}
	  ?>
    </select>
    <input type="submit" value="查询" name="sub"/>
</form>
<?php 
if(isset($_POST['sub'])){
    echo "<img alt='' src='lx3do.php'>";

}
?>



</body>
</html>