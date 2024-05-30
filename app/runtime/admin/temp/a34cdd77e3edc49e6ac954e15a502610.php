<?php /*a:1:{s:85:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\nav\index\from.html";i:1683799834;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/component/pear/css/pear.css" />
    <script src="/static/component/layui/layui.js"></script>
    <script src="/static/component/pear/pear.js"></script>
</head>
<body>
<form class="layui-form" action="">
    <div class="mainBox">
        <div class="main-container">

                    <div class="layui-form-item">
            <label for="" class="layui-form-label">父级</label>
            <div class="layui-input-block">
                <select name="pid" lay-verify="requried">
                    <option value="0">顶级</option>
                    <?php foreach($category as $k1=>$p1): ?>
                        <option value="<?php echo htmlentities($p1['id']); ?>" <?php if(isset($model) && $model->pid==$p1['id']): ?> selected <?php endif; ?>><?php echo htmlentities($p1['title']); ?></option>
                        <?php if(isset($p1['children']) && !empty($p1['children'])): foreach($p1['children'] as $k2=>$p2): ?>
                                <option value="<?php echo htmlentities($p2['id']); ?>" <?php if(isset($model) && $model->pid==$p2['id']): ?> selected <?php endif; ?>>&nbsp;&nbsp;&nbsp;┗━━<?php echo htmlentities($p2['title']); ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
            <div class="layui-form-item">
                    <label class="layui-form-label">
                        名称
                    </label>
                    <div class="layui-input-block">
                        <input class="layui-input layui-form-danger" name="title" type="text" value="<?php echo isset($model['title']) ? htmlentities($model['title']) : ""; ?>"/>
                    </div>
                </div>
                    <div class="layui-form-item">
                    <label class="layui-form-label">
                        链接
                    </label>
                    <div class="layui-input-block">
                        <input class="layui-input layui-form-danger" name="url" type="text" value="<?php echo isset($model['url']) ? htmlentities($model['url']) : ""; ?>"/>
                    </div>
                </div>
               <div class="layui-form-item">
                    <label class="layui-form-label">
                        排序
                    </label>
                   <div class="layui-input-block">
                        <input class="layui-input layui-form-danger" name="sort" type="text" value="<?php echo isset($model['sort']) ? htmlentities($model['sort']) : ""; ?>"/>
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
    </div>
</form>
<script>
    layui.use(['form', 'jquery', 'uploads'], function () {
        let form = layui.form;
        let $ = layui.jquery;
        
        
        form.on('submit(save)', function (data) {
            
            $.ajax({
                data: JSON.stringify(data.field),
                dataType: 'json',
                contentType: 'application/json',
                type: 'post',
                success: function (res) {
                    //判断有没有权限
                    if (res && res.code == 999) {
                        layer.msg(res.msg, {
                            icon: 5,
                            time: 2000,
                        })
                        return false;
                    } else if (res.code == 200) {
                        layer.msg(res.msg,{icon:1,time:1000}, function () {
                              parent.location.reload();
                            parent.layer.close(parent.layer.getFrameIndex(window.name));//关闭当前页
                            
                        });
                    } else {
                        layer.msg(res.msg,{icon:2,time:1000});
                    }
                }
            })
            return false;
        });
    })
</script>
</body>
</html>