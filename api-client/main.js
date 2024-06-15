const { createApp } = Vue

createApp({
    data() {
        return {
            todolist: []
        };
    },


    methods: {

    },


    mounted() {

        axios.get("../server.php").then(response => {
            this.todolist = response.data;
        });



    },



}).mount('#app')