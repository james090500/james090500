<template>
    <LineChart
        v-if="!loading"
        :chart-data="chartData"
        :chart-options="chartOptions"
    />
</template>

<script>
    import { Line as LineChart } from 'vue-chartjs'
    import { Chart as ChartJS, Title, Tooltip, Legend, LineElement, LinearScale, PointElement, CategoryScale } from 'chart.js'

    ChartJS.register(Title, Tooltip, Legend, LineElement, LinearScale, PointElement, CategoryScale)

    export default {
        data() {
            return {
                loading: true,
                chartData: {},
                chartOptions: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Cached vs Uncached traffic'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: false
                    },
                    scales: {
                        x: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Day'
                            }
                        },
                        y: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Value'
                            }
                        }
                    }
                }
            }
        },
        created() {
            this.axios.get('https://api.james090500.com/api/v1/minecraftcapes-analytics').then((response) => {
                if(response.data.error == null) {
                    var array = response.data.data.viewer.zones[0].httpRequests1dGroups

                    // Make Local Vars
                    let dateData = []
                    let totalTrafficData = []
                    let totalCachedData = []

                    // Loop through the data
                    for(let i = 0; i < array.length; i++) {
                        dateData.push(array[i].date.date)
                        totalTrafficData.push(Math.round(array[i].sum.bytes / (1000 * 1000 * 1000)))
                        totalCachedData.push(Math.round(array[i].sum.cachedBytes / (1000 * 1000 * 1000)))
                    }

                    //Set Chart Data
                    this.chartData =                    {
                    labels: dateData,
                        datasets: [{
                            label: 'Total traffic',
                            backgroundColor: "#4693ff",
                            borderColor: "#4693ff",
                            data: totalTrafficData,
                            pointRadius: 0
                        }, {
                            label: 'Cached traffic',
                            backgroundColor: "#fbad41",
                            borderColor: "#fbad41",
                            data: totalCachedData,
                            pointRadius: 0
                        }]
                    }

                    // Log
                    console.log(this.dateData, this.totalTrafficData, this.totalCachedData)

                    // Open Loading
                    this.loading = false;
                }
            })
        },
        components: {
            LineChart
        }
    }
</script>