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
  },
  mutations: {

  },
  actions: {

  }
})
