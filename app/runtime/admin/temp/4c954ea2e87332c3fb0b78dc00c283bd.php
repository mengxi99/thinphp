<?php /*a:1:{s:81:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\crud\index.html";i:1633663235;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="/static/component/pear/css/pear.css" rel="stylesheet" />
	</head>
	<body class="pear-container">
		<div class="layui-row layui-col-space10">
			<div class="layui-col-md12">
				<div class="layui-card">
					<div class="layui-card-body">
						注意事项:
                        <ol  style="color: red;">
							<li><h3>手动创建数据表或者新增基础表</h3></li>
							<?php if($prefix != ''): ?>
							<li><h3>约定表名为(前缀_应用_项目) 例:<?php echo htmlentities($prefix); ?>home_news</h3></li>
							<?php else: ?>
							<li><h3>约定表名为(应用_项目) 例:home_news</h3></li>
							<?php endif; ?>
							<li><h3>新增基础表(字段为id create_time update_time delete_time)</h3></li>
                        </ol>
					</div>
				</div>
			</div>
			<div class="layui-col-md4">
				<div class="layui-card">
					<div class="layui-card-body">
						<table id="dict-type-table" lay-filter="dict-type-table"></table>
					</div>
				</div>
			</div>
			<div class="layui-col-md8">
				<div class="layui-card">
					<div class="layui-card-body">
						<div class="empty">
                            <fieldset class="layui-elem-field layui-field-title">
                                <legend>数据表字段</legend>
                              </fieldset>
                              <h3>点击左侧 <button class="pear-btn pear-btn-warming pear-btn-sm"> <i class="layui-icon layui-icon-transfer"></i> </button> 查看字段</h3>
                               
                            </div>
						<table id="dict-data-table" lay-filter="dict-data-table"></table>
					</div>
				</div>
			</div>
		</div>

	</body>
	<script type="text/html" id="dict-type-toolbar">
		<button class="pear-btn pear-btn-primary pear-btn-md" lay-event="add">
	        <i class="layui-icon layui-icon-add-1"></i>
	        新增基础表
	    </button>
	</script>

	<script type="text/html" id="dict-type-bar">
		<button class="pear-btn pear-btn-primary pear-btn-sm" lay-event="edit"><i class="layui-icon layui-icon-util"></i>
	    </button>
		<button class="pear-btn pear-btn-warming pear-btn-sm" lay-event="details">
	        <i class="layui-icon layui-icon-transfer"></i>
		</button>
		<button class="pear-btn pear-btn-danger pear-btn-sm" lay-event="remove">
	        <i class="layui-icon layui-icon-delete"></i>
		</button>
    </script>
	<script src="/static/component/layui/layui.js"></script>
	<script src="/static/component/pear/pear.js"></script>
	<script>
		layui.use(['table', 'form', 'jquery'], function() {
			let table = layui.table;
			let form = layui.form;
			let $ = layui.jquery;

            let MODULE_PATH = "<?php echo htmlentities(app('request')->root()); ?>/crud/";

			let name;

			let cols = [
				[
					{
						title: '数据表',
						field: 'name',
						unresize: true,
						align: 'center'
					},
					{
						title: '操作',
						toolbar: '#dict-type-bar',
						align: 'center',
						unresize: true,
						width: 180
					}
				]
			];

			table.render({
				elem: '#dict-type-table',
				url: MODULE_PATH + 'index',
				cols: cols,
				cellMinWidth: 100,
				skin: 'line',
				height: 'full-148',
				toolbar: '#dict-type-toolbar',
				defaultToolbar: [{
					title: '刷新',
					layEvent: 'refresh',
					icon: 'layui-icon-refresh',
				}, 'filter']
			});

			let dataCols = [
				[
					{
						title: '字段',
						field: 'name',
						unresize: true,
						align: 'center'
					},{
						title: '类型',
						field: 'type',
						unresize: true,
						align: 'center'
					},,{
						title: '注释',
						field: 'comment',
						unresize: true,
						align: 'center'
					},{
						title: '非空',
						field: 'notnull',
						unresize: true,
						align: 'center'
					}
				]
			];
			
			window.renderData = function(code) {
				name = code;
                $(".empty").hide();
				table.render({
					elem: '#dict-data-table',
					url: MODULE_PATH + 'list/name/' + name,
					height: 'full-148',
					cols: dataCols,
					cellMinWidth: 100,
					skin: 'line'
				});
			}

			table.on('tool(dict-type-table)', function(obj) {
				if (obj.event === 'remove') {
					window.removeType(obj);
				} else if (obj.event === 'edit') {
					window.editData(obj.data['name'])
				} else if (obj.event === 'details') {
					window.renderData(obj.data['name'])
				}
			});

			table.on('toolbar(dict-type-table)', function(obj) {
				if (obj.event === 'add') {
					window.addType();
				} else if (obj.event === 'refresh') {
					window.refreshType();
				}
			});

			//弹出窗设置 自己设置弹出百分比
			function screen() {
				if (typeof width !== 'number' || width === 0) {
				width = $(window).width() * 0.8;
				}
				if (typeof height !== 'number' || height === 0) {
				height = $(window).height() - 20;
				}
				return [width + 'px', height + 'px'];
			}

			window.addType = function() {
				layer.open({
					type: 2,
					maxmin: true,
					title: '新增基础表',
					shade: 0.1,
					area: screen(),
					content: MODULE_PATH + 'add'
				});
			}

			window.removeType = function(obj) {
				layer.confirm('确定要删除吗?', {
					icon: 3,
					title: '提示'
				}, function() {
					layer.confirm('相关应用是否删除', {
					icon: 2,
					btn : ['删除','不删除'],
					btn1:function(index){
						layer.close(index);
						let loading = layer.load();
						$.ajax({
							url:MODULE_PATH + 'remove',
							data:{name:obj.data.name,type:true},
							dataType: 'json',
							type: 'POST',
							success: function(res) {
								layer.close(loading);
								if (res.code==200) {
									layer.msg(res.msg, {
										icon: 1,
										time: 1000
									}, function() {
										table.reload('dict-type-table');
									});
								} else {
									layer.msg(res.msg, {
										icon: 2,
										time: 1000
									});
								}
							}
						})
					},
					btn2:function(index){
						layer.close(index);
						let loading = layer.load();
						$.ajax({
							url:MODULE_PATH + 'remove',
							data:{name:obj.data.name},
							dataType: 'json',
							type: 'POST',
							success: function(res) {
								layer.close(loading);
								if (res.code==200) {
									layer.msg(res.msg, {
										icon: 1,
										time: 1000
									}, function() {
										table.reload('dict-type-table');
									});
								} else {
									layer.msg(res.msg, {
										icon: 2,
										time: 1000
									});
								}
							}
						})
					},
				});
			});
			}

			window.refreshType = function() {
				table.reload('dict-type-table');
			}

			window.editData = function(obj) {
				layer.open({
					type: 2,
					maxmin: true,
					title: 'CRUD生成',
					shade: 0.1,
					area: screen(),
					content: MODULE_PATH + 'crud/name/' + obj
				});
			}

			window.refreshData = function() {
				table.reload('dict-data-table');
			}
		})
	</script>
</html>
