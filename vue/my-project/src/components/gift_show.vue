<!-- 用户管理中心 -->
<template>
<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
      <li>
        <i class="icon-home home-icon"></i>
        <a href="#">Home</a>
      </li>
      <li class="active">礼物管理</li>
    </ul>
    <div class="nav-search" id="nav-search">
      <form class="form-search">
        <span class="input-icon">
          <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
          <i class="icon-search nav-search-icon"></i>
        </span>
      </form>
    </div><!-- #nav-search -->
  </div>

<div class="page-content">
<div class="page-header">
  <h1>
    礼物管理
    <small>
      <i class="icon-double-angle-right"></i>
      礼物列表  
    </small>
  </h1>
</div><!-- /.page-header -->
<!-- 表单title -->
<table class="table table-striped table-bordered table-hover" id="sample-table-2">
  <thead>
    <tr>
      <th class="center">
        <label>
          <input class="ace" type="checkbox">
          <span class="lbl"></span>
        </label>
      </th>
      <th>礼物ID</th>
      <th>礼物名</th>
      <th class="hidden-480">面值</th>
      <th>
        <i class="icon-time bigger-110 hidden-480"></i>
        添加时间
      </th>
      <th>状态</th>
      
      <th>操作</th>
    </tr>
  </thead>
  <!-- 表单内容 -->
  <tbody>

    <tr v-for="value in data">
      <td class="center">
        <label>
          <input class="ace" type="checkbox">
          <span class="lbl"></span>
        </label>
      </td>
      <td>{{value.gift_id}}</td>
      <td>{{value.gift_name}}</td>
      <td>{{value.price}}</td>
      <td>{{value.gift_ctime}}</td>
      <td>{{value.gift_static}}</td>
      <!-- 操作 -->
      <td>
        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
          <a class="blue" href="">
            <i class="icon-zoom-in bigger-130"></i>
          </a>

          <a class="green" href="">
            <i class="icon-pencil bigger-130"></i>
          </a>

          <a class="red" href="">
            <i class="icon-trash bigger-130"></i>
          </a>
        </div>
      </td>
    </tr>


  </tbody>
  </table>
  </div><!-- /.page-content -->
</div><!-- /.main-content -->


</template> 
<!-- <script type="text/javascript" src="./static/js/jquery-2.0.3.min.js"></script> -->
<script>


// that.$http.get("1.txt").then(function(result){

// console.log(result)

// this.msg=result.data;

// })
export default {
  name: '',
  data () {
    return {
      
    }    
  },
  mounted:function(){
     // alert(3)
    //获取用户的请求
    this.$http.jsonp("http://admin.zb.com/index.php?r=gift/show",{},{emulateJSON: true}).then(function (res){ 

      //   // if(res.body.status == 1000){
   this.data = res.body.data
     //      // console.log(res)
     // }
   }, function (a) { 
    alert('请求失败....');
    });
  },
  methods:{
   }  
  }
 // }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
