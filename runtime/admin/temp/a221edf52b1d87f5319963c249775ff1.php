<?php /*a:1:{s:58:"/home/wwwroot/www.fsqf.com/view/admin/admin/admin/log.html";i:1633663235;}*/ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="/static/component/pear/css/pear.css" />
</head>
<body class="pear-container">
		<div class="layui-card">
			<div class="layui-card-body">
				<form class="layui-form" action="">
					<div class="layui-form-item">
						<div class="layui-form-item layui-inline">
							<label class="layui-form-label">管理ID</label>
							<div class="layui-input-inline">
								<input type="text" name="uid" placeholder="" class="layui-input">
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

		<script type="text/html" id="toolbar">
		    <button class="pear-btn pear-btn-danger pear-btn-md" lay-event="batchRemove">
		        <i class="layui-icon layui-icon-delete"></i>
		        清空日志
			</button>
		</script>
		
        <script src="/static/component/layui/layui.js"></script>
        <script src="/static/component/pear/pear.js"></script>
        <script>
			layui.use(['table', 'form', 'jquery','common'], function() {
				let table = layui.table;
				let form = layui.form;
				let $ = layui.jquery;
				let common = layui.common;

				let MODULE_PATH = "<?php echo htmlentities(app('request')->root()); ?>/admin.admin/";

                let cols = [
                        [{
                                field: 'id',
                                title: 'ID',
                                unresize: true,
                                align: 'center',
                                width: 80
                            },{
                                field: 'uid',
                                title: '管理员ID',
                                unresize: true,
                                align: 'center'
                            }, {
                                field: 'url',
                                title: '操作页面',
                                unresize: true,
                                align: 'center',
                            },  {
                                field: 'ip',
                                title: '操作IP',
                                unresize: true,
                                align: 'center',
                            }, 
                            {
                                field: 'desc',
                                title: '描述',
                                unresize: true,
                                align: 'center'
                            }, 
                            {
                                field: 'user_agent',
                                title: 'User-Agent',
                                unresize: true,
                                align: 'center'
                            }, 
                            {
                                field: 'create_time',
                                title: '创建时间',
                                align: 'center',
                                unresize: true,
                            }
                        ]
                    ]

				table.render({
					elem: '#dataTable',
					url: MODULE_PATH + 'log',
					page: true,
					cols: cols,
                    cellMinWidth: 100,
					skin: 'line',
					toolbar: '#toolbar',
					defaultToolbar: [{
						title: '刷新',
						layEvent: 'refresh',
						icon: 'layui-icon-refresh',
					}, 'filter', 'print', 'exports']
				});

				table.on('toolbar(dataTable)', function(obj) {
					if (obj.event === 'refresh') {
						window.refresh();
					} else if (obj.event === 'batchRemove') {
                        window.batchRemove(obj);
                    }
				});

                form.on('submit(query)', function(data) {
                    table.reload('dataTable', {
                        where: data.field,
                        page:{curr: 1}
                    })
                    return false;
                });

				window.batchRemove = function(obj) {
                    layer.confirm('确定要删除日志', {
                        icon: 3,
                        title: '提示'
                    }, function(index) {
                        layer.close(index);
                        let loading = layer.load();
                        $.ajax({
                            url:MODULE_PATH + 'removeLog',
                            dataType: 'json',
                            type: 'POST',
                            success: function(res) {
                                layer.close(loading);
                                //判断有没有权限
                                if(res && res.code==999){
                                    layer.msg(res.msg, {
                                        icon: 5,
                                        time: 2000, 
                                    })
                                    return false;
                                }else if (res.code==200) {
                                    layer.msg(res.msg, {
                                        icon: 1,
                                        time: 1000
                                    }, function() {
                                        table.reload('dataTable');
                                    });
                                } else {
                                    layer.msg(res.msg, {
                                        icon: 2,
                                        time: 1000
                                    });
                                }
                            }
                        })
                    });
                }
                
				window.refresh = function(param) {
					table.reload('dataTable');
				}
			})
		</script>
</body>
</html>
