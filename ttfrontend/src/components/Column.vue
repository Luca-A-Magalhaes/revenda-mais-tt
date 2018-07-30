<template>
    <div class="col-md-6 home-col">
        <h4 class="blue">{{ title }}</h4>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'Column',
    props: {
        title: String
    }
}
</script>

<style lang="scss" scoped>
    @import '../css/Variables.scss';
    .home-col{
        margin: 2% 0;
        padding: 1% 0;
        &:before{
            content: '';
            height: 2px;
            background-color: $blue;
            position: absolute;
            top: 0;
            left: 25%;
            right: 25%;
        }
    }
</style>
