
require('./bootstrap');

window.Vue = require('vue');
window.moment = Moment;
window.momentTZ = MomentTZ;
window.Utils = Utils();
window.Layout = Layout();
window.laroute = Laroute;
window.Vue = Vue;

require('./filters/bootstrap');
require('./directives/bootstrap');
require('./components/bootstrap');
require('./filters/bootstrap');
require('./vue/bootstrap');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
