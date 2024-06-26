<?php /*a:1:{s:86:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\index\opt_photo.html";i:1633663235;}*/ ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/static/component/pear/css/pear.css" rel="stylesheet" />
        <script src="/static/component/layui/layui.js"></script>
		<script src="/static/component/pear/pear.js"></script>
	</head>
	<body>
		<body class="pear-container">
			<div class="layui-card">
				<div class="layui-card-body">
					<form class="layui-form" action="">
						<div class="layui-form-item">
							<div class="layui-form-item layui-inline">
								<label class="layui-form-label">所属目录</label>
								<div class="layui-input-inline">
									<select name="path">
										<option value="">全部</option>
										<?php foreach($data as $k=>$v): ?>
											<option value="<?php echo htmlentities($v['name']); ?>"><?php echo htmlentities($v['name']); ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="layui-form-item layui-inline">
								<button class="pear-btn pear-btn-md pear-btn-primary" lay-submit lay-filter="query">
									<i class="layui-icon layui-icon-search"></i>
									查询
								</button>
								<button type="reset" class="pear-btn pear-btn-md">
									<i class="layui-icon layui-icon-refresh"></i>
									重置
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		    <div class="layui-card">
				<div class="layui-card-body">
					<table id="dataTable" lay-filter="dataTable"></table>
				</div>
		    </div>
			<script type="text/html" id="options">
				<button class="pear-btn pear-btn-sm" lay-event="opt"><i class="layui-icon layui-icon-add-1"></i></button>
			</script>
		<script src="/static/component/layui/layui.js"></script>
		<script src="/static/component/pear/pear.js"></script>
		<script>
			layui.use(['table', 'form', 'jquery'], function() {
				let table = layui.table;
				let form = layui.form;
				let $ = layui.jquery;
	
				let MODULE_PATH = "<?php echo htmlentities(app('request')->root()); ?>/index/";
				let opt = '';
				window.child = function(obj) {opt = obj}
				let cols = [
					[ {
						title: '选中',
						toolbar: '#options'
						},{
							field: 'href',
							title: '图片',
							unresize: true,
							align: 'center',
							templet:function (d) {
								return '<img class="photo" lay-event="photo" src=" '+d.href+'"></i>';
							}
						},{
							field: 'name',
							title: '文件名称',
							unresize: true,
							align: 'center'
						},{
							field: 'path',
							title: '所属目录',
							unresize: true,
							align: 'center'
						},{
							field: 'create_time',
							title: '创建时间',
							unresize: true,
							align: 'center'
						}
					]
				]
	
				table.render({
					elem: '#dataTable',
					url: MODULE_PATH + 'optPhoto',
					page: true,
					cols: cols,
					cellMinWidth: 70,
					skin: 'line'
				});
	
				form.on('submit(query)', function(data) {
                    table.reload('dataTable', {
                        where: data.field,
                        page:{curr: 1}
                    })
                    return false;
                });
			
				table.on('tool(dataTable)', function(obj) {
					if (obj.event === 'photo') {
						window.photo(obj);
					}else if(obj.event === 'opt') {
						$("#"+opt+"",window.parent.document).siblings('input').attr('value',obj.data.href);
						$("#"+opt+"",window.parent.document).siblings('div').find('img').attr('src',obj.data.href);
						var index = parent.layer.getFrameIndex(window.name);
						parent.layer.close(index);
					} 
				});
				
				window.refresh = function() {
					table.reload('dataTable');
				}
	
				// 查看大图
				window.photo = function(obj) {
					if (!obj.data.href || obj.data.href == "") {
						layer.msg("图片地址错误！");
						return;
					}
					var auto_img = {};
					var img = new Image();
					img.src = obj.data.href;
					img.onload = function() {
						var max_height = $(window).height() - 100;
						var max_width = $(window).width();
						var rate1 = max_height / img.height;
						var rate2 = max_width / img.width;
						var rate3 = 1;
						var rate = Math.min(rate1, rate2, rate3);
						auto_img.height = img.height * rate;
						auto_img.width = img.width * rate;
						layer.open({
							type: 1,
							title: false,
							area: ['auto'],
							skin: 'layui-layer-nobg', //没有背景色
							shadeClose: true,
							content: "<img src='" + obj.data['href'] + "' width='" + auto_img.width + "px' height='" + auto_img.height + "px'>"
						})
					}
				};
			})
		</script>
	</body>
</html>