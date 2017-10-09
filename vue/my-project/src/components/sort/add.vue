<template>
	<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">分类管理</a>
							</li>
							<li class="active">分类添加</li>
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
							<h1>分类添加</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 分类名称 </label>

										<div class="col-sm-9">
											<input id="form-field-1" name="type_name" placeholder="分类名称" class="col-xs-10 col-sm-5" type="text">
										</div>
									</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 所属分类 </label>

		<div class="col-sm-9">
			<label class="col-sm-1"> <select name="parent_id" @change="change_value(result.type_id)" >
				<option value='0'>顶级分类</option>
				<option v-for="value in result" v-bind:value="value.type_id">{{value.type_name}}</option>
				
			</select> </label>
			
		</div>
	</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 是否启用 </label>

									<div class="col-sm-1">			
    									<input type="radio" value="1" name="type_status">是
    									<input type="radio" value="0" name="type_status">否
									</div>
									</div>

									

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

 // 读取所有分类
  mounted: function () {
    this.$http.jsonp(url+'?r=sort/index', {}, {
          emulateJSON: true
      }).then(function(response) {

        this.result = response.body.data 
      }, function(response) {
        
        
      });
    },

  // 在 `methods` 对象中定义方法
  methods: {

  	// 分类添加
    greet: function () {

		var type_name = $('input[name="type_name"]').val() // 分类名称
		var parent_id = $('select[name="parent_id"]').val() // 所属分类id
		var type_status = $('input[name="type_status"]').is('checked').val() // 是否启用

		this.$http.jsonp(url+'?r=sort/add&type_name='+type_name+'&parent_id='+parent_id+'&type_status='+type_status, {}, {emulateJSON: true}).then(function(res) { 
	    	
	 	   alert(res.body.msg)

	    }, function(res) {
	      alert('错误...')
	        
	    });
    }
  }
}
</script>

<style>
	
</style>
