
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router';
import VeeValidate from 'vee-validate';
import VueToasted from 'vue-toasted';

Vue.use(require('vue-moment'));

Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.use(VueToasted);

import Welcome from './components/Welcome.vue';

const router = new VueRouter({
    routes: [
        {path: '/', component: Welcome},
        // {path: '/create_project', component: CreateProject, meta:{requiresAuth: true}},
    ],
    mode: 'history'
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('latest-projects', require('./components/LatestProjects.vue'));
Vue.component('latest-project', require('./components/LatestProject.vue'));
Vue.component('popular-projects', require('./components/PopularProjects.vue'));
Vue.component('popular-project', require('./components/PopularProject.vue'));
Vue.component('happy-endings', require('./components/HappyEndings.vue'));
Vue.component('happy-ending', require('./components/HappyEnding.vue'));

const app = new Vue({
    el: '#app',
    router
});
