<template>
    <div>
        <search-link v-for="(item, index) in items" :key="index" :item="item.query" ></search-link>
    </div>
</template>

<script>
import SearchLink from '../components/SearchLink'

export default {
    name: 'List',
    props: {
        items: Array
    },
    components: {
        SearchLink
    }
}
</script>

<style>
</style>
