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

        axios.get("../list.php").then(response => {
            this.todolist = response.data;
        });



    },



}).mount('#app')