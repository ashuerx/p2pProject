<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>p2p会员中心</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
		
		<link rel="stylesheet" href="dist/css/personal.css" />
	</head>
	<body>
		<!--引入页头-->
		<?php
			include_once("./header.html")
		?>
		<!--内容-->	
		<div id="person" class="container">
			<!--左边栏-->
			<div class="row">
				<?php
					include_once("./left.html")
				?>
			</div>
				
				<!--右边内容-->
				
        		<div id="right" class="col-sm-9 col-xs-12">
					<div class="panel panel-default">
						<button type="button" id="toggleMenu" class="btn btn-primary btn-xs">菜单切换</button>
						<div class="panel-body el-account">
							<div class="el-account-info">
								<div class="pull-left el-head-img">
									<img class="img-rounded" src="./dist/images/head_icon.jpg" />
								</div>
								<div class="content">
									<p>昵&emsp;称：源代码教育</p>
									<p>用户名：<span id="personame"></span></p>
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
									<div class="col-md-6 col-sm-12">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="./dist/images/shiming.png" />
											</div>
											<div class="el-accoun-auth-right">
												<h5>实名认证</h5>
												<p>
													
														未认证
														<a href="realAuth.html">马上认证</a>

												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">实名认证之后才能在平台投资</p>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
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
									
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-12">
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
									<div class="col-md-6 col-sm-12">
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
			include_once("./footer.html")
		?>
		
		
		<script type="text/javascript">
    		var domtest=document.body;
    		var startX,startY,endX,endY;
	    	//touchstart：触摸开始的时候触发
	    	domtest.ontouchstart=function (e) {
	    		//console.log("touchstart",e);
	    		startX=e.changedTouches[0].clientX;
	    		startY=e.changedTouches[0].clientY;
	    	};
	        //touchmove：手指在屏幕上滑动的时候触发
	        domtest.ontouchmove=function () {
	    		console.log("touchmove");
	    	};
	        //touchend：触摸结束的时候触发
	        domtest.ontouchend=function (e) {
	    		//console.log("touchend",e);
	    		endX=e.changedTouches[0].clientX;
	    		endY=e.changedTouches[0].clientY;
	    		console.log("水平移动的距离:",endX-startX);
	    		console.log("垂直移动的距离:",endY-startY);
	    	};
    </script>
		<!--引入jquery-->
		<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
		
		<!--引入左边栏手风琴js-->
		<script src="src/javascript/personal.js" type="text/javascript" charset="utf-8"></script>
		
		<script src="src/javascript/loginSession.js" type="text/javascript" charset="utf-8"></script>x
		<!--引入bootstrap  js文件-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		
		
			
		
		<!--自定义文件  副导航提示框-->
		<!--<script src="src/javascript/index.js" type="text/javascript"></script>-->
		
		
	</body>
</html>
