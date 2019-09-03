import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    app: {
      title: 'Ecommerce',
      url: window.location.origin + '/'
    },
    userInfo: { // this is important beacuse the plataform depented to this.
      state: false, //define user status (auth is true)
      data: null
    },
    placeToPay:{
      url: 'https://dev.placetopay.com/redirection/',
      login: '6dd490faf9cb87a9862245da41170ff2',
      TranKey: '024h1IlD',
      processUrl: '', // mantener vacio al montar
      requestId:'' // mantener vacio al montar
    }
  },
  mutations: {

  },
  actions: {

  }
})
