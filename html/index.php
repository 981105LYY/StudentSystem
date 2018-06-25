<!-- 考生信息页面 -->
<?php require_once 'base.php';?>
<?php
// 访问数据库，查询学生表
require_once 'dbconfig.php';
$sql = "select * from student";
$result = mysql_query ( $sql );
?>
 
      <!--main content start-->
      <div id="main-content">
          <div class="wrapper">            
              <!--overview start-->
		
		
					<h3 class="page-header"><i class="fa fa-laptop"></i> 学生基本信息</h3>
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>学生信息</li>						  	
				
					<!-- #section:basics/content.searchbox -->
	
								<li style="float: right"><a class="btn btn-default" href='insert.php'>
						<i class='fa fa-edit'>&nbsp;添加学生</i></a></li>
						</ul>
					
						<!-- /.nav-se
				</div>
			</div>
              
				<div class="page-content">

					<!-- /section:settings.box -->
					<div class="page-content-area">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
									<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
											<thead>
												<tr>
													<th class="center">
														<label class="position-relative">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													<th>学号</th>
													<th>姓名</th>
													<th class="hidden-480">班级</th>
													<th>
														
														生日
													</th>
													<th class="hidden-480">
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														性别</th>
														<th>
														
														民族
													</th>
													<th class="hidden-480">操作</th>
												</tr>
											</thead>

											<tbody>
					
<?php
								$line = 0;
								while ( $row = mysql_fetch_array ( $result ) ) {
								$line++;
								$lineStyle = $line%2==1?"odd gradeX":"even gradeC";
								
									echo "<tr class='$lineStyle'>";
									echo "<td class='center'>
														<label class='position-relative'>
															<input type='checkbox' class='ace' />
															<span class='lbl'></span>
														</label>
													</td>";
									echo "<td>" . $row ['studentId'] . "</td>";
									echo "<td>" . $row ['name'] . "</td>";
									echo "<td>" . $row ['className'] . "</td>";
									echo "<td>" . $row ['birthday'] . "</td>";
									echo "<td>" . $row ['sex'] . "</td>";
									echo "<td>" . $row ['nation'] . "</td>";
									echo "<td>" ."<a class='btn btn-primary btn-sm shiny ' href=\"edit.php?id='". $row ['id'] ."'\"><i class='fa fa-edit'>编辑</i></a>
					    &nbsp;&nbsp;
					    <a class='btn btn-danger btn-sm shiny' href=\"delete.php?id='". $row ['id'] ."'\">    <i class='fa fa-trash-o'>删除</i></a>
								 &nbsp;&nbsp;	<a class='btn btn-xs btn-success'>
									<i class='ace-icon fa fa-check bigger-120'></i></a></td>
									";
									
									echo "</tr>";
								}
								?>
									

				
												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div>
								
  
                  <div class="widget-foot">学生信息查询系统
                    <!-- Footer goes here -->
                     <section  style="float:right">
<!--                           <div class="panel-body"> -->
<!--                               <div> -->
<!--                                   <ul class="pagination pagination-lg"> -->
<!--                                       <li><a href="#">«</a></li> -->
<!--                                       <li><a href="#">1</a></li> -->
<!--                                       <li><a href="#">2</a></li> -->
<!--                                       <li><a href="#">3</a></li> -->
<!--                                       <li><a href="#">4</a></li> -->
<!--                                       <li><a href="#">5</a></li> -->
<!--                                       <li><a href="#">»</a></li> -->
<!--                                   </ul> -->
<!--                               </div> -->
<!--                   </div> -->
                   
<!--                 </div> -->
<!--               </div> -->
              
<!--             </div> -->
                        
<!--           </div>  -->
              <!-- project team & activity end -->

<!--           </section> -->
<!--       </section> -->
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
	     <script src="dataTables/jquery.dataTables.js"></script>
<script src="dataTables/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function() {
	$('#dataTables-example').dataTable();
});


      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
