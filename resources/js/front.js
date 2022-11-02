window.axios = require('axios');

window.Vue = require('vue');
// import Vue from 'vue';
import router from './router';
// import VueRouter from 'vue-router';

// import Home from './pages/Home.vue'

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import App from './views/App.vue';
// Vue.use(VueRouter);


// const router = new VueRouter({
//     mode: 'history',
//     // routes
//     routes: routes,
// })

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router: router
});
