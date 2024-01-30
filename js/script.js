const { createApp } = Vue;

createApp ({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            item: ''
        }
    },
    mounted() {
        this.getTodoList();
    },
    methods: {
        getTodoList(){
            axios.get(this.apiUrl).then((response) => {
                this.todoList = response.data;
            });
        },
        toggleTodoStatus(index){
            const data = {
                todoIndex: index
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data'}
            }).then((response) => {
                this.todoList = response.data;
            })
        },
        addTodo(){
            const data = {
                newTask: this.item,
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data'}
            }).then((response) => {
                this.todoList = response.data;
            })
        },
        deleteTodo(index){
            const data = {
                todoIndexDelete: index
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data'}
            }).then((response) => {
                this.todoList = response.data;
            })
        }
    },
}).mount('#app');