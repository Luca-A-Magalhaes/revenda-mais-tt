<template>
    <div class="row tweet">
        <div class="col-md-1">
            <img :src="thumbnail" class="img-fluid" alt="">
        </div>
        <div class="col-md-11">
            <span class="blue">{{ name }}</span>
            <span class="light-gray">@{{ user }}</span>
            <p>{{ text }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Tweet',
    props: {
        name: String,
        user: String,
        text: String,
        thumbnail: String
    }
}
</script>

<style lang="scss" scoped>
    @import '../css/Variables.scss';
    p{
        display: block;
    }
    .img-fluid{
        border-radius: 50%;
        background-color: $blue;
    }
    .tweet{
        margin: 2% 0;
        padding: 2% 1%;
        box-shadow: 0px 2px 3px #ccc;
    }
</style>
