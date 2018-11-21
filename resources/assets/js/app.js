
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('factor-component', require('./components/FactorComponent.vue'));
Vue.component('form-factor-component', require('./components/FormFactorComponent.vue'));
Vue.component('factores-component', require('./components/FactoresComponent.vue'));

Vue.component('estrategia-component', require('./components/EstrategiaComponent.vue'));
Vue.component('form-estrategia-component', require('./components/FormEstrategiaComponent.vue'));
Vue.component('estrategias-component', require('./components/EstrategiasComponent.vue'));
Vue.component('estrategia-factor-component', require('./components/EstrategiaFactorComponent.vue'));

const app = new Vue({
    el: '#elementos'
});
