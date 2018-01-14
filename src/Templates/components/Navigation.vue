<template>
  <div>
    <ul>
      <li v-for="(point, key) in navigation" v-bind:key="key">{{ point.name }}</li>
    </ul>
  </div>
</template>

<script>
export default {
    name: 'Navigation',
    props: ['navigation']
}
</script>

