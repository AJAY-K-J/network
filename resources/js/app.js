

require('./bootstrap');

window.Vue = require('vue').default;
window.bus = new Vue();
export const bus = new Vue();



import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


const routes = [


    { path: '/admin/dashboard', component: require('./components/admins/dashboard.vue').default },
    { path: '/courses-table', component: require('./components/admins/coursesTable.vue').default },
    { path: '/categories-table', component: require('./components/admins/categoriesTable.vue').default },
    { path: '/batches-table', component: require('./components/admins/batchesTable.vue').default },
 
  
  ]





  const router = new VueRouter({
    mode: 'history',
    routes,
    // short for `routes: routes`
  })


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('navigation-page', require('./components/admins/navigation.vue').default);
Vue.component('courses-page', require('./components/admins/courses.vue').default);

Vue.component('categories-page', require('./components/admins/categories.vue').default );
Vue.component('batches-page', require('./components/admins/batches.vue').default);





Vue.component('user-index-courses', require('./components/users/indexCoursePage.vue').default);
Vue.component('user-index-categories', require('./components/users/indexCategoryPage.vue').default);

Vue.component('user-main-courses', require('./components/users/mainCoursePage.vue').default);
Vue.component('user-single-courses', require('./components/users/singleCoursePage.vue').default);

Vue.component('enquiry-form', require('./components/users/enquiry.vue').default);







const app = new Vue({
    el: '#app',
    router
});
