<template>
  <div id="app">
    {{ count }}
    <button @click="add">Add</button>
  </div>
</template>

<script>
export default {
  name: 'HalloWorld',
  data: () => ({
    count: 5
  }),
  methods: {
    add() {
      this.count++
    }
  }
}
</script>