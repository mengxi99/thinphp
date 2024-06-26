<?php /*a:1:{s:65:"/home/wwwroot/www.fsqf.com/view/admin/admin/permission/index.html";i:1633663235;}*/ ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/static/component/pear/css/pear.css" />
	</head>
	<body class="pear-container">
		<div class="layui-card">
			<div class="layui-card-body">
				<table id="power-table" lay-filter="power-table"></table>
			</div>
		</div>
		
		<script type="text/html" id="power-toolbar">
			<button class="pear-btn pear-btn-primary pear-btn-md" lay-event="add">
				<i class="layui-icon layui-icon-add-1"></i>
				新增
			</button>
			<button class="pear-btn pear-btn-success pear-btn-md" lay-event="expandAll">
				<i class="layui-icon layui-icon-spread-left"></i>
				展开
			</button>
			<button class="pear-btn pear-btn-success pear-btn-md" lay-event="foldAll">
				<i class="layui-icon layui-icon-shrink-right"></i>
				折叠
			</button>
		</script>
		
		<script type="text/html" id="power-bar">
			<button class="pear-btn pear-btn-primary pear-btn-sm" lay-event="edit"><i class="layui-icon layui-icon-edit"></i></button>
			<button class="pear-btn pear-btn-danger pear-btn-sm" lay-event="remove"><i class="layui-icon layui-icon-delete"></i></button>
		</script>
		
		<script type="text/html" id="power-type">
			{{#if (d.type == '0') { }}
			<span>目录</span>
			{{# }else if(d.type == '1'){ }}
			<span>菜单</span>
			{{# } }}
		</script>
		<script type="text/html" id="status">
			<input type="checkbox" name="status" value="{{d.id}}" lay-skin="switch" lay-text="启用|禁用" lay-filter="status" {{# if(d.status==1){ }} checked {{# } }}>
		</script>
		<script src="/static/component/layui/layui.js"></script>
		<script src="/static/component/pear/pear.js"></script>
        <script>
            layui.use(['table','form','treetable', 'jquery'],function () {
                let table = layui.table;
                let form = layui.form;
                let treetable = layui.treetable;
                let $ = layui.jquery;

                let MODULE_PATH = "<?php echo htmlentities(app('request')->root()); ?>/admin.permission/";

                window.render = function(){
                    treetable.render({
                        treeColIndex: 0,
                        treeSpid: 0,
                        treeIdName: 'id',
                        treePidName: 'pid',
                        skin:'line',
                        method:'post',
                        treeDefaultClose: false,
                        toolbar:'#power-toolbar',
                        elem: '#power-table',
                        url: MODULE_PATH + 'index',
                        page: false,
                        cols: [
                            [
                            {field: 'title', minWidth: 200, unresize: true,title: '权限名称'},
                            {field: 'icon',title: '图标', unresize: true, align: 'center',
                                templet:function (d) {
                                    return '<i class="'+d.icon+'"></i>';
                                }
                            }, 
                            {field: 'type', title: '权限类型',unresize: true,templet:'#power-type'},
                            {title: '状态', field: 'status',align: 'center',unresize: true,templet: '#status',width: 100},
                            {field: 'sort', title: '排序',unresize: true},
                            {title: '操作',templet: '#power-bar', unresize: true,width: 150, align: 'center'}
                            ]
                        ]
                    });
                }
                render();
                table.on('tool(power-table)',function(obj){
                    if (obj.event === 'remove') {
                        window.remove(obj);
                    } else if (obj.event === 'edit') {
                        window.edit(obj);
                    } 
                })

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

                table.on('toolbar(power-table)', function(obj){
                    if(obj.event === 'add'){
                        layer.open({
                            type: 2,
                            maxmin: true,
                            title: '新增菜单',
                            shade: 0.1,
                            area: screen(),
                            content:MODULE_PATH + 'add'
                        });
                    } else if(obj.event === 'expandAll'){
                        treetable.expandAll("#power-table");
                    } else if(obj.event === 'foldAll'){
                        treetable.foldAll("#power-table");
                }
                });
                window.edit = function(obj){
                    layer.open({
                        type: 2,
                        maxmin: true,
                        title: '修改菜单',
                        shade: 0.1,
                        area: screen(),
                        content: MODULE_PATH + 'edit/id/'+obj.data['id']
                    });
                }
                window.remove = function(obj){
                    layer.confirm('确定要删除该菜单', {
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
                                        top.location.reload();
                                    });
                                } else {
                                    layer.confirm(res.msg, {
                                        icon: 3,
                                        title: '提示'
                                    }, function(index) {
                                        layer.close(index);
                                        let loading = layer.load();
                                        $.ajax({
                                            url:MODULE_PATH + 'remove',
                                            data:{id:obj.data['id'],type:true},
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
                                                        top.location.reload();
                                                    });
                                                }
                                            }
                                        })
                                    });
                                }
                            }
                        })
                    });
                }
                form.on('switch(status)', function(data) {
                    var status = data.elem.checked?1:2;
                    var id = this.value;
                    var load = layer.load();
                    $.post(MODULE_PATH + 'status',{status:status,id:id},function (res) {
                        layer.close(load);
                        if (res.code==200){
                            layer.msg(res.msg,{icon:1,time:1500})
                        } else {
                            layer.msg(res.msg,{icon:2,time:1500},function () {
                                $(data.elem).prop('checked',!$(data.elem).prop('checked'));
                                form.render()
                            })
                        }
                    })
                });
            })
        </script>
	</body>
</html>
