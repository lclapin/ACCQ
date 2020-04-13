import FishUI from 'fish-ui'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import { sync } from 'vuex-router-sync'
import VueRouter from 'vue-router'
import store from './store'
import Test from './components/Test.vue';
import Home from './components/Home.vue';
require('./bootstrap');



window.Vue = require('vue');

Vue.use(FishUI)
Vue.use(VueRouter)

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


Vue.config.productionTip = false
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
      { path: '/', name: 'home', component: Home },
      { path: '/pages/manifeste', name: 'manifeste', component: Test },
      { path: '/pages/projet_de_loi', component: Test },
      { path: '/pages/discutoire', component: Test },
      { path: '/pages/medias', component: Test },
      { path: '/pages/realisations', component: Test },
      { path: '/pages/nous_joindre', component: Test },
      { path: '/pages/a_propos', component: Test },
      { path: '/pages/obnl', component: Test },
      { path: '/pages/statuts', component: Test },
      { path: '/pages/constat', component: Test },
      { path: '/pages/mission', component: Test },
      { path: '/pages/bibliotheque', component: Test },
      { path: '/pages/mediatheque', component: Test },
      { path: '/pages/promouvoir', component: Test },
      { path: '/pages/sondage', component: Test ,  meta: { auth: false, title: 'home',index:"2" }},
      { path: '/pages/constituons', component: Test },
      { path: '/pages/ateliers', component: Test },
      { path: '/pages/rencontres', component: Test },
      { path: '/pages/devenir_membre', component: Test },
      { path: '/pages/listeOR', component: Test },
      {
        path: '*',
        name: 'default',
        meta: { auth: false, title: 'home',index:"0" },
        component: Home,
      }],
      linkActiveClass: "active"
  })



Vue.component('test', require('./components/Test.vue').default);
Vue.component('app', require('./components/App.vue').default);

const unsync = sync(store, router) // done. Returns an unsync callback fn

const app = new Vue({ router,store }).$mount('#app')

