<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./dist/css/min/loginrigister.min.css">
		<link rel="stylesheet" href="./dist/css/bootstrapValidator.css">
		
    <!--引入bootstrapvalidator样式-->
	<!-- <link rel="stylesheet" type="text/css" href="./lib/bootstrapvalidator/dist/css/bootstrapValidator.css"/> -->
</head>
<body>
    <?php
    include_once("./header.html");
    ?>
		<!--中间内容-->
		<div class="container">
			<div class="panel panel-default">
			  <div class="panel-heading">用户注册</div>
			  <div class="panel-body">
			   <form id="userform" method="post">
				  <div class="form-group">
				    <label for="username">用户账号</label>
				    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
				  </div>
				  <div class="form-group">
				    <label for="password1">用户密码</label>
				    <input type="password" class="form-control" id="password1" name="password1" placeholder="请输入密码">
				  </div>
				   <div class="form-group">
				    <label for="password2">确认密码</label>
				    <input type="password" class="form-control" id="password2" name="password2" placeholder="请确认密码">
					</div>
					<div class="form-group">
				    <label for="mobile">手机号码</label>
				    <input type="text" class="form-control" name="mobile" id="username" placeholder="请输入手机号码">
				  </div>
				
				  <div class="form-group">
				    <label for="realname">用户姓名</label>
				    <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
				  </div>
					<div class="form-group">
						<label>用户性别</label>
						<div class="radio">
								<label>
										<input type="radio" name="sex" value="男">男
								</label>
						</div>
						<div class="radio">
								<label>
										<input type="radio" name="sex" value="女">女
								</label>
				    </div>
				</div>
				  <div class="checkbox form-group">
				    <label>
				      <input type="checkbox" name="isAgree"> 同意注册协议
				    </label>
				  </div>
				 <button type="submit" class="btn btn-danger">用户注册</button>
				 <a href="./login.php">已有账号，立即登录</a>
				</form>
			  </div>
			</div>
		</div>


		<!--底部-->
		<?php
    include_once("./footer.html");
    ?>

			<!--注册成功或者失败的模态框-->
			<div class="modal fade" id="regLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">标题</h4>
		      </div>
		      <div class="modal-body">
		                          内容
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
		      </div>
		    </div>
		  </div>
		</div>
</body>
<script src="./lib/jquery/jquery-1.11.0.js"></script>
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<!--引入bootstrapvalidator文件-->
<script src="./dist/javascript/bootstrapValidator.js"></script>
<!-- 表单验证 -->
<script src="./src/javascript/formValidator.js"></script>


</html>