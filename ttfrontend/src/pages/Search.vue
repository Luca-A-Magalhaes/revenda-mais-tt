<template>
    <div id="search">
        <div>
            <input type="text" placeholder="Search It" :value="query" @input="updateQuery" @keyup.enter="searchQuery"/>
        </div>
        <div class="container">
            <tweet v-for="(tweet, index) in tweets" :key="index" :name="tweet.name" :thumbnail="tweet.thumbnail" :user="tweet.user" :text="tweet.text"></tweet>
        </div>
    </div>
</template>

<script>
import Tweet from '../components/Tweet'
import { ApiSearch } from '../api'
export default {
    name: 'Search',
    components: {
        Tweet
    },
    computed: {
        query() {
            return this.$store.state.query
        },
        tweets(){
            return this.$store.state.tweets
        }
    },
    methods: {
        updateQuery: function(e){
            this.$store.dispatch("updateQuery", e.target.value);
        },
        searchQuery: function(){
            ApiSearch(this.query, this.$store)
        }
    },
    mounted: function(){
        if(this.query !== ""){
            ApiSearch(this.query, this.$store)
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '../css/Variables.scss';
    input{
        background-color: $blue;
        color: white;
        padding: 1% 2%;
        border: none;
        width: 100%;
        text-align: center;
        font-size: 2em;
        &::-webkit-input-placeholder{
            color: darken(white, 15);
        }
    }
    
</style>
