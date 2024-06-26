<?php /*a:1:{s:60:"/home/wwwroot/www.fsqf.com/view/admin/admin/photo/index.html";i:1633663235;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="/static/component/pear/css/pear.css" rel="stylesheet" />
	</head>
	<body class="pear-container">
		<div class="layui-row layui-col-space10">
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
                                <legend>图片列表</legend>
                              </fieldset>
                              <svg class="empty" style="width: 100%;" width="184" height="152" viewBox="0 0 184 152" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fillrule="evenodd">
                                    <g transform="translate(24 31.67)">
                                        <ellipse fillopacity=".8" fill="#F5F5F7" cx="67.797" cy="106.89" rx="67.797" ry="12.668"></ellipse>
                                        <path d="M122.034 69.674L98.109 40.229c-1.148-1.386-2.826-2.225-4.593-2.225h-51.44c-1.766 0-3.444.839-4.592 2.225L13.56 69.674v15.383h108.475V69.674z" fill="#AEB8C2"></path>
                                        <path d="M101.537 86.214L80.63 61.102c-1.001-1.207-2.507-1.867-4.048-1.867H31.724c-1.54 0-3.047.66-4.048 1.867L6.769 86.214v13.792h94.768V86.214z" fill="url(#linearGradient-1)" transform="translate(13.56)"></path>
                                        <path d="M33.83 0h67.933a4 4 0 0 1 4 4v93.344a4 4 0 0 1-4 4H33.83a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4z" fill="#F5F5F7"></path>
                                        <path d="M42.678 9.953h50.237a2 2 0 0 1 2 2V36.91a2 2 0 0 1-2 2H42.678a2 2 0 0 1-2-2V11.953a2 2 0 0 1 2-2zM42.94 49.767h49.713a2.262 2.262 0 1 1 0 4.524H42.94a2.262 2.262 0 0 1 0-4.524zM42.94 61.53h49.713a2.262 2.262 0 1 1 0 4.525H42.94a2.262 2.262 0 0 1 0-4.525zM121.813 105.032c-.775 3.071-3.497 5.36-6.735 5.36H20.515c-3.238 0-5.96-2.29-6.734-5.36a7.309 7.309 0 0 1-.222-1.79V69.675h26.318c2.907 0 5.25 2.448 5.25 5.42v.04c0 2.971 2.37 5.37 5.277 5.37h34.785c2.907 0 5.277-2.421 5.277-5.393V75.1c0-2.972 2.343-5.426 5.25-5.426h26.318v33.569c0 .617-.077 1.216-.221 1.789z" fill="#DCE0E6"></path>
                                    </g>
                                    <path d="M149.121 33.292l-6.83 2.65a1 1 0 0 1-1.317-1.23l1.937-6.207c-2.589-2.944-4.109-6.534-4.109-10.408C138.802 8.102 148.92 0 161.402 0 173.881 0 184 8.102 184 18.097c0 9.995-10.118 18.097-22.599 18.097-4.528 0-8.744-1.066-12.28-2.902z" fill="#DCE0E6"></path>
                                    <g transform="translate(149.65 15.383)" fill="#FFF">
                                        <ellipse cx="20.654" cy="3.167" rx="2.849" ry="2.815"></ellipse>
                                        <path d="M5.698 5.63H0L2.898.704zM9.259.704h4.985V5.63H9.259z"></path>
                                    </g>
                                </g>
                            </svg>
                               
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
	        创建文件夹
	    </button>
	</script>

	<script type="text/html" id="dict-type-bar">
		<button class="pear-btn pear-btn-primary pear-btn-sm" lay-event="details">
	        浏览
		</button>
        <button class="pear-btn pear-btn-danger pear-btn-sm" lay-event="remove">
	       删除
		</button>
    </script>

	<script type="text/html" id="dict-data-toolbar">
		<button class="pear-btn pear-btn-primary pear-btn-md" lay-event="addPhoto">
			<i class="layui-icon layui-icon-add-1"></i>
			新增单图
		</button>
        <button class="pear-btn pear-btn-primary pear-btn-md" lay-event="addPhotos">
			<i class="layui-icon layui-icon-add-1"></i>
			新增多图
		</button>
		<button class="pear-btn pear-btn-danger pear-btn-md" lay-event="batchRemove">
			<i class="layui-icon layui-icon-delete"></i>
			删除
		</button>
	</script>
	<script type="text/html" id="options">
		<button class="pear-btn pear-btn-danger pear-btn-sm" lay-event="remove"><i class="layui-icon layui-icon-delete"></i></button>
	</script>
	<script src="/static/component/layui/layui.js"></script>
	<script src="/static/component/pear/pear.js"></script>
	<script>
		layui.use(['table', 'form', 'jquery'], function() {
			let table = layui.table;
			let form = layui.form;
			let $ = layui.jquery;

            let MODULE_PATH = "<?php echo htmlentities(app('request')->root()); ?>/admin.photo/";

			let name;

			let cols = [
				[
					{
						title: '所属目录',
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
			[{
                        type: 'checkbox'
                    }, {
                        field: 'id',
                        title: 'ID', 
                        sort: true, 
                        align: 'center',
                        unresize: true
                    },{
                        field: 'name',
                        title: '文件名称',
                        unresize: true,
                        align: 'center'
                    },{
                        field: 'href',
                        title: '图片',
                        unresize: true,
                        align: 'center',
                        templet:function (d) {
                            return '<img class="photo" lay-event="photo" src=" '+d.href+'"></i>';
                        }
                    },{
                        field: 'mime',
                        title: 'mime类型',
                        unresize: true,
                        align: 'center'
                    },{
                        field: 'size',
                        title: '文件大小',
                        unresize: true,
                        align: 'center'
                    },{
                        field: 'ext',
                        title: '文件后缀',
                        unresize: true,
                        align: 'center'
                    },{
                        field: 'create_time',
                        title: '创建时间',
                        unresize: true,
                        align: 'center'
                    },{
                        title: '操作',
                        toolbar: '#options',
                        unresize: true,
                        align: 'center',
                        width: 180
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
					page: true,
					skin: 'line',
					toolbar: '#dict-data-toolbar',
					defaultToolbar: [{
					title: '刷新',
					layEvent: 'refresh',
					icon: 'layui-icon-refresh',
				}, 'filter']
				});
			}

			table.on('tool(dict-type-table)', function(obj) {
				if (obj.event === 'remove') {
					window.removeType(obj);
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

            table.on('tool(dict-data-table)', function(obj) {
                if (obj.event === 'remove') {
                    window.remove(obj);
                } else if (obj.event === 'photo') {
                    window.photo(obj);
                } 
            });

            table.on('toolbar(dict-data-table)', function(obj) {
                if (obj.event === 'addPhoto') {
                    window.addPhoto();
                } else if (obj.event === 'addPhotos') {
                    window.addPhotos();
                } else if (obj.event === 'refresh') {
					window.refreshData();
                } else if (obj.event === 'batchRemove') {
                    window.batchRemove(obj);
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
					title: '创建文件夹',
					shade: 0.1,
					area: screen(),
					content: MODULE_PATH + 'add'
				});
			}
			window.addPhoto = function() {
                layer.open({
                    type: 2,
                    maxmin: true,
                    title: '新增单图',
                    shade: 0.1,
                    area: screen(),
                    content:MODULE_PATH + 'addPhoto/name/' + name,
                    end: function() {
                        window.refreshData();
                    },
                });
            }

            window.addPhotos = function() {
                layer.open({
                    type: 2,
                    maxmin: true,
                    title: '新增多图',
                    shade: 0.1,
                    area: screen(),
                    content:MODULE_PATH + 'addPhotos/name/' + name,
                    end: function() {
                        window.refreshData();
                    },
                });
            }

            window.remove = function(obj) {
                layer.confirm('确定要删除该图片', {
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
                            if (res.code==200) {
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
                var hasCheck = table.checkStatus('dict-data-table')
                var hasCheckData = hasCheck.data
                if (hasCheckData.length > 0) {
                    $.each(hasCheckData, function (index, element) {
                        ids.push(element.id)
                    })
                }
                layer.confirm('确定要删除这些图片', {
                    icon: 3,
                    title: '提示'
                }, function(index) {
                    layer.close(index);
                    let loading = layer.load();
                    $.ajax({
                        url:MODULE_PATH + "batchRemove",
                        data:{ids:ids},
                        dataType: 'json',
                        type: 'POST',
                        success: function(res) {
                            layer.close(loading);
                            if (res.code==200) {
                                layer.msg(res.msg, {
                                    icon: 1,
                                    time: 1000
                                }, function() {
                                    table.reload('dict-data-table');
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

			window.removeType = function(obj) {
				layer.confirm('一旦删除不可恢复', {
					icon: 3,
					title: '提示'
				}, function() {
                    $.ajax({
                        url:MODULE_PATH + 'del',
                        data:{name:obj.data.name},
                        dataType: 'json',
                        type: 'POST',
                        success: function(res) {
                            if (res.code==200) {
                                layer.msg(res.msg, {
                                    icon: 1,
                                    time: 1000
                                }, function() {
                                    location.reload();
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

			window.refreshType = function() {
				table.reload('dict-type-table');
			}

			window.refreshData = function() {
				table.reload('dict-data-table');
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
</html>
