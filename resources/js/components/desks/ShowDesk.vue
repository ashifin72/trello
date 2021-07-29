<template>
  <div>
    <h3>{{desk_id}} {{NEW_NAME}}</h3>
    <div class="form-group mb-3">
      <input type="text"
             @blur="SaveName"
             class="form-control"
             :value="NEW_NAME"
             @input="updateMessage"
             >

    </div>

    <!--    <div class="alert alert-danger" role="alert" v-if="errored">-->
    <!--      Ошибка загрузки данных!-->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-center mt-5">-->
    <!--      <div class="spinner-border" role="status" v-if="loading">-->
    <!--        <span class="visually-hidden">Загрузка...</span>-->
    <!--      </div>-->
    <!--    </div>-->
  </div>
</template>

<script>
  import {mapActions, mapGetters} from 'vuex'

  export default {
    props: [
      'desk_id'
    ],
    data() {
      return {

      }
    },
    computed: {
      ...mapGetters([
        'NEW_NAME'
      ])
    },
    methods: {
      ...mapActions([
        'SET_NEW_NAME_FROM_API',
        'UPDATE_DESK_TO_API'
      ]),
      SaveName(e) {
        this.desk = {
          id: this.desk_id,
          name: e.target.value
        }
        this.UPDATE_DESK_TO_API(this.desk)

      },
      updateMessage (e) {
        this.$store.commit('SET_NEW_NAME_TO_STATE', e.target.value)
      },

    },
    watch: {
      $route() {
        this.SET_NEW_NAME_FROM_API(this.desk_id)
      }
    },
    mounted() {
      this.SET_NEW_NAME_FROM_API(this.desk_id)
    }
  }
</script>

