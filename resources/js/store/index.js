import Vue from 'vue'
import Vuex from 'vuex'

const base_url = '/api/v1/desks/'

Vue.use(Vuex)

let store = new Vuex.Store({

    state: {
      desks: [],
      one_desk: {},
      loading: true,
      errors: [],
      new_name: ''
    },
    mutations: {
      CLEAR_DATA_DESKS: (state, desks) => {
        state.desks = null
      },
      CLEAR_NAME_DESK: (state, new_name) => {
        state.new_name = null
      },
      SET_DESKS_TO_STATE: (state, desks) => {
        state.desks = desks
        state.loading = false
        state.errored = false;
      },
      SET_NEW_NAME_TO_STATE: (state, new_name) => {
        state.new_name = new_name
        state.loading = false
        state.errored = false;
      }
      ,
      SET_ONE_DESK_TO_STATE: (state, one_desk) => {
        state.one_desk = one_desk
        state.loading = false
        state.errored = false;
      },
      updateMessage (state, message) {
        state.new_name = message
      }
// SET_ERRORS_TO_STATE: (state) = {
//   // state.errored = true
// }
    },
    actions: {
      async GET_DESKS_FROM_API({commit}) {
        commit('CLEAR_DATA_DESKS')
        return await axios(base_url, {
          method: "GET"
        })
          .then(response => { //если нормально то в мутаторе загоняем данные в массив
            commit('SET_DESKS_TO_STATE', response.data.data);
            return response;
          })
          .catch((error) => { // если нет выдаем ошибку в консоль
            // commit('SET_ERRORS_TO_STATE')
            store.state.errored = true
            console.log(error)
            return error;
          })
      }
      ,
      async SET_ONE_DESK_FROM_API({commit}, url_data) {
        return await axios(base_url + url_data, {
          method: "GET"
        })
          .then((one_desk) => {
            commit('SET_ONE_DESK_TO_STATE', one_desk.data.data);
            console.log(base_url + url_data)
            return one_desk;
          })
          .catch((error) => { // если нет выдаем ошибку в консоль
            store.state.errored = true
            console.log(error)
            return error;
          })
      }
      ,
      SET_NEW_NAME_FROM_API({commit}, url_data) {
        axios
          .get('/api/v1/desks/' + url_data)
          .then(response => {
            store.state.new_name = response.data.data.name
            return response;
          })
          .catch((error) => { // если нет выдаем ошибку в консоль
            store.state.errored = true
            return error;
          })
      }
      ,
      UPDATE_DESK_TO_API({commit}, desk) {
        console.log(desk)
        axios.post(base_url + desk.id, {
          _method: "PUT",
          name: desk.name
        })
          .then(response => {
            console.log('перезаписали' + desk.name);
            return response;
          })
          .catch((error) => { // если нет выдаем ошибку в консоль
            console.log(error)
            store.state.errored = true
            return error;
          })
          .finally(() => {
            store.state.loading = false
          })
      }

    }
    ,
    getters: {
      DESKS(state) {
        return state.desks
      }
      ,
      ONE_DESK(state) {
        return state.one_desk
      }
      ,
      NEW_NAME(state) {
        return state.new_name
      }
      ,
      ERRORED(state) {
        return state.errored
      }
      ,
      ERRORS(state) {
        return state.errors
      }
      ,
      LOADING(state) {
        return state.loading
      }
    }

  })
;
export default store
