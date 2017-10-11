
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
<script type="text/javascript">
    var eu = '';
    var user = 1;
    var indexUrl = 'http://i.huya.com/';
    var liveUrl = 'http://www.huya.com/';
    var loginType = 'qq';
</script>

<!-- <link href="http://a.msstatic.com/huya/icenter/2.4/css/new_home_index.css" rel="stylesheet"/> -->
<!-- 图片裁剪样式 -->
<!-- <link rel="stylesheet" type="text/css" href="http://a.msstatic.com/huya/icenter/2.4/css/imgareaselect-default.css" /> -->
</head>
<body>
    

    <script src="//a.msstatic.com/huya/common/header.js"></script>
    <div style="height:50px;"></div>
    <div class="box" id="goldbean_expiry_date_box" style="width:320px;"></div>
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
    var currentMenu = 'cdkey',
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
            <!-- 兑换中心S { -->
            <div class="mod mod-basic">
                <div class="mod-hd">
                    <h4>兑换中心</h4>
                    <span class="line line-income"></span>
                </div>
                <div class="mod-bd">
                    <form class="form form-apply" style="padding: 0 60px;">
                        <div class="form-group">
                            <div>
                                <!-- <p style="font-weight: bold; ">《曜能量复仇者联盟促销活动》</p> -->
                                <p>请在下方输入八位数字加英文字母的激活码，兑换虎牙直播金豆。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="width:150px;">请输入激活码：</label>
                            <input id="exchange_code" name="exchange_code" type="text" class="yy-num" maxlength="32">
                            <span id="error_span" class="help-inline require" >
                                <i id="error_span" style="display:none;">*</i>
                                <i id="error_con" style="display:none;"></i>
                            </span>
                        </div>
                        <div class="form-group" style="width:705px;">
                            <label for="catpcha" style="width:150px;">验证码：</label>
                            <input id="captcha_input" type="text" name="captchaValue" class="yy-num" maxlength="8"/>
                            <input type="hidden" id="captcha_id" name="captchaId" value="" />
                            <img src="" id="captcha_pic" style="*zoom:1; *display:inline; display: none;" />
                            <span id="captcha_tip" style="display: none;">（点击图片刷新验证码）</span>
                            <br>
                            <span id="error_span_captcha" class="help-inline require" style="display:none;">
                                <i>*</i>
                                <i id="error_con_captcha" ></i>
                            </span>
                        </div>
                    </form>
                    <div class="btn-group" style="text-align:left; margin-left: 160px;">
                        <a href="javascript:void(0);" id="exchange_submit" class="btn btn-basic">确定</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

<style>
    .j-pop{
        color:#e74c3c;margin: 10px;display: inline-block;
    }
    /*.box{display:block;}*/
</style>
<div class="pop-box-content">
    <div class="box" id="popup-win1">
        <div class="box-hd">
            <h3 class="title">解约金记录</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>
        <div class="box-bd">
            <table class="record">
                <tr>
                    <th>时间</th>
                    <th>解约频道</th>
                    <th>金额</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-on">扣款中</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr>
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-complete">解约成功</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr>
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-on">扣款中</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr>
                    <td>2014.04.08 16:00</td>
                    <td>987654321</td>
                    <td><span class="num">￥20,000</span></td>
                    <td><span class="status-on">扣款中</span></td>
                    <td><a href="#1">刷新</a></td>
                </tr>
                <tr>

                </tr>
            </table>

        </div>

    </div>


    <div class="box" id="popup-win2">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span">您确定与<span class="em">【网易官方】英雄三国（9000012频道）</span>解除签约？</p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win3">
        <div class="box-hd">
            <h3 class="title">验证码</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-verify">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">

                    <div class="form-group">
                        <label class="l-verify">请输入验证码：</label>
                        <input type="text" class="verify-code">
                        <img src="http://i.huya.com/main/statics/img/verify_code.jpg" class="v-code"/>
                    </div>

                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>


    <div class="box" id="popup-win4">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input name="unSignVerifyType" checked="checked" value="1"  type="radio">
                            <span>协议解约</span>
                        </label>
                        <label class="g-radio">
                            <input name="unSignVerifyType" value="2"  type="radio">
                            <span>强制解约</span>
                        </label>

                    </div>
                    <p class="tips-m content_span"><i class="icon-mini icon-notices"></i>双方协议解约，不影响任何一方利益。</p>
                    <p id="force4" class="tips-m " style="display:none">
                        <i id="force4" class="icon-mini icon-notices"></i>强制解约需要缴纳解约金<span id="deductGoldbeanNum"></span>Y币
                    </p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win5">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input type="radio" name="unSignVerifyType" id="unSignVerifyTypeId" checked="checked" value="1" onclick="ow_util.setUnSignVerifyValue(this)">
                            <span>协议解约</span>
                        </label>
                        <label class="g-radio">
                            <input type="radio" name="unSignVerifyType" value="2" onclick="ow_util.setUnSignVerifyValue(this)">
                            <span>强制解约</span>
                        </label>

                    </div>
                    <p id="consult" class="tips-m">
                        <i class="icon-mini icon-notices"></i>双方协议解约，不影响双方任何利益</span>
                    </p>
                    <p id="force" class="tips-m " style="display:none">
                        <i  class="icon-mini icon-notices"></i>强制解约无须主播确认但会扣除您<span class="num content_span">10,000</span>个金元宝
                    </p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win6">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-waring"></i>
                    <span> 抱歉，进行官方频道认证前，必须先进行频道认证。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"><a href="#1" class="btn btn-verify">立即认证</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <!-- 修改头像验证 -->
    <div class="box" id="AccessTocken">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="javascript:void(0);" onclick="NAV_UTIL.logout();" class="btn btn-confirm">重新登录</a></span>
                </div>

            </div>

        </div>
    </div>

    <div class="box" id="popup-win7-1">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>


    <div class="box" id="popup-win7">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win7-2">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win7-3">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">抱歉，您的余额不足，请先充值！</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">去充值</a></span>
                </div>

            </div>

        </div>
    </div>

    <div class="box" id="popup-win8">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-success"></i>
                    <span>您的资料提交完成，审核将在7个工作日内完成。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>


    <div class="box" id="popup-win9">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-success"></i>
                    <span class="end">与【网易官方】英雄三国（YY：9121212）解约成功，扣取金豆<span class="num">121,212个</span></span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>


    <div class="box" id="popup-win10">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="end">与【网易官方】英雄三国（YY：9121212）解约失败！原因是：金豆数量不足。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>



    <div class="box" id="popup-win11">
        <div class="box-hd">
            <h3 class="title">金豆充值</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-charge">
                <p class="tips-verify">Y币兑换金豆，兑换比率：<strong>1</strong>Y币=<strong>1,000</strong>金豆</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">请输入购买数量：</label>
                        <input type="text" class="common-input">
                        <span class="inline-text">Y币</span>
                        <p class="tips-l">(目前账户剩余<strong>1,000</strong>Y币)</p>
                    </div>
                    <p class="tips-error"><i class="icon-mini mini-error"></i>抱歉，你的余额不足，请先充值</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-basic">马上兑换</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box box-charge" id="popup-win12">
        <div class="box-hd">
            <h3 class="title">金豆兑换</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-golden content_a">
                <p class="tips-verify">金元宝兑换金豆，兑换比率：<strong>1</strong>金元宝=<strong>1</strong>金豆</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">请输入要兑换的金豆数量：</label>
                        <input type="text" class="common-input">
                        <span class="inline-text">个</span>
                        <p class="tips-l">(目前账户剩余<strong>1,000</strong>金元宝)</p>
                    </div>
                    <div class="form-group">
                        <label class="tit">验证码：</label>
                        <input type="text" class="common-input">
                        <a href="#1" class="get-code">获取验证码</a>
                        <a href="#1" class="get-phone">获取密保手机号</a>

                    </div>
                </form>
                <div class="btn-group">
                    <a href="#1" class="btn btn-confirm">确定</a>
                    <a href="#1" class="btn btn-cancel">取消</a>

                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win13">
        <div class="box-hd">
            <h3 class="title">签约邀请</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-invite" style="width:400px;*width:430px;">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">受邀请人YY号：</label>
                        <input type="text" id="yyid_input" class="invite-input" onchange="ow_util.insertvalue($(this));"/>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约时限：</label>
                        <select class="channel-select" name="selecttime" id="selecttime" style="width: 160px;margin-top: 5px;" onchange="ow_util.insertselect($(this));">
                            <option value="1">1年</option>
                            <option value="2">9个月</option>
                            <option value="3">6个月</option>
                            <option value="4">3个月</option>
                        </select>
                    </div>
                                        <div class="form-group">
                        <label class="tit-i">期待ow提成：</label>
                        <input type="text" id="percent_input" class="invite-input" onkeyup="ow_util.insertPercent($(this));"/>
                        <span style="font-size:12px;height:30px;line-height:30px;margin-left:2px;">% <i id="percent_tips">比例范围：10%-30%</i></span>
                        <span class="inline-tips" style="*display: block;*margin-top: 36px;">普通公会ow提成为10%，但若公会升级为白金公会，将按此设置比例提成</span>
                    </div>
                    
                    <div class="form-group">
                        <label class="tit-i">邀请信息：</label>
                        <textarea id="message_input" rows="2" cols="30" onkeyup="ow_util.textup('message_input');
                                ow_util.insertMessage($(this));
                                  " onKeyDown="ow_util.textdown('message_input', event)"></textarea>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>

                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win14">
        <div class="box-hd">
            <h3 class="title">添加普通主播</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-add" style="padding:35px 35px 30px 35px;">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">请输入YY号：</label>
                        <input id="yyid_input" type="text" class="num-input" onchange="ow_util.insertvalue($(this))"/>
                    </div>
                    <p>1.添加的主播必须完成虎牙认证。<a href="http://i.huya.com/index.php?m=ProfileAuth" target="_blank">如何完成虎牙认证</a></p>
                    <p>2.添加主播成功后请退出重进频道（直播间）即可开播。</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win15">
        <div class="box-hd">
            <h3 class="title">解除签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-total content_a">
                <p>您本月一共获得金豆<strong>1,000</strong>个，请月结：</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input type="radio">
                            <span>兑换成银豆</span>
                        </label>
                        <label class="g-radio">
                            <input type="radio">
                            <span>兑换为佣金</span>
                        </label>

                    </div>
                    <p class="total">兑换结果：<strong>10,000</strong>个银豆：</p>
                    <p class="tips-m"><i class="icon-mini icon-notices"></i>请在每月2号前完成结算，逾期未处理将默认转为银豆。</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>


    <div class="box" id="popup-win16">
        <div class="box-hd">
            <h3 class="title">签约提成设置</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-setting">
                                <p>请输入对应签约时限的提成比例，该比例将在成为白金公会之后生效于签约主播。</p>
                                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">签约3个月提成比例：</label>
                        <input id="percent_input_4" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 4)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_4">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约6个月提成比例：</label>
                        <input id="percent_input_3" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 3)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_3">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约9个月提成比例：</label>
                        <input id="percent_input_2" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 2)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_2">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">签约1年提成比例：</label>
                        <input id="percent_input_1" type="text" class="common-input" onkeyup="ow_util.insertDefaultPercent($(this), 1)">
                        <span class="inline-text">%</span>
                        <span class="inline-tips" id="inline-tips_1">(10%-30%)</span>
                    </div>
                    <div class="form-group">
                    <p class="tips-error "><i class="icon-mini mini-error"></i><span id="setting_tips">请按要求填写签约比例。</span></p>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <div class="box" id="popup-win17">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify content_span">
                    <i class="icon icon-error"></i>
                    <span>您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">

                </div>

            </div>

        </div>
    </div>

    <!-- 我的消息 马上处理(协议解约)-->
    <div class="box" id="popup-win18">
        <div class="box-hd">
            <h3 class="title">协议解约确认</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input name="unSignVerifyType" checked="checked" value="1" onclick="ow_util.setUnSignVerifyValue(this);"  type="radio">
                            <span>同意</span>
                        </label>
                        <label class="g-radio">
                            <input name="unSignVerifyType" value="2" onclick="ow_util.setUnSignVerifyValue(this);"  type="radio">
                            <span>不同意</span>
                        </label>

                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <!-- 我的消息 马上处理（签约确认）-->
    <div class="box" id="popup-win19">
        <div class="box-hd">
            <h3 class="title">签约</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-add">
                <form class="form content_span" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">频道号：</label>
                        <input type="text" class="num-input"  id="channelId_input" value="" disabled/>
                    </div>
                    <div class="form-group">
                        <label class="tit">OW提成比例：</label>
                        <span class="inline-text">%</span>
                    </div>
                    
                    <div class="form-group">
                        <label class="tit">签约时限：</label>
                        <span class="inline-text"></span>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win20">
        <div class="box-hd">
            <h3 class="title">签约邀请</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-invite">
                <form class="form content_span" action="about:blank" method="get" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">OW提成：</label>
                        <span class="inline-text">%</span>
                    </div>
                    <div class="form-group">
                        <label class="tit-i">你可以复制以下内容给主播：</label>
                        <textarea id="message_output" rows="3" cols="30" onkeyup="ow_util.insertMessage();"></textarea>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnClose"> <a  id="testCopyMsg" style="position:relative;" href="javascript:void(0);" class="btn btn-confirm">复制并关闭</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win21">
        <div class="box-hd">
            <h3 class="title">比例修改确认</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont">
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-action">
                        <label class="g-radio">
                            <input name="is_agree" onclick="profile_util.insertIsAgree(1);" checked="checked" value="1"  type="radio">
                            <span>同意</span>
                        </label>
                        <label class="g-radio">
                            <input name="is_agree" value="0" onclick="profile_util.insertIsAgree(0);"  type="radio">
                            <span>不同意</span>
                        </label>

                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
 <div class="box" id="popup-win22">
        <div class="box-hd">
            <h3 class="title">白金频道条款</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd"> 
            <div class="cont cont-tips">
                <p class="tips-verify"><span class="end" style="width:370px">该频道为白金公会，签约该频道后，必须遵守白金公会的相关条例，如下：</span></p>
                <p class="tips-verify"><span class="end" style="width:370px">&nbsp;&nbsp;1.本次申请签约频道为白金公会频道，将激活虎牙白金公会违约金条款，签约期内您将无法单方面与其解约。但您仍可以通过与该频道OW协商达成协议解约或支付违约金强制解约。</span></p>
                <p class="tips-verify"><span class="end" style="width:370px">&nbsp;&nbsp;2.签约期间，虎牙官方禁止使用其他账号进行直播或白金公会公会申请。一经发现，官方将有权禁止该账号在虎牙平台进行表演。</span></p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win23">
        <div class="box-hd">
            <h3 class="title">解约提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span">您确定与该频道解除签约？</p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>

    <div class="box" id="popup-win24">
        <div class="box-hd">
            <h3 class="title">签约提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>
        
        <div class="box-bd">
            <div class="cont cont-add">
                <form class="form content_span" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        您确定与该频道签约？
                    </div>
                    <div class="form-group">
                        <label class="tit">频道号：</label>
                        <input type="text" class="num-input"  id="channelId_input" value="" disabled/>
                    </div>
                    <div class="form-group">
                        <label class="tit">OW提成比例：</label>
                        <span class="inline-text">%</span>
                    </div>
                    
                    <div class="form-group">
                        <label class="tit">签约时限：</label>
                        <span class="inline-text"></span>
                    </div>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">拒绝</a></span>
                </div>
            </div>
    </div>

</div>
    <div class="box" id="popup-win25">
        <div class="box-hd">
            <h3 class="title">签约提成设置</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-setting">
                <p>请输入你和该签约主播的新提成比例。</p>
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit-i">请输入提成比例：</label>
                        <input id="percent_input_ow" type="text" class="common-input" onkeyup="ow_util.insertPercent($(this))">
                        <span class="inline-text">%</span>
                        <span class="inline-tips"></span>
                    </div>
                    <p class="tips-error m-120">签约3个月提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约6个月提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约9个月提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约1年提成比例:最小10%，最大30%</p>
                    <p class="tips-error m-120">签约3年提成比例:最小10%，最大30%</p>
                </form>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <div class="box" id="popup-win26">
        <div class="box-hd">
            <h3 class="title">撤回提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span">您确定要撤回您的签约申请？</p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                    <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
                </div>
            </div>

        </div>

    </div>
    
    
    <div class="box box-charge" id="popup-win27">
        <div class="box-hd">
            <h3 class="title">金豆兑换</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-golden content_a">
               
                <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                    <div class="form-group">
                        <label class="tit">你将使用<strong>10</strong>Y币兑换<strong>10000</strong>金豆</label>
                        
                    </div>
                    <div class="form-group">
                        <label class="tit">验证码：</label>
                        <input type="text" class="common-input">
                        <a href="#1" class="get-code">获取验证码</a>
                        <a href="#1" class="get-phone">获取密保手机号</a>

                    </div>
                </form>
                <div class="btn-group">
                    <a href="#1" class="btn btn-confirm">确定</a>
                    <a href="#1" class="btn btn-cancel">取消</a>

                </div>
            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win28">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify content_span">
                    <i class="icon icon-error"></i>
                    <span>您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">

                </div>

            </div>

        </div>
    </div>
    
    <div class="box" id="popup-win29">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-sign">
                <p class="tips-single content_span"></p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">官方登陆</a></span>
                    <span ><a target="_blank" href="https://aq.yy.com/p/reg/account.do?appid=21&url=http://www.huya.com/" class="btn btn-cancel">注册</a></span>
                </div>
            </div>

        </div>

    </div>
    
    <div class="box" id="popup-succ">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-success"></i>
                    <span class="content_span">您的资料提交完成，审核将在7个工作日内完成。</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div></div>
     <div class="box" id="popup-error">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    <div class="box" id="popup-error2">
        <div class="box-hd">
            <h3 class="title">提示</h3>
            <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
        </div>

        <div class="box-bd">
            <div class="cont cont-tips">
                <p class="tips-verify">
                    <i class="icon icon-error"></i>
                    <span class="content_span">您的资料提交不成功，请检查相关信息填写是否完整</span>

                </p>
                <div class="btn-group">
                    <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                </div>

            </div>

        </div>
    </div>
    
    <!-- 兑换成功后的弹窗 S{} -->
<div id="box_exchange" class="box" id="popup-success">
    <div class="box-hd">
        <h3 class="title">提示</h3>
        <a href="javascript:void(0);" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont cont-tips">
            <p class="tips-verify">
                <i class="icon icon-success"></i>
                <span class="content_span">恭喜您，成功领取1000金豆！</span>
            </p>
            <div class="btn-group">
                <span class="ui-button J_btnConfirm">
                    <a href="javascript:void(0)" class="btn btn-confirm">确定</a>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="box" id="unsignVerify-popbox-4">
    <div class="box-hd">
        <h3 class="title">短信验证</h3>
        <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont">
            <form class="form" action="about:blank" method="post" autocomplete="on" novalidate="" accept-charset="utf-8">
                <div class="form-action" style="width:290px;margin-left:0;">关键操作需要验证手机号</div>
            </form>
            <div class="btn-group">
                <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm" onclick="ow_util.unsignVerifyUtil.getVerify();">获取验证码</a></span>
                <input id="verify_code" maxlength="10" type="text">
            </div>
            <div class="btn-group" style="margin-top:20px">
                <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm" onclick="ow_util.unsignVerifyUtil.sendVerify();">确定</a></span>
            </div>
        </div>
    </div>
</div>
<!-- }E 兑换成功后的弹窗 -->
    
<!-- 确定签约邀请弹窗 -->
<div class="box" id="popup-box-invite">
    <div class="box-hd">
        <h3 class="title">邀约确认</h3>
        <a href="#1" class="btn-close J_btnClose" title="关闭">关闭</a>
    </div>

    <div class="box-bd">
        <div class="cont" style="padding:0 20px 30px 20px;">
            <p><b>确认向该主播发出邀请吗？</b></p>
            <p>受邀人YY号：<span id="popup-box-invite-yy"></span></p>
            <p>签约年限：<span id="popup-box-invite-year"></span></p>
            <p>OW提成：<span id="popup-box-invite-owtc"></span></p>
            <p><b>注意</b></p>
            <p>官方严禁主播使用非主播本人认证账号开播，若非主播本人认证，虎牙官方将不承认主播与频道的签约关系，双方合法权益将无法得到保障。</p>
            <div class="btn-group">
                <span class="ui-button J_btnConfirm"> <a href="#1" class="btn btn-confirm">确定</a></span>
                <span class="ui-button ui-button-gray J_btnCancle"><a href="#1" class="btn btn-cancel">取消</a></span>
            </div>
        </div>
    </div>
</div>

<div class="mask">

</div>


</body>
</html>


<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.0.1/js/profile.js"></script>
<script src="http://assets.dwstatic.com/b=project/yytv/center/2.4/js&f=lego.popupbox.js"></script>
<script type="text/javascript">
    var embedYyUrl = "http://q.huya.com/yy/";
    window.dataType = "jsonp";
</script>
<!-- <script src="http://assets.dwstatic.com/project/yytv/center/2.9.1/js/moment.js?t=20150610"></script> -->
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.1/js/index.js?t=20160303v1"></script> -->
<!-- add js -->
<!-- 图片裁剪 -->
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.4/js/imgPre.js"></script> -->
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.4/js/jquery.imgareaselect.pack.js"></script> -->
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.4/js/imgCut.js"></script> -->
<!-- 图片裁剪end -->
<!-- <script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.4/js/new_home.js"></script> -->
<!-- 贵族续费 -->
<!-- <script src="http://assets.dwstatic.com/b=project/yytv/center/2.4/js&f=lego.popupbox.js"></script> -->
<!-- <script src="http://a.msstatic.com/huya/icenter/2.4/js/guizutequan.js"></script> -->
<!-- 贵族续费end -->
<!-- end -->
<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.1/js/index.js?t=20160303v1"></script>
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