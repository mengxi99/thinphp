<?php /*a:1:{s:59:"/home/wwwroot/www.fsqf.com/view/admin/admin/role/index.html";i:1633663235;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/static/component/pear/css/pear.css" />
	</head>
	<body class="pear-container">
		<div class="layui-card">
			<div class="layui-card-body">
				<table id="dataTable" lay-filter="dataTable"></table>
			</div>
		</div>

		<script type="text/html" id="toolbar">
			<button class="pear-btn pear-btn-primary pear-btn-md" lay-event="add">
		        <i class="layui-icon layui-icon-add-1"></i>
		        新增
		    </button>
            <button class="pear-btn pear-btn-md" lay-event="recycle">
		        <i class="layui-icon layui-icon-delete"></i>
		        回收站
		    </button>
		</script>

		<script type="text/html" id="options">
			<button class="pear-btn pear-btn-primary pear-btn-sm" lay-event="edit"><i class="layui-icon layui-icon-edit"></i></button>
            <button class="pear-btn pear-btn-warming pear-btn-sm" lay-event="permission"><i class="layui-icon layui-icon-vercode"></i></button>
            <button class="pear-btn pear-btn-danger pear-btn-sm" lay-event="remove"><i class="layui-icon layui-icon-delete"></i></button>
		</script>

		<script src="/static/component/layui/layui.js"></script>
		<script src="/static/component/pear/pear.js"></script>
		<script>
			layui.use(['table', 'form', 'jquery','common'], function() {
				let table = layui.table;
				let form = layui.form;
				let $ = layui.jquery;
				let common = layui.common;

				let MODULE_PATH = "<?php echo htmlentities(app('request')->root()); ?>/admin.role/";

				let cols = [
					[
                        {
                            field: 'id',
                            title: 'ID', 
                            sort: true, 
                            unresize: true,
                            align: 'center'
                        },{
                            field: 'name',
                            title: '角色名称',
                            unresize: true,
                            align: 'center'
                        }, {
                            field: 'desc',
                            title: '描述',
                            unresize: true,
                            align: 'center'
                        }, 
                        {
                            field: 'create_time',
                            title: '创建时间',
                            unresize: true,
                            align: 'center'
                        }, 
                        {
                            field: 'update_time',
                            title: '更新时间',
                            unresize: true,
                            align: 'center'
                        }, 
                        {
                            title: '操作',
                            toolbar: '#options',
                            unresize: true,
                            align: 'center',
                            width: 180
                        }
					]
				]

				table.render({
					elem: '#dataTable',
					url: MODULE_PATH + 'index',
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

				table.on('tool(dataTable)', function(obj) {
					if (obj.event === 'remove') {
						window.remove(obj);
					} else if (obj.event === 'edit') {
						window.edit(obj);
					} else if (obj.event === 'permission') {
                        window.permission(obj);
                    }
				});

				table.on('toolbar(dataTable)', function(obj) {
					if (obj.event === 'add') {
						window.add();
					} else if (obj.event === 'refresh') {
						window.refresh();
					} else if (obj.event === 'recycle') {
                        window.recycle(obj);
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

				window.add = function() {
					layer.open({
                        type: 2,
                        maxmin: true,
                        title: '新增角色',
                        shade: 0.1,
                        area: screen(),
						content: MODULE_PATH + 'add'
					});
				}

				window.edit = function(obj) {
					layer.open({
                        type: 2,
                        maxmin: true,
                        title: '修改角色',
                        shade: 0.1,
                        area: screen(),
						content: MODULE_PATH + 'edit/id/'+obj.data['id']
					});
				}

                window.permission = function(obj) {
                    layer.open({
                        type: 2,
                        maxmin: true,
                        title: '分配权限',
                        shade: 0.1,
                        area: screen(),
                        content: MODULE_PATH + 'permission/id/'+obj.data['id']
                    });
                }

                window.recycle = function() {
                    layer.open({
                        type: 2,
                        maxmin: true,
                        title: '回收站',
                        shade: 0.1,
                        area: screen(),
                        content: MODULE_PATH + 'recycle',
                        cancel: function () {
                            table.reload('dataTable');
                        }
                    });
                }

				window.remove = function(obj) {
                    layer.confirm('确定要删除该角色', {
                        icon: 3,
                        title: '提示'
                    }, function(index) {
                        layer.close(index);
                        let loading = layer.load();
                        $.ajax({
                            url:MODULE_PATH + 'remove',
                            data:{id:obj.data['id']},
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
                                        obj.del();
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
