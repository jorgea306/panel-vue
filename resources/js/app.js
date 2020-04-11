

require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nota-component', require('./components/NotaComponent.vue').default);


const app = new Vue({
    el: '#app',
});
