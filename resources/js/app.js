/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import store from './store'
const axios = require('axios');
const toastr = require('toastr');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    store, // add vuex to vue
    el: '#app',
    data: {
      date: '2019',
      comprador: {
        name: '',
        email: '',
        mobile: '',
        address: ''
      }
    },
    methods: {
      comprar: function () {
        console.log('comprando');
      },
      createOrder: function (productId) {
        console.log('Creando orden', productId);
          axios.post(this.$store.state.app.url + 'ordenes',{
            productoId : productId,
            name : this.comprador.name,
            email : this.comprador.email,
            mobile : this.comprador.mobile,
            address : this.comprador.address
          }).then(res => {
            console.log(res.data);
            toastr.success(res.data)
          }).catch( e => {
            toastr.error(e, 'Error guardando orden')
          })
        P.on('response', function(data) {
          console.log('placetopay: ', data);
            //$("#lightbox-response").html(JSON.stringify(data, null, 2));
        });
        console.log('creado');
      }
    }
});
