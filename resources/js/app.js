
require('./bootstrap');

window.Vue = require('vue');


import appComponent from './App.vue'
import exampleComponent from './components/ExampleComponent.vue'

const app = new Vue({
    el: '#app',
    components:{
        appComponent,
        exampleComponent,
    }
});
