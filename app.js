const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
            new_task: ''
        }
    },
    methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(url);
                    console.log(response);
                    this.tasks = response.data;
                    console.log(this.tasks);
                })
        },
        /*  addTask() {
             console.log('Ho aggiunto una task');
             console.log(this.new_task);
             this.tasks.unshift(this.new_task);
             this.new_task = '';
         } */
    },
    mounted() {
        this.readTasks(this.api_url);
    }
}).mount('#app')