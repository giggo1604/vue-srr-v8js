<template>
  <div id="app">
    <Navigation :navigation="navigation" />
  </div>
</template>

<script>
import Navigation from './Navigation.vue'

export default {
  name: 'HalloWorld',
  props: ['navigation'],
  components: {
    Navigation
  }
}
</script>