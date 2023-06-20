import Vue from 'vue'
import DemoApp from './components/DemoApp.vue'
import '../css/index.css'

Vue.config.productionTip = false

new Vue({
  render: h => h(DemoApp)
}).$mount(
  document.body.appendChild(document.createElement('div'))
)
