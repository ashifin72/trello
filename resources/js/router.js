import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './pages/Home'
import Desks from './components/desks/Desks'
import ShowDesk from "./components/desks/ShowDesk";
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/desks',
    name: 'desks',
    component: () => import('./components/desks/Desks')
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('./pages/About.vue')
  },
  {
    path: '/desk/:desk_id',
    name: 'showdesk',
    component: ShowDesk,
    props: true
  }

]

const router = new VueRouter({
  mode: 'history',
  // base: process.env.BASE_URL,
  routes
})

export default router
