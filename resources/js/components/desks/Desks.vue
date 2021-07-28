<template>
  <div class="desks">
    <errored v-if="ERRORED"
             :errors="ERRORS"
    />
    <div class="row">
      <one-desk class="col-lg-4"
                v-for="desk in DESKS"
                :key="desk.id"
                :desk_data="desk"
      >

      </one-desk>
    </div>
    <errored v-if="ERRORED"
             :errors="ERRORS"
    />
    <loading v-if="LOADING"/>
  </div>

</template>

<script>
  import {mapActions, mapGetters} from 'vuex'
  import OneDesk from "./OneDesk";
  import Loading from "../inclide/Loading";
  import Errored from "../inclide/Errored";

  export default {
    data() {
      return {
        errored: false,
      }
    },
    computed: {
      ...mapGetters([
        'DESKS',
        'LOADING',
        'ERRORED',
        'ERRORS'
      ])
    },
    methods: {
      ...mapActions([
        'GET_DESKS'
      ])
    },
    components: {
      OneDesk, Loading, Errored
    },
    watch: {
      $route() {
        this.GET_DESKS()
      }
    },
    mounted() {
      this.GET_DESKS()
    }
  }
</script>

<style scoped>

</style>
