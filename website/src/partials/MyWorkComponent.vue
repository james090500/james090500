<template>
    <div class="card p-0" :style="{ 'min-height': image ? '650px' : '0px' }">
        <div class="card-image" v-if="image" :style="getImage(image)" />
        <div class="content p-4">
            <h2 class="content-title p-4">
                {{ title }}
            </h2>
            <div v-if="job && time">
                <h4 class="m-0">
                    {{ job }}
                </h4>
                <h5 class="m-0">
                    {{ time }}
                </h5>
            </div>
            <p class="text-muted p-4">
                {{ description }}
            </p>
            <div class="text-end px-4" v-if="url">
                <a
                    target="_blank"
                    :href="url"
                    class="btn btn-secondary text-end"
                    >Visit site</a
                >
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
.content-title {
    font-family: inherit !important;
}

.card {
    background-color: #191c20;
    font-size: 1.4rem;
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
            default: null,
        },
        title: {
            type: String,
            default: null,
        },
        job: {
            type: String,
            default: null,
        },
        time: {
            type: String,
            default: null,
        },
        description: {
            type: String,
            default: null,
        },
        url: {
            type: String,
            default: null,
        },
    },
    methods: {
        getImage(image) {
            return {
                'background-image': `url(${image})`,
            }
        },
    },
}
</script>
