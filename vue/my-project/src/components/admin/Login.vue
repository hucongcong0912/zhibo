<!-- 登录页 -->
<template>
<div>
	<div class="login-container">
		<div class="center">
			<h1>
				<i class="icon-leaf green"></i>
				<span class="red">后台</span>
				<span class="white">登录</span>
			</h1>
			<h4 class="blue">&copy; Company Name</h4>
		</div>

		<div class="space-6"></div>

		<div class="position-relative">
			<div id="login-box" class="login-box visible widget-box no-border">
				<div class="widget-body">
					<div class="widget-main">
				<h4 class="header blue lighter bigger">
					<!-- <i class="icon-coffee green"></i> -->
					<!-- Please Enter Your Information -->
				</h4>

				<div class="space-6"></div>

				<form>
					<fieldset>
						<label class="block clearfix">
							<span class="block input-icon input-icon-right">
								<input v-model="user_name" type="text" class="form-control" placeholder="Username" />
								<i class="icon-user"></i>
							</span>
						</label>

						<label class="block clearfix">
							<span class="block input-icon input-icon-right">
								<input v-model="pwd" type="password" class="form-control" placeholder="Password" />
								<i class="icon-lock"></i>
							</span>
						</label>

						<div class="space"></div>

						<div class="clearfix">
							<!-- label class="inline">
								<input type="checkbox" class="ace" />
								<span class="lbl"> 记住我哦</span>
							</label> -->

							<button v-on:click="login()" type="button" class="width-35 pull-right login btn btn-sm btn-primary">
								<i class="icon-key"></i>
								登录
							</button>
						</div>

						<div class="space-4"></div>
					</fieldset>
				</form>

				<div class="social-or-login center">
					<span class="bigger-110"></span>
				</div>

				<!-- <div class="social-login center">
					<a class="btn btn-primary">
						<i class="icon-facebook"></i>
					</a>

					<a class="btn btn-info">
						<i class="icon-twitter"></i>
					</a>

					<a class="btn btn-danger">
						<i class="icon-google-plus"></i>
					</a>
				</div> -->
			</div><!-- /widget-main -->
<!-- 
			<div class="toolbar clearfix">
				<div>
					<a href="" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
						<i class="icon-arrow-left"></i>
						忘记密码
					</a>
				</div>

				<div>
					<a href="#/register" onclick="show_box('signup-box'); return false;" class="user-signup-link">
						我要注册
						<i class="icon-arrow-right"></i>
					</a>
				</div>
			</div> -->
		</div><!-- /widget-body -->
	</div><!-- /login-box -->
	</div><!-- /position-relative -->
	</div>
</div>
</template>

<script>
	export default {
		name: 'ilogin',
		data () {
			return {
				user_name : '',
				pwd : '',
			}    
		},
		methods:{

			 // 点击登录
			 login : function(){
			 	var name = this.user_name;
			 	var pwd = this.pwd;

			this.$http.jsonp(url+'?r=login/index&name='+name+'&pwd='+pwd, {}, {emulateJSON: true }).then(function(res) {
					alert(res.body.msg);
					if(res.body.status == 1000){

						location.href='/#/user/list';
						

					}
				  

			    }, function(res) {
			    	
			    });
			}
		}
	}

	



</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style type="text/css">
	#navbar,#sidebar{
		display:none;
	}
</style>