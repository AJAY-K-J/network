

require('./bootstrap');

window.Vue = require('vue').default;
window.bus = new Vue();
export const bus = new Vue();



import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


const routes = [

  
    { path: '/courses-table', component: require('./components/admins/coursesTable.vue').default },

    { path: '/categories-page', component: require('./components/admins/categories.vue').default },

    { path: '/batches-page', component: require('./components/admins/batches.vue').default },

    { path: '/enquiries-page', component: require('./components/admins/enquiry.vue').default },

 
 
  ]





  const router = new VueRouter({
    mode: 'history',
    routes,
    // short for `routes: routes`
  })




Vue.component('navigation-page', require('./components/admins/navigation.vue').default);
Vue.component('courses-page', require('./components/admins/courses.vue').default);


const app = new Vue({
    el: '#app',
    router
});
