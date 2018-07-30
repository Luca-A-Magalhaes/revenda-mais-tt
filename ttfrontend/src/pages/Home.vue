<template>
    <div id="home" class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="../assets/twitter.jpg">
            </div>
        </div>
        <div class="row">
            <column title="Recent Searches">
                <list :items="recent"></list>
            </column>
            <column title="Trending Now">
                <list :items="trending"></list>
            </column>
        </div>
        <div class="row">
            <div class="col-md-12 blue">
                <h1 class="link"><a href="search">Search It</a></h1>
            </div>
        </div>
    </div>
</template>

<script>
import Column from '../components/Column'
import List from '../components/List'
import { ApiRecent, ApiTrending } from '../api'

export default {
    name: 'Home',
    components: {
        Column,
        List
    },
    computed:{
        trending(){
            return this.$store.state.trending
        },
        recent(){
            return this.$store.state.recent
        }
    },
    mounted: function(){
        ApiRecent(this.$store)
        ApiTrending(this.$store)
        this.$store.dispatch("clearSearch")
    }
}
</script>

<style lang="scss" scoped>
    @import '../css/Variables.scss';
</style>
