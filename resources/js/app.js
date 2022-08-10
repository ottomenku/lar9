import './bootstrap';

import { createApp } from 'vue';

//import app from './App.vue'

//createApp(app).mount("#app")

var app = new Vue({
    el: '#app',


    data() {
      return {
        egyes: 'My To Do App'
      }
    }
  

});
