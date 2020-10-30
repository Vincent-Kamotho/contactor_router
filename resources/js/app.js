//require('./bootstrap');

import Vue from 'vue';

window.axios = require('axios');
window.$ = window.jQuery = require('jquery');

//Vue.component('all-contacts', require('./components/allcontacts.vue').default);
Vue.component('new-contacts', require('./components/NewManageContacts/Main').default);


const app = new Vue({
    el: "#app"
});
