/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');
import Vue from 'vue';

//require all laravel and vue locales here they need to have the same letters
//Vue.component('contact-form', require('./components/form/ContactForm.vue').default);

//Vue.use();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('checkout', require('./checkout/Main').default);

 Vue.component('user', require('./user/Main').default);

 Vue.component('search', require('./search/Main').default);
 Vue.component('stores', require('./stores/Main').default);
 Vue.component('guide', require('./guide/Main').default);
 Vue.component('info', require('./info/Main').default);

 Vue.component('products', require('./products-list/Main').default);

 Vue.component('product', require('./product/Main').default);
 Vue.component('leftsidebar', require('./product/LeftSidebar').default);
 Vue.component('rightsidebar', require('./product/RightSidebar').default);
 Vue.component('color', require('./product/partials/Color').default);
 Vue.component('size', require('./product/partials/Size').default);
 Vue.component('fav', require('./product/partials/Fav').default);
 Vue.component('add', require('./product/partials/Add').default);

 Vue.component('favs', require('./favourites/Main').default);
 Vue.component('cart', require('./cart/Main').default);
 Vue.component('login', require('./login/Main').default);
 Vue.component('loginForm', require('./login/partials/loginForm').default);

const app = new Vue({
    el: '#app',
    created() {
        // this.$moment.locale(this.globalLocale);
        ///console.log('Global Locale:');
    },
});
