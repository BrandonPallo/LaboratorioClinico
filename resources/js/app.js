

require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// import Vue from 'vue';
// import * as VueGoogleMaps from 'vue2-google-maps';
// Vue.use(VueGoogleMaps, {
//     load:{
//         key: 'AIzaSyA7HFk5-RVpEKm-pOhwlhua0-8cglfAM6g'
//     }
// });

const app = new Vue({
    el: '#app',
});
