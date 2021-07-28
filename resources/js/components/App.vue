<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <router-link tag="li" class="nav-item" :to="{name:'home'}"active-class="active">
            <a class="nav-link">Главная</a>
          </router-link>
          <router-link tag="li" class="nav-item" :to="{name:'desks'}"active-class="active">
            <a class="nav-link">Доски</a>
          </router-link>
          <router-link tag="li" class="nav-item" :to="{name:'about'}" active-class="active">
            <a class="nav-link">About</a>
          </router-link>
        </ul>
      </div>
    </nav>
    <keep-alive>
      <router-view></router-view>
    </keep-alive>
  </div>
</template>

<script>
  export default {
    name: "App"
  }
</script>

<style scoped>

</style>
