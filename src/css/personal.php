<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/min/personal.min.css">

</head>
<body>
    <?php
    include_once("./header.html");
    ?>

		<!--内容-->	
		<div id="person" class="container">
			<!--左边栏-->
			<div class="row">
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
				
        		<div id="right" class="col-sm-9">
					<div class="panel panel-default">
						<div class="panel-body el-account">
							<div class="el-account-info">
								<div class="pull-left el-head-img">
									<img class="img-rounded" src="./dist/images/head_icon.jpg" />
								</div>
								<div class="content">
									<p>昵&emsp;称：源代码教育</p>
									<p>用户名：<span id='username'></span></p>
									<p>最后登录时间：2016-10-25 15:30:10</p>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div style="margin: 10px 2px;" class="row h4">
								<div class="col-sm-4">
									总金额：<span class="text-primary">10000元</span>
								</div>
								<div class="col-sm-4">
									可用金额：<span class="text-primary">8000元</span>
								</div>
								<div class="col-sm-4">
									冻结金额：<span class="text-primary">2000元</span>
								</div>
							</div>
							
							<div style="text-align: center;width: 400px;margin:30px auto 0px auto;">
								<a class="btn btn-primary btn-lg" href="recharge.html">账户充值</a>
								<a class="btn btn-danger btn-lg" href="moneyWithdraw_apply.html">账户提现</a>
							</div>
							
							<div class="end">
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="./dist/images/shiming.png" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>实名认证</h5>
												<p>
													<!--
														已认证
														<a href="realAuth.html">查看</a>
													-->
														未认证
														<a href="realAuth.html">马上认证</a>

												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">实名认证之后才能在平台投资</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="./dist/images/shouji.jpg" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>手机认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">可以收到系统操作信息,并增加使用安全性</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="./dist/images/youxiang.jpg" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>邮箱认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">您可以设置邮箱来接收重要信息</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="./dist/images/baozhan.jpg" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>VIP会员</h5>
												<p>
													普通用户
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">VIP会员，让你更快捷的投资</p>
										</div>
									</div>
								</div>
							</div>
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
<script src="./src/javascript/checkLogin.js"></script>

</html>