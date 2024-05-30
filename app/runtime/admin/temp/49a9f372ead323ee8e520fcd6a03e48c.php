<?php /*a:1:{s:86:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\news\index\from.html";i:1691717758;}*/ ?>
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
                        
          <select name="c_id" lay-verify="requried">
                    <option>选择分类</option>
                    <?php foreach($category as $k1=>$p1): ?>
                        <option  <?php if(isset($p1['children']) && !empty($p1['children'])): ?>disabled="disabled"<?php endif; ?> value="<?php echo htmlentities($p1['id']); ?>" <?php if(isset($model) && $model->c_id==$p1['id']): ?> selected <?php endif; ?>><?php echo htmlentities($p1['title']); ?></option>
                        <?php if(isset($p1['children']) && !empty($p1['children'])): foreach($p1['children'] as $k2=>$p2): ?>
                                <option value="<?php echo htmlentities($p2['id']); ?>" <?php if(isset($model) && $model->c_id==$p2['id']): ?> selected <?php endif; ?>>&nbsp;&nbsp;&nbsp;┗━━<?php echo htmlentities($p2['title']); ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>   


                    </div>
                </div><div class="layui-form-item">
                    <label class="layui-form-label">
                        标题
                    </label>
                    <div class="layui-input-block">
                        <input class="layui-input layui-form-danger" placeholder="请输入标题" name="name" type="text" value="<?php echo isset($model['name']) ? htmlentities($model['name']) : ""; ?>"/>
                    </div>
                </div>
 <div class="layui-form-item">
    <label class="layui-form-label">关键字</label>
    <div class="layui-input-block">
       <input type="text" name="key" placeholder="请输入关键字" value="<?php echo isset($model['key']) ? htmlentities($model['key']) : ""; ?>" autocomplete="off" class="layui-input">
    </div>
  </div>
    <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">描述</label>
    <div class="layui-input-block">
      <textarea name="describe" placeholder="请输入描述内容" class="layui-textarea"><?php echo isset($model['describe']) ? htmlentities($model['describe']) : ""; ?></textarea>
    </div>
  </div>


                <div class="layui-form-item">
                    <label class="layui-form-label">
                        内容
                    </label>
                    <div class="layui-input-block">
                       <textarea id="content" name="content" type="text/plain" style="width:100%;margin-bottom:20px;"><?php echo isset($model['content']) ? htmlentities($model['content']) : ""; ?></textarea>
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
                        文件
                    </label>
                    <div class="layui-input-block">
                <input type="txt"  class="layui-input layui-form-danger" style="width:50%; float: left;" name="files" id="files"  value="<?php echo isset($model['files']) ? htmlentities($model['files']) : ""; ?>">
              <button style="height:38px;" type="button" class="pear-btn pear-btn-primary pear-btn-sm " id="onfile"><i class="layui-icon"></i>上传</button>
                    </div>
                </div>



              <div class="layui-form-item">
                    <label class="layui-form-label">
                        来源
                    </label>
                    <div class="layui-input-block">
                        <input class="layui-input layui-form-danger" name="from" type="text" value="<?php echo isset($model['from']) ? htmlentities($model['from']) : ""; ?>"/>
                    </div>
                </div>
                          <div class="layui-form-item">
                    <label class="layui-form-label">
                        作者
                    </label>
                    <div class="layui-input-block">
                        <input class="layui-input layui-form-danger" name="author" type="text" value="<?php echo isset($model['author']) ? htmlentities($model['author']) : ""; ?>"/>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">
                        排序
                    </label>
                    <div class="layui-input-block">
                        <input class="layui-input layui-form-danger" name="sort" type="text" value="<?php echo isset($model['sort']) ? htmlentities($model['sort']) : ""; ?>"/>
                    </div>
                </div><div class="layui-form-item">
                    <label class="layui-form-label">
                        创建时间
                    </label>
                    <div class="layui-input-block">
                        <input type="text" class="layui-input layui-form-danger" name="create_time" id="create_time" type="text" value="<?php echo isset($model['create_time']) ? htmlentities($model['create_time']) : date("Y-m-d"); ?>"/>
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

<script type="text/javascript" src="/static/component/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/component/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/static/component/ueditor/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript">
    var ue = UE.getEditor('content', {
       // initialFrameWidth: 1000,    //初始化宽度
        initialFrameHeight: 300,   //初始化高度
        autoHeightEnabled: false
        
    });

</script>

<script>
    layui.use(['form', 'jquery', 'uploads','laydate','upload'], function () {
        let form = layui.form;
        let $ = layui.jquery;
        let laydate = layui.laydate;
          let upload = layui.upload;
    
      laydate.render({elem: "#create_time"});
  
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





    upload.render({
    elem: '#onfile'
    ,url: '<?php echo htmlentities(app('request')->root()); ?>/index/uploadVideo' //此处配置你自己的上传接口即可
     ,accept: 'file' //普通文件
    ,done: function(res){
     if(res.code==0)
     {

    $("#files").val(res.data.src);

     }else
     {
        layer.msg(res.msg,{icon:2,time:1000});
     }
    }
  });




    })
</script>
</body>
</html>