<template>

<div>
<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
				

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">用户管理</a>
							</li>

							<li>
								<a href="#">用户展示</a>
							</li>
							<!-- <li class="active">Simple &amp; Dynamic</li> -->
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input v-model="search_key" type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
								<button class="btn " v-on:click="search()">搜索</button>
							</form>

						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
					

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														
														<th v-for="site in sites">
      													{{ site.name }}
    													</th>


														

														
													</tr>
												</thead>

	<tbody>

		<tr v-for="respon in result">

			<td class="center">
				<label>
					<input type="checkbox" class="ace" />
					<span class="lbl"></span>
				</label>
			</td>

			<td>
				<a href="#">{{respon.user_id}}</a>
			</td>
			<td>{{respon.nickname}}</td>
			<td class="hidden-480">
				<span v-if="(respon.sex == 2)">女</span>
				<span v-if="(respon.sex == 1)">男</span>
			</td>

			<td>
				<span class="no" v-if="(respon.is_anchor == 0)">不是</span>
				<span class="yes" v-if="(respon.is_anchor == 1)">是</span>
				<span v-if="(respon.is_anchor == 2)" ><font color="red">待审核</font></span>
			</td>

			


			<td>
				<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">

					<button v-if="(respon.is_anchor == 2)" v-on:click='success(respon.user_id)' class="btn btn-xs btn-success">
						<i class="icon-ok bigger-120"></i>
					</button>


					<button class="btn btn-xs btn-info" v-on:click="upd(respon)">
						<i class="icon-edit bigger-120" ></i>
					</button>

					<!-- <button class="btn btn-xs btn-danger" v-on:click="del(respon)">
						<i class="icon-trash bigger-120"></i>
					</button> -->

					<button class="btn btn-xs btn-warning">
						<i class="icon-flag bigger-120"></i>
					</button>
				</div>

				<div class="visible-xs visible-sm hidden-md hidden-lg">
					<div class="inline position-relative">
						<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog icon-only bigger-110"></i>
						</button>

						<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
							<li>
								<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
									<span class="blue">
										<i class="icon-zoom-in bigger-120"></i>
									</span>
								</a>
							</li>

							<li>
								<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
									<span class="green">
										<i class="icon-edit bigger-120"></i>
									</span>
								</a>
							</li>

							<li>
								<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
									<span class="red">
										<i class="icon-trash bigger-120"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</td>
		</tr>

		
		

		

	</tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

						

						

							
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				<button v-on:click="cpage('frist')">首页</button>
				 <button v-on:click="cpage('prev')">上一页</button>
        		 
				 <button v-on:click="cpage('next')">下一页</button>
				 <button v-on:click="cpage('last')">尾页</button>
				 当前页面是{{ page }} 页

</div>
</template>


<script>
export default {

  	data () {
	    return {
	      search_key :'',
	      result: ['id','ff'],
	      page: 1,
	      sites: [
	      { name: 'id' },
	      { name: '昵称' },
	      { name: '性別' },
	      { name: '是否主播' },
	      { name: '操作' },],
	      status : false,
	    }    
  },
  

	methods: {
		// 审核通过按钮
		success : function(user_id) {

			this.$http.jsonp(url+'?r=user/success&user_id='+user_id, {}, {
		        emulateJSON: true
		    }).then(function(res) {

		    	alert(res.body.msg)

		    	if(res.body.status == 1){

		    	}
		 	    

		    }, function(res) {
		    	
		        alert('错误...');
		        
		    });
		},


		// 搜索
		search : function() {
		var search_key = this.search_key;
		this.$http.jsonp(url+'?r=user/lists&p=1&search_key='+search_key, {}, {
	        emulateJSON: true
	    }).then(function(response) {
	    	
	    	
	 	    this.result = response.body.data 
	    }, function(response) {
	    	
	        
	        // this.result = response.body
	    });
	},

	upd: function (message) {
  		
  		window.location.href='/#/admin/useredit/'+message.user_id
  	},

  	// 分页
  	cpage:function(message){
  		if (message==='prev') {
  			this.page-=1
			this.page>0 ? '' :this.page=1;
  		}else if(message==='next'){
  			this.page+=1
  		}else if(message==='last'){

  		}else if(message==='frist'){
  			this.page=1
  		}
  		var search_key = this.search_key;

  		this.$http.jsonp(url+'?r=user/lists&p='+this.page+"&search_key="+search_key, {}, {
	        emulateJSON: true
	    }).then(function(response) {
	    	
	    	
	 	    this.result = response.body.data 
	    }, function(response) {
	    	
	        
	        
	    });



  	},
    del: function (message) {
    		if (!confirm('你确定要删除吗？')) {return};
       
      		this.$http.jsonp(url+'?r=type/del&id='+message.id, {}, {
	        emulateJSON: true
	    }).then(function(response) {
	    	alert('删除成功')	
	    	console.log(response)
	 	    this.result = response.body 
	    }, function(response) {
	    	
	        console.log(response)
	        this.result = response.body
	    });
    },
   	},
  	


    mounted: function () {
		this.$http.jsonp(url+'?r=user/lists', {}, {
	        emulateJSON: true
	    }).then(function(response) {
	    	
	    	
	 	    this.result = response.body.data 


	    }, function(response) {
	    	
	      
	    });
    },

 
    	
    
 
}
</script>

<style type="text/css">
	#navbar,#sidebar{
		display:block;
	}
</style>