<template>
  
  <div class="sidebar" id="sidebar">
          <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
              <button class="btn btn-success">
                <i class="icon-signal"></i>
              </button>

              <button class="btn btn-info">
                <i class="icon-pencil"></i>
              </button>

              <button class="btn btn-warning">
                <i class="icon-group"></i>
              </button>

              <button class="btn btn-danger">
                <i class="icon-cogs"></i>
              </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
              <span class="btn btn-success"></span>

              <span class="btn btn-info"></span>

              <span class="btn btn-warning"></span>

              <span class="btn btn-danger"></span>
            </div>
          </div><!-- #sidebar-shortcuts -->

          <ul class="nav nav-list">
            <li class="active">
              <a href="javascript:void(0);">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 控制台 </span>
              </a>
            </li>
<!-- 
            <li>
              <a href="#/admin/typography">
                <i class="icon-text-width"></i>
                <span class="menu-text"> 文字排版 </span>
              </a>
            </li>
 -->
           <!--  <li>
             <a href="#" class="dropdown-toggle">
               <i class="icon-desktop"></i>
               <span class="menu-text"> UI 组件 </span>
           
               <b class="arrow icon-angle-down"></b>
             </a>
           
             <ul class="submenu">
               <li>
                 <a href="#/admin/elements">
                   <i class="icon-double-angle-right"></i>
                   组件
                 </a>
               </li>
           
               <li>
                 <a href="#/admin/buttons">
                   <i class="icon-double-angle-right"></i>
                   按钮 &amp; 图表
                 </a>
               </li>
           
               <li>
                 <a href="#/admin/treeview">
                   <i class="icon-double-angle-right"></i>
                   树菜单
                 </a>
               </li>
           
               <li>
                 <a href="#/admin/jqueryui">
                   <i class="icon-double-angle-right"></i>
                   jQuery UI
                 </a>
               </li>
           
               <li>
                 <a href="#/admin/nestablelist">
                   <i class="icon-double-angle-right"></i>
                   可拖拽列表
                 </a>
               </li>
           
               <li>
                 <a href="#" class="dropdown-toggle">
                   <i class="icon-double-angle-right"></i>
           
                   三级菜单
                   <b class="arrow icon-angle-down"></b>
                 </a>
           
                 <ul class="submenu">
                   <li>
                     <a href="#">
                       <i class="icon-leaf"></i>
                       第一级
                     </a>
                   </li>
           
                   <li>
                     <a href="#" class="dropdown-toggle">
                       <i class="icon-pencil"></i>
           
                       第四级
                       <b class="arrow icon-angle-down"></b>
                     </a>
           
                     <ul class="submenu">
                       <li>
                         <a href="#">
                           <i class="icon-plus"></i>
                           添加产品
                         </a>
                       </li>
           
                       <li>
                         <a href="#">
                           <i class="icon-eye-open"></i>
                           查看商品
                         </a>
                       </li>
                     </ul>
                   </li>
                 </ul>
               </li>
             </ul>
           </li> -->

            <li>

              <a href="javascript:void(0);" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span class="menu-text"> 用户管理 </span>

                <!-- <b class="arrow icon-angle-down"></b> -->
              </a>

              <ul class="submenu">
                <li>
                  <a href="/#/user/list">
                    <i class="icon-double-angle-right"></i>
                    用户展示
                  </a>
                </li>

                <li>
                  <a href="/#/admin/formelements">
                    <i class="icon-double-angle-right"></i>
                    用户注册
                  </a>
                </li>
              </ul>
            </li>
             <li>
              <a href="#" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span class="menu-text"> 礼品管理 </span>

                <!-- <b class="arrow icon-angle-down"></b> -->
              </a>

              <ul class="submenu">
                <li>
                  <a href="/#/gift/add">
                    <i class="icon-double-angle-right"></i>
                    礼物添加
                  </a>
                </li>

                <li>
                  <a href="/#/gift/list">
                    <i class="icon-double-angle-right"></i>
                    礼物展示
                  </a>
                </li>
              </ul>
            </li>

          <!--   <li>
            <a href="#" class="dropdown-toggle">
              <i class="icon-edit"></i>
              <span class="menu-text"> 表单 </span>
          
              <b class="arrow icon-angle-down"></b>
            </a>
          
            <ul class="submenu">
              <li>
                <a href="#/admin/formelements">
                  <i class="icon-double-angle-right"></i>
                  注册
                </a>
              </li>
          
              <li>
                <a href="form-wizard.html">
                  <i class="icon-double-angle-right"></i>
                  向导提示 &amp; 验证
                </a>
              </li>
          
              <li>
                <a href="wysiwyg.html">
                  <i class="icon-double-angle-right"></i>
                  编辑器
                </a>
              </li>
          
              <li>
                <a href="dropzone.html">
                  <i class="icon-double-angle-right"></i>
                  文件上传
                </a>
              </li>
            </ul>
          </li> -->

 

            


            <li>
              <a href="#" class="dropdown-toggle">
                <i class="icon-tag"></i>
                <span class="menu-text">分类管理</span>

                <!-- <b class="arrow icon-angle-down"></b> -->
              </a>

              <ul class="submenu">
                <li>
                  <a href="/#/sort/add">
                    <i class="icon-double-angle-right"></i>
                    分类添加
                  </a>
                </li>

                <li>
                  <a href="/#/sort/list">
                    <i class="icon-double-angle-right"></i>
                      分类展示
                  </a>
                </li>

               
              </ul>
            </li>

              <li>
              <a href="#" class="dropdown-toggle">
                <i class="icon-tag"></i>
                <span class="menu-text"> 礼物 </span>

                <!-- <b class="arrow icon-angle-down"></b> -->
              </a>

              <ul class="submenu">
                <li>
                  <a href="#/admin/add">
                    <i class="icon-double-angle-right"></i>
                    粉丝添加
                  </a>
                </li>

                <li>
                  <a href="#/admin/type">
                    <i class="icon-double-angle-right"></i>
                    粉丝统计
                  </a>
                </li>

                <li>
                  <a href="pricing.html">
                    <i class="icon-double-angle-right"></i>
                    售价单
                  </a>
                </li>

                <li>
                  <a href="invoice.html">
                    <i class="icon-double-angle-right"></i>
                    购物车
                  </a>
                </li>

                <li>
                  <a href="timeline.html">
                    <i class="icon-double-angle-right"></i>
                    时间轴
                  </a>
                </li>

                <li>
                  <a href="#/admin/Login">
                    <i class="icon-double-angle-right"></i>
                    登录 &amp; 注册
                  </a>
                </li>
              </ul>
            </li>

           <!--  <li>
             <a href="#" class="dropdown-toggle">
               <i class="icon-file-alt"></i>
           
               <span class="menu-text">
                 其他页面
                 <span class="badge badge-primary ">5</span>
               </span>
           
               <b class="arrow icon-angle-down"></b>
             </a>
           
             <ul class="submenu">
               <li>
                 <a href="faq.html">
                   <i class="icon-double-angle-right"></i>
                   帮助
                 </a>
               </li>
           
               <li>
                 <a href="error-404.html">
                   <i class="icon-double-angle-right"></i>
                   404错误页面
                 </a>
               </li>
           
               <li>
                 <a href="error-500.html">
                   <i class="icon-double-angle-right"></i>
                   500错误页面
                 </a>
               </li>
           
               <li>
                 <a href="grid.html">
                   <i class="icon-double-angle-right"></i>
                   网格
                 </a>
               </li>
           
               <li>
                 <a href="blank.html">
                   <i class="icon-double-angle-right"></i>
                   空白页面
                 </a>
               </li>
             </ul>
           </li> -->
          </ul><!-- /.nav-list -->

          <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
          </div>

  </div>

</template>
<script>
export default {
  data () {
    return {
      msg: '这是尾部'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/*h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}*/
</style>