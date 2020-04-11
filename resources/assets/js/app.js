import FishUI from 'fish-ui'
require('./bootstrap');



window.Vue = require('vue');


Vue.use(FishUI)

Vue.config.productionTip = false
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('test', require('./components/Test.vue').default);
Vue.component('app', require('./components/App.vue').default);

const app = new Vue({
  el: '#app'
});
