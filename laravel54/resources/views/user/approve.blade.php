

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
<link rel="stylesheet" type="text/css" href="http://a.msstatic.com/huya/icenter/2.8/css/my_auth.css">

<!-- 上传头像 s-->
<script type="text/javascript" src="http://a.msstatic.com/huya/icenter/2.33/js/profile.js"></script>
<script src="http://i.huya.com/base/js/jquery.Jcrop.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://i.huya.com/base/css/jquery.Jcrop.css" type="text/css" />
<script type="text/javascript" src="http://i.huya.com/base/uploadify/jquery.uploadify-3.1.js?5"></script>
<link rel="stylesheet" href="http://i.huya.com/base/uploadify/uploadify.css" type="text/css" />
<link rel="stylesheet" href="http://i.huya.com/base/css/yy-live.css" type="text/css" />
<script type="text/javascript" src="http://i.huya.com/main/statics/ubbeditor/ubbEditor.js"></script>

<!-- 上传头像 e -->
<!-- 虎牙认证操作提示 add by shixubo -->
    <style type="text/css">
        .start_p{font-size: 15px;color: #FF8A05;background: #FCF3E8;padding: 5px 0;margin: 15px 0;}
        .point_p{color:#666666;background:#F5F5F5;padding: 10px;margin: 20px 0;font-size: 13px;font-weight: bolder;}
        .qr_code{margin: 15px 0;}
    </style>
<!-- 虎牙认证操作提示end -->
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
    var currentMenu = 'auth',
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
            <div class="mod">

                <div class="mod-hd">
                    <h3>虎牙认证</h3>
                </div>
                <!-- 虎牙认证操作提示 add by shixubo -->
                    <p class="start_p">★ 推荐认证方式：下载虎牙助手app，3分钟快速完成虎牙认证</p>
                    <div class="h5_head">
                      <span>操作指引</span>
                    </div>
                    <ul class="ques_wrap">
                        <li>
                            <p>1、下载并安装虎牙助手app客户端（请确认虎牙助手app是最新版本）</p>
                        </li>
                        <li>
                            <p>2、打开app并使用虎牙账号登录</p>
                        </li>
                        <li>
                            <p>3、点击“头像”进入“个人中心”，在“个人中心”完成虎牙认证</p>
                        </li>
                        <li>
                            <p>4、认证教程：<a href="http://blog.huya.com/product/70" target="_blank">http://blog.huya.com/product/70</a></p>
                        </li>
                    </ul>
                    <img class="qr_code" src="http://a.msstatic.com/huya/icenter/2.15/img/QR_code.png" alt="虎牙App">
                    <div class="h5_head">
                      <span>示意图</span>
                    </div>
                    <img src="http://a.msstatic.com/huya/icenter/2.15/img/sign_page_2.jpg" alt="认证方式">
                    <p class="point_p">· 备用认证方式：必须完成高级实名认证，并且完善主播资料后才算完成虎牙认证</p>
                <!-- 虎牙认证操作提示end -->
                <div class="h5_head">
                  <span>高级实名认证</span>
                </div>
                <p id="warning"></p>
                                <p id="anth_desc">高级实名认证正在维护中，请使用上述的推荐认证方式：下载虎牙助手app进行认证</p>
                <ul id="anth_main" class="auth_type">
                    <li>
                        <p class="p_1">简单认证</p>
                        <p class="p_2"></p>
                        <p class="p_3">只需提交姓名和身份证信息，可提高账号安全等级</p>
                    </li>
                    <li class="active">
                        <p class="p_1">高级认证</p>
                        <p class="p_2"></p>
                        <p class="p_3">需要提交姓名、身份证和银行卡信息，仅适用于虎牙主播用户</p>
                        <a href="https://aq.yy.com/index.do?cbk=/realname/index.do?startEnhanced=1" target="_blank" class="go_real_auth">开始高级实名认证</a>
                    </li>
                </ul>
                                <div class="h5_head">
                  <span>完善主播资料</span>
                </div>
                                 <!-- <p class="real_auth_tips">（主播头像可到主播设置中修改，其他资料一经提交不得修改，请谨慎填写）</p> -->
                 <table cellpadding="0" cellspacing="0" border="0" class="info_set">
                    <tr>
                        <td class="td_1">主播昵称：</td>
                        <td class="td_2">
                            <div>
                                <input type="text" class="phone_num" id="anchor_nick" placeholder="控制在6个汉字以内最佳" />
                                <!-- <span>（限10个汉字或20个字符以内）</span> -->
                                <span id="checkNickWord" style="display:none;">
                                    <i style="background-image:url(../main/statics/img/icon_notive.png);display: inline-block;width: 16px;height: 16px;vertical-align: middle;margin-top: -3px;"></i>
                                    <span style="color:#FF6D0D;">你的昵称过长或含有非法字符</span>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1"></td>
                        <td class="td_2">
                            <div style="color:red;">（主播昵称提交后将无法修改，请谨慎填写）</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1">直播品类：</td>
                        <td class="td_2">
                            <select class="live_type" id="liveType">
                                <option value="1">网游竞技</option>
                                <option value="2">单机热游</option>
                                <option value="3">娱乐综艺</option>
                                <option value="4">手游休闲</option>
                            </select>
                            <span>（根据兴趣选择，仅作运营人员参考，不影响实际开播权限）</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1" style="vertical-align: top;padding-top: 34px;">头像：</td>
                        <td class="td_2 td_img">
                            <!-- 上传头像 s -->
                            <div class="data-form">
                                <div class="upload-file">
                                    <div class="flash-upload-img">
                                            <input type="file" class="file" name="avatar" id="avatar_upload_file" ><div style="text-align: left;position:static;color:red;"></div>
                                            <!-- <br /> -->
                                            <!-- <img id="user_old_avatar" class="face" src="http://huyaimg.msstatic.com/avatar/1062/06/3db86c2307602bbaab2f49bb4b819e_180_135.jpg" onerror="this.onerror='';this.src='http://huyaimg.msstatic.com/cdnimage/default/big_default_avatar.jpg'" > -->
                                            <div  id="avatarpreviewdiv" style="line-height: 0px;width:140px;height:140px;overflow:hidden; float:right;display:none;clear:none">
                                                <img  style="float:left;" id="avatarpreview2"  />
                                            </div>
                                            <span style="clear:none;text-align: top;">
                                                <button id="avatarSureButton"  onclick="profile_util.saveJcropImg('avatar');return false;"  style="float:right;display: none;border: 0 none;height: 31px; overflow: hidden;background:url(http://i.huya.com/base/images/base-sprite.png)  no-repeat -300px -160px;vertical-align:-7px;width:70px;position:static;margin:150px -70px 0 0; ">确定</button><button id="avatarFailButton"  onclick="profile_util.cancelJcropImg('avatar');return false;"  style="float:right;display: none;border: 0 none;height: 31px; overflow: hidden;background:url(http://i.huya.com/base/images/base-sprite.png)  no-repeat -300px -199px;vertical-align:-7px;width:70px;position:static;margin:150px -141px 0 100px;">取消</button>
                                            </span>
                                            <div id="avatar_preview" style="width:350px;clear:none;text-align: center;line-height: 0px;"></div>

                                            <input type="hidden" id="x" name="x" value="0" />
                                            <input type="hidden" id="y" name="y" value="0"/>
                                            <input type="hidden" id="w" name="w" value="140"/>
                                            <input type="hidden" id="h" name="h" value="140"/>
                                            <input type="hidden" name="xywh" value="" id="xywh" allownull="false" />
                                            <input type="hidden" name="avatar_id" id="avatar_id" value="" allownull="false"/>
                                    </div>
                                </div>
                            </div>
                            <!-- 上传头像 e -->
                            <div class="img_wrap" id="imgWrap">
                                <img src="http://huyaimg.msstatic.com/avatar/1062/06/3db86c2307602bbaab2f49bb4b819e_180_135.jpg" onerror="this.onerror='';this.src='http://huyaimg.msstatic.com/cdnimage/default/big_default_avatar.jpg'" alt="user"/>
                            </div>
                            <!-- <a href="javascript:void(0);" class="upload_btn" title="上传图片" id="avatar_upload_file">上传图片</a> -->
                            <span class="upload_tips">支持.jpg .jpeg .bmp .gif格式照片，大小不超过2M。（请使用ie9或更高级版本浏览器上传）</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_1">&nbsp;</td>
                        <td class="td_2">
                            <a href="javascript:void(0);" title="提交" class="sub_info" id="subInfo">提交</a>
                        </td>
                    </tr>
                 </table>
                 


                <p class="ques_head">常见问题解决<span><img src="../main/statics/img/ques_icon.png" /></span></p>
                <ul class="ques_wrap">
                    <li>
                        <p class="p_1">1、什么是虎牙认证？</p>
                        <p class="p_2">为适应现阶段业务发展需要，虎牙直播已推出新版虎牙主播认证系统。必须完成高级实名认证，
并且完善主播资料后才算完成虎牙认证。通过虎牙认证的主播将获得更多曝光、礼物分成、签约公会等一系列特权。</p>
                    </li>
                    <li>
                        <p class="p_1">2、认证时填写的直播品类提交后，就只能直播该品类吗？</p>
                        <p class="p_2">不是，认证填写的直播品类只是方便虎牙运营团队了解主播直播情况，不影响实际直播品类，建议填写想要直播的品类即可。
                        </p>
                    </li>
                    <li>
                        <p class="p_1">3、虎牙认证的银行卡跟佣金提现的银行卡有冲突吗？</p>
                        <p class="p_2">不冲突，虎牙认证验证的银行卡信息只是为了核实本人信息，与佣金提现的银行卡无关。</p>
                    </li>
                    <li>
                        <p class="p_1">4、当udb.yy.com显示高级实名认证已经通过而虎牙认证页面显示高级实名认证未通过时，请检查是否同一个yy号登录。</p>
                        <p class="p_2">关于新版认证的任何问题可联系：YY 80176 80321</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
<script type="text/javascript">
$(function(){
    $("#avatar_upload_file").uploadify({
        'buttonText' : '上传图片',
        'fileSizeLimit' : '1024KB',
        'width'    : 70,
        'height' :30,
        'fileObjName' : 'avatar',
        'fileTypeDesc' : 'Image Files',
        'fileTypeExts' : '*.gif; *.jpg; *.png;*.jpeg', 
        'swf'           : 'base/uploadify/uploadify.swf',
        'uploader'      : 'index.php?m=Captcha&do=saveImg',
        'onUploadError' : function(file, errorCode, errorMsg, errorString) {
            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
        },
        'onUploadStart' : function(file) {
            window.console && console.log("上传开始");
            profile_util.cancelJcropImg('avatar');
        },
        'onUploadSuccess' : function(file, data, response) {
            window.console && console.log("上传成功");
            if (response) {
               // 隐藏原图片和提示
               $('#imgWrap').hide();


                $("#avatar_upload_file-queue").hide();
                $("#avatar_preview img").remove();
        
                var obj = $.parseJSON(data)
                var imgUrl = obj.img;
                var imgKey = obj.file;
                profile_util.previewImg(imgUrl, 500, 'avatar', imgKey,'');
                $("#avatarpreviewdiv").show().css('float','right');
                $("#avatarSureButton").show();
                $("#avatarFailButton").show();
                $("#avatarpreview2").attr("src",imgUrl).css('max-width','none'); 
                profile_util.JcropAvatar();
            }
        } 
    });

    $('#avatarSureButton').on('click',function(){
        // $('#imgWrap').hide();
    });

    $('#subInfo').on('click',function(){
        var liveType = $('#liveType').val(),
            mobile = $.trim($('#phoneNum').val()),
            avatar_id = $('#avatar_id').val(),
            xywh = $('#xywh').val(),
            anchor_nick = $('#anchor_nick').val();
        //主播昵称验证
        var tmpStr = anchor_nick.replace(/[\u4e00-\u9fa5]/gi,"aa"),//使用英文字符替换中文
            tmpStrLen = tmpStr.length;
        if(tmpStrLen > 20){//验证长度
            //alert("您的昵称过长");
            $("#checkNickWord").show();
            return;
        }else{
            $("#checkNickWord").hide();
        }
        var testNick = /^(?!\s)(?!.*?\s$)[a-zA-Z0-9\u4e00-\u9fa5\-\、]+$/;
        if(!testNick.test(anchor_nick)){
            //alert("昵称含有非法字符");
            $("#checkNickWord").show();
            return;
        }else{
            $("#checkNickWord").hide();
        }
        

        if(!avatar_id){
            alert("请上传头像！");
            return;
        }

        if(!xywh){
            alert("上传头像后，请点击确定按钮！");
            return;
        }

        $.post( indexUrl + "index.php?m=ProfileAuth&do=saveInfo",{
            liveType:liveType,
            avatar_id:avatar_id,
            xywh:xywh,
            nick:anchor_nick
        },function(res){
            window.console && console.log("上传头像返回：");
            var res = $.parseJSON(res);

            if(res.status === 200){
                alert('已提交成功！');
                location.reload();
            }else{
                alert('提交失败：' + res.message);
            }
        });

    });
    //不支持placeholder
    if(!placeholderSupport()){
        $("#anchor_nick").after("<span>（控制在6个汉字以内最佳）</span>");
    }
    function placeholderSupport() {
        return 'placeholder' in document.createElement('input');
    }
    //IE兼容placeholder
    /*if($.browser.msie) { 
        $(":input[placeholder]").each(function(){
        $(this).placeholder();
        });
    }*/

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
</html>
