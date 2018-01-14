import Vue from 'vue'
import App from './components/App.vue'

export const app = new Vue({
  render: h => h(App, {
    props: PHP.props
  })
})
