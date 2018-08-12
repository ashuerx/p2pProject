<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>p2p会员学历</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
		
		<link rel="stylesheet" href="dist/css/autonym.css" />
		
	</head>
	<body>
		<!--引入页头-->
		<?php
			include_once("./header.html")
		?>
		<!--内容-->
		<div id="person" class="container">
			<div class="row">

				<!--引入左边栏html结构-->
				<?php
					include_once("./left.html")
				?>
			</div>
				<!--右边内容-->
				<div id="rightBox" class="col-lg-9 col-md-10 col-sm-12">
					<div id="loginReg">
						<div class="panel panel-default">
							<div class="panel-heading">
								用户学历认证
							</div>
							<div class="panel-body">
								<div id="main" style="width:100%; height:500px"></div>
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
		<!--引入jquery文件-->
		<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
		<!--引入echarts 库文件-->
		<script src="lib/echarts/echarts.min.js"></script>
    	
    	<script type="text/javascript">
    		
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        var option = {
				    title : {
				        text: '用户学历统计情况',
				        subtext: 'p2p响应式金融贷款平台',
				        x:'center'
				    },
				    tooltip : {
				        trigger: 'item',
				        formatter: "{a} <br/>{b} : {c} ({d}%)"
				    },
				    legend: {
				        orient : 'vertical',
				        x : 'left',
				        data:['博士','硕士','本科','大专','高中/中专']
				    },
				    toolbox: {
				        show : true,
				        feature : {
				            mark : {show: true},
				            dataView : {show: true, readOnly: false},
				            magicType : {
				                show: true, 
				                type: ['pie', 'funnel'],
				                option: {
				                    funnel: {
				                        x: '25%',
				                        width: '50%',
				                        funnelAlign: 'left',
				                        max: 1548
				                    }
				                }
				            },
				            restore : {show: true},
				            saveAsImage : {show: true}
				        }
				    },
				    calculable : true,
				    series : [
				        {
				            name:'访问来源',
				            type:'pie',
				            radius : '55%',
				            center: ['50%', '60%'],
				            data:[]
				        }
				    ]
				};
				                    
				 // 使用刚指定的配置项和数据显示图表。
        		myChart.setOption(option);
        		
        		$.get("api/Students.php",function(Data){
        			console.log("后台获取的学历数据",Data);
			
					//把后端提供的数据动态设置到配置对象中
					option.series[0].data=Data;
					
					//使用刚指定的配置项和数据显示图表。
		            myChart.setOption(option);
		            
		            //隐藏默认的loading动画
		            myChart.hideLoading();
        		},'json');
		</script>
				
		<!--引入bootstrap  js文件-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!--引入左边栏动态js-->
		<script src="src/javascript/personal.js" type="text/javascript" charset="utf-8"></script>
		<!---->
		<script src="src/javascript/autonym.js" type="text/javascript" charset="utf-8"></script>
		<!--自定义文件  副导航提示框-->
		<script src="src/javascript/index.js" type="text/javascript"></script>

	</body>
</html>
