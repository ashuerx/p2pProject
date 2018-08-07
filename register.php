<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/min/loginrigister.min.css">
	
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
			   <form id="userform">
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
				    <label for="email">用户邮箱</label>
				    <input type="email" class="form-control" name="email" id="email" placeholder="请输入邮箱">
				  </div>
				  <div class="form-group">
				    <label for="realname">用户姓名</label>
				    <input type="email" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
				  </div>
				  <div class="form-group">
				    <label>用户性别</label>
				    <label class="radio-inline">
					  <input type="radio" name="sex"  value="男"> 男
					</label>
					<label class="radio-inline">
					  <input type="radio" name="sex"  value="女"> 女
					</label>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> 同意注册协议
				    </label>
				  </div>
				 <button type="submit" class="btn btn-danger">用户注册</button>
				</form>
			  </div>
			</div>
		</div>
	
		<!--底部-->
		<?php
    include_once("./footer.html");
    ?>
</body>
<script src="./lib/jquery/jquery-1.11.0.js"></script>
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
</html>