
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router';
// import VueMoment from 'vue-moment';
import VeeValidate from 'vee-validate';
import VueToasted from 'vue-toasted';
import Routes from './routes';
import './filters';
import { store } from './store';

// import MaterialIcon from '@mdi/font'

Vue.use(require('vue-moment'));

Vue.use(VueRouter);
// Vue.use(VueMoment);
Vue.use(VeeValidate);
Vue.use(VueToasted, {
    duration: 6000
});

// VeeValidate.installDateTimeValidators(moment)

const router = new VueRouter({
    routes: Routes,
    mode: 'history'
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('welcome', require('./components/Welcome.vue'));
Vue.component('welcome-banner', require('./components/WelcomeBanner.vue'));
Vue.component('latest-projects', require('./components/LatestProjects.vue'));
Vue.component('latest-project', require('./components/LatestProject.vue'));
Vue.component('popular-projects', require('./components/PopularProjects.vue'));
Vue.component('popular-project', require('./components/PopularProject.vue'));
Vue.component('happy-endings', require('./components/HappyEndings.vue'));
Vue.component('happy-ending', require('./components/HappyEnding.vue'));
Vue.component('services-cards', require('./components/ServicesCards.vue'));
Vue.component('our-guarantees', require('./components/OurGuarantees.vue'));
Vue.component('page-footer', require('./components/Footer.vue'));
Vue.component('top-bar', require('./components/TopBar.vue'));
Vue.component('test', require('./components/Test.vue'));
Vue.component('achievement-bar', require('./components/AchievementBar.vue'));

const app = new Vue({
    el: '#app',
    router,
    store,
});
