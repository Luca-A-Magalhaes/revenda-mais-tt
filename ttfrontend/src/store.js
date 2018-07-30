import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        trending: [],
        recent: [],
        query: "",
        tweets: []
    },
    mutations: {
        updateQuery(state, query){
            state.query = query
        },
        clearQuery(state){
            state.query = ""
        },
        setRecent(state, recent){
            state.recent = recent
        },
        setTrending(state, trending){
            state.trending = trending
        },
        setTweets(state, tweets){
            state.tweets = tweets
        },
        clearTweets(state){
            state.tweets = []
        }
    },
    actions: {
        updateQuery({ commit }, query){
            commit('updateQuery', query)
        },
        clearSearch({ commit }){
            commit('clearQuery')
            commit('clearTweets')
        },
        setRecent({ commit }, recent){
            commit('setRecent', recent)
        },
        setTrending({ commit }, trending){
            commit('setTrending', trending)
        },
        setTweets({ commit }, tweets){
            commit('setTweets', tweets)
        }
    }
  })