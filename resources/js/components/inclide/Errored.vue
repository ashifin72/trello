<template>
  <div class="alert alert-danger mt-3" role="alert">
    Ошибка загрузки данных!
    <ul>
      <li v-for="error in errors">
        {{error}}
      </li>
    </ul>

  </div>
</template>

<script>
  export default {
    name: "Errored",
    props:{
      errors:{
        type: Array,
        default() {
          return [];
        }
      }
    }
  }
</script>

<style scoped>

</style>
