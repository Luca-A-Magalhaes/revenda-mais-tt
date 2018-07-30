<template>
    <span class="link"><a @click="search" href="search">{{ item }}</a></span>
</template>

<script>
export default {
    name: 'SearchLink',
    props: {
        item: String
    },
    methods: {
        search: function(){
            this.$store.dispatch('updateQuery', this.item)
        }
    }
}
</script>

<style lang="scss" scoped>
@import '../css/Variables.scss';
    .link{
        cursor: pointer;
        padding: 1% 3%;
    }
    span{
        display: block;
    }
</style>
