@extends('common.common')

@section('content')
@section('left')
@stop()
    {{-- 用户中心 --}}
    <div class="upload">
        <?php /*echo "<pre>"; var_dump($user); echo "</pre>";*/ ?>
            <!-- container -->
            <div class="container">
                <div class="upload-grids">
                    <div class="upload-right">
                        <div class="upload-file">
                            <!-- <div class="services-icon">
                                <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                            </div> -->
                            <center>
                                <?php 
                                 if ($user->img == '') {
                                     $img = "./images/check.jpg";
                                 }else{
                                     $img = $user->img;
                                 } 
                                ?>
                                <img src="<?= $img ?>" alt="头像">
                            </center>
                            <input type="file" value="Choose file..">
                        </div>
                        <div class="upload-info">
                            <h5><?= $user->nickname ?></h5>
                            <span>个性签名</span>
                            <p><?= $user->sign ?></p>
                        </div>
                    </div>
                    <div class="upload-right-bottom-grids">
                        <div class="upload-right-bottom-left">
                            <h4>基本信息</h4>
                            <?php
                             if ($user->sex==1) {$sex = '男';}else{$sex = '女';}
                             if ($user->is_anchor==1) {$is_anchor = '是';}else{$is_anchor = '否';}
                            ?>
                            <div class="upload-right-top-list">
                                <ul>
                                    <li><span>账号ID：</span><a href="#"><?= $user->user_id ?></a></li>
                                    <li><span>性别：</span><a href="#"><?= $sex ?></a></li>
                                    <li><span>生日：</span><a href="#"><?= $user->happy ?></a></li>
                                    <li><span>手机：</span><a href="#"><?= $user->tel ?></a></li>
                                    <li><span>邮箱：</span><a href="#"><?= $user->email ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="upload-right-bottom-left">
                            <h4>账号信息</h4>
                            <div class="upload-right-top-list">
                                <ul>
                                    <li><span>等级：</span><a href="#"><?= $user->grade ?></a></li>
                                    <li><span>经验：</span><a href="#"><?= $user->experience ?></a></li>
                                    <li><span>爵位：</span><a href="#"><?= $user->rank ?></a></li>
                                    <li><span>财产：</span><a href="#"><?= $user->prpent ?></a></li>
                                    <li><span>主播：</span><a href="#"><?= $is_anchor ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- //container -->
        </div>



@stop
