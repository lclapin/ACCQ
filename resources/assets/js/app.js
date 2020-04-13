import FishUI from 'fish-ui'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import { sync } from 'vuex-router-sync'
import VueRouter from 'vue-router'
import store from './store'
import Test from './components/Test.vue';
import Manifeste from './components/manifeste.vue';
import Home from './components/Home.vue';
import Obnl from './components/obnl';
import Statuts from './components/statuts_reglements';
import Projet from './components/projet';
import Constat from './components/constat';
import Mission from './components/mission';
import Bibliotheque from './components/bibliotheque';
import Mediatheque from './components/mediatheque';
import Promouvoir from './components/promouvoir';
import Sondage from './components/sondage';
import Discutoire from './components/discutoire';
import Media from './components/media';
import Realisations from './components/realisations';
import Nous_joindre from './components/nous_joindre';
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
      { path: '/pages/manifeste', name: 'manifeste', component: Manifeste },
      { path: '/pages/projet_de_loi', component: Projet },
      { path: '/pages/discutoire', component: Discutoire },
      { path: '/pages/medias', component: Media },
      { path: '/pages/realisations', component: Realisations },
      { path: '/pages/nous_joindre', component: Nous_joindre },
      { path: '/pages/a_propos', component: Test },
      { path: '/pages/obnl', component: Obnl },
      { path: '/pages/statuts', component: Statuts },
      { path: '/pages/constat', component: Constat },
      { path: '/pages/mission', component: Mission },
      { path: '/pages/bibliotheque', component: Bibliotheque },
      { path: '/pages/mediatheque', component: Mediatheque },
      { path: '/pages/promouvoir', component: Promouvoir },
      { path: '/pages/sondage', component: Sondage ,  meta: { auth: false, title: 'home',index:"2" }},
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

