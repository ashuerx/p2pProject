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

		<!--内容1-->	
		<div id="person" class="container">
			<!--左边-->
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
										<a href="./request.php">
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
										<a href="./autonym.php">
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
				
			<?php
			include_once("./usermodifyRight.html");
			?>
			</div>		
		</div>
		<!--引入页脚-->
		<?php
	include_once("./footer.html");
	?>
</body>
<script src="./lib/jquery/jquery-1.11.0.js"></script>
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./dist/javascript/bootstrapValidator.js"></script>
<script src="./src/javascript/checkLogin.js"></script>
<script src='./src/javascript/formValidator.js'></script>


</html>