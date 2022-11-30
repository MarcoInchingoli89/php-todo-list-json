const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            upi_url: 'server.php',
        }
    },
    methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(url);
                    console.log(response);
                })
        }
    },
    mounted() {
        this.readTasks(this.api_url);
    }
}).mount('#app')