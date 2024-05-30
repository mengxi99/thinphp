<?php /*a:3:{s:54:"/home/wwwroot/www.fsqf.com/view/index/lists/index.html";i:1691502937;s:54:"/home/wwwroot/www.fsqf.com/view/index/conn/header.html";i:1691503821;s:54:"/home/wwwroot/www.fsqf.com/view/index/conn/footer.html";i:1692863141;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=yes">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo htmlentities($navtitle['title']); ?>-<?php echo cfg('shorttitle'); ?></title>
<meta name="keywords" content="<?php echo htmlentities($navtitle['key']); ?>" />
<meta name="description" content="<?php echo htmlentities($navtitle['describe']); ?>" />
<meta name="renderer" content="webkit">
<link rel="stylesheet" type="text/css" href="/static/fs/css/base.css" />
<link rel="stylesheet" type="text/css" href="/static/fs/css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="/static/fs/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="/static/fs/css/style.css" />
<link rel="stylesheet" type="text/css" href="/static/fs/css/responsive.css" />
<script src="/static/fs/js/jquery-1.11.0.min.js"></script>
<script src="/static/fs/js/wow.min_1.js"></script>
<script src="/static/fs/js/owl.carousel.min.js"></script>
<script src="/static/fs/js/page.js"></script>
</head>
<body>
 <div class="header">
    <div class="container">
        <div class="rowFluid">
            <div class="span3 col-md-12">
                <div class="logo"><a href="/" title="复升财务"> <img src="/static/fs/images/logo.png" alt="复升财务"> </a></div>
            </div>
            <div class="span9">
                <div class="mobileMenuBtn"><span class="span1"></span><span class="span2"></span><span class="span3"></span></div>
                <div class="mobileMenuBtn_shad"></div>
                <div class="header_menu">
                    <ul id="menu">
                        <li><a href="/">首页</a></li>
                        <li><a href="/page/13.html">注册公司</a></li>
                        <li><a href="/page/12.html">代理记账</a></li>
                        <li><a href="/page/11.html">商标注册</a></li>
                        <li><a href="/page/10.html">公司变更</a></li>
                        <li><a href="/page/9.html">公司注销</a></li>
                        <li><a href="/list/74.html">新闻资讯</a></li>
                        <li><a href="/page/1.html">关于我们</a></li>
                        <li><a href="/page/2.html">联系我们</a></li>
                    </ul>
                </div>
            </div>
            <div class="span2"></div>
        </div>
    </div>
</div>


<div class="page">
  <div class="rowFluid">
    <div class="span12">
      <div class="main">
              <div class="banner">
          <div class="rowFluid">
            <div class="span12">
              <div class="owl-demo wow fadeInUp">
                <div class="item">
              <h3 class="banner_title">注册公司 专业代理记账</h3>

                                    <div class="banner_jianjie">
                                        <div class="banner_text">服务地区：南昌、吉安、九江、赣州、萍乡、上饶、宜春、新余、抚州、景德镇</div>
                                        <div class="banner_button"><a href="#">服务热线：400-966-7916</a></div>
                  </div>
                </div>
              </div>
              <ul class="platform_advantage_bg">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
          
  
        </div>
        

        
        
        <div class="technical_support">
          <div class="rowFluid">
            <div class="span12">
              <div class="container">
              
           <div class="weizhi">当前位置：
                      <a href="/">首页</a>&nbsp;&gt;&nbsp; <?php echo !empty($upnavtitle['title']) ? htmlentities($upnavtitle['title']." > ") : ''; ?><a href="/<?php echo htmlentities($navtitle['url']); ?>/<?php echo htmlentities($navtitle['id']); ?>.html"><?php echo htmlentities($navtitle['title']); ?></a></div>
                
              
                <div class="technical_support_content">
                  <div class="span9 col-sm-12 ">
                    <div class="technical_support_list">
                      <div class="technical_support_box">
                     
                        <ul>
                        
                          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                          <li> <a href="/show/<?php echo htmlentities($vo['id']); ?>.html" title="<?php echo htmlentities($vo['name']); ?>" target="_blank" >
                            <div class="right span12">
                              <div class="right1"><?php echo htmlentities($vo['name']); ?></div>
                              <div class="right2"> <?php echo htmlentities($vo['describe']); ?></div>
                            </div>
                            </a> </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?> 
                            
                        </ul>
                        <div class="pagess">     <?php echo $page; ?>
 </div>
                      </div>
                    </div>
                  </div>
                  <div class="span3 col-sm-12 ">
                    <div class="technical_support_list">
                      <div class="technical_support_box">
                        <div class="title">新闻资讯</div>
                        <ul>
                         <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): if( count($category)==0 ) : echo "" ;else: foreach($category as $k=>$v): ?>
                          <li> <a href="/<?php echo htmlentities($v['url']); ?>/<?php echo htmlentities($v['id']); ?>.html">
                            <div class="text"><?php echo htmlentities($v['title']); ?> </div>
                            </a> </li> <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>

                        </ul>
                
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
         
        <div class="footer">
  <div class="rowFluid">
    <div class="span12">
 

      <div class="copyright">Copyright © 2023 江西复升企业服务有限公司 版权所有 <a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">赣ICP备2023008351号</a> <a href="https://www.gewangcn.com/" target="_blank">技术支持：格网科技</a></div>

    </div>
  </div>
</div>
 </div>
    </div>
  </div>
</div>

</body>
</html>