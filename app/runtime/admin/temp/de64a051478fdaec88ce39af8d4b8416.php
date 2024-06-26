<?php /*a:1:{s:54:"/home/wwwroot/www.fsqf.com/view/admin/index/index.html";i:1691748402;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>后台管理系统</title>
		<!-- 依 赖 样 式 -->
		<link rel="stylesheet" href="/static/component/pear/css/pear.css" />
		<!-- 加 载 样 式-->
		<link rel="stylesheet" href="/static/admin/css/loader.css" />
		<!-- 布 局 样 式 -->
		<link rel="stylesheet" href="/static/admin/css/admin.css" />
        <script>
            if(window!=top){ top.location.href = location.href; }
        </script>
	</head>
	<!-- 结 构 代 码 -->
	<body class="layui-layout-body pear-admin">
		<!-- 布 局 框 架 -->
		<div class="layui-layout layui-layout-admin">
			<div class="layui-header">
				<!-- 顶 部 左 侧 功 能 -->
				<ul class="layui-nav layui-layout-left">
					<li class="collaspe layui-nav-item"><a href="#" class="layui-icon layui-icon-shrink-right"></a></li>
					<li class="refresh layui-nav-item"><a href="#" class="layui-icon layui-icon-refresh-1" loading=600></a></li>
				</ul>
				<!-- 顶 部 右 侧 菜 单 -->
				<div id="control" class="layui-layout-control"></div>
				<ul class="layui-nav layui-layout-right" lay-filter="layui_nav_right">
					<li class="layui-nav-item layui-hide-xs"><a href="#" class="fullScreen layui-icon layui-icon-screen-full"></a></li>
					<li class="layui-nav-item layui-hide-xs"><a href="/" class="layui-icon layui-icon-website"></a></li>
                    <li class="layui-nav-item user">
						<!-- 头 像 -->
						<a href="javascript:;">
							<img src="/static/admin/images/avatar.jpg" class="layui-nav-img">
							<?php echo htmlentities($nickname); ?>
						</a>
						<!-- 功 能 菜 单 -->
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:void(0);" class="password">
                                    修改密码
                                </a>
                            </dd>
                            <dd>
                                <a href="javascript:void(0);" class="cache">
                                    清理缓存
                                </a>
                            </dd>
                            <dd>
                                <a href="javascript:void(0);" class="logout">
                                    退出登录
                                </a>
                            </dd>
                        </dl>
					</li>
				 主 题 配 置 
					<li class="layui-nav-item setting"><a href="#" class="layui-icon layui-icon-more-vertical"></a></li>
				</ul>
			</div>
			<!-- 侧 边 区 域 -->
			<div class="layui-side layui-bg-black">
				<!-- 顶 部 图 标 -->
				<div class="layui-logo">
					<!-- 图 表 -->
					<i style="color: #3963bc; font-size:25px;" class="layui-icon layui-icon-app"></i>
					<!-- 标 题 -->
					<span class="title"></span>
				</div>
				<!-- 侧 边 菜 单 -->
				<div class="layui-side-scroll">
					<div id="sideMenu"></div>
				</div>
			</div>
			<!-- 视 图 页 面 -->
			<div class="layui-body">
				<!-- 内 容 页 面 -->
				<div id="content"></div>
			</div>
		</div>
		<!-- 遮 盖 层 -->
		<div class="pear-cover"></div>
		<!-- 移 动 端 便 捷 操 作 -->
		<div class="pear-collasped-pe collaspe"><a href="#" class="layui-icon layui-icon-shrink-right"></a></div>
		<!-- 加 载 动 画-->
		<div class="loader-main">
			<div class="loader"></div>
		</div>
		<!-- 依 赖 脚 本 -->
		<script src="/static/component/layui/layui.js"></script>
		<script src="/static/component/pear/pear.js"></script>
		<!-- 框 架 初 始 化 -->
		<script>
        layui.use(['admin', 'jquery', 'layer','element'], function() {
            var $ = layui.jquery;
            var layer = layui.layer;
            var layelem = layui.element;
            var admin = layui.admin;
            // 框 架 初 始 化
            admin.render({
                "logo": {
                    "title": "复升企业服务",
                    "image": "/static/admin/images/logo.png"
                },
                "menu": {
                    "data": "<?php echo htmlentities(app('request')->root()); ?>/index/menu",
                    "accordion": true,
                    "control": false,
                    "select": "0"
                },
                "tab": {
                    "enable": true,
                    "muiltTab": true,
                    "keepState": true,
                    "session": true,
                    "tabMax": 30,
                    "index": {
                        "id": "0",
                        "href": "<?php echo htmlentities(app('request')->root()); ?>/index/home",
                        "title": "首页"
                    }
                },
                "theme": {
                    "defaultColor": "5",
                    "defaultMenu": "dark-theme",
                    "defaultHeader": "light-theme",
                    "allowCustom": true,
                    "banner":false
                },
                "colors": [{
                        "id": "1",
                        "color": "#005e9c",
                        "second":"#ecf5ff"
                    },
                    {
                        "id": "2",
                        "color": "#36b368",
                        "second":"#f0f9eb"
                    },
                    {
                        "id": "3",
                        "color": "#f6ad55",
                        "second":"#fdf6ec"
                    }, {
                        "id": "4",
                        "color": "#f56c6c",
                        "second":"#fef0f0"
                    }, {
                        "id": "5",
                        "color": "#3963bc",
                        "second":"#ecf5ff"
                    }
                ],
               
                "other": {
                    "keepLoad": 100
                },
                "header":{
                    message: false
                }
            });
            layelem.on('nav(layui_nav_right)', function(elem) {
                if ($(elem).hasClass('logout')) {
                    layer.confirm('确定退出登录吗?', function(index) {
                        layer.close(index);
                        $.ajax({
                            url: '<?php echo htmlentities(app('request')->root()); ?>/login/logout',
                            type:"POST",
                            dataType:"json",
                            success: function(res) {
                                if (res.code==200) {
                                    layer.msg(res.msg, {
                                        icon: 1
                                    });
                                    setTimeout(function() {
                                        location.href = '<?php echo htmlentities(app('request')->root()); ?>/login/index';
                                    }, 333)
                                }
                            }
                        });
                    });
                }else if ($(elem).hasClass('password')) {
                    layer.open({
                        type: 2,
                        maxmin: true,
                        title: '修改密码',
                        shade: 0.1,
                        area: ['300px', '300px'],
                        content:'<?php echo htmlentities(app('request')->root()); ?>/index/pass'
                    });
                }else if ($(elem).hasClass('cache')) {
                    $.post('<?php echo htmlentities(app('request')->root()); ?>/index/cache',
                    function(data){
                        layer.msg(data.msg, {time: 1500});
                        location.reload()
                    });

                }

            });
        })
		</script>
	</body>
</html>
