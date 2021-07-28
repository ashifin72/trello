import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

let store = new Vuex.Store({

  state: {
    desks: [],
    errored: false,
    loading: true,
    errors: []
  },
  mutations: {
    SET_DESKS_TO_STATE: (state, desks) => {
      state.desks = desks
      state.loading = false
      state.errored = false;
    }
    // SET_ERRORS_TO_STATE: (state) = {
    //   // state.errored = true
    // }
  },
  actions: {
    GET_DESKS({commit}) {
      return axios('api/v1/desks', {
        method: "GET"
      })
        .then(response => { //если нормально то в мутаторе загоняем данные в массив
          commit('SET_DESKS_TO_STATE', response.data.data);
          return ;
        })
        .catch((error) => { // если нет выдаем ошибку в консоль
          // commit('SET_ERRORS_TO_STATE')
          store.state.errored = true
          console.log(error)
          return error;
        })
    },
    ADD_DESK({commit}){

    }

  },
  getters: {
    DESKS(state) {
      return state.desks
    },
    ERRORED(state) {
      return state.errored
    },
    ERRORS(state) {
      return state.errors
    },
    LOADING(state) {
      return state.loading
    }
  }

});
export default store
