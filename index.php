<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP ToDo List JSON</title>
</head>
<body>
    
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center"> <?php echo "PHP ToDo List JSON" ?></h1>
                </div>
                <div class="col-12">
                    <ul class="list-unstyled text-center">
                        <li v-for="todo, index in todoList" :key="index">
                            {{ todo.text }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>