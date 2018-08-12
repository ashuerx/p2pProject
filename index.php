<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>p2p首页</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
		
		<link rel="stylesheet" href="dist/css/index.css" />
	</head>
	<body>
		<!--引入页头-->
		<?php
			include_once("./header.html")
		?>
		<!--轮播图-->	
		<div id="banner" class="carousel slide container" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				  </ol>
				
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="images/banner01.jpg" alt="广告one">
				      <div class="carousel-caption"></div>
				    </div>
				    <div class="item">
				      <img src="images/banner02.jpg" alt="广告two">
				      <div class="carousel-caption"></div>
					</div>
				
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		
		<!--三大理财介绍-->
		<div class="container" id="feature">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<h4>投资理财</h4>
                    <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
				</div>
			</div>
		</div>
		
		<!--进行中借款-->
		<div class="container" id="invest">
			<!--面板的结构-->
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<h1>进行中借款</h1>
			  	<p><a href="#">进入投资列表</a></p>
			  </div>
			  <table class="table table-hover">
			      <thead>
			        <tr>
			          <th>借款人</th>
			          <th class="no">借款标题</th>
			          <th>年利率</th>
			          <th>金额</th>
			          <th class="no">还款方式</th>
			          <th class="no">进度</th>
			          <th>操作</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td>张三</td>
			          <td  class="no">给我2000度过难关</td>
			          <td>10.00%</td>
			          <td>2,000.00</td>
			          <td  class="no">按月分期还款</td>
			          <td  class="no">78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			        <tr>
			          <td>李四</td>
			          <td  class="no">江湖救急，借100吃饭</td>
			          <td>12.00%</td>
			          <td>12,000.00</td>
			          <td  class="no">按月分期还款</td>
			          <td  class="no">100.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			        
			      </tbody>
			    </table>
			</div>
		</div>
		
		<!--企业最新资讯-->
		<div class="container" id="article">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>企业最新资讯</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>用户反馈</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>理财经验</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-xs-12">
					<!--面板的结构-->
					<div class="panel panel-default">
					  <!--标题-->
					  <div class="panel-heading">
					  	<h1>活动分享</h1>
					  	<p><a href="#">更多资讯</a></p>
					  </div>
					  <div class="panel-body">
					     <ul>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     	<li>央视力挺互联网金融 <span>发表日期：2015-03-23</span></li>
					     </ul>
					  </div>
					</div>
				</div>
			</div>
		</div>
		
		<!--引入页脚-->
		<?php
			include_once("./footer.html")
		?>
		<!--引入jquery-->
		<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
		<!--引入bootstrap  js文件-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!--自定义文件  副导航提示框-->
		<script src="src/javascripts/index.js" type="text/javascript"></script>
	
	</body>
</html>
