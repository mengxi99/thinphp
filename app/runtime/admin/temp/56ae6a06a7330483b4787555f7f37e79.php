<?php /*a:1:{s:65:"/home/wwwroot/www.fsqf.com/view/admin/admin/admin/permission.html";i:1633663235;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/component/pear/css/pear.css" />
    <style>
        /*分配权限*/
        .box{margin-bottom: 15px;padding-bottom:10px;border-bottom: 1px solid #f0f0f0;}
        .box dt{margin-bottom: 10px;}
        .box dd{padding:0 50px}
        .box dd .cate-second{margin-bottom: 10px}
        .box dd .cate-third{padding:0 40px;margin-bottom: 10px}
    </style>
</head>
<body>
    <form class="layui-form" action="">
        <div class="mainBox">
            <div class="main-container">
                <div class="layui-form-item">
                    <label class="layui-form-label">用户名</label>
                    <div class="layui-word-aux layui-form-mid"><?php echo htmlentities($admin->username); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">昵称</label>
                    <div class="layui-word-aux layui-form-mid"><?php echo htmlentities($admin->nickname); ?></div>
                </div>
                <div class="layui-form-item">
                    <label for="" class="layui-form-label">权限</label>
                    <div class="layui-input-block">
                        <?php foreach($permissions as $k): ?>
                        <dl class="box">
                            <dt>
                                <div><input id="menu<?php echo htmlentities($k['id']); ?>" type="checkbox" name="permissions[]" value="<?php echo htmlentities($k['id']); ?>" title="<?php echo htmlentities($k['title']); ?>" lay-skin="primary" <?php if(isset($k['own']) && $k['own']): ?> checked <?php endif; ?> ></div>
                            </dt>
                            <?php if(isset($k['children']) && !empty($k['children'])): foreach($k['children'] as $v): ?>
                            <dd>
                                <div class="cate-second"><input id="menu<?php echo htmlentities($k['id']); ?>-<?php echo htmlentities($v['id']); ?>" type="checkbox" name="permissions[]" value="<?php echo htmlentities($v['id']); ?>" title="<?php echo htmlentities($v['title']); ?>" lay-skin="primary" <?php if(isset($v['own']) && $v['own']): ?> checked <?php endif; ?> ></div>
                                <?php if(isset($v['children']) && !empty($v['children'])): ?>
                                <div class="cate-third">
                                    <?php foreach($v['children'] as $i): ?>
                                    <input type="checkbox" id="menu<?php echo htmlentities($k['id']); ?>-<?php echo htmlentities($v['id']); ?>-<?php echo htmlentities($i['id']); ?>" name="permissions[]" value="<?php echo htmlentities($i['id']); ?>" title="<?php echo htmlentities($i['title']); ?>" lay-skin="primary" <?php if(isset($i['own']) && $i['own']): ?> checked <?php endif; ?> >
                                    <?php endforeach; ?>
                                </div>
                                <?php endif; ?>
                            </dd>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </dl>
                        <?php endforeach; ?>
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
<script src="/static/component/layui/layui.js"></script>
<script src="/static/component/pear/pear.js"></script>
<script>
    layui.use(['form','jquery'],function(){
        let layform = layui.form;
        let $ = layui.jquery;
        layform.on('checkbox', function (data) {
            var check = data.elem.checked;//是否选中
            var checkId = data.elem.id;//当前操作的选项框
            if (check) {
                //选中
                var ids = checkId.split("-");
                if (ids.length == 3) {
                    //第三极菜单
                    //第三极菜单选中,则他的上级选中
                    $("#" + (ids[0] + '-' + ids[1])).prop("checked", true);
                    $("#" + (ids[0])).prop("checked", true);
                } else if (ids.length == 2) {
                    //第二季菜单
                    $("#" + (ids[0])).prop("checked", true);
                    $("input[id*=" + ids[0] + '-' + ids[1] + "]").each(function (i, ele) {
                        $(ele).prop("checked", true);
                    });
                } else {
                    //第一季菜单不需要做处理
                    $("input[id*=" + ids[0] + "-]").each(function (i, ele) {
                        $(ele).prop("checked", true);
                    });
                }
            } else {
                //取消选中
                var ids = checkId.split("-");
                if (ids.length == 2) {
                    //第二极菜单
                    $("input[id*=" + ids[0] + '-' + ids[1] + "]").each(function (i, ele) {
                        $(ele).prop("checked", false);
                    });
                } else if (ids.length == 1) {
                    $("input[id*=" + ids[0] + "-]").each(function (i, ele) {
                        $(ele).prop("checked", false);
                    });
                }
            }
            layform.render();
        });

        layform.on('submit(save)', function(data){
            $.ajax({
                data:data.field,
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
                            parent.layui.table.reload("dataTable");
                        });
                    }else{
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