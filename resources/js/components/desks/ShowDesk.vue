<template>
  <div >
    <div class="form-group mb-3">
      <input type="text" @blur="SaveName" class="form-control" v-model="name" >
    </div>
    <div class="alert alert-danger" role="alert" v-if="errored">
      Ошибка загрузки данных!
    </div>
    <div class="d-flex justify-content-center mt-5">
      <div class="spinner-border" role="status" v-if="loading">
        <span class="visually-hidden">Загрузка...</span>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props:[
      'desk_id'
    ],
    data(){
      return {
        name: null,
        errored: false,
        loading: true,
        id:this.desk_id
      }
    },
    methods:{
      SaveName(){
        axios
          .post('/api/v1/desks/' + this.desk_id,{
            _method: 'PUT',
            name: this.name
        })
          .then(response => {
            console.log('отравляем' + this.desk_id)
          })
          .catch(error =>{
            console.log(error)
            this.errored = true
          })
          .finally(()=>{
            this.loading = false
          })
      }
    },
    mounted() {
      axios
        .get('/api/v1/desks/' + this.id)
        .then(response => {
          this.name = response.data.data.name
          console.log(this.id)
        })
        .catch(error =>{
          console.log(error)
          this.errored = true
        })
        .finally(()=>{
          this.loading = false
        })

    }
  }
</script>

