<template>
	<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">礼物管理</a>
							</li>
							<li class="active">礼物添加</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								礼物添加
	
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物名称 </label>

										<div class="col-sm-9">
											<input id="form-field-1" name="gift_name" placeholder="礼物名称" class="col-xs-10 col-sm-5" type="text">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物价格 </label>

										<div class="col-sm-9">
											<input id="form-field-1" name="price"  placeholder="礼物价格" class="col-xs-10 col-sm-5" type="text">
										</div>
									</div>
									<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 上传图片 </label>

									<div class="col-sm-9">			
    									<input type="file" value=""  id="file"  @change='onUpload'> 
									</div>
									</div> -->
									<div class="space-4"></div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9" id="example">
											<button class="btn btn-info" type="button" v-on:click="greet">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>
								<div class="space-24"></div>
								</form>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  data () {
    return {
      result: [],
    }    
  },
  // 在 `methods` 对象中定义方法
  methods: {
    greet: function (event) {
		var gift_name = $('input[name="gift_name"]').val()
		var price = $('input[name="price"]').val()
		this.$http.jsonp('http://admin.zb.com/index.php?r=gift/adds&price='+price+'&gift_name='+gift_name, {}, {
	        emulateJSON: true
	    }).then(function(response) { 
	    	//alert(response.body.msg)
	 	    this.$router.push({
			    path: '/gift/list'
			})
	    }, function(response) {
	        console.log(response)
	        this.result = response.body
	    });
    }
  }
}
</script>

<style>
	
</style>
