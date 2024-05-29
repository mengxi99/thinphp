<?php /*a:1:{s:81:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\index\home.html";i:1691833499;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>首页三</title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="/static/component/pear/css/pear.css" />
		<style>
		    .shownum{font-size:30px;}
		    .shownum  i{font-size:40px;  color: #3963bc;}
		    .bopd{  padding-bottom:20px;}
		    .picbox{background-color:#3963bc; color:#FFFFFF;  padding:10px; float:left;  border-radius:5px;}
		    .picbox i{ font-size:30px;}
		    .dh{min-height:60px; }
		    .txt{float:left; line-height:50px; padding-left:20px; }
		    
		</style>
	</head>
	<body class="pear-container">
		<div>			
			<div class="layui-row layui-col-space30">
				<div class="layui-col-xs6 layui-col-md3">
					<div class="layui-card top-panel">
						<div class="layui-card-header"  style=" border:0px;">网站栏目总数</div>
						<div class="layui-card-body">
							<div class="layui-row bopd shownum">
								<div class="layui-col-xs8 layui-col-md8" >
								<?php echo htmlentities($lmnum); ?>
								
								</div>
								<div class="layui-col-xs4 layui-col-md4">
							 
								<i class="layui-icon layui-icon-chart"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


				
					<div class="layui-col-xs6 layui-col-md3">
					<div class="layui-card top-panel">
						<div class="layui-card-header"  style=" border:0px;">新闻发布总数</div>
						<div class="layui-card-body">
							<div class="layui-row bopd shownum">
								<div class="layui-col-xs8 layui-col-md8" >
								<?php echo htmlentities($xwnum); ?>
								
								</div>
								<div class="layui-col-xs4 layui-col-md4">
							 
								<i class="layui-icon layui-icon-chart"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			
							
					<div class="layui-col-xs6 layui-col-md3">
					<div class="layui-card top-panel">
						<div class="layui-card-header"  style=" border:0px;">图片发布总数</div>
						<div class="layui-card-body">
							<div class="layui-row bopd shownum">
								<div class="layui-col-xs8 layui-col-md8" >
								<?php echo htmlentities($cpnum); ?>
								
								</div>
								<div class="layui-col-xs4 layui-col-md4">
							 
								<i class="layui-icon layui-icon-chart"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
							<div class="layui-col-xs6 layui-col-md3">
					<div class="layui-card top-panel">
						<div class="layui-card-header"  style=" border:0px;">网站留言总数</div>
						<div class="layui-card-body">
							<div class="layui-row bopd shownum">
								<div class="layui-col-xs8 layui-col-md8" >
									0
								
								</div>
								<div class="layui-col-xs4 layui-col-md4">
							 
								<i class="layui-icon layui-icon-chart"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		


<div class="layui-row " style="background-color:#FFFFFF; margin-top:20px;">
			
<div class="layui-card top-panel">
<div class="layui-card-header" style="text-align:left; border:0px;">常用功能</div>
<div class="layui-card-body">
    
						    
<div class="layui-row layui-col-space10">
  <div class="layui-col-md2 layui-col-xs6 dh">
	<div class="picbox"><i class="layui-icon layui-icon-form"></i></div><div class="txt">  发布新闻</div>
  </div>
  

    <div class="layui-col-md2 layui-col-xs6 dh">
   	<div class="picbox"><i class="layui-icon layui-icon-picture"></i></div><div class="txt">  发布图片</div>
  </div>
  
      <div class="layui-col-md2 layui-col-xs6 dh">
   	<div class="picbox"><i class="layui-icon layui-icon-file-b"></i></div><div class="txt">  单页管理</div>
  </div>
  
  
      <div class="layui-col-md2 layui-col-xs6 dh">
   	<div class="picbox"><i class="layui-icon layui-icon-app"></i></div><div class="txt">  栏目设置</div>
  </div>
  
  
  <div class="layui-col-md2 layui-col-xs6 dh">
   	<div class="picbox"><i class="layui-icon layui-icon-carousel"></i></div><div class="txt">  更换BANNER</div>
  </div>
  
    <div class="layui-col-md2 layui-col-xs6 dh">
   	<div class="picbox"><i class="layui-icon layui-icon-dialogue"></i></div><div class="txt">  查看留言</div>
  </div>
  

  
</div>	    
						    
						    
		
	</div>
		</div>
	</div>



	<div style=" margin-top:20px;">					    
	<div class="layui-row layui-col-space30">
  <div class="layui-col-md6">
    <div id="container" style="height: 100%; height:550px; background-color:#ffffff; border-radius: 5px; padding:10px;"></div>
  </div>
  
    <div class="layui-col-md6">
        
        
     <div id="container-2" style="height: 100%; height:550px; background-color:#ffffff; border-radius: 5px;  padding:10px;"></div>
  
   
  </div>
  </div>
  </div>

		
  </div>
    <script type="text/javascript" src="/static/admin/echarts.min.js"></script>
	<script src="/static/component/layui/layui.js"></script>
	<script src="/static/component/pear/pear.js"></script>
	
	  <script type="text/javascript">
    var dom = document.getElementById('container');
    var myChart = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    option = {
title: {
    text: '网站浏览量趋势',
},     
  xAxis: {
    type: 'category',
    boundaryGap: false,
    data: [<?php echo htmlentities($date_str); ?>]
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [<?php echo htmlentities($pv_str); ?>],
      type: 'line',
      areaStyle: {}
    }
  ]
};

    if (option && typeof option === 'object') {
      myChart.setOption(option);
    }


  var dom = document.getElementById('container-2');
    var myChart2 = echarts.init(dom, null, {
      renderer: 'canvas',
      useDirtyRect: false
    });
    var app = {};
    
    var option;

    option = {
   
    title: {
    text: '各栏目点击量',
}, 
  
  xAxis: {
    type: 'category',
    data: [<?php echo htmlentities($lmlist); ?>]
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [<?php echo htmlentities($lm_pv); ?>],
      type: 'bar'
    }
  ]
};

    if (option && typeof option === 'object') {
      myChart2.setOption(option);
    }




  </script>
	
	
	
	
	</body>
</html>
