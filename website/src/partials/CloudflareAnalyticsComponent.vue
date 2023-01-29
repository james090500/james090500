<template>
    <LineChart
        v-if="!loading"
        :data="chartData"
        :options="chartOptions"
    />
</template>

<script>
    import { Line as LineChart } from 'vue-chartjs'
    import { Chart as ChartJS, Title, Tooltip, Legend, LineElement, LinearScale, PointElement, CategoryScale } from 'chart.js'

    ChartJS.register(Title, Tooltip, Legend, LineElement, LinearScale, PointElement, CategoryScale)

    export default {
        data() {
            return {
                totalUncachedData: [],
                totalCachedData: [],
                loading: true,
                chartData: {},
                chartOptions: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Requests'
                            }
                        }
                    },
                    layout: {
                        padding: 20
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'MinecraftCapes Cached vs Uncached traffic'
                        },
                        tooltip: {
                            mode: 'nearest',
                            axis: 'xy',
                            intersect: false,
                            callbacks: {
                                label: this.labelCallback
                            }
                        }
                    }
                }
            }
        },
        created() {
            this.axios.get('/mccapes').then((response) => {
                if(response.data.error == null) {
                    var array = response.data.data.viewer.zones[0].httpRequests1hGroups

                    // Make Local Vars
                    let dateData = []
                    let totalCachedRequests = []
                    let totalUncachedRequests = []
                    let totalCachedData = []
                    let totalUncachedData = []

                    // Loop through the data
                    for(let i = 0; i < array.length; i++) {
                        dateData.push(new Date(array[i].date.datetime).toLocaleString())
                        totalCachedRequests.push(array[i].sum.cachedRequests)
                        totalUncachedRequests.push(array[i].sum.requests - array[i].sum.cachedRequests)

                        totalCachedData.push((array[i].sum.cachedBytes / (1000 * 1000 * 1000)).toFixed(2))
                        totalUncachedData.push(((array[i].sum.bytes - array[i].sum.cachedBytes) / (1000 * 1000 * 1000)).toFixed(2))
                    }

                    this.totalUncachedData = totalUncachedData
                    this.totalCachedData = totalCachedData

                    //Set Chart Data
                    this.chartData = {
                    labels: dateData,
                        datasets: [{
                            label: 'Cached traffic',
                            backgroundColor: "#fbad41",
                            borderColor: "#fbad41",
                            data: totalCachedRequests,
                            tension: 0.3,
                            pointRadius: 0
                        }, {
                            label: 'Uncached traffic',
                            backgroundColor: "#4693ff",
                            borderColor: "#4693ff",
                            data: totalUncachedRequests,
                            tension: 0.3,
                            pointRadius: 0
                        }]
                    }

                    // Open Loading
                    this.loading = false;
                }
            })
        },
        methods: {
            labelCallback: function(context) {
                let label = context.dataset.label || '';

                if(label) {
                    label += ': ';
                }

                if (context.parsed.y !== null) {
                    label += new Intl.NumberFormat('en-US').format(context.parsed.y);
                    label += ` ${(context.datasetIndex == 0) ? this.totalCachedData[context.dataIndex] : this.totalUncachedData[context.dataIndex]}GB`
                }

                return label;
            }
        },
        components: {
            LineChart
        }
    }
</script>