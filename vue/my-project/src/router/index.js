import Vue from 'vue'
import Router from 'vue-router'
import Main from  '@/components/main/Main'
import Typography from  '@/components/main/Typography'
import Elements from  '@/components/main/Elements'
import Login from  '@/components/main/Login'
import Register from  '@/components/main/Register'
import Actors_add from  '@/components/actors/actors_add'


import user_list from  '@/components/user/list' // 用户列表
import user_show from  '@/components/user/show' // 用户详情信息
import gift_list from  '@/components/gift/list' // 礼物列表




Vue.use(Router)

export default new Router({
  routes: [
   
   	{
      path: '/',
      name: 'Main',
      component: Main
    },
    {
      path: '/main',
      name: 'Main',
      component: Main
    },
    {
      path: '/typography',
      name: 'Typography',
      component: Typography
    },
    {
      path: '/elements',
      name: 'Elements',
      component: Elements
    },
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/register',
      name: 'Register',
      component: Register
    },
    {
      path: '/user/list', // 用户申请列表
      component: user_list
    },
    {
      path: '/user/show', // 用户详情信息
      component: user_show
    },
    {
      path: '/gift/list', // 礼物列表
      component: gift_list
    },

  ]
})
