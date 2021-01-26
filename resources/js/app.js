require('./bootstrap');

import Vue from 'vue/dist/vue.js';
import VueCarousel from 'vue-carousel';

import VueScrollactive from 'vue-scrollactive';

Vue.use(VueScrollactive);

Vue.use(VueCarousel);

window.Vue = Vue;
