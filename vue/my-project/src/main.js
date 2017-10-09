// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
//import router from './router'
import VueRouter from 'vue-router';
import Resource from 'vue-resource';
Vue.use(VueRouter);
Vue.use(Resource);



import Arttypography from './components/admin/typography';
import Artelements from './components/admin/elements';
import Buttons from './components/admin/Buttons';
import treeview from './components/admin/treeview';
import Jquery from './components/admin/Jquery';
import nestablelist from './components/admin/nestablelist';

import tables from './components/admin/tables';
import Login from './components/admin/Login';

import formelements from './components/admin/formelements';
import type from './components/admin/type';
import Add from './components/admin/Add';
import useredit from './components/admin/useredit';


import user_list from './components/user/list'; // 用户列表展示
<<<<<<< HEAD
import gift_list from './components/gift/list'; // 礼物列表展示
import gift_add from './components/gift/add'; // 礼物添加列表
=======
import user_show from './components/user/show'; // 用户详情


>>>>>>> 2aab17c526dc2d4982580c8538efc9b59df963f1
Vue.config.productionTip = false

/* eslint-disable no-new */

var router = new VueRouter({
	routes: [
<<<<<<< HEAD
	   
	  {
	  	path: '/user/list', // 用户列表展示
	  	component:user_list,
	  },
      {
	  	path: '/gift/list', // 礼物列表展示
	  	component:gift_list,
	  },
	   {
	  	path: '/gift/add', // 礼物添加列表
	  	component:gift_add,
	  },
=======
	{
	  	path: '/', // 后台登录
	  	component:Login,
	  },

	  
	   {
	  	path: '/user/list', // 用户列表展示
	  	component:user_list,
	  },
	   
	  {
	  	path: '/user/show/:id', // 用户详情信息
	  	component:user_show,
	  },


>>>>>>> 2aab17c526dc2d4982580c8538efc9b59df963f1
	  {
	  	path: '/admin/useredit/:id',
	  	component:useredit,
	  },
	  {
	  	path: '/admin/add',
	  	component:Add,
	  },
	   {
	  	path: '/admin/type',
	  	component:type,
	  },
	  {
	  	path: '/admin/Login',
	  	component:Login,
	  },
	  {
	    path: '/admin/tables',
	    component: tables,
	  },
	  {
	    path: '/admin/Jqueryui',
	    component: Jquery,
	  },
	   {
	    path: '/admin/Jqueryui',
	    component: Jquery,
	  },
	  {
	    path: '/admin/nestablelist',
	    component: nestablelist,
	  },
	  {
	    path: '/admin/typography',
	    component: Arttypography,
	  },
	   {
	    path: '/admin/treeview',
	    component: treeview,
	  },
	  {
	    path: '/admin/Buttons',
	    component: Buttons,
	  },
	  {
	    path: '/admin/elements',
	    component: Artelements,
	  },
	   
	  
	]
})

new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
