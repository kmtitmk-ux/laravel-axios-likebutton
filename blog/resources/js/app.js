require('./bootstrap');
window.Vue = require('vue')
import axios from 'axios'

Vue.component('userlist-component', require('./components/UserlistComponent.vue').default);

new Vue({
    el: '#app',
})