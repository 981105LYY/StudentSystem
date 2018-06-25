<?php require_once 'base.php';?>

<?php
require_once 'dbconfig.php';
// ����student
$query = "select * from score";
$result = mysql_query($query);
?>
   
 <script>
  function show(){
	  var xmlhttp = null ;
	  try{
		  xmlhttp = new window.XMLHttpRequest();
	  }catch(e){
		  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  //上面是声明XMLHttpRequest的对象。其中ActiveXObject是为了兼容低版本的ie
	  var km = document.getElementById('km').value;    //获取文本框的内容
	  xmlhttp.open("GET","finddo.php?subject="+km,true); //设置 xmlhttp对象的发送方式为get,发送地址，true是异步发送
	  xmlhttp.onreadystatechange=function(){           //如果状态发生改变
		  if(xmlhttp.readyState==4 && xmlhttp.status==200){   //如果是请求已完成，并且响应已就绪
			  document.getElementById('con').innerHTML = xmlhttp.responseText;  //改写相应id的div里面的内容为服务器发过来的字符串：xmlhttp.responseText
			   xmlhttp = null;  //使用完成后，注销对象，释放内存
		  }
	  }
	  xmlhttp.send();
	 
	  
  }

</script>
      <!--main content start-->
      <div id="main-content">
          <div class="wrapper">            
              <!--overview start-->
		
		
					<h3 class="page-header"><i class="fa fa-laptop"></i> 学生成绩信息</h3>
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>学生成绩信息</li>						  	
				
					<!-- #section:basics/content.searchbox -->

							
						</ul>
										
					
							<form action="finddo.php" method="post" style="float: right">
<strong>选择查询的科目</strong>
<select name='km' id='km'>

<?php
header("Content-type:text/html;charset=utf-8");
include_once 'dbconfig.php';
$sql = "select distinct subject from score";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result)){
	echo "<option>".$row['subject']."</option>";
}
?>
  <input type="button" value="确定" name="btn" onclick="show()"/>  
<div id="con" onkeyup="show()" >
</div>
</select>
</form>
						
						
						<div class="panel-heading"><a class="btn btn-default" href='insertscore.php'>
						<i class='fa fa-edit'>&nbsp;添加学生成绩</i></a></div>
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
										<table id="sample-table-1" class="table table-striped table-bordered table-hover">
											<thead>
									<tr>
										<th>学号</th>
										<th>学期</th>
										<th>科目</th>
										<th>试卷号</th>
										<th>成绩</th>
										<th>操作</th>
									</tr>
								</thead>

											<tbody>
								<?php
								
								require_once 'dbconfig.php';
								// ����student
								$query = "select * from score";
								$result = mysql_query($query);
								
                        $line = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $line ++;
                            $linecolor = $line % 2 == 0 ? 'odd gradeX' : 'even gradeC';
                            echo "<tr class='$linecolor'>";
                            echo "<td>" . $row['studentId'] . "</td>";
                            echo "<td>" . $row['test_name'] . "</td>";
                            echo "<td>" . $row['subject'] . "</td>";
                            echo "<td>" . $row['paper_id'] . "</td>";
                            echo "<td>" . $row['mark'] . "</td>";
                            echo "<td>&nbsp;&nbsp;
					<a class='btn btn-primary btn-sm shiny ' href=\"editscore.php?id='". $row ['id'] ."'\">
								    <i class='fa fa-edit'>编辑</i></a>
				<a class='btn btn-danger btn-sm shiny' href='deletescore.php?id=" . $row['id'] . "'>
							    <i class='fa fa-remove'>删除</i></a></td>";
                            echo "</tr>";
                        }
                        ?>
										
											</tbody>
										</table>
									</div><!-- /.span -->
								</div>
	 <div class="widget-foot">学生信息查询系统<a href="#" target="_blank" title="模板之家"></a> - Collect from <a href="#" title="网页模板" target="_blank">网页模板</a>
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
  </section>