require('./bootstrap');

import Vue from 'vue/dist/vue.js';
import VueCarousel from 'vue-carousel';

Vue.use(VueCarousel);

let VueScrollTo = require('vue-scrollto');
let options = {

    onStart: function(element) {
        // scrolling started
        // console.log(element)
    },
    onDone: function(element) {
        // scrolling is done
    },
    onCancel: function() {
        // scrolling has been interrupted
    },
    x: false,
    y: true
}
Vue.use(VueScrollTo)
window.Vue = Vue;
