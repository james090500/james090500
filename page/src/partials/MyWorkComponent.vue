<template>
    <div class="card p-0">
        <!-- <img :src="image" class="img-fluid rounded-top"> -->
        <div class="card-image" :style="getImage(image)"></div>
        <div class="content">
            <h2 class="content-title">{{title}}</h2>
            <p class="text-muted">{{description}}</p>
            <div class="text-right">
                <a target="_blank" :href="url" class="btn">Visit site</a>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .card {
        min-height: 615px;

        & > .content > p {
            min-height: 167px;
        }
    }

    .card-image {
        background-position: center;
        background-size: cover;
        width: 100%;
        max-height: 250px;
        height: 250px;
    }
</style>

<script>
    export default {
        props: ['image', 'title', 'description', 'url'],
        methods: {
            getImage(image) {
                return {
                    'background-image': `url(${image})`
                }
            }
        }
    }
</script>

