

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
        <script type="text/javascript" src="http://i.huya.com/base/js/jquery-1.7.2.min.js"></script><script type="text/javascript" src="http://i.huya.com/main/statics/js/WdatePicker.js"></script>
<link href="http://a.dwstatic.com/huya/icenter/2.5/css/new_home_index.css" rel="stylesheet"/>

<link rel="stylesheet" type="text/css" href="//a.msstatic.com/huya/icenter/2.43/css/my_room_auditor.css">
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
    var currentMenu = 'myRoom',
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
        <div class="scroll-content">
            <div>
                <div class="mod mod-propery">
                    <div class="mod-hd" id="addHead">
                        <h3>特权管理</h3>     
                    </div>
                    <div id="tab-click" class="mod-tab">
                        <div class="mod-tab-hd" style="border-bottom:1px solid #ccc;">
                            <ul class="mod-tab-trigger J_nav">
                                <li class="selected" data-show="my_room_auditor"><a href="javascript:void(0);">房间管理</a></li>
                                <li data-show="defend_admin"><a href="javascript:void(0);">守护管理</a></li>
                                <li data-show="fans_cion"><a href="javascript:void(0);">粉丝徽章</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="my_room_auditor">
                        <!-- 房间管理 s -->
                        <div class="add_wrap" id="addWrap">

                            <div class="head_wrap">
                                <div class="common_input input_ban_time">
                                    <!-- <input type="text" value="2016-03-01" id="banOptime" /> -->
                                    <label>
                                       <input placeHolder="点击选择添加时间"  class="Wdate" type="text" id="myBanOptime" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicked:globalParam.updateMyRoom})" value=""/>
                                   </label>
                                </div>
                                <!-- <select class="common_select" id="banTime" onchange="globalParam.updateData();">
                                    <option value="">禁言时长</option>
                                    <option value="1800">30分钟</option>
                                    <option value="86400">1天</option>
                                    <option value="259200">3天</option>
                                    <option value="604800">7天</option>
                                </select> -->
                                <div class="common_input input_ban_op_yy">
                                    <input type="text" placeHolder="搜索主播YY号" id="myBanOpYy" />
                                </div>
                                <div class="common_input input_ban_yy">
                                    <input type="text" placeHolder="搜索主播昵称" id="myBanNick" />
                                </div>
                                <a href="javascript:void(0);" class="common_btn search_man" id="mySearch">搜索</a>
                            </div>

                            <table cellpadding="0" cellspacing="0" class="con_table" id="myRoomList">
                                <tr>
                                    <th>添加时间</th>
                                    <th>主播YY号</th>
                                    <th>主播昵称</th>
                                    <th>操作</th>
                                </tr>
                                <!-- <tr class="active">
                                    <td>2016-03-01</td>
                                    <td>909014040</td>
                                    <td>哈哈先生</td>
                                    <td>
                                        <a href="javascript:void(0);" title="禁言记录">禁言记录</a>&nbsp;|&nbsp;
                                        <a href="javascript:void(0);" title="辞职">辞职</a>
                                    </td>                   
                                </tr> -->
                            </table>
                            <p class="page_wrap" id="roomPageWrap"></p>
                        </div>
                        <!-- 房间管理 e -->
                        <!-- 禁言记录 s -->
                        <div class="ban_wrap" style="display:none;" id="banWrap">
                            <div class="mod-hd">
                                <a href="javascript:void(0);" class="back-to" id="backIndex">返回</a>
                                <h3 class="my_protect_h3">操作记录</h3>
                            </div>
                            <div class="head_wrap">
                                <div class="common_input input_ban_time">
                                    <!-- <input type="text" value="2016-03-01" id="banOptime" /> -->
                                    <label>
                                       <input  class="Wdate" type="text" id="banOptime" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd',onpicked:globalParam.updateData})" value=""/>
                                   </label>
                                </div>
                                <!-- <select class="common_select" id="banTime" onchange="globalParam.updateData();">
                                    <option value="">禁言时长</option>
                                    <option value="1800">30分钟</option>
                                    <option value="86400">1天</option>
                                    <option value="259200">3天</option>
                                    <option value="604800">7天</option>
                                </select> -->
                                <select class="common_select" id="banOption" onchange="globalParam.updateData();">
                                    <option value="">全部封禁操作</option>
                                    <option value="0">禁止发言</option>
                                    <option value="1">封入黑名单</option>
                                </select>
                                <select class="common_select" id="roomMen" onchange="globalParam.updateData();"></select>
                                <div class="common_input input_ban_op_yy" style="width:120px;">
                                    <input type="text" placeHolder="搜索房管YY号" id="banOpYy" style="width:100%;" />
                                </div>
                                <div class="common_input input_ban_yy">
                                    <input type="text" placeHolder="搜索禁言用户YY号" id="banYy" />
                                </div>
                                <a href="javascript:void(0);" class="common_btn search_man" id="search">搜索</a>
                            </div>
                            <table cellpadding="0" cellspacing="0" class="con_table" id="banList">
                                <tr>
                                    <th>时间</th>
                                    <th>封禁操作</th>
                                    <th>房管</th>
                                    <th>封禁时长</th>
                                    <th>封禁用户</th>
                                    <th>用户发言</th>
                                    <th>封禁理由</th>
                                    <th>操作</th>
                                </tr>
                                <!-- <tr class="active">
                                    <td>2016-03-01</td>
                                    <td>差不多先生（909014040）</td>
                                    <td>30分钟</td>
                                    <td>哈哈先生（909014040）</td>
                                    <td>看片 +QQ1234567891011</td>
                                    <td>
                                        <a href="javascript:void(0);">解禁</a>
                                    </td>                   
                                </tr> -->

                            </table>
                            <p class="page_wrap" id="banPageWrap"></p>
                        </div>
                        <!-- 禁言记录 e -->
                    </div>
                    <!-- 守护管理s -->
                    <div id="defend_admin" style="display:none;">
                        <!-- 守护特权  -->
                        <div class="mod mod-basic">
                            <div class="mod-hd">
                                <h4>守护特权</h4>
                                <span class="line line-income"></span>
                            </div>
                            <!-- 没有守护特权 -->
                            <!-- <div class="no_protect"></div> -->
                            <a href="http://www.huya.com/public/main/html/sh2.html" class="no_protect" target="_blank"></a>
                            <!-- 有守护特权 -->
                            <div class="protect hidden">
                                <div class="top">
                                    <p>我守护的主播</p>
                                    <a href="http://i.huya.com/index.php?m=Guard&do=guardProfileList" class="btn-link protect_m">查看守护列表</a>
                                </div>
                                <ul class="protect_m">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 守护管理e -->
                    <!-- 粉丝徽章s -->
                    <div class="mod mod-basic" id="fans_cion" style="display:none;">
                        <div class="mod-hd">
                            <h4>粉丝徽章</h4>
                            <span class="line line-income"></span>
                        </div>
                                                <a class="no_fans" href="http://hd.huya.com/0301fans/index.html" target="_blank">
                            <div class="top">
                                <p>我尚未拥有任何粉丝徽章</p>
                            </div>
                        </a>
                                            </div>
                    <!-- 粉丝徽章e -->
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- 粉丝徽章弹窗 -->
    <div class="fans_box">
        <div class="box_top">
            <div class="fans_lev">
                <i class="fans-level"></i>
            </div>
            <a href="javascript:void(0);" class="close">关闭</a>
        </div>
        <p>主播昵称：<span class="zhubo_nick" style="color:#333;">排名第一的王者妹妹</span></p>
        <p>亲密度排名：<span class="zhubo_paiming" style="color:#FF8800;">300</span></p>
        <div class="num"><span>亲密度：</span><span class="contact"><span class="part"></span></span><span class="zhubo_qinmidu">2520/4920</span></div>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn" id="use_fans">佩戴徽章</a>
            <!-- <a href="javascript:void(0);" class="btn del_fans">删除徽章</a> -->
        </div>
    </div>
    <!-- 删除粉丝徽章弹窗 -->
    <div class="fans_del">
        <div class="box_top">
            <a href="javascript:void(0);" class="close">关闭</a>
        </div>
        <div class="warn">您确定要删除该粉丝徽章？</div>
        <p>徽章删除后将无法找回，针对该主播的粉丝等级和亲密度也将清空</p>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn sure_fans">确定</a>
            <a href="javascript:void(0);" class="btn quit_fans">取消</a>
        </div>
    </div>
    <!-- 隐藏守护弹窗 -->
    <div class="hide_sh">
        <div class="box_top">
            <a href="javascript:void(0);" class="close">关闭</a>
        </div>
        <div class="warn">确定要隐藏该主播守护关系？</div>
        <p>确定在贵宾席上隐藏你与该主播的守护关系？隐藏后可恢复显示</p>
        <div class="box_bot">
            <a href="javascript:void(0);" class="btn sure_hide_sh" data-hide="">确定</a>
            <a href="javascript:void(0);" class="btn quit_hide_sh">取消</a>
        </div>
    </div>
<script type="text/javascript" src="http://a.dwstatic.com/huya/icenter/2.6/js/my_room_auditor.js"></script>
<script type="text/javascript" src="http://a.dwstatic.com/huya/icenter/2.15/js/privilege_admin.js"></script>
<script type="text/javascript">
    // 统计上报
    $("body").on('click', '.clickstat',function(event){
        var that = $(this);

        report({
            eid:that.attr('eid'),
            eid_desc:that.attr('eid_desc')
        });
    });

</script>
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
</html><script type="text/javascript">
    report({
        rso: parseQueryString(location.href)['rso'] || "", //外部来源
        rso_desc:parseQueryString(location.href)['rso_desc'] || "",//外部来源
        eid: "pageview/grzx/fjgl",  //产品给的
        eid_desc:"pageview/个人中心/房管管理",  //产品给的
        pro:"huya_web"
    });
</script>

