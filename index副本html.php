<?php
require './123/common.php';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" >
    <meta name ="keywords" content="<?=$conf['keywords']?>"?>
    <meta name="description" content="<?=$conf['content']?>"?>
    <meta name="copyright" content="&copy; ">
    <link rel="shortcut icon" href="favicon.png">

    <title><?=$conf['title']?></title>

    <!-- 背景 -->
    <link rel="stylesheet" type="text/css" href="common/css/lolihd.css" />
    <link rel="stylesheet" href="static/css/animate.css">

    <link rel="stylesheet" type="text/css" href="static/style.css">
    <script type="text/javascript" src="common/js/jquery-1.2.6.min.js"></script>
</head>
<body>
<?php include 'header.php';?>
<center>
<?=$conf['gg']?>

<iframe name="myframe" width="100%" height="200" src="导航顶部.html"  frameborder="0" scrolling="no" frameborder=0 border=0 marginwidth=0 marginheight=0 scrolling='0'></iframe>
</center>
    <sidebar>
    <ul>
        <li class="active"><a href="#list1">推荐网站</a></li>
        <li><a href="#list2">灵感创意</a></li>
        <li><a href="#list3">UI设计</a></li>
        <li><a href="#list4">平面设计</a></li>
        <li><a href="#list5">交互设计</a></li>
        <li><a href="#list6">字体设</a></li>
        <li><a href="#list7">前端开发</a></li>
        <li><a href="#list8">ICON图标</a></li>
        <li><a href="#list9">PPT设计</a></li>
        <li><a href="#list10">Sketch资源</a></li>
        <li><a href="#list11">设计神器 </a></li>
        <li><a href="#list12">高清素材</a></li>
        <li><a href="#list13">资源下载</a></li>
        <li><a href="#list14">在线配色</a></li>
        <li><a href="#list15">交流社</a></li>
    </ul>


    </sidebar>
    <section>
        <div class="div1" id="list1">
            <div class="div2">&nbsp;&nbsp;推荐网站</div>
            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="" href="<?=$conf['Wurl']?>">
                        <i style=" <?=$conf['Wimg']?> "> </i> <b><?=$conf['wname']?></b>
                        <br>
                        <p><?=$conf['wtxt']?></p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.iconfont.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161209161952582.png);"></i> <b>阿里巴巴矢量图标库</b>
                        <br>
                        <p>Iconfont-国内功能很强大且图标内容很丰富的矢量图标库</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sketch.im/">
                        <i style=" background-image: url(static/img/wangzhi/20161206092152740.png);"></i>
                        <b>Sketch.im</b>
                        <br>
                        <p>各种sketch源文件，插件，免费下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=9">Sketch资源</a>
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://principleux.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215232533669.ico);"></i>
                        <b>PrincipleUX</b>
                        <br>
                        <p>交互动画网站，动效设计欣赏，心之所向 至美设计</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://webgradients.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170331131524731.png);"></i>
                        <b>UI渐变背景配色</b>
                        <br>
                        <p>dribbble上180多种UI常用渐变背景，有CSS代码，PNG文件，sketch文件和PSD</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.huimengya.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170506191547714.png);"></i>
                        <b>转手绘、插画教程</b>
                        <br>
                        <p>转手绘、Q版动漫、CG插画、彩铅素描、古风言情、水粉油画、其他插画教程</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.51yuansu.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170811100532773.png);"></i>
                        <b>觅元素</b>
                        <br>
                        <p>透明背景素材、高清png、图片素材、装饰元素、等免抠设计元素的免费下载.</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://51mockup.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170924205715282.jpg);"></i>
                        <b>模库51Mockup</b>
                        <br>
                        <p>优质设计UI素材,场景模型,贴图样机,Sketch素材,PPT模板等素材下载。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
            </ul>
           <!--  <a target="_blank" class="xuanchuan" href="http://wpa.qq.com/msgrd?v=3&amp;uin=965304470&amp;site=qq&amp;menu=yes">
                <img src="picture/gg.png"></a> -->
         </div>

        <!--灵感配色-->
        <div class="div1" id="list2">
            <div class="div2">&nbsp;&nbsp; 灵感创意</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.xiusheji.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170518142232224.jpg);"></i>
                        <b>秀设计</b>
                        <br>
                        <p>优秀设计每日更新，资讯、大赛、作品发布。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://huaban.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161206095609440.png);"></i>
                        <b>花瓣网</b>
                        <br>
                        <p>设计师寻找灵感的天堂！</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.colorfavs.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208080023142.png);"></i>
                        <b>ColorFavs</b>
                        <br>
                        <p>创建和探索美丽的调色板和颜色。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.sketchappsources.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170607135659846.png);"></i>
                        <b>Sketch App Sources</b>
                        <br>
                        <p>免费设计资源和插件图标,UI工具包,为草图线框图,iOS、Android模板</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=9">Sketch资源</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://codemyui.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170316134346530.png);"></i>
                        <b>动效设计+CSS</b>
                        <br>
                        <p>GIF预览+CSS如何实现。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=3">交互设计</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.nicepsd.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161214144910401.png);"></i>
                        <b>Nicepsd</b>
                        <br>
                        <p>优质的PSD资源，移动应用界面,ui,软件界面</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://usepanda.com/app/#/">
                        <i style=" background-image: url(static/img/wangzhi/20161208084921481.png);"></i>
                        <b>Panda</b>
                        <br>
                        <p>著名的设计文摘订阅平台，可以自己订阅多个设计类网站的最新内容。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.calltoidea.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161207080418210.png);"></i>
                        <b>Calltoidea</b>
                        <br>
                        <p>各种界面分类网站、登录首页等等。关键词查找</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://inspirationui.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208085530622.png);"></i>
                        <b>Inspiration UI</b>
                        <br>
                        <p>从实际项目中寻找设计灵感，支持搜索与分类检索。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.doooor.com/forum-2-1.html">
                        <i style=" background-image: url(static/img/wangzhi/20170217111243235.png);"></i>
                        <b>doooor</b>
                        <br>
                        <p>国外优秀平面设计作品收录与分享</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://wrapbootstrap.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161207080032531.png);"></i>
                        <b>WrapBootstrap</b>
                        <br>
                        <p>后台设计，数据图设计。是一个HTML5和CSS3的框架帮助您网站开发</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.behance.net/">
                        <i style=" background-image: url(static/img/wangzhi/20161206091039766.png);"></i>
                        <b>Behance</b>
                        <br>
                        <p>Adobe旗下的设计师交流平台，来自世界各地的设计师在这里分享自己的作品。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1 " id="list3">
            <div class="div2">&nbsp;&nbsp;UI设计</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.calltoidea.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161207080418210.png);"></i>
                        <b>Calltoidea</b>
                        <br>
                        <p>各种界面分类网站、登录首页等等。关键词查找</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.pinterest.com/explore/ui-ux-design/">
                        <i style=" background-image: url(static/img/wangzhi/20161214151515476.png);"></i>
                        <b>Pinterest</b>
                        <br>
                        <p>来自全世界的 UX 设计作品收藏集。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.nicepsd.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161214144910401.png);"></i>
                        <b>Nicepsd</b>
                        <br>
                        <p>优质的PSD资源，移动应用界面,ui,软件界面</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.mypath.io/">
                        <i style=" background-image: url(static/img/wangzhi/20161214112631624.ico);"></i>
                        <b>My.path</b>
                        <br>
                        <p>拥有上千个课程，文章等，想要学习UI/UX的千万别错过了</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://usepanda.com/app/#/">
                        <i style=" background-image: url(static/img/wangzhi/20161208084921481.png);"></i>
                        <b>Panda</b>
                        <br>
                        <p>著名的设计文摘订阅平台，可以自己订阅多个设计类网站的最新内容。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://dribbble.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161130035308907.png);"></i>
                        <b>dribbble</b>
                        <br>
                        <p>设计师作品分享平台，个人作品交流与分享。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://inspirationui.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208085530622.png);"></i>
                        <b>Inspiration UI</b>
                        <br>
                        <p>从实际项目中寻找设计灵感，支持搜索与分类检索。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.ui.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161206092434455.png);"></i>
                        <b>UI中国</b>
                        <br>
                        <p>图形交互与界面设计交流、作品展示、学习平台。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.skillshare.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161214112840343.ico);"></i>
                        <b>SKILLSHARE</b>
                        <br>
                        <p>版面简洁清晰，设计大牛手把手教你做好设计，而且还是免费的。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://hackdesign.org">
                        <i style=" background-image: url(static/img/wangzhi/20161214111507836.png);"></i>
                        <b>Hackdesign</b>
                        <br>
                        <p>邮箱注册后每周都会收到设计课程和设计大师的作品，根据你的水平来学习</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.zcool.com.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161208084527333.jpg);"></i>
                        <b>站酷网</b>
                        <br>
                        <p>设计师交流平台，分享与学习的好去处。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://echarts.baidu.com/feature.html">
                        <i style=" background-image: url(static/img/wangzhi/20170607164823101.png);"></i>
                        <b>ECharts 特性</b>
                        <br>
                        <p>一个纯 Javascript 的图表库，可以流畅的运行在 PC 和移动设备上</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.iamxk.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170217101935284.png);"></i>
                        <b>设计小咖</b>
                        <br>
                        <p>国外优秀的设计素材，尤其是UI kits，Mockups素材</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.coursera.org/">
                        <i style=" background-image: url(static/img/wangzhi/20161214111751250.png);"></i>
                        <b>Coursera</b>
                        <br>
                        <p>除了可以学习编程和设计等课程，还可以学习语言和生活常识，很不错的网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.uigreat.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208084735627.jpg);"></i>
                        <b>优阁网</b>
                        <br>
                        <p>UI设计师学习交流社区。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.behance.net/">
                        <i style=" background-image: url(static/img/wangzhi/20161206091039766.png);"></i>
                        <b>Behance</b>
                        <br>
                        <p>Adobe旗下的设计师交流平台，来自世界各地的设计师在这里分享自己的作品。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list4">
            <div class="div2">&nbsp;&nbsp;平面设计</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://art.logosc.cn/art/brand.asp">
                        <i style=" background-image: url(static/img/wangzhi/20170724152819631.ico);"></i>
                        <b>品牌图志</b>
                        <br>
                        <p>中国经典LOGO设计资源，标志设计素材，LOGO设计参考</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://logopond.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220175400482.png);"></i>
                        <b>Logopond</b>
                        <br>
                        <p>Logo，高端LOGO集萃，设计前必须来池子里泡一泡</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.gtn9.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215215858847.png);"></i>
                        <b>古田路9号</b>
                        <br>
                        <p>专业品牌创意平台，艺术创作、广告创意、交互设计、时尚文化等诸多创意产业</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.ad518.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170724153425277.png);"></i>
                        <b>AD518.com</b>
                        <br>
                        <p>顶尖的平面设计，创意设计。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.doooor.com/forum-2-1.html">
                        <i style=" background-image: url(static/img/wangzhi/20170217111243235.png);"></i>
                        <b>doooor</b>
                        <br>
                        <p>国外优秀平面设计作品收录与分享</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://arting365.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215224155953.png);"></i>
                        <b>Arting365</b>
                        <br>
                        <p>解读设计／商业/科技创新和品牌价值，是最具价值导向的设计新媒体</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.ad110.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170724153649302.png);"></i>
                        <b>AD110</b>
                        <br>
                        <p>拥有全球最丰富的创意、艺术、设计和广告资源</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://eskimodesign.ru/works/categories/identity/">
                        <i style=" background-image: url(static/img/wangzhi/20170307111622990.ico);"></i>
                        <b>品牌风格标识（俄）</b>
                        <br>
                        <p>塑造品牌形象视觉参考的几个品质案例，工作室网站项目</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.redocn.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215230744287.png);"></i>
                        <b>红动中国</b>
                        <br>
                        <p>红动网是中国最大的专业设计素材服务平台</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list5">
            <div class="div2">&nbsp;&nbsp;交互设计</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.aliued.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170112154624570.png);"></i>
                        <b>阿里巴巴国际UED团队</b>
                        <br>
                        <p>阿里巴巴国际UED团队，中英文。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.uisdc.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215230234760.ico);"></i>
                        <b>阿里妈妈MUX</b>
                        <br>
                        <p>阿里妈妈MUX文章分享</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://hackdesign.org">
                        <i style=" background-image: url(static/img/wangzhi/20161214111507836.png);"></i>
                        <b>Hackdesign</b>
                        <br>
                        <p>邮箱注册后每周都会收到设计课程和设计大师的作品，根据你的水平来学习</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://isux.tencent.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161207075225285.png);"></i>
                        <b>腾讯-ISUX</b>
                        <br>
                        <p>腾讯ISUX-社交用户体验设计</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://codemyui.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170316134346530.png);"></i>
                        <b>动效设计+CSS</b>
                        <br>
                        <p>GIF预览+CSS如何实现。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=3">交互设计</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://principleux.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215232533669.ico);"></i>
                        <b>PrincipleUX</b>
                        <br>
                        <p>交互动画网站，动效设计欣赏，心之所向 至美设计</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.mypath.io/">
                        <i style=" background-image: url(static/img/wangzhi/20161214112631624.ico);"></i>
                        <b>My.path</b>
                        <br>
                        <p>拥有上千个课程，文章等，想要学习UI/UX的千万别错过了</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.usability.gov/">
                        <i style=" background-image: url(static/img/wangzhi/20161212154006904.ico);"></i>
                        <b>Usability</b>
                        <br>
                        <p>提供以用户为中心设计过程的概述和不同的用户体验准则，主要是可用性测试相关</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://uedc.163.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170606112714805.png);"></i>
                        <b>网易用户体验中心</b>
                        <br>
                        <p>设计中心,交互,视觉,用研,交互设计,视觉设计,用户研究,可用性研究</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://eux.baidu.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170112150118211.png);"></i>
                        <b>百度EUX</b>
                        <br>
                        <p>百度企业产品用户体验中心</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.uxmatters.com/topics/">
                        <i style=" background-image: url(static/img/wangzhi/20161212153439488.png);"></i>
                        <b>UX matters</b>
                        <br>
                        <p>涵盖广泛用户体验话题的社区，覆盖了大部分的用研方法操作和案例</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.uxbooth.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212155523420.png);"></i>
                        <b>UX Booth</b>
                        <br>
                        <p>用户体验资讯网站，分类比较齐全，人机交互，用研等都有单独分类</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list6">
            <div class="div2">&nbsp;&nbsp;字体设计</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://sicangziti.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170113104145678.png);"></i>
                        <b>私藏字体</b>
                        <br>
                        <p>优质的私藏字体,书法字体，日文字体</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.dafont.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212151758716.png);"></i>
                        <b>DaFont</b>
                        <br>
                        <p>字体资源搜索与下载。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.ziticq.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208010919433.jpg);"></i>
                        <b>字体设计</b>
                        <br>
                        <p>字体品牌设计师交流平台。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.onlinewebfonts.com/recent">
                        <i style=" background-image: url(static/img/wangzhi/20170217151529926.png);"></i>
                        <b>Free</b>
                        <br>
                        <p>字体下载 特殊 手写体等 英文字体 个性化字体</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://zh.fonts2u.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212151946296.png);"></i>
                        <b>Fonts2u</b>
                        <br>
                        <p>字体资源搜索与下载。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.urbanfonts.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208011306515.png);"></i>
                        <b>Urban Fonts</b>
                        <br>
                        <p>字体资源搜索与下载。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.ssjee.com/">
                        <i style=" background-image: url(static/img/wangzhi/20171201224758437.jpg);"></i>
                        <b>视巨网（免费素材）</b>
                        <br>
                        <p>视巨网，免费为设计师提供足够丰富的英文字体素材，及更具实用性，更高效、便捷、省时的用户体验。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.fontsquirrel.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212152252738.png);"></i>
                        <b>Font Squirrel</b>
                        <br>
                        <p>免费字体！ 合法免费质量！</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://fontm.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212151000287.png);"></i>
                        <b>FontM</b>
                        <br>
                        <p>字体资源搜索与下载。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list7">
            <div class="div2">&nbsp;&nbsp;前端开发</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://codemyui.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170316134346530.png);"></i>
                        <b>动效设计+CSS</b>
                        <br>
                        <p>GIF预览+CSS如何实现。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=3">交互设计</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://wiki.jikexueyuan.com" id="list/front-end/">
                        <i style=" background-image: url(static/img/wangzhi/20161212150215812.ico);"></i>
                        <b>极客学院</b>
                        <br>
                        <p>中国专业的IT职业在线教育平台</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.bootcss.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208142526940.jpg);"></i>
                        <b>Bootstrap中文网</b>
                        <br>
                        <p>使用 LESS CSS 并用 Node 编译的前端开发框架。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.lanrentuku.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161207075506211.png);"></i>
                        <b>懒人图库</b>
                        <br>
                        <p>JS代码，导航菜单等，让任何一个网页设计师都能轻松找到自己想要的素材！</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://echarts.baidu.com/feature.html">
                        <i style=" background-image: url(static/img/wangzhi/20170607164823101.png);"></i>
                        <b>ECharts 特性</b>
                        <br>
                        <p>一个纯 Javascript 的图表库，可以流畅的运行在 PC 和移动设备上</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.coursera.org/">
                        <i style=" background-image: url(static/img/wangzhi/20161214111751250.png);"></i>
                        <b>Coursera</b>
                        <br>
                        <p>除了可以学习编程和设计等课程，还可以学习语言和生活常识，很不错的网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.jq22.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208141646381.jpg);"></i>
                        <b>JQ22</b>
                        <br>
                        <p>jQuery插件收集整理。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://codepen.io/">
                        <i style=" background-image: url(static/img/wangzhi/20161208141319450.png);"></i>
                        <b>CodePen</b>
                        <br>
                        <p>前端开发源码分享交流。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sifangku.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170623112005174.png);"></i>
                        <b>私房库</b>
                        <br>
                        <p>PHP教程,JQuery教程,html教程,网站开发视频课程,私房库优质web开发课程</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.runoob.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161219141450995.ico);"></i>
                        <b>菜鸟教程</b>
                        <br>
                        <p>提供了最全的编程技术基础教程</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://wrapbootstrap.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161207080032531.png);"></i>
                        <b>WrapBootstrap</b>
                        <br>
                        <p>后台设计，数据图设计。是一个HTML5和CSS3的框架帮助您网站开发</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.w3school.com.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161208141456800.png);"></i>
                        <b>W3School</b>
                        <br>
                        <p>Web开发者教程、参考手册、代码库。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=6">前端开发</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list8">
            <div class="div2">&nbsp;&nbsp;ICON图标</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.iconarchive.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212155304789.png);"></i>
                        <b>Icon Archive</b>
                        <br>
                        <p>免费图标，桌面图标，下载图标，社交图标，XP的图标，Vista的图标</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.iconfinder.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212154509235.png);"></i>
                        <b>Iconfinder</b>
                        <br>
                        <p>免费及收费的图标，图标搜索</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.iconsfeed.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208140605184.jpg);"></i>
                        <b>Iconsfeed</b>
                        <br>
                        <p>iOS 应用图标收集展示。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.onlinewebfonts.com/icon/">
                        <i style=" background-image: url(static/img/wangzhi/20170217151916128.png);"></i>
                        <b>Free</b>
                        <br>
                        <p>Svg矢量图标和PNG / PSD / EPS / PNM /免费下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://findicons.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212154849329.png);"></i>
                        <b>Iconfinder</b>
                        <br>
                        <p>图标搜索引擎、PNG图标, 网页图标</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.iconfont.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161209161952582.png);"></i>
                        <b>阿里巴巴矢量图标库</b>
                        <br>
                        <p>Iconfont-国内功能很强大且图标内容很丰富的矢量图标库</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://iosicongallery.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161212155049378.ico);"></i>
                        <b>iOS Icon Gallery</b>
                        <br>
                        <p>iOS App 图标欣赏。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.1001freedownloads.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161210230744455.png);"></i>
                        <b>favicon1001</b>
                        <br>
                        <p>下载免费矢量，照片，图标，月台幕门多</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list9">
            <div class="div2">&nbsp;&nbsp;PPT设计</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.1ppt.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170215103855452.png);"></i>
                        <b>第一PPT</b>
                        <br>
                        <p>目前第一PPT站内所有资源均为免费下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://pptheaven.mvps.org/">
                        <i style=" background-image: url(static/img/wangzhi/20161215222451162.jpg);"></i>
                        <b>PPT天堂</b>
                        <br>
                        <p>如果说当今顶尖的PPT动画和绘画机构在哪里？无疑非他们莫属。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.yanj.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161215220646919.png);"></i>
                        <b>演界网</b>
                        <br>
                        <p>PPT模板，PPT图表，PPT作品，PPT动画，keynote模板，图片素材，H5素材</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.pptstore.net/">
                        <i style=" background-image: url(static/img/wangzhi/20170216173502256.png);"></i>
                        <b>PPTSTORE</b>
                        <br>
                        <p>中国顶级原创PPT模板和KEYNOTE模板下载的高端平台-PPTSTORE</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.slideshare.net/">
                        <i style=" background-image: url(static/img/wangzhi/20161215221704576.png);"></i>
                        <b>slideshare</b>
                        <br>
                        <p>世界影响最大的PPT作品交流、展示网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.docer.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215220948929.png);"></i>
                        <b>稻壳网</b>
                        <br>
                        <p>最新最全最优质的PPT模板、模板及图片素材下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.slideboom.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215221958498.ico);"></i>
                        <b>slideboom</b>
                        <br>
                        <p>作品数量较多，质量较高，特别是可以在线展示动态PPT</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.rapidbbs.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161215221508606.png);"></i>
                        <b>锐普PPT论坛</b>
                        <br>
                        <p>国内目前最活跃也是最专业的PPT交流社区</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=14">PPT设计</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list10">
            <div class="div2">&nbsp;&nbsp;Sketch资源</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sketch.im/">
                        <i style=" background-image: url(static/img/wangzhi/20161206092152740.png);"></i>
                        <b>Sketch.im</b>
                        <br>
                        <p>各种sketch源文件，插件，免费下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=9">Sketch资源</a>
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://sketchrepo.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161214145631544.png);"></i>
                        <b>Sketch Repo</b>
                        <br>
                        <p>高品质的素描资源</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=9">Sketch资源</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.sketchappsources.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170607135659846.png);"></i>
                        <b>Sketch App Sources</b>
                        <br>
                        <p>免费设计资源和插件图标,UI工具包,为草图线框图,iOS、Android模板</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=9">Sketch资源</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sketchs.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161219140546611.png);"></i>
                        <b>Sketch中国</b>
                        <br>
                        <p>素材 中文手册 文章 教程 技巧 插件 sketch破解版下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=9">Sketch资源</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://play.google.com/store/apps/details?id=com.smithyproductions.crystal">
                        <i style=" background-image: url(static/img/wangzhi/20161220140313646.png);"></i>
                        <b>Crystal</b>
                        <br>
                        <p>针对 Android 平台没有 Sketch Mirror 这样官方移动端预览而设计的伴侣应用</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=9">Sketch资源</a>
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list11">
            <div class="div2">&nbsp;&nbsp;设计神器</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.fotor.com.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20170724172729408.jpg);"></i>
                        <b>Fotor在线平面设计</b>
                        <br>
                        <p>全球最受欢迎的免费在线平面设计工具和图片编辑器.</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sucaijishi.com/uploadfile/2015/triangulator/">
                        <i style=" background-image: url(static/img/wangzhi/20170315213606499.png);"></i>
                        <b>超实用多边形图片制作工具</b>
                        <br>
                        <p>简单的基于网络的工具，让您将位图图像转换为美丽的艺术品</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://play.google.com/store/apps/details?id=com.smithyproductions.crystal">
                        <i style=" background-image: url(static/img/wangzhi/20161220140313646.png);"></i>
                        <b>Crystal</b>
                        <br>
                        <p>针对 Android 平台没有 Sketch Mirror 这样官方移动端预览而设计的伴侣应用</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=9">Sketch资源</a>
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.biaonimeia.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161209020851603.png);"></i>
                        <b>标你妹啊</b>
                        <br>
                        <p>设计标注，psd自动标注工具,psd标注,psd自动标注,psd测量工具</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://uileo.com/down/39-1.html">
                        <i style=" background-image: url(static/img/wangzhi/20170810095859247.png);"></i>
                        <b>Mac、win破解软件</b>
                        <br>
                        <p>PS/AI/AE/DW/C4D/Sketch,等破解软件的下载。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sketch.im/">
                        <i style=" background-image: url(static/img/wangzhi/20161206092152740.png);"></i>
                        <b>Sketch.im</b>
                        <br>
                        <p>各种sketch源文件，插件，免费下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=9">Sketch资源</a>
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://framer.juuust.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220135107641.png);"></i>
                        <b>Framer中文网</b>
                        <br>
                        <p>设计可交互的iOS、安卓、桌面应用和网页高保真交互原型,简单易学直接实现</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.cutterman.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161209171444573.png);"></i>
                        <b>cutterman</b>
                        <br>
                        <p>为设计师提供优秀、高效、实用的技术解决方案</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.autodraw.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170417100630887.png);"></i>
                        <b>Google自动绘图工具</b>
                        <br>
                        <p>可以将你的随手画识别，猜测你画的是什么并提供给你之前已经被设计师画好的图</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.tubangzhu.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170531155546691.jpg);"></i>
                        <b>图帮主</b>
                        <br>
                        <p>轻量级在线平面设计工具,不懂软件也能做设计的网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://witstudio.net/">
                        <i style=" background-image: url(static/img/wangzhi/20170118100523860.png);"></i>
                        <b>Assistor ps</b>
                        <br>
                        <p>一款非常好用的免费切图,标注,建立辅助线的外挂神器，WIN MAC版都支持。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://tool.ui.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161215174734309.png);"></i>
                        <b>工具集合-UI中国</b>
                        <br>
                        <p>设计神器集合整理，针对于PS，等常规性的设计神器，提高工作效率</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=10">设计神器</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list12">
            <div class="div2">&nbsp;&nbsp;高清素材</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.pinterest.com/explore/ui-ux-design/">
                        <i style=" background-image: url(static/img/wangzhi/20161214151515476.png);"></i>
                        <b>Pinterest</b>
                        <br>
                        <p>来自全世界的 UX 设计作品收藏集。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://matthew.wagerfield.com/flat-surface-shader/">
                        <i style=" background-image: url(static/img/wangzhi/20161216152015298.png);"></i>
                        <b>晶格化背景生成</b>
                        <br>
                        <p>晶格化背景在线生成，支持手动DIY</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://sketchrepo.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161214145631544.png);"></i>
                        <b>Sketch Repo</b>
                        <br>
                        <p>高品质的素描资源</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=9">Sketch资源</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.stockvault.net/">
                        <i style=" background-image: url(static/img/wangzhi/20161210232756719.png);"></i>
                        <b>free stock photos</b>
                        <br>
                        <p>免费图片网站、高清材质图片网站为您设计添加灵感</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.1001freedownloads.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161210230744455.png);"></i>
                        <b>favicon1001</b>
                        <br>
                        <p>下载免费矢量，照片，图标，月台幕门多</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=7">ICON图标</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.51yuansu.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170811100532773.png);"></i>
                        <b>觅元素</b>
                        <br>
                        <p>透明背景素材、高清png、图片素材、装饰元素、等免抠设计元素的免费下载.</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://699pic.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161210223728449.png);"></i>
                        <b>摄图网</b>
                        <br>
                        <p>家专注正版摄影图免费下载的图库</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.iamxk.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170217101935284.png);"></i>
                        <b>设计小咖</b>
                        <br>
                        <p>国外优秀的设计素材，尤其是UI kits，Mockups素材</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://alpha.wallhaven.cc/">
                        <i style=" background-image: url(static/img/wangzhi/20161210232245435.ico);"></i>
                        <b>Wallhaven</b>
                        <br>
                        <p>源网上最好的高品质壁纸!</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://cn.vector.me/">
                        <i style=" background-image: url(static/img/wangzhi/20161212160353941.png);"></i>
                        <b>Vector</b>
                        <br>
                        <p>免费矢量图素材搜索。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://cn.forwallpaper.com">
                        <i style=" background-image: url(static/img/wangzhi/20161210231657370.png);"></i>
                        <b>ForWallpaper</b>
                        <br>
                        <p>优质高清图片素材网站，分类更方便快捷，灵感来源</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://500px.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161210224212381.ico);"></i>
                        <b>500px</b>
                        <br>
                        <p>高清大图的素材资源网站，最出色的摄影社区</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sucaijishi.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170315213616912.png);"></i>
                        <b>素材集市</b>
                        <br>
                        <p>素材集市 - PS素材,PS教程,UI资源,字体下载,图标下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://weavesilk.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161216151431822.png);"></i>
                        <b>丝绸-衍生互动</b>
                        <br>
                        <p>丝绸画画工具 可以自己造弄素材，非常不错的一个网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.nicepsd.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161214144910401.png);"></i>
                        <b>Nicepsd</b>
                        <br>
                        <p>优质的PSD资源，移动应用界面,ui,软件界面</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://unsplash.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161210225715993.png);"></i>
                        <b>Unsplash</b>
                        <br>
                        <p>免费的高分辨率照片，素材网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.flickr.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161210225216649.png);"></i>
                        <b>Flickr</b>
                        <br>
                        <p>超级好用的，高清素材图片网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list13">
            <div class="div2">&nbsp;&nbsp;资源下载</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.16pic.com/?i=512522 ">
                        <i style=" background-image: url(static/img/wangzhi/20171110204249225.png);"></i>
                        <b>六图网</b>
                        <br>
                        <p>素材多，下载快，分类清晰，功能强大，搜索精准，绿色无广告</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.sucaijishi.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170315213616912.png);"></i>
                        <b>素材集市</b>
                        <br>
                        <p>素材集市 - PS素材,PS教程,UI资源,字体下载,图标下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.yestone.com/fonts/overview">
                        <i style=" background-image: url(static/img/wangzhi/20161220174930275.png);"></i>
                        <b>云字库</b>
                        <br>
                        <p>设计师福利，250套可商用中英字体</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.brusheezy.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220174304756.ico);"></i>
                        <b>Brusheezy</b>
                        <br>
                        <p>笔刷，著名的免费笔刷、图案纹理资源站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.subtlepatterns.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220173841350.png);"></i>
                        <b>Subtle Patterns</b>
                        <br>
                        <p>背景纹理，最上档次的无缝背景纹理下载站，木有之一</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.ssjee.com/">
                        <i style=" background-image: url(static/img/wangzhi/20171201224758437.jpg);"></i>
                        <b>视巨网（免费素材）</b>
                        <br>
                        <p>视巨网，免费为设计师提供足够丰富的英文字体素材，及更具实用性，更高效、便捷、省时的用户体验。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=5">字体设计</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://weavesilk.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161216151431822.png);"></i>
                        <b>丝绸-衍生互动</b>
                        <br>
                        <p>丝绸画画工具 可以自己造弄素材，非常不错的一个网站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.huimengya.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170506191547714.png);"></i>
                        <b>转手绘、插画教程</b>
                        <br>
                        <p>转手绘、Q版动漫、CG插画、彩铅素描、古风言情、水粉油画、其他插画教程</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://logopond.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220175400482.png);"></i>
                        <b>Logopond</b>
                        <br>
                        <p>Logo，高端LOGO集萃，设计前必须来池子里泡一泡</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=13">平面设计</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://fbrushes.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220174548328.ico);"></i>
                        <b>Fbrushes</b>
                        <br>
                        <p>免费的笔刷+纹理，高质量的免费PS笔刷、图案及纹理</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.transparenttextures.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220172657559.png);"></i>
                        <b>Transparent Textures</b>
                        <br>
                        <p>无缝纹理！最实用的无缝背景纹理下载站，木有之一</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://matthew.wagerfield.com/flat-surface-shader/">
                        <i style=" background-image: url(static/img/wangzhi/20161216152015298.png);"></i>
                        <b>晶格化背景生成</b>
                        <br>
                        <p>晶格化背景在线生成，支持手动DIY</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://51mockup.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170924205715282.jpg);"></i>
                        <b>模库51Mockup</b>
                        <br>
                        <p>优质设计UI素材,场景模型,贴图样机,Sketch素材,PPT模板等素材下载。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.iamxk.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170217101935284.png);"></i>
                        <b>设计小咖</b>
                        <br>
                        <p>国外优秀的设计素材，尤其是UI kits，Mockups素材</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=12">高清素材</a>
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://cn.vectorhq.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220174721853.ico);"></i>
                        <b>VectorHQ</b>
                        <br>
                        <p>免费矢量图和PSD资源，四十万套宝贝资源一网打尽</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://freebiesbug.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220174126261.ico);"></i>
                        <b>Freebiesbug</b>
                        <br>
                        <p>最新的免费PSDs，以及设计师常备资源下载名站</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.freepik.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220173611283.png);"></i>
                        <b>Freepik</b>
                        <br>
                        <p>干货搜索引擎，超过一百万个PSD、矢量、照片下载</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=16">资源下载</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list14">
            <div class="div2">&nbsp;&nbsp;在线配色</div>

            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.materialui.co/">
                        <i style=" background-image: url(static/img/wangzhi/20161220170958157.gif);"></i>
                        <b>MaterialUI</b>
                        <br>
                        <p>推荐！帮助设计师们快速选到自己喜爱的配色方案</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://color.uisdc.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220170322904.png);"></i>
                        <b>中国色彩大辞典</b>
                        <br>
                        <p>中国/日本传统色彩命名，点击色彩可直接吸取色值</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://coolors.co/browser/latest/1">
                        <i style=" background-image: url(static/img/wangzhi/20161220165611141.png);"></i>
                        <b>COLOURlovers</b>
                        <br>
                        <p>交流颜色、色彩趋势和配色方案的超人气社区</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.peise.net/">
                        <i style=" background-image: url(static/img/wangzhi/20161220142038707.ico);"></i>
                        <b>Color Scheme Designer</b>
                        <br>
                        <p>色彩搭配,配色软件,颜色搭配,配色方案,色彩构成</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.fashiontrendsetter.com/v2/">
                        <i style=" background-image: url(static/img/wangzhi/20161220171526964.png);"></i>
                        <b>Fashion Trendsetter</b>
                        <br>
                        <p>帮你关注每年最流行的颜色搭配</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://nipponcolors.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220170509581.ico);"></i>
                        <b>日本传统色辞典</b>
                        <br>
                        <p>网站交互极具特色，在国内经常被拿出来推荐</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.csswinner.com/colorsearch/blue">
                        <i style=" background-image: url(static/img/wangzhi/20161220165941799.png);"></i>
                        <b>CssWinner网页色彩分类</b>
                        <br>
                        <p>CSS画廊，可根据右侧颜色块展现最流行的网页</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://color.adobe.com/zh/create/color-wheel/">
                        <i style=" background-image: url(static/img/wangzhi/20161220164721337.png);"></i>
                        <b>Adobe Color CC</b>
                        <br>
                        <p>网页设计师配色的最佳之选</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://webgradients.com/">
                        <i style=" background-image: url(static/img/wangzhi/20170331131524731.png);"></i>
                        <b>UI渐变背景配色</b>
                        <br>
                        <p>dribbble上180多种UI常用渐变背景，有CSS代码，PNG文件，sketch文件和PSD</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.colorfavs.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161220170713554.png);"></i>
                        <b>ColorFavs</b>
                        <br>
                        <p>创建和探索美丽的调色板和颜色。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://colorhunt.co/">
                        <i style=" background-image: url(static/img/wangzhi/20161220170155695.gif);"></i>
                        <b>色彩猎人</b>
                        <br>
                        <p>每天收集并策划发布美丽的配色方案</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://uigradients.com/#DayTripper">
                        <i style=" background-image: url(static/img/wangzhi/20161220164948267.png);"></i>
                        <b>uiGradients</b>
                        <br>
                        <p>今年流行的渐变！点击屏幕两侧按钮可选更多色彩</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=15">在线配色</a>
                    </span>
                </li>
            </ul>
        </div>

        <div class="div1" id="list15">
            <div class="div2">&nbsp;&nbsp;交流社区</div>
            <ul >
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.ui.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161206092434455.png);"></i>
                        <b>UI中国</b>
                        <br>
                        <p>图形交互与界面设计交流、作品展示、学习平台。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.uigreat.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161208084735627.jpg);"></i>
                        <b>优阁网</b>
                        <br>
                        <p>UI设计师学习交流社区。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.aizhanku.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161207075225285.png);"></i>
                        <b>源码之家</b>
                        <br>
                        <p>腾讯ISUX-社交用户体验设计</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://dribbble.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161130035308907.png);"></i>
                        <b>dribbble</b>
                        <br>
                        <p>设计师作品分享平台，个人作品交流与分享。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.uisdc.com/">
                        <i style=" background-image: url(static/img/wangzhi/20161215230234760.ico);"></i>
                        <b>阿里妈妈MUX</b>
                        <br>
                        <p>阿里妈妈MUX文章分享</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=3">交互设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="http://www.zcool.com.cn/">
                        <i style=" background-image: url(static/img/wangzhi/20161208084527333.jpg);"></i>
                        <b>站酷网</b>
                        <br>
                        <p>设计师交流平台，分享与学习的好去处。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
                <li class="bounceIn animated">
                    <a target="_blank" class="li1_1" href="https://www.behance.net/">
                        <i style=" background-image: url(static/img/wangzhi/20161206091039766.png);"></i>
                        <b>Behance</b>
                        <br>
                        <p>Adobe旗下的设计师交流平台，来自世界各地的设计师在这里分享自己的作品。</p>
                    </a>
                    <span class="biaoqian">
                        <a href="javascript:void(0);=1">灵感创意</a>
                        <a href="javascript:void(0);=4">UI设计</a>
                        <a href="javascript:void(0);=11">交流社区</a>
                    </span>
                </li>
            </ul>
        </div>
    </section>
<div class="foot"></div>

<footer>
<script type="text/javascript">
            $(document).ready(function(){

                $(window).scroll(function() {
                    if ($(window).scrollTop() > 300) {
                        $('#top').fadeIn(800);
                        // $('#jump li:eq(0)').fadeIn(800);
                    } else {
                        $('#top').fadeOut(800);
                    }
                });

                $("#top").click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    },
                    1000);
                    return false;
                });

            });
            </script>

        <a id="top" href="#top" style="display:none;">^</a>
</footer>
<?php include 'footer.php';?>




<!-- 背景 -->
<div id="slideshow">
    <img src="static/img/000 (1).jpg"  alt="导航网" class="active">
    <img src="static/img/000 (2).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (3).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (4).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (5).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (6).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (7).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (8).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (9).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (10).jpg" height="1080" width="1920" alt="导航网" />
    <img src="static/img/000 (11).jpg" height="1080" width="1920" alt="导航网" />
</div>
<script type="text/javascript">
    function slideSwitch() {
        var $active = $('#slideshow IMG.active');
        if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

            var $next =  $active.next().length ? $active.next(): $('#slideshow IMG:first');

        $active.addClass('last-active');
        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000, function() {
                $active.removeClass('active last-active');
            });
    }
    $(function() {
        setInterval( "slideSwitch()", 5000 );
    });
</script>
<!--动态背景-->
<script type="text/javascript"language="javascript">
    function AddFavorite(sURL, sTitle) {
        sURL = encodeURI(sURL);
        try {
            window.external.addFavorite(sURL, sTitle);
        } catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "");
            } catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
            }
        }
    }

    function SetHome(url) {
        if (document.all) {
            document.body.style.behavior = 'url(#default#homepage)';
            document.body.setHomePage(url);
        } else {
            alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");
        }
    }
</script>
<!-- 背景end -->
</body>
</html>