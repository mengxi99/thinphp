<?php /*a:1:{s:92:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\admin\permission\edit.html";i:1677911300;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/component/pear/css/pear.css" />
    <style>
        .pear-container{background-color:white;}
        body{margin: 10px;}
    </style>
</head>
<body>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label for="" class="layui-form-label">父级</label>
            <div class="layui-input-block">
                <select name="pid" lay-verify="requried">
                    <option value="0">顶级</option>
                    <?php foreach($permissions as $k1=>$p1): ?>
                        <option value="<?php echo htmlentities($p1['id']); ?>" <?php if(isset($model) && $model->pid==$p1['id']): ?> selected <?php endif; ?> ><?php echo htmlentities($p1['title']); ?></option>
                        <?php if(isset($p1['children']) && !empty($p1['children'])): foreach($p1['children'] as $k2=>$p2): ?>
                                <option value="<?php echo htmlentities($p2['id']); ?>" <?php if(isset($model) && $model->pid==$p2['id']): ?> selected <?php endif; ?> >&nbsp;&nbsp;&nbsp;┗━━<?php echo htmlentities($p2['title']); ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">权限名称</label>
            <div class="layui-input-block">
                <input type="text" maxlength="16" name="title" value="<?php echo isset($model->title) ? htmlentities($model->title) : ''; ?>" lay-verify="required" placeholder="请输入权限名称" class="layui-input" >
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">地址</label>
            <div class="layui-input-block">
                <input type="text" name="href" value="<?php echo isset($model->href) ? htmlentities($model->href) : ''; ?>" placeholder="请输入地址" class="layui-input" >
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">图标</label>
            <div class="layui-input-block">
                <div class="layui-input-inline" style="width: unset">
                    <input type="text" id="iconPicker2" name="icon" value="<?php echo isset($model->icon) ? htmlentities($model->icon) : 'layui-icon layui-icon-face-smile'; ?>" lay-filter="iconPicker2" class="hide">
                </div>
                <div class="layui-input-inline" style="width: unset">
                    <span class="pear-btn" id="clear">清空</span>
                </div>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">权限类型：</label>
            <div class="layui-input-block">
            <?php if(empty($model->type)): ?>
              <input type="radio" name="type" value="0" title="目录" checked>
              <input type="radio" name="type" value="1" title="菜单">
            <?php else: ?>
              <input type="radio" name="type" value="0" title="目录" <?php if($model->type == 0): ?> checked <?php endif; ?>>
              <input type="radio" name="type" value="1" title="菜单" <?php if($model->type == 1): ?> checked <?php endif; ?>>
            <?php endif; ?>
            </div>
        </div>
        <div class="layui-form-item">
            <label for="" class="layui-form-label">排序</label>
            <div class="layui-input-block">
                <input type="number" name="sort" value="<?php echo isset($model->sort) ? htmlentities($model->sort) : 10; ?>" lay-verify="required" placeholder="排序权重" class="layui-input" >
            </div>
        </div>
        <div class="bottom">
            <div class="button-container">
                <button type="submit" class="layui-btn layui-btn-normal layui-btn-sm" lay-submit="" lay-filter="save">
                    <i class="layui-icon layui-icon-ok"></i>
                    提交
                </button>
                <button type="reset" class="layui-btn layui-btn-primary layui-btn-sm">
                    <i class="layui-icon layui-icon-refresh"></i>
                    重置
                </button>
            </div>
    </form>
    <script src="/static/component/layui/layui.js"></script>
    <script src="/static/component/pear/pear.js"></script>
    <script>
        layui.use(['form','element','icon','jquery'], function() {
            var form = layui.form;
            var element = layui.element;
            var icon= layui.icon;
            var $ = layui.jquery;
            icon.render({
                    elem: '#iconPicker2',
                    style: 'color: #5FB878;'
                    ,placeholder: ''
                    ,isSplit: true
                    ,page: false
                    ,search: false
                    ,click: function (data) {
                    },
                    ready: function(d) {
                    }
                });
                $('#clear').click(function() {
                    $('#iconPicker2').attr("value","");
                    $('#iconPicker2').attr("title","");
                    $('.layui-iconpicker-main').children("i").attr("class","layui-icon layui-icon-face-smile");
                    $('.layui-iconpicker-main').children("span").remove();
                });

                form.on('submit(save)', function(data){
                    if(data.field.icon){
                        data.field.icon = 'layui-icon '+ data.field.icon;
                    }
                    $.ajax({
                        data:JSON.stringify(data.field),
                        dataType:'json',
                        contentType:'application/json',
                        type:'post',
                        success:function(res){
                            //判断有没有权限
                            if(res && res.code==999){
                                layer.msg(res.msg, {
                                    icon: 5,
                                    time: 2000, 
                                })
                                return false;
                            }else if(res.code==200){
                                layer.msg(res.msg,{icon:1,time:1000},function(){
                                    parent.layer.close(parent.layer.getFrameIndex(window.name));//关闭当前页
                                    //top.location.reload();
                                });
                            }else{
                                layer.msg(res.msg,{icon:2,time:1000});
                            }
                        }
                    })
                    return false;
                });
        });
</script>
</body>
</html>