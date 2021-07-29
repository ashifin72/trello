<template >
    <div class="card mt-3 mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{desk_data.name}}</h5>

      </div>
      <ul class="list-group list-group-flush" v-if="desk_data.lists">
        <li class="list-group-item" v-for="list in desk_data.lists">{{list.name}}</li>
      </ul>
      <div class="card-body">
        <router-link
          :key="desk_data.id"
          :to="{name: 'showdesk', params:{desk_id:desk_data.id}}" class="card-link">
          Править доску
        </router-link>
        <a href="#" class="card-link">Другая ссылка</a>
      </div>
    </div>
</template>

<script>

  export default {

    name: "OneDesk",
    props:{
      desk_data:{
        type: Object,
        default(){
          return {}
        }
      }
    }

  }
</script>

<style scoped>

</style>
