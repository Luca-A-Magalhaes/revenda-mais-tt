import Vue from 'vue'
import page from 'page'
import Home from './pages/Home'
import Search from './pages/Search'
import '../node_modules/bootstrap/scss/bootstrap.scss';
import store from './store'

const app = new Vue({
  el: '#app',
  store,
  data: {
    ViewComponent: { render: h => h('div', 'loading...') }
  },
  render(h) {
    return h(this.ViewComponent) 
  }
})

page('/', () => app.ViewComponent = Home)
page('/search', () => app.ViewComponent = Search)
page()