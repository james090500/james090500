<template>
    <div class="text-center border rounded shadow-lg p-15 mx-10 bg-very-dark">
        <img class="w-half" :src="img">
        <a target="_blank" :href="url">
            <h4>{{name}}</h4>
        </a>
    </div>
</template>

<style scoped lang="scss">
    a {
        cursor: pointer;
    }
</style>

<script>
    export default {
        props: [ 'img', 'name', 'url' ]
    }
</script>