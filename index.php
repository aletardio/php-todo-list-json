<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
</head>
<body>
    
    <div id="app">
        <div class="container my-5 py-2">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center py-3"> <?php echo "PHP ToDo List JSON" ?></h1>
                </div>
                <div class="col-12 py-3">
                    <ul class="list-unstyled">
                        <li class="py-3 bg-blue border-top" v-for="todo, index in todoList" :key="index">
                            <div class=" d-flex justify-content-between">
                                <div @click="toggleTodoStatus(index)" 
                                :class="todo.done ? 'text-decoration-line-through' : ''">
                                    {{ todo.text }}
                                </div>
                                <div>
                                    <button @click="toggleTodoStatus(index)" class="btn btn-sm btn-primary" v-text="todo.done ? 'Done' : 'Not Done'"></button>
                                    <button @click="deleteTodo(index)" class="btn btn-sm btn-danger ms-2">Delete</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" @keyup.enter="addTodo" v-model="item" class="form-control" placeholder="Inserisci una nuova task">
                        <button @click="addTodo" class="btn btn-primary" type="button" id="save-todo">Salva</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>