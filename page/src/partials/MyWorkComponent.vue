<template>
    <div class="card p-0">
        <!-- <img :src="image" class="img-fluid rounded-top"> -->
        <div class="card-image" :style="getImage(image)"></div>
        <div class="content">
            <h2 class="content-title">{{title}}</h2>
            <div v-if="job && time">
                <h4 class="m-0">{{job}}</h4>
                <h5 class="m-0">{{time}}</h5>
            </div>
            <p class="text-muted">{{description}}</p>
            <div class="text-right">
                <a target="_blank" :href="url" class="btn">Visit site</a>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .card {
        min-height: 650px;
    }

    .content-title {
        font-family: inherit !important;
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
        props: {
            image: {
                type: String,
                default: null
            },
            title: {
                type: String,
                default: null
            },
            job: {
                type: String,
                default: null
            },
            time: {
                type: String,
                default: null
            },
            description: {
                type: String,
                default: null
            },
            url: {
                type: String,
                default: null
            },
        },
        methods: {
            getImage(image) {
                return {
                    'background-image': `url(${image})`
                }
            }
        }
    }
</script>

