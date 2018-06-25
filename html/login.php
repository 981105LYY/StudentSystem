<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>登录页面</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
 <style type="text/css">
        body {font-size: 15px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        </style>
</head>

<body >
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> 学员登录</h2>
               
                <h5>( 授权访问 )</h5>
               
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   输入登录信息 </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method= "post"  action= "logindo.php">
                                  
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="你的用户名 " name='username'/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="你的密码" name='password' />
                                        </div>
  <p>验证码: <img id="captcha_img" border='1' src='code.php?r=echo rand(); ?>' style="width:100px; height:30px" />
    <a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='code.php?r='+Math.random()">换一个?</a>
  </p>
  <P>请输入验证码:<input type="text" name='authcode' value=''/></p>

                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> 记住密码
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >忘记密码 ? </a> 
                                            </span>
                                        </div>
                                     <input type="submit"  name= "Submit"  value= "登录" class="btn btn-primary "> 
                                    <hr />
                                    未注册 ? <a href="register.php" >点我 </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
</html>
