<?php require_once 'base.php';?>
<?php

if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

require_once 'dbconfig.php';
// 访问student中指定的id
$id = $_REQUEST ['id'];
$query = "select * from score where id=$id";
$result = mysql_query ( $query );
$row = mysql_fetch_array ( $result );
?>
<!-- /. NAV SIDE  -->
  <!--main content start-->
      <div id="main-content">
          <div class="wrapper">            
              <!--overview start-->
		<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h2>修改学生成绩信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑学生成绩 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="editscoredo.php" method='post'>
							<br /> <input type='hidden' name='id' value='<?=$row ['id']?>' />
							<div class="form-group input-group">
								<span class="input-group-addon">
										学号</span> <input type="text" class="form-control"
									placeholder="学号 " name='studentId'
									value="<?=$row ['studentId']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"> 试卷名</span>
								<input type="text" class="form-control" placeholder=" 姓名"
									name='test_name' value="<?=$row ['test_name']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">科目</span>
								<input type="text" class="form-control" placeholder="科目"
									name='subject' value="<?=$row ['subject']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">试卷号</span>
								<input type="text" class="form-control" placeholder="试卷号"
									id='paper_id' name='paper_id' value="<?=$row ['paper_id']?>" />
							</div>
							
						
							<div class="form-group input-group">
								<span class="input-group-addon">成绩</span>
								<input type="text" class="form-control" placeholder="成绩"
									name='mark' value="<?=$row ['mark']?>" />
							</div>
							<input type='submit' class="btn btn-success" value='确认修改' />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</script>
</body>
</html>