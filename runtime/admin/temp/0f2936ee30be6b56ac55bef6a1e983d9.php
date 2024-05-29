<?php /*a:1:{s:54:"/home/wwwroot/www.fsqf.com/view/admin/login/index.html";i:1693030968;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<title>后台管理系统</title>
		<!-- 样 式 文 件 -->
		<link rel="stylesheet" href="/static/component/pear/css/pear.css" />
		<script src="/static/admin/jquery.js"></script>
		<script src="/static/admin/Particleground.js" ></script>
	<style type="text/css">

body{  background:linear-gradient(to right, #09a5d8 0%, #1d3e8f 100%);}
.header{ width:90%; height: 100px; margin-top: 30px; margin-left: auto; margin-right:auto; position: relative;}
.header .logo{ position: absolute; left: 0; top:0; }
.header .gwad{ position: absolute; right: 0; top:0; }
@media (max-width: 720px) {
    .gwad{
        display: none;
    }
    .logo img{
        width: 100%;
    }
    .logobox{
        transform: scale(0.8);
        background-size: contain !important;
        width: unset !important;
    }
    .footer{
        font-size: 12px !important;
    }
    .center{
        height: unset !important;
        padding-top: 10vh !important;
    }
    .footer a{
        margin-left:16px !important;
    }
}
.center{ background:url('/static/admin/images/logobj.png'); padding-top: 150px; background-position:center center;  background-repeat:no-repeat; width:100%; height: 570px;}

.logobox{ width:421px; height: 410px;  background:url('/static/admin/images/lkbj.png'); background-position:center center;  background-repeat:no-repeat; margin-left:auto; margin-right:auto;}

.logobox ul{ width:76%; padding-top: 20px; margin-left: auto; margin-right:auto; }
.logobox ul li{height: 45px; line-height: 45px; padding-top: 8px; padding-bottom: 8px; position:relative;}
.logobox ul li:nth-child(1){ padding-bottom: 20px; padding-top: 20px; text-align: center; }
.logobox ul li:nth-child(5){ padding-top: 30px; }
.logobox ul li input{  border:#00b8ff 2px solid; width:100%; line-height: 40px; border-radius:5px; background-color: rgba(255, 255, 255, 0.1); text-indent: 3em; font-size:15px; color: #ffffff;}

.logobox ul li:hover input {border:#ffffff 2px solid;}

.logobox ul li i{ position: absolute; left: 15px; top:6px; font-size:26px; color:#ffffff;}
.logobox .code{ width:55%; float: left; }

.codeImage {
    float: right;
    height: 42px;
}

.loginbt{ width:100%; border:0px; height: 50px; line-height: 50px; background:linear-gradient(to bottom, #6ad7ff 0%, #19a5f0 100%); color: #ffffff; font-size:22px;  border-radius:25px; }
.footer{ width:90%; line-height: 30px; margin-top: 10px; margin-left: auto; margin-right:auto; text-align:center; font-size:20px; color: #ffffff;}
.footer a{ color: #ffffff; margin-left: 30px;}

canvas{z-index:-1;position:absolute;  opacity: 0.1;}
	</style>
	</head>
    <!-- 代 码 结 构 -->
		<body>
	<div class="header">
   <div class="logo"><img src="/static/admin/images/gwlogo.png"></div>
   <div class="gwad"><img src="/static/admin/images/gwad.png"></div>
	</div>

<div class="center">

<div class="logobox">
<ul>
	<form class="layui-form" action="javascript:void(0);">	
<li><img src="/static/admin/images/gy.png"></li>
<li><i class="layui-icon layui-icon-username"></i> <input placeholder="账 户" type="text" name="username"/></li>
<li><i class="layui-icon layui-icon-password"></i><input placeholder="密 码" type="password" name="password"/></li>
<li><i class="layui-icon layui-icon-vercode"></i><input placeholder="验证码" type="text" maxlength="4" name="captcha" class="code"/>
<img id="codeimg" class="codeImage" style="cursor: pointer;"/></li>
<li><button  class="loginbt" lay-submit lay-filter="login">
					登 录
				</button></li>
			</form>
</ul>

</div>
</div>


<div class="footer">全国统一客服：4008-296-299 <a href="http://www.gewangcn.com" target="_blank">官网：www.gewangcn.com</a></div>

		<!-- 资 源 引 入 -->
		<script src="/static/component/layui/layui.js"></script>
		<script src="/static/component/pear/pear.js"></script>

		<script>
			layui.use(['form', 'layer', 'jquery', 'element'], function () {
				var $ = layui.jquery
				 , layer = layui.layer
				 , element = layui.element
				 , form = layui.form;
				// 登 录 提 交
				form.on('submit(login)', function(data) {
					layer.load();
					$.ajax({
						type: "POST",
						data: data.field,
						success: function (res) {
							layer.closeAll('loading');
							if (res.code==200){
								layer.msg(res.msg,{icon:1,time:1000},function () {
									location.href = '<?php echo (htmlentities(app('request')->root())) ? htmlentities(app('request')->root()) : "/"; ?>';
								})
							} else {
								layer.msg(res.msg,{icon:2,time:1000},function () {
									initCode();
								})
							}
						}
					});
					return false;
				});
				initCode();
				function initCode() {
					$('#codeimg').attr("src","<?php echo htmlentities(app('request')->root()); ?>/login/verify?data=" + new Date().getTime());
				}
				$('#codeimg').on('click', function () {
					initCode();
				});
			})
			</script>


			<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#ffffff',
    lineColor: '#ffffff',

    minSpeedX:.1,maxSpeedX:.2,minSpeedY:.1,maxSpeedY:.2,directionX:"center",directionY:"center",

  });

});
</script>
	</body>
</html>
