<?php /*a:1:{s:83:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\admin\config\index.html";i:1683787479;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/static/component/pear/css/pear.css" />
    <script src="/static/component/layui/layui.js"></script>
    <script src="/static/component/pear/pear.js"></script>
</head>
<body class="pear-container">
<div class="layui-row layui-col-space15">
    <div class="layui-col-md12">
        <div class="layui-card">
            <form class="layui-form edit-form" method="post" action="">
            <div class="layui-tab layui-tab-brief" lay-filter="TabBrief">
                <ul class="layui-tab-title">
                    <li class="layui-this">网站设置</li>
                    <!-- <li>邮箱设置</li>-->
                    <li>上传设置</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    网站标题
                                </label>
                                <div class="layui-input-block">
                                    <input autocomplete="off" class="layui-input" name="title" value="<?php echo isset($data['title']) ? htmlentities($data['title']) : ''; ?>" type="text"/>
                                </div>
                            </div>
                                   <div class="layui-form-item">
                                <label class="layui-form-label">
                                    短标题
                                </label>
                                <div class="layui-input-block">
                                    <input autocomplete="off" class="layui-input" name="shorttitle" value="<?php echo isset($data['shorttitle']) ? htmlentities($data['shorttitle']) : ''; ?>" type="text"/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    网站关键词
                                </label>
                                <div class="layui-input-block">
                                    <input autocomplete="off" class="layui-input"  name="key" value="<?php echo isset($data['key']) ? htmlentities($data['key']) : ''; ?>" type="text"/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    网站描述
                                </label>
                                <div class="layui-input-block">
                                    <textarea name="desc" class="layui-textarea"><?php echo isset($data['desc']) ? htmlentities($data['desc']) : ''; ?></textarea>
                                </div>
                            </div>
                           <!-- <div class="layui-form-item">
                                <label class="layui-form-label">
                                    电话
                                </label>
                                <div class="layui-input-block">
                                    <input autocomplete="off" class="layui-input"  name="tel" value="<?php echo isset($data['tel']) ? htmlentities($data['tel']) : ''; ?>" type="text"/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    QQ
                                </label>
                                <div class="layui-input-block">
                                    <input autocomplete="off" class="layui-input"  name="qq" value="<?php echo isset($data['qq']) ? htmlentities($data['qq']) : ''; ?>" type="text"/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    邮箱
                                </label>
                                <div class="layui-input-block">
                                    <input autocomplete="off" class="layui-input"  name="mail" value="<?php echo isset($data['mail']) ? htmlentities($data['mail']) : ''; ?>" type="text"/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    地址
                                </label>
                                <div class="layui-input-block">
                                    <input autocomplete="off" class="layui-input"  name="addr" value="<?php echo isset($data['addr']) ? htmlentities($data['addr']) : ''; ?>" type="text"/>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    网站LOGO
                                </label>
                                <div class="layui-input-block">
                                    <?php echo opt_photo('logo'); ?>
                                <button class="pear-btn pear-btn-primary pear-btn-sm  upload-image" type="button">
                                        <i class="fa fa-image">
                                        </i>
                                        上传图片
                                    </button>
                                    <input lay-verify="uploadlogo" name="logo" type="hidden" value="<?php echo isset($data['logo']) ? htmlentities($data['logo']) : ''; ?>"/>
                                    <div class="upload-image">
                                        <span>
                                        </span>
                                        <img class="upload-image" src="<?php echo isset($data['logo']) ? htmlentities($data['logo']) : ''; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    网站海报
                                </label>
                                <div class="layui-input-block">
                                    <?php echo opt_photo('bg'); ?>
                                <button class="pear-btn pear-btn-primary pear-btn-sm upload-image" type="button">
                                        <i class="fa fa-image">
                                        </i>
                                        上传图片
                                    </button>
                                    <input lay-verify="uploadbg" name="bg" type="hidden" value="<?php echo isset($data['bg']) ? htmlentities($data['bg']) : ''; ?>"/>
                                    <div class="upload-image">
                                        <span>
                                        </span>
                                        <img class="upload-image" src="<?php echo isset($data['bg']) ? htmlentities($data['bg']) : ''; ?>"/>
                                    </div>
                                </div>
                            </div>-->
                            <div class="layui-form-item">
                                <label class="layui-form-label">
                                    登录验证码
                                </label>
                                <div class="layui-input-block">
                                    <?php if($data['login_captcha'] == 1): ?>
                                        <input type="radio" name="login_captcha" value="1" title="开启" checked>
                                        <input type="radio" name="login_captcha" value="0" title="关闭">
                                    <?php else: ?>
                                        <input type="radio" name="login_captcha" value="1" title="开启">
                                        <input type="radio" name="login_captcha" value="0" title="关闭" checked>
                                    <?php endif; ?>
                                </div>
                            </div>
                    </div>
                   <!-- <div class="layui-tab-item">
                            <div class="layui-form-item">
                            <label class="layui-form-label">
                                邮箱账号
                            </label>
                            <div class="layui-input-block">
                                <input autocomplete="off" class="layui-input" name="smtp-user" value="<?php echo isset($data['smtp-user']) ? htmlentities($data['smtp-user']) : ''; ?>" type="text"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                邮箱密匙
                            </label>
                            <div class="layui-input-block">
                                <input autocomplete="off" class="layui-input"  name="smtp-pass" value="<?php echo isset($data['smtp-pass']) ? htmlentities($data['smtp-pass']) : ''; ?>" type="text"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                邮箱端口
                            </label>
                            <div class="layui-input-block">
                                <input autocomplete="off" class="layui-input"  name="smtp-port" value="<?php echo isset($data['smtp-port']) ? htmlentities($data['smtp-port']) : ''; ?>" type="text"/>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                邮箱服务器
                            </label>
                            <div class="layui-input-block">
                                <input autocomplete="off" class="layui-input"  name="smtp-host" value="<?php echo isset($data['smtp-host']) ? htmlentities($data['smtp-host']) : ''; ?>" type="text"/>
                            </div>
                        </div>
                    </div>-->
                    <div class="layui-tab-item">
                            <div class="layui-form-item">
                                <label class="layui-form-label">存储方式</label>
                                <div class="layui-input-block">
                                <input type="radio" name="file-type" value="1" title="本地" <?php if($data['file-type'] == 1): ?> checked <?php endif; ?> lay-filter="type">
                                <input type="radio" name="file-type" value="2" title="阿里云" <?php if($data['file-type'] == 2): ?> checked <?php endif; ?> lay-filter="type">
                                </div>
                            </div>
                            <div class="layui-form-item" id="oss">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">Oss地址</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="file-endpoint"  value="<?php echo isset($data['file-endpoint']) ? htmlentities($data['file-endpoint']) : ''; ?>"  placeholder="请输入Oss地址" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">空间名称</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="file-OssName"   value="<?php echo isset($data['file-OssName']) ? htmlentities($data['file-OssName']) : ''; ?>" placeholder="请输入空间名称" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">KeyId</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="file-accessKeyId"   value="<?php echo isset($data['file-accessKeyId']) ? htmlentities($data['file-accessKeyId']) : ''; ?>" placeholder="请输入KeyId" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">KeySecret</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="file-accessKeySecret"   value="<?php echo isset($data['file-accessKeySecret']) ? htmlentities($data['file-accessKeySecret']) : ''; ?>"  placeholder="请输入KeySecret" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="layui-input-block" style="min-height: 80px;">
                    <button type="submit" class="pear-btn pear-btn-primary">保存</button>
                    <button type="reset" class="pear-btn">重置</button>
                </div>
        </form>    
        </div>
    </div>
</div>
<script>layui.use(['uploads'], function() {})</script>
</body>
</html>
