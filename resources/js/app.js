require('./bootstrap');

import Vue from 'vue/dist/vue.js';
import VueCarousel from 'vue-carousel';
import Intersect from 'vue-intersect';

let intersect = require('vue-intersect');
Vue.use(intersect)


Vue.use(VueCarousel);

let VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo)

window.Vue = Vue;
