<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://kit.fontawesome.com/aa4f9fed4f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1 class="text">{{ title }}</h1>
           <section class="main">
           <div class="new-todo">
                <input type="text" v-model="newTodo" @keyup.enter="saveTodo" placeholder="Inserisci task">
            </div>
                <ul class="todos">
                    <li class="todo-item" v-for="(todo, i) in todos" :key="i">
                        <span>{{ todo.task }}</span>
                        <span @click="removeTodo(i)"><i class="fa-solid fa-circle-xmark" style="color: #e32400;"></i></span>
                    </li>
                </ul>
            </section>
        </div>
    </div>

    <script src="./js/app.js"></script>
</body>

</html>