const { createApp } = Vue

createApp({
    data() {
        return {
            //dati locali
            todolist: [],
            newTaskTitle: "prova",
            newTaskDescription: 'prova1',
            //dati per le richieste
            apriUrl: "../list.php",
            postRequestConfig: {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }
        }
    },


    methods: {

        getTaskList() {
            axios.get(this.apriUrl).then(results => {
                console.log("risultati:", results.data);
                this.todolist = results.data;
            });
        },

        addTask() {
            console.log("task aggiunta", this.newTaskTitle);

            const newToDo = {
                titolo: this.newTaskTitle,
                descrizione: this.newTaskDescription

            };

            const config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };




            axios.post(this.apriUrl, newToDo, this.postRequestConfig).then(results => {
                console.log("risultati:", results.data);
                this.todolist = results.data;
            });
        }
    },


    mounted() {
        console.log("recupero dati");

        this.getTaskList();

    },
}).mount('#app')





