require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
let Mynav = require('./components/Mynav.vue');
let Myfooter = require('./components/Myfooter.vue');
let Home = require('./components/Home.vue');
let About = require('./components/About.vue');
let Contact = require('./components/Contact.vue');


const routes = [

    {path: '/', component: Home },
    {path: '/about', component: About },
    {path: '/contact', component: Contact }

]

const router = new VueRouter({
    // mode: 'history',
    routes
})

const app = new Vue({

    el: '#app',

    router,

    components:{Mynav,Myfooter}

});
