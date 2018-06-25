<?php require_once 'base.php';?>
<?php

if (! isset($_SESSION)) {
    session_start();
}
if (! isset($_SESSION['userName'])) {
    header("location:login.php");
}
$userName = $_SESSION['userName'];

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
				<h2>增加学生成绩信息</h2>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑学生成绩信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="insertscoredo.php" method='post'>
							<br /> <input type='hidden' name='id'>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										学号</i></span> <input type="text" class="form-control"
									placeholder="学号 " name='studentId' />
							</div>
							
							<div class="form-group input-group">
								<span class="input-group-addon"> 试卷名</span>
								<input type="text" class="form-control" placeholder="2016-2017-2 php期末考试卷"
									name='test_name' />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">
										科目</span> <input type="text" class="form-control"
									placeholder="php" id='subject' name='subject' />
							</div>
						
							<div class="form-group input-group">
								<span class="input-group-addon"> 试卷号</span>
								<input type="text" class="form-control" placeholder="20"
									name='paper_id' />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">成绩</span>
								<input type="text" class="form-control" placeholder="成绩"
									name='mark' />
							</div>
							<input type='submit' class="btn btn-success" value='确认增加' />
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
