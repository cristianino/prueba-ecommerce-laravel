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
        address: '',
        documento: ''
      }
    },
    methods: {
      comprar: function () {
        console.log('comprando');
      },
      createOrder: function (productId) {

      P.on('response', function(data) {
        console.log('placetopay: ', data);
          //$("#lightbox-response").html(JSON.stringify(data, null, 2));
      });
        console.log('Creando orden', productId);
        let urlPlaceToPay = this.$store.state.placeToPay.url
          //crear orden interna
          axios.post(this.$store.state.app.url + 'ordenes',{
            productoId : productId,
            name : this.comprador.name,
            email : this.comprador.email,
            mobile : this.comprador.mobile,
            address : this.comprador.address,
            documento : this.comprador.documento
          }).then(res => {
            console.log(res.data);
            var orderId = res.data.orderId
            var total = res.data.total
            toastr.success('Orden creada con exito')
            axios.post(urlPlaceToPay + '/api/session',{
              auth: {
                "login": this.$store.state.placeToPay.login,
                "tranKey": this.$store.state.placeToPay.TranKey,
                "nonce": "TTJSa05UVmtNR000TlRrM1pqQTRNV1EREprWkRVMU9EZz0=",
                "seed": "2019-04-25T18:17:23-04:00"
              },
                locale: "en_CO",
                buyer: {
                  "name": this.comprador.name,
                  "surname": this.comprador.name,
                  "email": this.comprador.email,
                  "document": this.comprador.documento,
                  "documentType": "CC",
                  "mobile": this.comprador.mobile
              },

                payment: {
                    "reference": orderId,
                    "description": "Pago básico de prueba 04032019",
                    "amount": {
                        "currency": "COP",
                        "total": total
                    },
                  "allowPartial":false
                  },

                expiration: "2019-03-05T00:00:00-05:00",
                returnUrl: this.$store.state.placeToPay.url + 'placetopay/callback/' + orderId,
                ipAddress: "127.0.0.1",
                userAgent: "PlacetoPay Sandbox"
            },{
              "Access-Control-Allow-Origin": "*",
              "Access-Control-Allow-Methods": "GET,PUT,POST,DELETE,PATCH,OPTIONS"
            }).then(res => {
              this.$store.state.placeToPay.processUrl = res.data.processUrl
              this.$store.state.placeToPay.requestId = res.data.requestId
              P.init(this.$store.state.placeToPay.processUrl);
              toastr.success(res.data)
            }).catch( e => {
              toastr.error(e, 'Error enviando petición a PlacetoPay.')
            })
          }).catch( e => {
            toastr.error(e, 'Error guardando orden')
          })
        console.log('creado');
      }
    }
});
