<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>p2p会员中心</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />

		<link rel="stylesheet" href="dist/css/request.css" />
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
				
				<!--引入左边栏html结构-->
				<?php
					include_once("./left.html")
				?>
			</div>
				
				<!--右边结构-->
				<!--右边内容-->
				<div id="rightBox" class="col-lg-9 col-md-10 col-sm-12">
					<div id="loginReg">
						<div class="panel panel-default">
							<div class="panel-heading">
								借款项目
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>标题</th>
											<th class="no">时间</th>
											<th>借款金额(元)</th>
											<th class="no">期限 </th>
											<th class="no">利率</th>
											<th class="no">状态</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>江湖救急信</td>
											<td  class="no">2016-01-02</td>
											<td>2000</td>
											<td>12月</td>
											<td  class="no">12%</td>
											<td  class="no">待发布 招标中 满标未审核 还款中 招标拒绝</td>
										</tr>
									</tbody>
								</table>
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
		<!--引入jquery-->
		<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="src/javascript/personal.js" type="text/javascript" charset="utf-8"></script>
		<!--引入bootstrap  js文件-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!--自定义文件  副导航提示框-->
		<script src="src/javascript/index.js" type="text/javascript"></script>

	</body>
</html>
