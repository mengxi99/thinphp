<?php /*a:1:{s:82:"C:\Users\xgf15\Desktop\study\first\www.fsqf.com_GsGcWs\view\index\index\index.html";i:1717134530;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>师图教育</title>
    <link rel="stylesheet" href="/static/fs/css/first.css">
    <link rel="stylesheet" href="/static/fs/css/swiper-bundle.min.css" />
</head>

<body>
<style>


    .swiper {
        width: 1600px;
        height: 500px;
        /*padding: 0;*/
        /*margin: 0;*/
        /*padding-left: 20px;*/


    }

    .swiper-slide {
        text-align: center;
        /*font-size: 20px;*/
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        /*margin-right: -10px;*/
        width: 350px;
        height: 440px;
        /*position: relative;*/
        /*left: 0px;*/
        /*margin-right: 10px;*/
        /*width: 200px;*/
        /*height: 200px;*/
    }
    #skxclbli:nth-child(2n+1) {

        width: 200px;
        /*height: 10px;*/
        margin-top: 20px;
        z-index: 1;
    }
    #skxclbli:nth-child(2n){
        width: 200px;
        height: 300px;
        z-index: 2;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        transition: 300ms;
        transform: scale(0.8);
    }
    .swiper-slide-active,.swiper-slide-duplicate-active{
        transform: scale(1);
    }






    @media (max-width: 1000px) {
        .swiper-button-next {
            right: 20px;
            transform: rotate(90deg);
        }

        .swiper-button-prev {
            left: 20px;
            transform: rotate(90deg);
        }
    }
</style>

    
        <div class="d1" id="app">
            <p class="p1">欢迎进入师图教育官方网站！</p>
            <img  class="img1" id="wbtp"  src="/static/fs/images/wb.png" alt="">
            <div class="xlwb" ><p >新浪微博</p></div>
            <div class="img1" id="gzhtp"><img src="/static/fs/images/gzh1.png" alt=""></div>
            <div class="p1" id="wxgzh"><p>微信公众号</p></div>
            <img class="img1" id="jjdhtp" src="/static/fs/images/jjdh1.png" alt="">
            <p class="p1" id="sarx" >上岸热线：400-127-5568</p>
        </div>
        
        <div class="d2">
            <img class="img2-1" id="stjytp"   src="/static/fs/images/f7c014c6-df8f-4cb4-95a8-4366f898963a.png" alt="">
            <img class="img2-2" id="zzjytp" src="/static/fs/images/zgjx1.png" alt="">
            <p class="p2" id="szst">选择师图 相信师图</p>
            <div class="yjjx" id="ssk" >
                <input id="ssk1" style="border: none;;width: 356px;height: 36px;background-color: rgba(242, 243, 245, 1);border-radius: 50px;" type="text" size="10" maxlength="30" value="">
            </div>
            <p class="xz" id="sg">|</p>
            <p class="ss" id="ss">搜索</p>
        </div>
    
        <div class="d3" >
            <ul class="cd" id="cd">

                <?php if(is_array($dhlb) || $dhlb instanceof \think\Collection || $dhlb instanceof \think\Paginator): if( count($dhlb)==0 ) : echo "" ;else: foreach($dhlb as $k=>$vo): ?>
                <li id="dhlbli" style="margin-left: 100px;"><?php echo htmlentities($vo['title']); ?>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
        </div>
        
            <div class="d4" id="stfxtc" >
                <img class="img3-1" id="stfxtp"  src="/static/fs/images/rocket.png" alt="">
                <p class="stfx" id="stfx" >师图分校</p>
                <img class="img3-2" id="szsttp"  src="/static/fs/images/szst1.png" alt="">
                <ul class="lb2" id="lb2" >
                    <li ><img  src="/static/fs/images/组 11.png" alt=""></li>
                    <li id="img1" ><img  src="/static/fs/images/stfx2.png" alt=""></li>
                    <li id="img1" ><img  src="/static/fs/images/stfx2.png" alt=""></li>
                    <li id="img1"  ><img  src="/static/fs/images/stfx2.png" alt=""></li>
                    <li id="img1" ><img  src="/static/fs/images/stfx2.png" alt=""></li>
                    <li id="img1" ><img  src="/static/fs/images/stfx2.png" alt=""></li>
                </ul>
                <ul class="lb2" id="lb2-2" >
                    <?php if(is_array($stfxlb1) || $stfxlb1 instanceof \think\Collection || $stfxlb1 instanceof \think\Paginator): if( count($stfxlb1)==0 ) : echo "" ;else: foreach($stfxlb1 as $k=>$vo): ?>
                    <li id="dhlbli" style="margin: 18px;margin-left: -2px;"><?php echo htmlentities($vo['title']); ?>

                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
                <ul class="lb2" id="lb2-3" style="font-size: 18px;margin-top: -10px" >

                    <?php if(is_array($stfxlb1) || $stfxlb1 instanceof \think\Collection || $stfxlb1 instanceof \think\Paginator): if( count($stfxlb1)==0 ) : echo "" ;else: foreach($stfxlb1 as $k=>$vo): ?>
                    <li id="dhlbli" style="margin-top: 30px;margin-left: 0px;"><?php echo htmlentities($vo['key']); ?>

                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
                <p id="sxy1" ></p>
                <p id="sxy2" ></p>
                
            </div>
            <img id="rmtp1" class="rmtp1"  src="/static/fs/images/rm1.png" alt="">
            <p id="rmkc" >热门课程</p>
            <div class="d5" id="tc5" >
                <div id="tc5-1" >
                    <p id="gjgwywz" >国家公务员</p>
                </div>
                <div id="tc5-1-1" >
                    <p id="mskcwz" >面试课程</p>
                </div>
                <div id="tc5-1-2" >
                    <p id="bskcwz" >笔试课程</p>
                </div>
                
                <div id="tc5-1-3" >
                    <p id="bkzlwz" >备考资料</p>
                </div>
                <div id="tc5-1-4" >
                    <p id="zkggwz" >招考公告</p>
                </div>
            </div>
        
            <div class="d5" id="tc6" >
                <div id="tc5-1" >
                    <p id="gjgwywz" >江西公务员</p>
                    <img id="jxgwylog" src="/static/fs/images/HOT .png" alt="">
                </div>
                <div id="tc5-1-1" >
                    <p id="mskcwz" >面试课程</p>
                </div>
                <div id="tc5-1-2" >
                    <p id="bskcwz">笔试课程</p>
                </div>
                <div id="tc5-1-3" >
                    <p id="bkzlwz" >备考资料</p>
                </div>
                <div id="tc5-1-4" >
                    <p id="zkggwz" >招考公告</p>
                    <img id="qxgtp"  src="/static/fs/images/jx1.png" alt="">
                    <p id="qxgwz" >抢先看</p>
                </div>
            </div>
        
            <div class="d5" id="tc7" >
                <div id="tc5-1" >
                    <p id="gjgwywz" >事业单位</p>
                    <img id="jxgwylog"  src="/static/fs/images/HOT .png" alt="">
                </div>
                <div id="tc5-1-1" >
                    <p id="mskcwz"  >面试课程</p>
                </div>
                <div id="tc5-1-2" >
                    <p id="bskcwz" >笔试课程</p>
                </div>
                <div id="tc5-1-3" >
                    <p id="bkzlwz" >备考资料</p>
                </div>
                <div id="tc5-1-4" >
                    <p id="zkggwz" >招考公告</p>
                </div>
            </div>
        
            <div class="d5" id="tc8" >
                <div id="tc5-1" >
                    <p id="gjgwywz" >三支一扶</p>
                </div>
                <div id="tc5-1-1" >
                    <p id="mskcwz">面试课程</p>
                </div>
                <div id="tc5-1-2" >
                    <p id="bskcwz" >笔试课程</p>
                </div>
                <div id="tc5-1-3" >
                    <p id="bkzlwz" >备考资料</p>
                </div>
                <div id="tc5-1-4" >
                    <p id="zkggwz" >招考公告</p>
                </div>
            </div>
        
            <div class="d5" id="tc9" >
                <div id="tc5-1" >
                    <p id="gjgwywz" >教师招聘</p>
                    <img id="jxgwylog" src="/static/fs/images/HOT .png" alt="">
                </div>
                <div id="tc5-1-1" >
                    <p id="mskcwz" >面试课程</p>
                </div>
                <div id="tc5-1-2" >
                    <p id="bskcwz" >笔试课程</p>
                </div>
                <div id="tc5-1-3" >
                    <p id="bkzlwz" >备考资料</p>
                </div>
                <div id="tc5-1-4" >
                    <p id="zkggwz" >招考公告</p>
                </div>
            </div>
        
            <div class="d5" id="tc10" >
                <div id="tc5-1" >
                    <p id="gjgwywz" >医疗卫生</p>
                </div>
                <div id="tc5-1-1" >
                    <p id="mskcwz" >面试课程</p>
                </div>
                <div id="tc5-1-2" >
                    <p id="bskcwz" >笔试课程</p>
                </div>
                <div id="tc5-1-3" >
                    <p id="bkzlwz" >备考资料</p>
                </div>
                <div id="tc5-1-4" >
                    <p id="zkggwz" >招考公告</p>
                </div>
            </div>
        
        
        

        <ul style="position: absolute;top: 820px;left: 100px;display: flex;justify-content: space-between; ;list-style-type: none;">


                <?php if(is_array($sztp) || $sztp instanceof \think\Collection || $sztp instanceof \think\Paginator): if( count($sztp)==0 ) : echo "" ;else: foreach($sztp as $k=>$vo): ?>
                <li style="display: inline;width: 540px;height: 120px;border: 1px solid #000;margin-right: 5px;">

                        <img id="tttp" style="display: inline;width: 540px;height: 120px" src="<?php echo htmlentities($vo['pic']); ?>">


                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>



        </ul>


        
        
    
    
        
            <div class="d6" id="tc11" >
                <p id="bkkc" >2025国考省考备考课程</p>
                <ul  class="lb3" id="lb3" >
                    <?php if(is_array($jxsk1) || $jxsk1 instanceof \think\Collection || $jxsk1 instanceof \think\Paginator): if( count($jxsk1)==0 ) : echo "" ;else: foreach($jxsk1 as $k=>$vo): ?>
                    <li id="dhlbli" style="margin: 10px"><?php echo htmlentities($vo['title']); ?>

                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                    <li id="kc" >2025国考省考笔试备考课程</li>-->
<!--                    <li id="kc2" >2024江西省考资格审查汇总</li>-->
<!--                    <li id="kc2" >历年笔试公告</li>-->
<!--                    <li id="kc2" >历年试题</li>-->
<!--                    <li id="kc2" >职位表</li>           -->
                </ul>
        
                <ul class="lb3" id="lb3-2" >
                    <?php if(is_array($jxsk2) || $jxsk2 instanceof \think\Collection || $jxsk2 instanceof \think\Paginator): if( count($jxsk2)==0 ) : echo "" ;else: foreach($jxsk2 as $k=>$vo): ?>
                    <li id="dhlbli" style="margin: 10px"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

<!--                    <li id="kc" >2024年江西公务员笔试备考指导手册</li>-->
<!--                    <li id="kc2" >备考资料</li>-->
<!--                    <li id="kc2" >历年省考笔试</li>-->
<!--                    <li id="kc2" >加群联系</li>-->
<!--                    <li id="kc2" >新浪微博@师图教育</li>           -->
                </ul>
              
            </div>
            <div class="d6-1" id="ddlog" >
                <p id="ddwzlog" >江西省考·国家公务员</p>
            </div>
        
        
        
            <div class="d6" id="tc12" >
                <p id="bkkc" class="bkkc" >2024江西事业单位面试备考课程</p>
                <ul id="lb3" class="lb3" >

                    <?php if(is_array($jxsy1) || $jxsy1 instanceof \think\Collection || $jxsy1 instanceof \think\Paginator): if( count($jxsy1)==0 ) : echo "" ;else: foreach($jxsy1 as $k=>$vo): ?>
                    <li id="dhlbli" style="margin: 8px"><?php echo htmlentities($vo['title']); ?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                    <li id="kc" >2024江西事业单位面试备考课程</li>-->
<!--                    <li id="kc2" >【江西事业单位招聘公告汇总】</li>-->
<!--                    <li id="kc2"  >历年考题</li>-->
<!--                    <li id="kc2" >事业单位笔试课程</li>-->
<!--                    <li id="kc2" >青云谱区人民法院</li>           -->
                </ul>
        
                <ul class="lb3" id="lb3-2" >

                    <?php if(is_array($jxsy2) || $jxsy2 instanceof \think\Collection || $jxsy2 instanceof \think\Paginator): if( count($jxsy2)==0 ) : echo "" ;else: foreach($jxsy2 as $k=>$vo): ?>
                    <li id="dhlbli" style="margin: 8px"><?php echo htmlentities($vo['title']); ?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                    <li id="kc" >2024南昌红谷滩事业单位招考78人公告</li>-->
<!--                    <li id="kc2" >吉安事业单位</li>-->
<!--                    <li id="kc2" >江西地质局</li>-->
<!--                    <li id="kc2" >江西省公安厅辅警招聘</li>-->
<!--                    <li id="kc2" >南昌新建区编外事业单位</li>           -->
                </ul>
        
                <div class="d6-1" id="ddlog2" >
                    <p id="ddwzlog2" >江西事业单位</p>
                </div>
        
        
                <div class="d6" id="tc13" >
                    <p id="bkkc" >江西省国编特岗教师招聘公告</p>
                    <p id="lb3" class="szyf" >/  2024江西三支一扶考试公告</p>
                    <ul id="lb3" class="lb3"  >

                        <?php if(is_array($gbtg1) || $gbtg1 instanceof \think\Collection || $gbtg1 instanceof \think\Paginator): if( count($gbtg1)==0 ) : echo "" ;else: foreach($gbtg1 as $k=>$vo): ?>
                        <li id="dhlbli" style="margin: 8px"><?php echo htmlentities($vo['title']); ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                        <li id="kc" >江西省2024年中小学教师招聘公告</li>-->
<!--                        <li id="kc2" >2024江西教师笔试备考课</li>-->
<!--                        <li id="kc2" >教师笔试课程</li>-->
<!--                        <li id="kc2" >江西省2024年特岗教师招聘公告</li>-->
<!--                        <li id="kc2" >面试课程</li>           -->
                    </ul>
        
                    <ul class="lb3"id="lb3-2"  >

                        <?php if(is_array($gbtg2) || $gbtg2 instanceof \think\Collection || $gbtg2 instanceof \think\Paginator): if( count($gbtg2)==0 ) : echo "" ;else: foreach($gbtg2 as $k=>$vo): ?>
                        <li id="dhlbli" style="margin: 8px"><?php echo htmlentities($vo['title']); ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                        <li id="kc" >教师招聘备考资料</li>-->
<!--                        <li id="kc2" >特岗待遇</li>-->
<!--                        <li id="kc2" >试题资料</li>-->
<!--                        <li id="kc2" >江西教师招聘考试网校课程</li>-->
<!--                        <li id="kc2" >江西各地市教师招聘公告汇总</li>           -->
                    </ul>
        
        
                    <div class="d6-1" id="ddlog3" >
                        <p id="ddwzlog3" >教师招聘·三支一扶</p>
                    </div>
        
        
        
                    <div class="d6" id="tc14" >
                        <p id="bkkc" >2024江西医疗招聘公告汇总</p>
                        <p class="ylzp" >/  2024江西社区招聘公告汇总</p>
                        <ul id="lb3" class="lb3" >

                            <?php if(is_array($ylzp1) || $ylzp1 instanceof \think\Collection || $ylzp1 instanceof \think\Paginator): if( count($ylzp1)==0 ) : echo "" ;else: foreach($ylzp1 as $k=>$vo): ?>
                            <li id="dhlbli" style="margin: 8px"><?php echo htmlentities($vo['title']); ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                            <li id="kc" >2024赣州医疗事业单位招458人</li>-->
<!--                            <li id="kc2" >医疗在线网课</li>-->
<!--                            <li id="kc2" >报考指导</li>-->
<!--                            <li id="kc2" >备考指导 考情分析 笔试内容</li>-->
<!--                            <li id="kc2" >2024江西农商银行招聘654人公告</li>           -->
                        </ul>
        
                        <ul class="lb3" id="lb3-2" >

                            <?php if(is_array($ylzp2) || $ylzp2 instanceof \think\Collection || $ylzp2 instanceof \think\Paginator): if( count($ylzp2)==0 ) : echo "" ;else: foreach($ylzp2 as $k=>$vo): ?>
                            <li id="dhlbli" style="margin: 8px"><?php echo htmlentities($vo['name']); ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                            <li id="kc" >历年公告</li>-->
<!--                            <li id="kc2" >农商行备考资料</li>-->
<!--                            <li id="kc2" >医疗备考微信群加群备考</li>-->
<!--                            <li id="kc2" >2023江西银行招聘公告</li>-->
<!--                            <li id="kc2" >中国工商银行乡村振兴招聘</li>           -->
                        </ul>
        
                        <div class="d6-1" id="ddlog4" >
                            <p id="ddwzlog4" >医疗·农商行·社区</p>
                        </div>
        
        
        
       
        <img id="kccktp"  src="/static/fs/images/kcck.png" alt="">
        <p id="fdkcwz" >辅导课程</p>

            <ul style="position: absolute;top: 500px;left: -860px;display: flex;justify-content: space-between; ;list-style-type: none;padding-right: 0px;">


                <?php if(is_array($fdkcs) || $fdkcs instanceof \think\Collection || $fdkcs instanceof \think\Paginator): if( count($fdkcs)==0 ) : echo "" ;else: foreach($fdkcs as $k=>$vo): ?>
                <li style="display: inline;width: 320px;height: 220px;border: 1px solid #000;margin-right: 10px;border-radius: 0px 0px 10px 10px;background: #f5f2f2;">

                    <img style="display: inline;width: 320px;height: 220px" src="<?php echo htmlentities($vo['pic']); ?>">
                    <div style="width: 320px;height: 80px;background: #f5f2f2;margin-top: -20px;border-radius: 0px 0px 10px 10px;">
                        <p style="width: 221px;height: 19px;font-family: Microsoft YaHei;font-weight: 400;font-size: 16px;color: #2D2D2D;padding-top: 10px;"><?php echo htmlentities($vo['title']); ?></p>
                        <p style="width: 93px;height: 20px;font-family: Microsoft YaHei;font-weight: bold;font-size: 24px;color: #E73648;padding-top: -60px;"><?php echo htmlentities($vo['key']); ?></p>
                    </div>


                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>



            </ul>


        <!-- 1 -->
<!--        <div class="d7-1" id="tptc1" >-->
<!--            <img id="tp1"  src="/static/fs/images/img1.png" alt="">-->
<!--        </div>-->
<!--    -->
<!--        <div class="d7-2" id="wztc2" >-->
<!--            <p id="wz1" >2025国家公务员强国协议班</p>-->
<!--            <p id="wz2" >￥28800</p>-->
<!--    -->
<!--        </div>-->
    
        <!-- 2 -->
<!--        <div class="d7-1" id="tptc2" >-->
<!--            <img id="tp2"  src="/static/fs/images/img2.png" alt="">-->
<!--        </div>-->
<!--    -->
<!--        <div class="d7-2" id="wztc3" >-->
<!--            <p id="wz1" >2024江西三支一扶振兴基地班</p>-->
<!--            <p id="wz2" >￥12800</p>-->
<!--    -->
<!--        </div>-->
    
        <!-- 3 -->
<!--        <div class="d7-1" id="tptc3" >-->
<!--            <img id="tp3"  src="/static/fs/images/img3.png" alt="">-->
<!--        </div>-->
<!--    -->
<!--        <div class="d7-2" id="wztc4" >-->
<!--            <p id="wz1" >2024江西三支一扶高效刷题班</p>-->
<!--            <p id="wz2" >￥4680</p>-->
<!--    -->
<!--        </div>-->
    
        <!-- 4 -->
<!--        <div class="d7-1" id="tptc4" >-->
<!--            <img id="tp4"  src="/static/fs/images/img4.png" alt="">-->
<!--        </div>-->
<!--    -->
<!--        <div class="d7-2" id="wztc5" >-->
<!--            <p id="wz1" >2024江西事业单位提前面试预约</p>-->
<!--            <p id="wz2" >￥2000</p>-->
<!--    -->
<!--        </div>-->
    
        <!-- 5 -->
<!--        <div class="d7-1" id="tptc5" >-->
<!--            <img id="tp5"  src="/static/fs/images/renren.gif" alt="">-->
<!--        </div>-->
<!--    -->
<!--        <div class="d7-2" id="wztc6" >-->
<!--            <p id="wz1" >2025国家公务员强国协议班</p>-->
<!--            <p id="wz2" >￥28800</p>-->
<!--    -->
<!--        </div>-->
    
    
    
        <!-- 新闻速递模块 -->
        <img id="xwsdtp" style="position: absolute;margin-top: 350px"  src="/static/fs/images/xwgg1.png" alt="">
        <p id="xwsdwz" style="margin-top: 130px;margin-left: -775px;margin-top: 372px;" >新闻速递</p>

        <div class="d8-1" id="xwsdtc" style="margin-top: 50px" >
            <ul class="lb4" id="xwlb1" style="margin-top: 110px">
                <?php if(is_array($xwsd1) || $xwsd1 instanceof \think\Collection || $xwsd1 instanceof \think\Paginator): if( count($xwsd1)==0 ) : echo "" ;else: foreach($xwsd1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin-top: 0px"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

<!--                <li id="li1" >江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四川省法院、检察院系统公开考…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间、地点安排</li>-->
            </ul>
    
           
            <ul class="lb5" id="xwlb2" style="margin-top: 90px" >

                <?php if(is_array($xwsd1) || $xwsd1 instanceof \think\Collection || $xwsd1 instanceof \think\Paginator): if( count($xwsd1)==0 ) : echo "" ;else: foreach($xwsd1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
    
            <ul class="lb4" id="xwlb1" style="margin-top: 95px;margin-left: 800px">
                <?php if(is_array($xwsd2) || $xwsd2 instanceof \think\Collection || $xwsd2 instanceof \think\Paginator): if( count($xwsd2)==0 ) : echo "" ;else: foreach($xwsd2 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li id="li1" >江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四川省法院、检察院系统公开考…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间、地点安排</li>-->
            </ul>
    
           
            <ul class="lb5" id="xwlb4" style="margin-top: 90px">

                <?php if(is_array($xwsd2) || $xwsd2 instanceof \think\Collection || $xwsd2 instanceof \think\Paginator): if( count($xwsd2)==0 ) : echo "" ;else: foreach($xwsd2 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
    
    
        </div>
    
        <!-- 报考公告模块 -->
        <img id="bkgglog"  src="/static/fs/images/gkzk1.png" alt="">
        <p id="bkggwz" >招考公告</p>
        
    
        <!-- 1 -->
        <div class="d9-1" id="bktc1" >
            <p id="bkwz1" >国家公务员</p>
            <p id="bkwz2" >/  江西公务员</p>
            <ul class="lb6" id="bklb1" >

                <?php if(is_array($gjgwy1) || $gjgwy1 instanceof \think\Collection || $gjgwy1 instanceof \think\Paginator): if( count($gjgwy1)==0 ) : echo "" ;else: foreach($gjgwy1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li id="li1" >江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
<!--                <li>江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
            </ul>
            <ul class="lb6" id="bklb2" >
                <?php if(is_array($gjgwy1) || $gjgwy1 instanceof \think\Collection || $gjgwy1 instanceof \think\Paginator): if( count($gjgwy1)==0 ) : echo "" ;else: foreach($gjgwy1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
            
    
    
    
        </div>
        <!-- 2 -->
        <div class="d9-1" id="bktc2" >
            <p id="bkwz1" >金融银行</p>
            <p id="bkwz2" >/  国企招聘</p>
            <ul class="lb6" id="bklb1">
                <?php if(is_array($jryh1) || $jryh1 instanceof \think\Collection || $jryh1 instanceof \think\Paginator): if( count($jryh1)==0 ) : echo "" ;else: foreach($jryh1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li id="li1" >江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
<!--                <li>江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
            </ul>
    
            <ul class="lb6" id="bklb2" >
                <?php if(is_array($jryh1) || $jryh1 instanceof \think\Collection || $jryh1 instanceof \think\Paginator): if( count($jryh1)==0 ) : echo "" ;else: foreach($jryh1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
            
    
    
    
        </div>
    
        <!-- 3 -->
        <div class="d9-1" id="bktc3" >
            <p id="bkwz1" >书记员</p>
            <p id="bkwz2" >/  社区招聘</p>
            <ul class="lb6" id="bklb1" >
                <?php if(is_array($sjy1) || $sjy1 instanceof \think\Collection || $sjy1 instanceof \think\Paginator): if( count($sjy1)==0 ) : echo "" ;else: foreach($sjy1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li id="li1" >江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
<!--                <li>江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
            </ul>
            <ul class="lb6" id="bklb2" >

                <?php if(is_array($sjy1) || $sjy1 instanceof \think\Collection || $sjy1 instanceof \think\Paginator): if( count($sjy1)==0 ) : echo "" ;else: foreach($sjy1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
            
    
    
    
        </div>
        <!-- 4 -->
        <div class="d9-1" id="bktc4" >
            <p id="bkwz1" >事业单位</p>
            <p id="bkwz2" >/  三支一扶</p>
            <ul class="lb6" id="bklb1" >

                <?php if(is_array($sydw1) || $sydw1 instanceof \think\Collection || $sydw1 instanceof \think\Paginator): if( count($sydw1)==0 ) : echo "" ;else: foreach($sydw1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li id="li1" >江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
<!--                <li>江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
            </ul>
            <ul class="lb6" id="bklb2" >

                <?php if(is_array($sydw1) || $sydw1 instanceof \think\Collection || $sydw1 instanceof \think\Paginator): if( count($sydw1)==0 ) : echo "" ;else: foreach($sydw1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
            
    
    
    
        </div>
        <!-- 5 -->
        <div class="d9-1" id="bktc5" >
            <p id="bkwz1" >教师招聘</p>
            <p id="bkwz2" >/  医疗卫生</p>
            <ul class="lb6" id="bklb1" >

                <?php if(is_array($jszp1) || $jszp1 instanceof \think\Collection || $jszp1 instanceof \think\Paginator): if( count($jszp1)==0 ) : echo "" ;else: foreach($jszp1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li id="li1" >江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
<!--                <li>江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
            </ul>
            <ul class="lb6" id="bklb2" >
                <?php if(is_array($jszp1) || $jszp1 instanceof \think\Collection || $jszp1 instanceof \think\Paginator): if( count($jszp1)==0 ) : echo "" ;else: foreach($jszp1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
            
    
    
    
        </div>
        <!-- 6 -->
        <div class="d9-1" id="bktc6" >
            <p id="bkwz1" >军队文职</p>
            <p id="bkwz2" >/  公选遴选</p>
            <ul class="lb6" id="bklb1" >

                <?php if(is_array($jdwz1) || $jdwz1 instanceof \think\Collection || $jdwz1 instanceof \think\Paginator): if( count($jdwz1)==0 ) : echo "" ;else: foreach($jdwz1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;"><?php echo htmlentities($vo['title']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li id="li1">江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
<!--                <li>江西省2024年成人高考报名温馨提示</li>-->
<!--                <li>中共四川省委组织部 关于2024年四…</li>-->
<!--                <li>2024于都事业单位招聘笔试时间…</li>-->
            </ul>
            <ul class="lb6" id="bklb2" >
                <?php if(is_array($jdwz1) || $jdwz1 instanceof \think\Collection || $jdwz1 instanceof \think\Paginator): if( count($jdwz1)==0 ) : echo "" ;else: foreach($jdwz1 as $k=>$vo): ?>
                <li id="dhlbli" style="margin: 7px;font-size: 12px"><?php echo htmlentities($vo['key']); ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
<!--                <li>2024-05-09</li>-->
            </ul>
            
    
    
    
        </div>
    
        <!-- 师资团队·模块 -->
        <img id="sztdlog"  src="/static/fs/images/js1.png" alt="">
        <p id="sztdwz" >师资团队</p>

        <div class="swiper" style="margin-left: -750px">
            <ul class="swiper-wrapper" style="display: flex;justify-content: space-between; ;list-style-type: none;margin-right: 1400px">
<!--            <div class="swiper-wrapper">-->

                    <?php if(is_array($sztds) || $sztds instanceof \think\Collection || $sztds instanceof \think\Paginator): if( count($sztds)==0 ) : echo "" ;else: foreach($sztds as $k=>$vo): ?>
<!--                    <div class="swiper-slide">-->
                        <li  class="swiper-slide" style="display: inline;width: 350px;height: 440px;margin-left: -50px">
                            <div class="" style=";margin-left: -20px" >
                                <img style="display: inline;width: 350px;height: 440px;" src="<?php echo htmlentities($vo['pic']); ?>" alt="">
                                <div style="width: 350px;height: 80px;background: #f5f2f2;margin-top: -80px;margin-left: 85px;border-radius: 0px 0px 10px 10px;text-align: center;opacity: 0.5;">
                                    <p style="width: 47px;height: 17px;font-family: Microsoft YaHei;font-weight: bold;font-size: 15px;color: #E73648;text-align: center;padding-left: 150px;"><?php echo htmlentities($vo['title']); ?></p>
                                    <p style="width: 207px;height: 17px;font-family: Microsoft YaHei;font-weight: 400;font-size: 15px;color: #FFFFFF;text-align: center;padding-left: 70px"><?php echo htmlentities($vo['key']); ?></p>
                                </div>

                            </div>

                        </li>
<!--                    </div>-->

                    <?php endforeach; endif; else: echo "" ;endif; ?>




<!--            </div>-->
            </ul>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    
<!--        <h1 id="an1" ><</h1>-->

<!--            <ul style="display: flex;justify-content: space-between; ;list-style-type: none;padding-right: 0px;margin-left: -800px">-->


<!--                <?php if(is_array($sztds) || $sztds instanceof \think\Collection || $sztds instanceof \think\Paginator): if( count($sztds)==0 ) : echo "" ;else: foreach($sztds as $k=>$vo): ?>-->
<!--                <li style="display: inline;width: 350px;height: 440px;border: 1px solid #000;margin-right: 8px;border-radius: 0px 0px 10px 10px;background: #f5f2f2;;">-->

<!--                    <img style="display: inline;width: 350px;height: 440px;" src="<?php echo htmlentities($vo['pic']); ?>">-->
<!--                    <div style="width: 350px;height: 80px;background: #f5f2f2;margin-top: -100px;border-radius: 0px 0px 10px 10px;text-align: center;opacity: 0.5;">-->
<!--                        <p style="width: 47px;height: 17px;font-family: Microsoft YaHei;font-weight: bold;font-size: 15px;color: #E73648;text-align: center;padding-left: 150px;"><?php echo htmlentities($vo['title']); ?></p>-->
<!--                        <p style="width: 207px;height: 17px;font-family: Microsoft YaHei;font-weight: 400;font-size: 15px;color: #FFFFFF;text-align: center;padding-left: 70px"><?php echo htmlentities($vo['key']); ?></p>-->
<!--                    </div>-->


<!--                </li>-->
<!--                <?php endforeach; endif; else: echo "" ;endif; ?>-->



<!--            </ul>-->
        <!-- 1 -->
<!--        <div class="d10-1" id="sztc1" >-->
<!--            <img id="sztc1-tp"  src="/static/fs/images/img1.png" alt="">-->
<!--            <div id="wztc1" >-->
<!--                <p id="wz1" >肖老师</p>-->
<!--                <p id="wz2" >中南财经政法大学管理学硕士</p>-->
<!--            </div>-->
<!--    -->
<!--        </div>-->
        <!-- 2 -->
<!--        <div class="d10-1" id="sztc2" >-->
<!--            <img id="sztc2-tp"  src="/static/fs/images/img1.png" alt="">-->
<!--            <div id="wztc1" >-->
<!--                <p id="wz1" >肖老师</p>-->
<!--                <p id="wz2" >中南财经政法大学管理学硕士</p>-->
<!--            </div>-->
<!--    -->
<!--        </div>-->
        <!-- 3 -->
<!--        <div class="d10-1" id="sztc3" >-->
<!--            <img id="sztc3-tp"  src="/static/fs/images/img1.png" alt="">-->
<!--            <div id="wztc1" >-->
<!--                <p id="wz1" >肖老师</p>-->
<!--                <p id="wz2" >中南财经政法大学管理学硕士</p>-->
<!--            </div>-->
<!--    -->
<!--        </div>-->
        <!-- 4 -->
<!--        <div class="d10-1" id="sztc4" >-->
<!--            <img id="sztc4-tp"  src="/static/fs/images/img1.png" alt="">-->
<!--            <div id="wztc1" >-->
<!--                <p id="wz1" >肖老师</p>-->
<!--                <p id="wz2" >中南财经政法大学管理学硕士</p>-->
<!--            </div>-->
<!--    -->
<!--        </div>-->
<!--        <h1 id="an2" >></h1>-->
        <!-- <div class="slider" style="margin-left: -500px;">
            <div class="slides">
                <img style="width: 350px;height: 440px;" src="images/img1.png" alt="Image 1">
                <img src="images/img2.png" alt="Image 2">
                <img src="images/img3.png" alt="Image 3">
                <img src="images/img4.png" alt="">
                <img src="images/renren.gif" alt="">
                <img src="images/rocket.png" alt="">
                
            </div>
            <button class="prev"><</button>
            <button class="next">></button>
        </div> -->
    
    
    
    
        <!-- 走进师徒模块 -->
        <img id="stlog"  src="/static/fs/images/LOGO.png" alt="">
        <p id="stwz" >走进师图</p>
        <div id="sttc1" class="d11-1" >
            <p id="sttc1-bt" >师图教育</p>
            <p id="sttc1-wz" >师图教育 2009年由多位全国公考培训资深专家联合运营的教育咨询学校。是一家专注于公职辅导、教师招聘辅导、教研教学研究为一体的教育培训机构。<br>师图一直以来，得到了省委党校、师大、南大政法学院智囊团的大力支持，是江西省本地公考培训相当务实实惠的辅导机构。
                师图以“师资资深，教研深化，通过率才是硬道理”为培训理念，致力打造一支由省委党校、师大、南大政法教授为权威教研指导，在职公务员和资深公考培训师为专业一线讲师组成，具有命题阅卷、政策研究和教学辅导丰富经验，具有权威信息、专业水准和实效水平的顶级名师团队。</p>
            <!-- <div style="left: 200px;background-color: red;width: 360px;left: 150px;background: #d80c0c;;">
                
            </div> -->
            <!-- 1 -->
            <div id="sttc1-2" >
                <p id="wz1" >多家直营分部和学习中心
                    覆盖全省5个地市</p>
                    <p id="wz2" >5+</p>
                    <img id="tp"  src="/static/fs/images/fzjg1.png" alt="">
            </div>
          
            <!-- 2 -->
            <div id="sttc1-3" >
                <p id="wz1" >专职师资+研发人员共计</p>
                    <p id="wz2" >300+</p>
                    <img id="tp"  src="/static/fs/images/js2.png" alt="">
            </div>
    
            <!-- 3 -->
            <div id="sttc1-4" >
                <p id="wz1" >拥有400余名员工</p>
                    <p id="wz2" >400+</p>
                    <img id="tp"  src="/static/fs/images/yggl1.png" alt="">
            </div>
    
            <!-- 4 -->
            <div id="sttc1-5" style="">
                <p id="wz1" style="">培训学员超过
                    9999余人次</p>
                    <p id="wz2" style="">999+</p>
                    <img id="tp" style="" src="/static/fs/images/xs1.png" alt="">
            </div>
    
        </div>
    
    
        <!-- ?上课现场模块 -->

    
        <img id="xclog" style="margin-top: 200px;" src="/static/fs/images/hb1.png" alt="">
        <p id="xcwz" style="">上课现场</p>




            <div class="swiper" style="margin-left: -750px">
                <ul class="swiper-wrapper" style="display: flex;margin-right:0px">


                    <?php if(is_array($skxcs) || $skxcs instanceof \think\Collection || $skxcs instanceof \think\Paginator): if( count($skxcs)==0 ) : echo "" ;else: foreach($skxcs as $k=>$vo): ?>

                    <li  class="swiper-slide" id="skxclbli" style="display: inline;;margin-left: -50px">
<!--                        <div class="" style=";margin-left: -20px" >-->
                            <img style="display: inline-block;" src="<?php echo htmlentities($vo['pic']); ?>" alt="">


<!--                        </div>-->

                    </li>


                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
                <div class="swiper-button-next" style=""></div>
                <div class="swiper-button-prev"></div>
            </div>
<!--        <h1 id="an3" style=""><</h1>-->

<!--        <ul style="display: flex;justify-content: space-between; ;list-style-type: none;padding-right: 0px;margin-left: -800px">-->


<!--            <?php if(is_array($skxcs) || $skxcs instanceof \think\Collection || $skxcs instanceof \think\Paginator): if( count($skxcs)==0 ) : echo "" ;else: foreach($skxcs as $k=>$vo): ?>-->
<!--            <li style="display: inline;width: 350px;height: 440px;border: 1px solid #000;margin-right: 10px;border-radius: 0px 0px 10px 10px;background: #f5f2f2;;">-->

<!--                <img style="display: inline;width: 350px;height: 440px;" src="<?php echo htmlentities($vo['pic']); ?>">-->



<!--            </li>-->
<!--            <?php endforeach; endif; else: echo "" ;endif; ?>-->



<!--        </ul>-->
<!--        <img id="xctp1" style="" src="/static/fs/images/img1.png" alt="">-->
<!--        <img id="xctp2" style="" src="/static/fs/images/img2.png" alt="">-->
<!--        <img id="xctp3" style="" src="/static/fs/images/img3.png" alt="">-->
<!--        <img id="xctp4" style="" src="/static/fs/images/img4.png" alt="">-->
<!--        <img id="xctp5" style="" src="/static/fs/images/img1.png" alt="">-->
<!--        <h1 id="an4" style="">></h1>-->
    
    
        <!-- 页脚 -->
        <div id="yjtc" class="yjtc" style="margin-top: 10px">
            <ul id="yjcd1" style=" list-style-type: none;display: inline;ma">
                <?php if(is_array($yjcd) || $yjcd instanceof \think\Collection || $yjcd instanceof \think\Paginator): if( count($yjcd)==0 ) : echo "" ;else: foreach($yjcd as $k=>$vo): ?>
                <li id="dhlbli" style="display: inline;margin-left: -35px;margin-right: 150px"><?php echo htmlentities($vo['title']); ?>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
<!--            <p id="yjcd1" style="">关于师图</p>-->
<!--            <p id="yjcd2" style="">招考信息</p>-->
<!--            <p id="yjcd3" style="">备考资料</p>-->
<!--            <p id="yjcd4" style="">课程推荐</p>-->
            <!-- 1 -->
            <ul class="lb2" id="lb1" style="margin-top: 150px;margin-left: -30px">

                <?php if(is_array($yjcd1) || $yjcd1 instanceof \think\Collection || $yjcd1 instanceof \think\Paginator): if( count($yjcd1)==0 ) : echo "" ;else: foreach($yjcd1 as $k=>$vo): ?>
                <li id="dhlbli" style=""><?php echo htmlentities($vo['title']); ?>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>公司简介</li>-->
<!--                <li>师资团队</li>-->
<!--                <li>联系我们</li>-->
<!--                <li>分校地址</li>-->
            </ul>
            <!-- 2 -->
            <ul class="lb2" id="lb2" style="margin-left: -10px">

                <?php if(is_array($yjcd2) || $yjcd2 instanceof \think\Collection || $yjcd2 instanceof \think\Paginator): if( count($yjcd2)==0 ) : echo "" ;else: foreach($yjcd2 as $k=>$vo): ?>
                <li id="dhlbli" style=""><?php echo htmlentities($vo['title']); ?>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>国家公务员</li>-->
<!--                <li>江西公务员</li>-->
<!--                <li>事业单位</li>-->
<!--                <li>三支一扶</li>-->
<!--                <li>教师招聘</li>-->
            </ul>
    
            
    
    
    
    
            <!-- 3 -->
            <ul class="lb2" id="lb3" style="margin-left: -60px">
                <?php if(is_array($yjcd3) || $yjcd3 instanceof \think\Collection || $yjcd3 instanceof \think\Paginator): if( count($yjcd3)==0 ) : echo "" ;else: foreach($yjcd3 as $k=>$vo): ?>
                <li id="dhlbli" style=""><?php echo htmlentities($vo['title']); ?>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>国家公务员</li>-->
<!--                <li>江西公务员</li>-->
<!--                <li>事业单位</li>-->
<!--                <li>三支一扶</li>-->
<!--                <li>教师招聘</li>-->
            </ul>
    
            
    
    
    
    
            <!-- 4 -->
            <ul class="lb2" id="lb4" style="margin-left: -80px">

                <?php if(is_array($yjcd4) || $yjcd4 instanceof \think\Collection || $yjcd4 instanceof \think\Paginator): if( count($yjcd4)==0 ) : echo "" ;else: foreach($yjcd4 as $k=>$vo): ?>
                <li id="dhlbli" style=""><?php echo htmlentities($vo['title']); ?>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
<!--                <li>辅导课程</li>-->
<!--                <li>网校课程</li>-->
                
            </ul>
    
            <p id="gz" style="">关注与联系我们</p>
            <!-- 1 -->
            <div id="gzh" style="">
                <img style="width: 100px;height: 100px" src="/static/fs/images/img1.png">
            </div>
            <p id="lqzl" style="">微信领取资料</p>
    
            <!-- 2 -->
            <div id="gzh2" style="">
                <img style="width: 100px;height: 100px" src="/static/fs/images/img2.png">
            </div>
            <p id="wz" style="">公众号</p>
    
            <!-- 3 -->
            <div id="gzh3" style="">
                <img style="width: 100px;height: 100px" src="/static/fs/images/img3.png">
            </div>
            <p id="wxxx" style="">网校学习</p>
    
            <p style="font-family: Microsoft YaHei;font-weight: 400;font-size: 15px;color: #FFFFFF;line-height: 48px;;width: 266px;height: 17px;position: relative;left: 1270px;top: -1230px;">全国客服热线（工作日：8:30-17:30）</p>
            <p style="font-family: Microsoft YaHei;font-weight: bold;font-size: 30px;color: #E73648;line-height: 48px;position: relative;left: 1270px;top: -1230px;">400-127-5568</p>
            <p style="width: 324px;height: 47px;font-family: Microsoft YaHei;font-weight: 400;font-size: 15px;color: #B2B2B2;line-height: 30px;position: relative;left: 1270px;top: -1230px;">江西总部<br>江西省南昌市东湖区龙式大厦C座7楼师图教育</p>
    
    
<!--             <hr style="width: 1640px;height: 1px;background: #a01818;color: red;margin-top: -1100px">-->
            <ul style="margin-top: -1200px;margin-left: 10px">
                <?php if(is_array($yjcd5) || $yjcd5 instanceof \think\Collection || $yjcd5 instanceof \think\Paginator): if( count($yjcd5)==0 ) : echo "" ;else: foreach($yjcd5 as $k=>$vo): ?>
                <li id="dhlbli" style="display: inline;margin-left: 80px;color: #ababab"><?php echo htmlentities($vo['title']); ?>

                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>


<!--            <p id="oo1" style="">友情链接</p>-->
<!--            <p id="oo2" style="">江西人事考试网</p>-->
<!--            <p id="oo3" style="">江西省人力资源</p>-->
<!--            <p id="oo4" style="">南昌人事考试网</p>-->
<!--            <p id="oo5" style="">赣州人事考试网</p>-->
    
            <p id="oo6" style=";margin-top: 1500px">Copyright © 2021 江西师图教育有限公司      All Rights Reserved 赣ICP备2024006653号-1       技术支持：格网科技</p>
            <hr style="width: 1640px;height: 1px;margin-top: -1520px">
    
    
        </div>
    
    
</body>
<script src="/static/fs/js/axios.min.js"></script>
<script src="/static/fs/js/vue.js"></script>
<script src="/static/fs/js/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        slidesOffsetBefore : 100,
        direction: getDirection(),
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            resize: function () {
                swiper.changeDirection(getDirection());
            },
        },
    });

    function getDirection() {
        var windowWidth = window.innerWidth;
        var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

        return direction;
    }

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 2,
        centeredSlides: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>









<script>
    new Vue({
        el:"#app",
        data:{
            cds:[],
        },
        methods:{

        },
        created() {
            // const response = axios.get('/app/index/controller/index/getList');
            // this.cds = response.data;
            // console.log(this.cds)
            // this.showEmps();
            // this.getDeptList();

        },
    })
</script>









<script>
//     let slideIndex = 0;
// const slides = document.querySelectorAll('.slides img');
// const totalSlides = slides.length;

// function showSlides() {
//     const slideWidth = slides[0].width;
//     document.querySelector('.slides').style.transform = `translateX(-${slideIndex * slideWidth}px)`;
// }

// function nextSlide() {
//     slideIndex++;
//     if (slideIndex > totalSlides - 1) {
//         slideIndex = 0;
//     }
//     showSlides();
// }

// function prevSlide() {
//     slideIndex--;
//     if (slideIndex < 0) {
//         slideIndex = totalSlides - 1;
//     }
//     showSlides();
// }

// document.querySelector('.next').addEventListener('click', nextSlide);
// document.querySelector('.prev').addEventListener('click', prevSlide);

// 自动轮播（可选）
// setInterval(nextSlide, 3000); // 每3秒自动切换到下一张
</script>
</html>