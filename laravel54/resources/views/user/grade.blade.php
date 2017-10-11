
<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
        <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
        <title>直播个人中心</title>
        <link rel="stylesheet" href="http://assets.dwstatic.com/project/yytv/center/2.9.2/css/admin.css">
        <style type="text/css">
        .main-col{*padding-bottom: 140px;}
        </style>
        <script type="text/javascript" src="http://i.huya.com/base/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="//a.msstatic.com/huya/icenter/main/css/user_level_06514fd.css">
</head>
<body>
    

	<script src="//a.msstatic.com/huya/common/header.js"></script>
	<div style="height:50px;"></div>
    <div class="admin-wrap">
        <style type="text/css">
.nav-scroll-wrap .nav-section .icon-recommendtag{
    background-image: url(../main/statics/img/icon-recommendtag.png);
}
.nav-scroll-wrap .nav-section .icon-room{
    background-image: url(../main/statics/img/room_man_icon.png);
}
/*CDK兑换*/
.nav-scroll-wrap .nav-section .icon-CDKey_change {
    background-image: url(../main/statics/img/icon_CDKey.png);
}
/*中奖查询*/
.nav-scroll-wrap .nav-section .icon-maw {
    background-image: url(../main/statics/img/icon_my_awards.png);
}
/*虎牙认证*/
.nav-scroll-wrap .nav-section .icon-auth{background-image: url('../main/statics/img/auth_icon.png');}
/*广告推广*/
.nav-scroll-wrap .nav-section .icon-ad{
    background-image: url('../main/statics/img/icon-ad.png');
}
/*我的粉丝*/
.nav-scroll-wrap .nav-section .icon-fans{
    background-image: url('../main/statics/img/icon-fans.png');
}
/*艺人签约*/
.nav-scroll-wrap .nav-section .icon-artist-sign{
    background-image: url('../main/statics/img/icon-artist-sign.png');
}
/*我的消息*/
.nav-scroll-wrap .nav-section li .msg_new{
    right: 63px;
    top: 16px;
    width: 8px;
    height: 8px;
}
/*等级成长*/
.nav-scroll-wrap .nav-section .icon-userlevel{
    background-image: url('../main/statics/img/icon-uesr-level.png');
}
/*违规查询*/
.nav-scroll-wrap .nav-section .icon-violation{
    background-image: url('../main/statics/img/icon-violation.png');
}
</style>
<script>
    var currentMenu = 'userlevel',
        indexUrl = "http://i.huya.com/",
        indexFile = "index.php";
</script>
<script type="text/javascript" src="//a.msstatic.com/huya/icenter/2.45/js/main_menu.js"></script>
<script type="text/javascript" src="//a.msstatic.com/huya/icenter/1.0/js/cookies.js"></script>
<div class="admin-menu">
    <div class="content">
        <div class="nav-scroll-wrap">
            <div class="scroll-content">
                <div class="nav-section" style="padding-bottom:0">
                    <h3 class="header">&nbsp;个人中心</h3>
                    <ul class="icon-filter">
                        <li>
                            <a menu="home" href="http://i.huya.com/">
                                <span class="icon icon-home"></span>
                                <span class="title">
                                    我的信息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="userlevel" href="http://i.huya.com/index.php?m=UserLevel">
                                <span class="icon icon-userlevel"></span>
                                <span class="title">
                                    等级成长
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="subscribe" href="http://i.huya.com/index.php?m=Subscribe">
                                <span class="icon icon-subscribe"></span>
                                <span class="title">
                                    订阅与历史
                                </span>
                            </a>
                        </li>
                        <li id="msg-li">
                            <a menu="msg" href="http://i.huya.com/index.php?m=Msg&do=listMsg">
                                <span class="icon icon-msg"></span>
                                <span class="title">
                                    我的消息
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="noble" href="http://i.huya.com/index.php?m=NobleSys">
                                <span class="icon icon-noble"></span>
                                <span class="title">
                                    我的贵族
                                </span>
                            </a>
                        </li>
			            <!-- <li>
                                <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                    <span class="icon icon-room"></span>
                                    <span class="title">
                                        房间管理
                                    </span>
                                </a>
                            </li> -->
                        <li>
                            <a menu="myRoom" href="http://i.huya.com/index.php?m=MyRoomAuditor">
                                <span class="icon icon-room"></span>
                                <span class="title">
                                    我的头衔
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="money" href="http://i.huya.com/index.php?m=MyAccount&do=myAccount">
                                <span class="icon icon-money"></span>
                                <span class="title">
                                    我的财产
                                </span>
                            </a>
                        </li>
                        <!-- <li>
                            <a menu="guess" href="http://i.huya.com/index.php?m=Guess">
                                <span class="icon icon-guess"></span>
                                <span class="title">
                                    我的竞猜
                                </span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a menu="texas" href="http://i.huya.com/index.php?m=Texas">
                                <span class="icon icon-teaxs"></span>
                                <span class="title">
                                    开心德州
                                </span>
                            </a>
                        </li> -->
                        <!--
                        <li>
                            <a menu="guard" href="http://i.huya.com/index.php?m=Guard&do=guardInfo">
                                <span class="icon icon-protect"></span>
                                <span class="title">
                                    主播守护
                                </span>
                            </a>
                        </li>
                      
                        <li>
                            <a menu="badge"  href="http://i.huya.com/index.php?m=Badge">
                                <span class="icon icon-badge"></span>
                                 <span class="title">
                                     我的徽章
                                 </span>
                            </a>
                        </li>
                        -->
                        <!--
                        <li>
                            <a menu="basesetting" href="http://i.huya.com/index.php?m=PopOptions&do=userOption">
                                <span class="icon icon-base"></span>
                                <span class="title">
                                    基础设置
                                </span>
                            </a>
                        </li>
                        -->
                        <!-- <li id="mygift-li">
                            <a menu="mygift" href="http://i.huya.com/index.php?m=MyGift&do=listMyGift">
                                <span class="icon icon-welfare"></span>
                                <span class="title">
                                    我的福利
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="maw-li">
                            <a menu="maw" href="http://i.huya.com/index.php?m=Maw">
                                <span class="icon icon-maw"></span>
                                <span class="title">
                                    中奖查询
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="interaction_game-li">
                            <a menu="interaction_game" href="http://i.huya.com/index.php?m=MonkeyTrick">
                                <span class="icon icon-interaction"></span>
                                <span class="title">
                                    互动游戏
                                </span>
                            </a>
                        </li> -->
                        <!-- <li id="mygift-li">
                            <a menu="userlevel" href="http://i.huya.com/index.php?m=UserLevel">
                                <span class="icon icon-power"></span>
                                <span class="title">
                                    等级特权
                                </span>
                            </a>
                        </li> -->
                        <li id="CDKey_change-li">
                            <a menu="cdkey" href="http://i.huya.com/index.php?m=CdKey">
                                <span class="icon icon-CDKey_change"></span>
                                <span class="title">
                                    CDKey兑换
                                </span>
                            </a>
                        </li>
                        <li>
                            <a menu="auth" href="http://i.huya.com/index.php?m=ProfileAuth">
                                <span class="icon icon-auth"></span>
                                <span class="title">
                                    虎牙认证
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                                               
                                
                    <div class="to-be-anchor">
                        <p>想成为万人敬仰的主播？</p>
                        <a href="http://www.huya.com/e/zhubo" target="_blank" class="btn btn-to-anchor">成为主播</a>
                    </div>
           
            </div>


        </div>

    </div>
</div>
        <div class="main-col">
            <div class="mod">
                <div class="mod-hd">
                    <h3>等级成长</h3>
                </div>
                <div class="user-level-header">
                    <img class="header-img" src="http://huyaimg.msstatic.com/avatar/1062/06/3db86c2307602bbaab2f49bb4b819e_180_135.jpg" height="95" width="95">
                    <div class="personal-information">
                        <p class="nick">
                            <span>Well.</span>
                            <i class="user-level-icon user-level-icon-1"></i>
                        </p>
                        <div class="grow-level">
                            <span>LV1</span>
                            <p class="grow-level-contact">
                                <span class="grow-level-number">67/200</span>
                                <span class="grow-level-part" style="width:33.5%;"></span>
                            </p>
                            <span>LV2</span>
                        </div>
                                                    <p class="grow-level-gain">今日还可获得<span>200</span>&nbsp;点经验值</p>
                                            </div>
                </div>
                   
                <!-- 新手任务 -->
                    <div class="novice-task">
                        <div class="task-head">
                            <h4>新手任务</h4>
                            <p class="line"></p>
                        </div>
                        <ul class="task-content" id="task-content">
                                                            <li class="task-list task-id141">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_dingyue.png" height="40" width="40" alt="订阅主播">
                                    <div class="task-desc">
                                        <p>订阅主播</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">0/5</a>
                                        </div>
                                                                    </li>
                                                            <li class="task-list task-id142">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_touxiang.png" height="40" width="40" alt="设置头像">
                                    <div class="task-desc">
                                        <p>设置头像</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                                                                        <!--  已完成 -->
                                            <div class="task-status ststus-received">
                                                <a href="javascript:;">已完成</a>
                                            </div>
                                                                                                            </li>
                                                            <li class="task-list task-id171">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_songli.png" height="40" width="40" alt="送出玉兔">
                                    <div class="task-desc">
                                        <p>送出玉兔</p>
                                        <p class="task-desc-experience">(+20EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">0/1</a>
                                        </div>
                                                                    </li>
                                                            <li class="task-list task-id170">
                                    <img src="http://img.dwstatic.com/huya/questcenter/icon/xinshou_ewai.png" height="40" width="40" alt="额外奖励">
                                    <div class="task-desc">
                                        <p>额外奖励</p>
                                        <p class="task-desc-experience">(+30EXP)</p>
                                    </div>
                                                                            <!-- 进行中 -->
                                        <div class="task-status ststus-doing">
                                            <a href="javascript:;">1/3</a>
                                        </div>
                                                                    </li>
                                                    </ul>
                        <div class="novice-task-copyright">
                            <p>提示：领取新手任务全部奖励，即可开启每日推荐任务，获得更多经验值</p>
                        </div>
                    </div>
                                <!-- 快速升级 -->
                <div class="rapid-version">
                    <div class="task-head">
                        <h4>快速升级</h4>
                        <p class="line"></p>
                    </div>
                    <ul class="rapid-version-content">
                        <li>
                            <i class="rapid-version-list-1"></i>
                            <p class="rapid-version-list-title">做任务</p>
                            <p>完成每日任务推荐</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-2"></i>
                            <p class="rapid-version-list-title">领宝箱</p>
                            <p>每个宝箱都有经验值</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-3"></i>
                            <p class="rapid-version-list-title">送礼物</p>
                            <p>送给主播任意礼物</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-4"></i>
                            <p class="rapid-version-list-title">充金豆</p>
                            <p>金豆充值礼包经验多多</p>
                        </li>
                        <li>
                            <i class="rapid-version-list-5"></i>
                            <p class="rapid-version-list-title">拥有特权</p>
                            <p>开通续费贵族/守护</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- 领取任务按钮弹窗 -->
<div class="box getTask" id="getTask">
    <div class="box-hd">
        <h3 class="title">任务-领取</h3>
        <a href="javascript:;" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont cont-tips">
            
        </div>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn">确定</a>
        </div>
    </div>
</div>
<div class="mask_bg"></div>
<script type="text/javascript" src="//a.msstatic.com/huya/icenter/main/js/user_level_13751e2.js"></script>
	<script src="//a.msstatic.com/huya/common/footer.js"></script>
<script src="http://assets.dwstatic.com/b=project/yytv/center/2.8/js&f=main.js"></script>
<script type="text/javascript" src="http://szhuodong.duowan.com/s/rp/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/1.0/js/report_info.js"></script>
<!--/footer-->
<!-- S 后台推送消息 -->
    <!--[if lte IE 7]>
    <script  type='text/javascript' src='http://i.huya.com/base/js/push/json3.min.js'></script>
    <![endif]-->
    <!--[if lte IE 9]>
    <script type='text/javascript' src='http://i.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>
    <![endif]-->
    <script data-fixed="true">
        var PUSH_PROXY_URL="http://channelproxy.huya.com/";
        var PUSH_ENABLE=true;//推送开关
        var WEB_PUSH_URL="webpush.huya.com";
        var WEB_PUSH_TLS_ENABLE=true;//是否使用TLS
    </script>
    <script type='text/javascript' src='http://www.huya.com/base/js/push/push-min.js?t=20170818'></script>
    <script type='text/javascript' src='http://i.huya.com/base/js/push/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->
</body>
</html>