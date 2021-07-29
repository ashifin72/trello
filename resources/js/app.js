require('./bootstrap');
window.Vue = require('vue').default;
import router from './router'
import store from './store'
import App from './components/App'
import Vuelidate from 'vuelidate'

Vue.use(Vuelidate)

const app = new Vue({
  router,
  store,
  el: '#app',
  components: {App},
})
