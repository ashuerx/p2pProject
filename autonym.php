<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/min/autonym.min.css">

</head>
<body>
    <?php
    include_once("./header.html");
    ?>
		<!--内容-->
		<div id="person" class="container">
			<div class="row">

				<!--左边栏-->
				<div id="leftBox" class="col-lg-3 col-md-2 col-sm-12 ">
					<div >
						<ul id="menu" class="list-group">
							<li class="list-group-item ${pageScope.currentMenu=='bid' ? 'active' :'' }">
								<a href="#" class="aaa">
									<span>投资项目</span>
								</a>
							</li>

							<li class="list-group-item">

								<a href="#" class="aaa">
									<span>借款项目</span>
								</a>

								<ul>
									<li>
										<a href="#">
											<span>借款项目</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span>还款明细</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="list-group-item">
								<a href="#" class="aaa">
									<span class="text-title">我的账户</span>
								</a>
								<ul class="in">
									<li class="active">
										<a href="#">
											账户信息
										</a>
									</li>
									<li>
										<a href="#">
											实名认证
										</a>
									</li>
									<li>
										<a href="#">
											银行卡管理
										</a>
									</li>
									<li>
										<a href="#">
											登录记录
										</a>
									</li>
								</ul>
							</li>
							<li class="list-group-item">
								<a href="#" class="aaa">
									<span>资产详情</span>
								</a>
								<ul class="in">
									<li>
										<a href="#">
											账户流水
										</a>
									</li>
									<li>
										<a href="#">
											充值明细
										</a>
									</li>
									<li>
										<a>
											提现记录
										</a>
									</li>
									<li>
										<a>
											收款明细
										</a>
									</li>
								</ul>
							</li>
							<li class="list-group-item">
								<a href="#" class="aaa">
									<span>个人资料</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--右边内容-->
				<div id="rightBox" class="col-lg-9 col-md-10 col-sm-12">
					<div id="loginReg">
						<div class="panel panel-default">
							<div class="panel-heading">
								实名认证
							</div>
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label for="username">用户账号</label>
										<input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
									</div>
									<div class="form-group">
										<label for="usename">姓名</label>
										<input type="text" class="form-control" name="realname" id="realname" placeholder="">
									</div>
									<div class="form-group">
										<label for="number">证件号码</label>
										<input type="text" class="form-control" name="password2" id="password2" placeholder="">
									</div>
									<div class="form-group">
										<label for="data">出生日期</label>
										<input type="text" class="form-control" name="data" id="data" placeholder="请输入出生日期">
									</div>
									<div class="form-group">
										<label for="address">证件地址</label>
										<input type="text" class="form-control" name="site" id="site" placeholder="">
									</div>
									<div class="form-group">

										<label>用户性别</label>
										<label class="radio-inline">
										<input type="radio" name="sex" value="男">
										男 </label>
										<label class="radio-inline">
										<input type="radio" name="sex" value="女">
										女 </label>
									</div>
									<div class="checkbox">
										<label>
										<input type="checkbox">
										同意注册协议 </label>
									</div>
									<button type="submit" class="btn btn-danger">
									立即注册
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--引入页脚-->
		<?php
    include_once("./footer.html");
    ?>
</body>
<script src="./lib/jquery/jquery-1.11.0.js"></script>
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
</html>
