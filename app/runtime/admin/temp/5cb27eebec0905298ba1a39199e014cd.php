<?php /*a:1:{s:84:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\ad\index\from.html";i:1684229576;}*/ ?>
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
                    <label class="layui-form-label">
                        类别
                    </label>
                    <div class="layui-input-block">

                         <select name="c_id" lay-verify="required" lay-search>
        <option value=""></option>
            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): if( count($category)==0 ) : echo "" ;else: foreach($category as $key=>$vo): ?>
                 <option value="<?php echo htmlentities($vo['id']); ?>"<?php if(($model['c_id']??"") ==$vo['id']): ?> selected<?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

              </select>

                    </div>
                </div>

            <div class="layui-form-item">
                    <label class="layui-form-label">
                        关连
                    </label>
                    <div class="layui-input-block">

                         <select name="g_id" lay-search>
        <option value=""></option>
            <?php if(is_array($lmcategory) || $lmcategory instanceof \think\Collection || $lmcategory instanceof \think\Paginator): if( count($lmcategory)==0 ) : echo "" ;else: foreach($lmcategory as $key=>$vo): ?>
                 <option value="<?php echo htmlentities($vo['id']); ?>"<?php if(($model['g_id']??"") ==$vo['id']): ?> selected<?php endif; ?>><?php echo htmlentities($vo['title']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

              </select>

                    </div>
                </div>

            <div class="layui-form-item">
                    <label class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-block">
                        <input type="text" class="layui-input layui-form-danger" name="name" type="text" value="<?php echo isset($model['name']) ? htmlentities($model['name']) : ""; ?>"/>
                    </div>
                </div><div class="layui-form-item">
                    <label class="layui-form-label">
                        链接
                    </label>
                    <div class="layui-input-block">
                        <input type="text" class="layui-input layui-form-danger" name="url" type="text" value="<?php echo isset($model['url']) ? htmlentities($model['url']) : "#"; ?>"/>
                    </div>
                </div><div class="layui-form-item">
                    <label class="layui-form-label">
                        图片
                    </label>
                    <div class="layui-input-block">
                        <?php echo opt_photo("pic"); ?>
                    <button class="pear-btn pear-btn-primary pear-btn-sm upload-image" type="button">
                        <i class="fa fa-image">
                        </i>
                        上传图片
                    </button>
                    <input name="pic" type="hidden" value="<?php echo isset($model['pic']) ? htmlentities($model['pic']) : ""; ?>"/>
                    <div class="upload-image">
                        <span>
                        </span>
                        <img class="upload-image" src="<?php echo isset($model['pic']) ? htmlentities($model['pic']) : ""; ?>"/>
                    </div>
                    </div>
                </div>
                 <div class="layui-form-item">
                    <label class="layui-form-label">
                        排序
                    </label>
                    <div class="layui-input-block">
                        <input type="text" class="layui-input layui-form-danger" name="sort" type="text" value="<?php echo isset($model['sort']) ? htmlentities($model['sort']) : "99"; ?>"/>
                    </div>
                </div>
               
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
    layui.use(['form', 'jquery', 'layedit', 'uploads'], function () {
        let form = layui.form;
        let $ = layui.jquery;
        let layedit = layui.layedit
        layedit.set({
            uploadImage: {
                url: "<?php echo htmlentities(app('request')->root()); ?>/index/upload"
            }
        });
        //建立编辑器
        
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
                            parent.layer.close(parent.layer.getFrameIndex(window.name));//关闭当前页
                            parent.layui.table.reload("dataTable");
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