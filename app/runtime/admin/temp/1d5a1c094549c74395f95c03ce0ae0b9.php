<?php /*a:1:{s:61:"/home/wwwroot/www.fsqf.com/view/admin/images/index/index.html";i:1691634125;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/component/pear/css/pear.css" />
    <script src="/static/component/layui/layui.js"></script>
    <script src="/static/component/pear/pear.js"></script>
</head>
	<body class="pear-container">
		<div class="layui-card">
			<div class="layui-card-body">
				<form class="layui-form" action="">
					<div class="layui-form-item">
                           
               <div class="layui-form-item layui-inline">
                   <label class="layui-form-label">类别</label>
                   <div class="layui-input-inline">
              <select name="c_id" lay-verify="requried">
                    <option>选择分类</option>
                    <?php foreach($category as $k1=>$p1): ?>
                        <option  <?php if(isset($p1['children']) && !empty($p1['children'])): ?>disabled="disabled"<?php endif; ?> value="<?php echo htmlentities($p1['id']); ?>" <?php if(isset($model) && $model->pid==$p1['id']): ?> selected <?php endif; ?>><?php echo htmlentities($p1['title']); ?></option>
                        <?php if(isset($p1['children']) && !empty($p1['children'])): foreach($p1['children'] as $k2=>$p2): ?>
                                <option value="<?php echo htmlentities($p2['id']); ?>" <?php if(isset($model) && $model->pid==$p2['id']): ?> selected <?php endif; ?>>&nbsp;&nbsp;&nbsp;┗━━<?php echo htmlentities($p2['title']); ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>               
                        
                   </div>
               </div>   
               <div class="layui-form-item layui-inline">
                   <label class="layui-form-label">标题</label>
                   <div class="layui-input-inline">
                       <input type="text" name="name" placeholder="" class="layui-input">
                   </div>
               </div>   
               <div class="layui-form-item layui-inline">
                   <label class="layui-form-label">状态</label>
                   <div class="layui-input-inline">
                    
                  <select name="status">
                  <option value=""></option>
                  <option value="1">正常</option>
                   <option value="2">禁用</option>
            

              </select>
                   </div>
               </div>   
               <div class="layui-form-item layui-inline">
                   <label class="layui-form-label">创建时间</label>
                   <div class="layui-input-inline">
                       <input type="text" class="layui-input" id="create_time-start" name="create_time-start" placeholder="开始时间" autocomplete="off">
                   </div>
                   <div class="layui-input-inline">
                        <input type="text" class="layui-input" id="create_time-end" name="create_time-end" placeholder="结束时间" autocomplete="off">
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
			<button class="pear-btn pear-btn-primary pear-btn-md" lay-event="add">
		        <i class="layui-icon layui-icon-add-1"></i>
		        新增
			</button>
			<button class="pear-btn pear-btn-danger pear-btn-md" lay-event="batchRemove">
		        <i class="layui-icon layui-icon-delete"></i>
		        删除
		    </button>
    
		</script>

        
               <script type="text/html" id="status">
                   <input type="checkbox" name="status" value="{{d.id}}" lay-skin="switch" lay-text="启用|禁用" lay-filter="status" {{# if(d.status==1){ }} checked {{# } }}>
               </script>

                     <script type="text/html" id="isgood">
                   <input type="checkbox" name="isgood" value="{{d.id}}" lay-skin="switch" lay-text="推荐|正常" lay-filter="isgood" {{# if(d.isgood==1){ }} checked {{# } }}>
               </script>

		<script type="text/html" id="options">
			<button class="pear-btn pear-btn-primary pear-btn-sm" lay-event="edit"><i class="layui-icon layui-icon-edit"></i></button>
		    <button class="pear-btn pear-btn-danger pear-btn-sm" lay-event="remove"><i class="layui-icon layui-icon-delete"></i></button>
		</script>
        <script>
        layui.use(['table', 'form', 'jquery','common','laydate'], function() {
            let table = layui.table;
            let form = layui.form;
            let $ = layui.jquery;
            let common = layui.common;
            let laydate = layui.laydate;
            let MODULE_PATH = "<?php echo htmlentities(app('request')->root()); ?>/images.index/";
            laydate.render({elem: "#create_time-start"});laydate.render({elem: "#create_time-end"});
            let cols = [
                [{
                        type: 'checkbox'
                    }, {
                       field: "id",
                       title: "ID",
                       unresize: "true",
                       align: "center"
                   }, {
                       field: "c_id",
                       title: "类别",
                       unresize: "true",
                       align: "center"
                   }, {
                       field: "name",
                       title: "标题",
                       align: "center"
                   }, {
                       field: "pic",
                       title: "图片",
                       unresize: "true",
                       align: "center" ,templet:function (d) {
                            return '<img class="photo" lay-event="photo" src=" '+d.pic+'">';
                        }
                   }, {
                       field: "status",
                       title: "状态",
                       unresize: "true",
                       align: "center",
                       templet:"#status"
                   }, {
                       field: "isgood",
                       title: "推荐",
                       unresize: "true",
                       align: "center",
                       templet:"#isgood"
                   }, {
                       field: "sort",
                       title: "排序",
                       unresize: "true",
                       align: "center",
                       sort: true
                   },{
                       field: "create_time",
                       title: "时间",
                       unresize: "true",
                       align: "center",
                       sort: true
                   }, {
                        title: '操作',
                        toolbar: '#options',
                        unresize: true,
                        align: 'center',
                        width:180,
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
                }, 'filter']
            });

            table.on('tool(dataTable)', function(obj) {
                if (obj.event === 'remove') {
                    window.remove(obj);
                } else if (obj.event === 'edit') {
                    window.edit(obj);
                }else if (obj.event === 'photo') {
                    window.photo(obj);
                }
            });

            table.on('toolbar(dataTable)', function(obj) {
                if (obj.event === 'add') {
                    window.add();
                } else if (obj.event === 'refresh') {
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
                laydate.render({elem: "#create_time-start"});laydate.render({elem: "#create_time-end"});
                return false;
            });
            
               form.on("switch(status)", function(data) {
                   var status = data.elem.checked?1:2;
                   var id = this.value;
                   var load = layer.load();
                   $.post(MODULE_PATH + "status",{status:status,id:id},function (res) {
                       layer.close(load);
                       //判断有没有权限
                       if(res && res.code==999){
                           layer.msg(res.msg, {
                               icon: 5,
                               time: 2000, 
                           })
                           return false;
                       }else if (res.code==200){
                           layer.msg(res.msg,{icon:1,time:1500})
                       } else {
                           layer.msg(res.msg,{icon:2,time:1500},function () {
                               $(data.elem).prop("checked",!$(data.elem).prop("checked"));
                               form.render()
                           })
                       }
                   })
               });

                  form.on("switch(isgood)", function(data) {
                   var isgood = data.elem.checked?1:2;
                   var id = this.value;
                   var load = layer.load();
                   $.post(MODULE_PATH + "isgood",{isgood:isgood,id:id},function (res) {
                       layer.close(load);
                       //判断有没有权限
                       if(res && res.code==999){
                           layer.msg(res.msg, {
                               icon: 5,
                               time: 2000, 
                           })
                           return false;
                       }else if (res.code==200){
                           layer.msg(res.msg,{icon:1,time:1500})
                       } else {
                           layer.msg(res.msg,{icon:2,time:1500},function () {
                               $(data.elem).prop("checked",!$(data.elem).prop("checked"));
                               form.render()
                           })
                       }
                   })
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
                    title: '新增',
                    shade: 0.1,
                    area: screen(),
                    content: MODULE_PATH + 'add'
                });
            }

            window.edit = function(obj) {
                layer.open({
                    type: 2,
                    maxmin: true,
                    title: '修改',
                    shade: 0.1,
                    area: screen(),
                    content: MODULE_PATH + 'edit/id/'+obj.data['id']
                });
            }

       

            window.remove = function(obj) {
                layer.confirm('确定要删除', {
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

            window.batchRemove = function(obj) {
                let data = table.checkStatus(obj.config.id).data;
                if (data.length === 0) {
                    layer.msg("未选中数据", {
                        icon: 3,
                        time: 1000
                    });
                    return false;
                }
                var ids = []
                var hasCheck = table.checkStatus('dataTable')
                var hasCheckData = hasCheck.data
                if (hasCheckData.length > 0) {
                    $.each(hasCheckData, function (index, element) {
                        ids.push(element.id)
                    })
                }
                layer.confirm('确定要删除', {
                    icon: 3,
                    title: '提示'
                }, function(index) {
                    layer.close(index);
                    let loading = layer.load();
                    $.ajax({
                        url:MODULE_PATH + 'batchRemove',
                        data:{ids:ids},
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


// 查看大图
            window.photo = function(obj) {
                if (!obj.data.pic) {
                    layer.msg("图片地址错误！");
                    return;
                }
                var auto_img = {};
                var img = new Image();
                img.src = obj.data.pic;
                img.onload = function() {
                    var max_height = $(window).height() - 100;
                    var max_width = $(window).width()-200;
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
                        content: "<img src='" + obj.data['pic'] + "' width='" + auto_img.width + "px' height='" + auto_img.height + "px'>"
                    })
                }
            };



        })
    </script>
	</body>
</html>
